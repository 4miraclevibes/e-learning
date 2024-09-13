@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Modul Mata Kuliah: {{ $courseDetail->course->name }}</h5>
      <div>
        <a href="{{ route('courses.details.modules.create', $courseDetail->id) }}" class="btn btn-primary btn-sm">Tambah Modul</a>
        <a href="{{ route('courses.details.index', $courseDetail->id) }}" class="btn btn-secondary btn-sm">Kembali</a>
      </div>
    </div>
  </div>
  <div class="card mt-2">
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Nama</th>
            <th class="text-white">Pertemuan</th>
            <th class="text-white">Learning Category</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($modules as $module)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $module->name }}</td>
            <td>{{ $module->pertemuan }}</td>
            <td>{{ $module->learningCategory->name }}</td>
            <td>
              <a href="{{ route('courses.details.modules.edit', $module->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('courses.details.modules.destroy', $module->id) }}" method="POST" style="display:inline-block;">
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