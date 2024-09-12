@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Study Program</h3>
    <form action="{{ route('study_programs.update', $studyProgram->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $studyProgram->name }}" required>
            </div>
            <div class="col-md-4">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" value="{{ $studyProgram->code }}" required>
            </div>
            <div class="col-md-4">
                <label for="department_id" class="form-label">Department</label>
                <select class="form-select form-select-sm" name="department_id" id="select1" aria-label="Default select example">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $studyProgram->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a href="{{ route('study_programs.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection