@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Course</h3>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="code" class="form-label">Kode</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" required>
            </div>
            <div class="col-md-6">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control form-control-sm" id="sks" name="sks" required>
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="select2" class="form-select form-select-sm" aria-label="Default select example">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="editor" class="form-control form-control-sm" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a href="{{ route('courses.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection