@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Student</h3>
    <form action="#" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $student->user->name }}" disabled>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ $student->user->email }}" disabled>
            </div>
            <div class="col-md-4">
                <label for="study_program_id" class="form-label">Study Program</label>
                <select class="form-select form-select-sm" id="study_program_id" name="study_program_id" required>
                    @foreach($studyPrograms as $program)
                        <option value="{{ $program->id }}" {{ $student->study_program_id == $program->id ? 'selected' : '' }}>{{ $program->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="{{ $student->nim }}" required>
            </div>
            <div class="col-md-4">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control form-control-sm" id="phone" name="phone" value="{{ $student->phone }}" required>
            </div>
            <div class="col-md-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control form-control-sm" id="address" name="address" value="{{ $student->address }}" required>
            </div>
            <div class="col-md-4">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control form-control-sm" id="profile_picture" name="profile_picture">
                <a href="{{ Storage::url($student->profile_picture) }}" target="_blank">View Profile Picture</a>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection