@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">Tambah Detail Mata Kuliah</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('courses.details.store', $course->id) }}" method="POST">
        @csrf
        <div class="row mb-3">
          <div class="col-md-4">
            <label for="code" class="form-label">Kode</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" required>
            @error('code')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-4">
            <label for="study_program_id" class="form-label">Program Studi</label>
            <select class="form-select @error('study_program_id') is-invalid @enderror" id="select1" name="study_program_id" required>
              <option value="">Pilih Program Studi</option>
              @foreach($studyPrograms as $studyProgram)
                <option value="{{ $studyProgram->id }}" {{ old('study_program_id') == $studyProgram->id ? 'selected' : '' }}>
                  {{ $studyProgram->name }}
                </option>
              @endforeach
            </select>
            @error('study_program_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-4">
            <label for="lecturer_id" class="form-label">Dosen</label>
            <select class="form-select @error('lecturer_id') is-invalid @enderror" id="select2" name="lecturer_id">
              <option value="">Pilih Dosen</option>
              @foreach($lecturers as $lecturer)
                <option value="{{ $lecturer->id }}" {{ old('lecturer_id') == $lecturer->id ? 'selected' : '' }}>
                  {{ $lecturer->user->name }}
                </option>
              @endforeach
            </select>
            @error('lecturer_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('courses.details.index', $course->id) }}" class="btn btn-secondary">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- / Content -->
@endsection