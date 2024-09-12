@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Faculty</h3>
    <form action="{{ route('faculties.update', $faculty->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $faculty->name }}" required>
            </div>
            <div class="col-md-4">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" value="{{ $faculty->code }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a href="{{ route('faculties.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection