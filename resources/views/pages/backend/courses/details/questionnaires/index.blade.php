@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('courses.details.questionnaires.create', $courseDetail->id) }}" class="btn btn-primary btn-sm">Buat Baru</a>
      <a href="{{ route('courses.details.index', $courseDetail->course->id) }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Tabel Mata Kuliah Questionnairy <span class="text-primary">{{ $courseDetail->course->name }}</span></h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Nama Mata Kuliah</th>
            <th class="text-white">Deskripsi</th>
            <th class="text-white">Nama Questionnairy</th>
            <th class="text-white">Status</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courseDetail->questionnaires as $questionnairy)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $questionnairy->courseDetail->course->name }}</td>
            <td>{{ $questionnairy->description }}</td>
            <td>{{ $questionnairy->name }}</td>
            <td>{{ $questionnairy->status }}</td>
            <td>  
              <a href="{{ route('courses.details.questionnaires.edit', $questionnairy->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="{{ route('courses.details.questionnaires.category.index', $questionnairy->id) }}" class="btn btn-info btn-sm">Jawaban</a>
              <form action="{{ route('courses.details.questionnaires.destroy', $questionnairy->id) }}" method="POST" style="display:inline-block;">
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