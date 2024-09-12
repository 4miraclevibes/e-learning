@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Department</h3>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $department->name }}" required>
            </div>
            <div class="col-md-4">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" value="{{ $department->code }}" required>
            </div>
            <div class="col-md-4">
                <label for="faculty_id" class="form-label col-sm-2">Faculty</label>
                <div class="col-sm-10">
                  <select class="form-select" name="faculty_id" id="select1" aria-label="Default select example">
                    @foreach($faculties as $faculty)
                        <option value="{{ $faculty->id }}" {{ $department->faculty_id == $faculty->id ? 'selected' : '' }}>{{ $faculty->name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a href="{{ route('departments.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection