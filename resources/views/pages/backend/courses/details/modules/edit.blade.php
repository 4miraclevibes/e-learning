@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Module</h3>
    <form action="{{ route('courses.details.modules.update', $module->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $module->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="pertemuan" class="form-label">Pertemuan</label>
                <input type="number" class="form-control form-control-sm" id="pertemuan" name="pertemuan" value="{{ $module->pertemuan }}" required>
            </div>
            <div class="col-md-6">
                <label for="learning_category_id" class="form-label">Learning Category</label>
                <select name="learning_category_id" id="select2" class="form-select form-select-sm" aria-label="Default select example">
                    @foreach ($learningCategories as $learningCategory)
                        <option value="{{ $learningCategory->id }}" {{ $module->learning_category_id == $learningCategory->id ? 'selected' : '' }}>{{ $learningCategory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="editor" class="form-control form-control-sm" rows="3">{!! $module->description !!}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a href="{{ route('courses.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#select2').select2();
    });
</script>
@endsection