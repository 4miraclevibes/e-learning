@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Detail Mata Kuliah</h3>
    <form action="{{ route('courses.details.update', $courseDetail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="code" class="form-label">Kode</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" value="{{ $courseDetail->code }}" required>
            </div>
            <div class="col-md-4">
                <label for="study_program_id" class="form-label">Program Studi</label>
                <select class="form-select form-control-sm" id="select1" name="study_program_id" required>
                    <option value="">Pilih Program Studi</option>
                    @foreach($studyPrograms as $studyProgram)
                        <option value="{{ $studyProgram->id }}" {{ $courseDetail->study_program_id == $studyProgram->id ? 'selected' : '' }}>
                            {{ $studyProgram->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="lecturer_id" class="form-label">Dosen</label>
                <select class="form-select form-control-sm" id="select2" name="lecturer_id">
                    <option value="">Pilih Dosen</option>
                    @foreach($lecturers as $lecturer)
                        <option value="{{ $lecturer->id }}" {{ $courseDetail->lecturer_id == $lecturer->id ? 'selected' : '' }}>
                            {{ $lecturer->user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan Perubahan</button>
        <a href="{{ route('courses.details.index', $courseDetail->course_id) }}" class="btn btn-sm btn-secondary">Batal</a>
    </form>
</div>
@endsection