@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Study Program</h3>
    <form action="{{ route('study_programs.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" required>
            </div>
            <div class="col-md-4">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" required>
            </div>
            <div class="col-md-4">
                <label for="department_id" class="form-label">Department</label>
                <select class="form-select form-select-sm" name="department_id" id="select1" aria-label="Default select example">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a href="{{ route('study_programs.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection