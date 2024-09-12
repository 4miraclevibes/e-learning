@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Department</h3>
    <form action="{{ route('departments.store') }}" method="POST">
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
                <label for="faculty_id" class="form-label">Faculty</label>
                <select name="faculty_id" id="select2" class="form-control" aria-label="Default select example">
                    @foreach($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a href="{{ route('departments.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection