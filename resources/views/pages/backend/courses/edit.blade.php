@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Course</h3>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $course->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="code" class="form-label">Kode</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" value="{{ $course->code }}" required>
            </div>
            <div class="col-md-6">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control form-control-sm" id="sks" name="sks" value="{{ $course->sks }}" required>
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="select2" class="form-select form-select-sm" aria-label="Default select example">
                    <option value="active" {{ $course->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $course->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="editor" class="form-control form-control-sm" rows="3">{{ $course->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a href="{{ route('courses.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection