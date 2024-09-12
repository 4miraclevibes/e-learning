@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Detail Mata Kuliah: {{ $course->name }}</h5>
      <div>
        <a href="{{ route('courses.details.create', $course->id) }}" class="btn btn-primary btn-sm">Tambah Detail</a>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
      </div>
    </div>
  </div>
  <div class="card mt-2">
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Kode</th>
            <th class="text-white">Program Studi</th>
            <th class="text-white">Dosen</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($course->courseDetails as $courseDetail)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $courseDetail->code }}</td>
            <td>{{ $courseDetail->studyProgram->name }}</td>
            <td>{{ $courseDetail->lecturer ? $courseDetail->lecturer->user->name : 'Belum ditentukan' }}</td>
            <td>
              <a href="{{ route('courses.details.edit', $courseDetail->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="{{ route('courses.details.questionnaires.index', $courseDetail->id) }}" class="btn btn-info btn-sm">Kuesioner</a>
              <a href="{{ route('questionnaire', $courseDetail->id) }}" target="_blank" class="btn btn-primary btn-sm">Ambil Kuis</a>
              <a href="{{ route('courses.details.result', $courseDetail->id) }}" class="btn btn-success btn-sm">Hasil</a>
              <form action="{{ route('courses.details.destroy', $courseDetail->id) }}" method="POST" style="display:inline-block;">
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