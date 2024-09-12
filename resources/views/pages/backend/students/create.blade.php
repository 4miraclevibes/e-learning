@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Student</h3>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="user_id" class="form-label">User</label>
                <select class="form-select form-select-sm" id="select2" name="user_id" required aria-label="Default select example">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="study_program_id" class="form-label">Study Program</label>
                <select class="form-select form-select-sm" id="select1" name="study_program_id" required aria-label="Default select example">
                    @foreach($studyPrograms as $program)
                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control form-control-sm" id="nim" name="nim" required>
            </div>
            <div class="col-md-4">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control form-control-sm" id="phone" name="phone" required>
            </div>
            <div class="col-md-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control form-control-sm" id="address" name="address" required>
            </div>
            <div class="col-md-4">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control form-control-sm" id="profile_picture" name="profile_picture">
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a href="{{ route('students.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection