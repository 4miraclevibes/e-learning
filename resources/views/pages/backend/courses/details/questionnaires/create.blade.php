@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Questionnairy Mata Kuliah</h3>
    <form action="{{ route('courses.details.questionnaires.store', $courseDetail->id) }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label">Nama Questionnairy</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" required>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="editor" class="form-control form-control-sm"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Buat Baru</button>
        <a href="{{ route('courses.details.questionnaires.index', $courseDetail->id) }}" class="btn btn-sm btn-secondary">Batal</a>
    </form>
</div>
@endsection