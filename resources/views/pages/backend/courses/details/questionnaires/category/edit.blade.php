@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Edit Jawaban Questionnairy</h3>
    <form action="{{ route('courses.details.questionnaires.category.update', $learningCategoryQuestionnairy->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control form-control-sm" value="{{ $learningCategoryQuestionnairy->description }}">
            </div>
            <div class="col-md-12">
                <label for="learning_category_id" class="form-label">Learning Category</label>
                <select name="learning_category_id" id="select1" class="form-control form-control-sm">
                    @foreach ($learningCategories as $learningCategory)
                        <option value="{{ $learningCategory->id }}" {{ $learningCategoryQuestionnairy->learning_category_id == $learningCategory->id ? 'selected' : '' }}>{{ $learningCategory->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Buat Baru</button>
        <a href="{{ route('courses.details.questionnaires.category.index', $learningCategoryQuestionnairy->questionnairy_id) }}" class="btn btn-sm btn-secondary">Batal</a>
    </form>
</div>
@endsection