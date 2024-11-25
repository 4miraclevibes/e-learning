@extends('layouts.backend.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
        Buat Baru
      </button>
      <a href="{{ route('questionnaires.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
  </div>

  <!-- Table section normal -->
  <div class="card mt-2">
    <h5 class="card-header">Tabel Jawaban Questionnairy <span class="text-primary">{{ $questionnairy->name }}</span></h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Nama Questionnairy</th>
            <th class="text-white">Deskripsi Jawaban Questionnairy</th>
            <th class="text-white">Nama Kategori Pembelajaran</th>
            <th class="text-white">Status</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($questionnairy->learningCategoryQuestionnairies as $learningCategoryQuestionnairy)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $questionnairy->name }}</td>
            <td>{{ $learningCategoryQuestionnairy->description }}</td>
            <td>{{ $learningCategoryQuestionnairy->learningCategory->name }}</td>
            <td>{{ $learningCategoryQuestionnairy->status }}</td>
            <td>
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $learningCategoryQuestionnairy->id }}">Edit</button>
              <form action="{{ route('questionnaires.category.destroy', $learningCategoryQuestionnairy->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Create Modal tetap satu -->
<div class="modal fade" id="createModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Jawaban Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="createForm" action="{{ route('questionnaires.category.store', $questionnairy->id) }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Kategori Pembelajaran</label>
            <select name="learning_category_id" class="form-select" required>
              <option value="">Pilih Kategori</option>
              @foreach($learningCategories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal yang di-loop -->
@foreach ($questionnairy->learningCategoryQuestionnairies as $learningCategoryQuestionnairy)
<div class="modal fade" id="editModal{{ $learningCategoryQuestionnairy->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Jawaban</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('questionnaires.category.update', $learningCategoryQuestionnairy->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Kategori Pembelajaran</label>
            <select name="learning_category_id" class="form-select" required>
              <option value="">Pilih Kategori</option>
              @foreach($learningCategories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $learningCategoryQuestionnairy->learning_category_id ? 'selected' : '' }}>
                  {{ $category->name }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $learningCategoryQuestionnairy->description }}</textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
