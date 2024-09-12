@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('courses.details.questionnaires.category.create', $questionnairy->id) }}" class="btn btn-primary btn-sm">Buat Baru</a>
      <a href="{{ route('courses.details.questionnaires.index', $questionnairy->courseDetail->id) }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
  </div>
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
              <a href="{{ route('courses.details.questionnaires.category.edit', $learningCategoryQuestionnairy->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('courses.details.questionnaires.category.destroy', $learningCategoryQuestionnairy->id) }}" method="POST" style="display:inline-block;">
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
<!-- / Content -->
@endsection