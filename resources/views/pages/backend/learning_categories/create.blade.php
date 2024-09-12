@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Learning Category</h3>
    <form action="{{ route('learning_categories.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" required>
            </div>
            <div class="col-md-4">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control form-control-sm" id="description" name="description" required>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a href="{{ route('learning_categories.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection