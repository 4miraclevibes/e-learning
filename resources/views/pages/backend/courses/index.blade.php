@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('courses.create') }}" class="btn btn-primary btn-sm">Buat Baru</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Tabel Mata Kuliah</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Nama</th>
            <th class="text-white">Kode</th>
            <th class="text-white">SKS</th>
            <th class="text-white">Status</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courses as $course)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $course->name }}</td>
            <td>{{ $course->code }}</td>
            <td>{{ $course->sks }}</td>
            <td>{{ $course->status }}</td>
            <td>
              <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="{{ route('courses.details.index', $course->id) }}" class="btn btn-info btn-sm">Detail</a>
              <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- / Content -->
@endsection