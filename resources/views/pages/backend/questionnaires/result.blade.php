@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card mt-2">
    <h5 class="card-header">Hasil Kuesioner</h5>
    <div class="card-body d-flex justify-content-between">
      <a href="{{ route('questionnaires.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
      <a href="{{ route('questionnaires.result.json') }}" class="btn btn-sm btn-info">JSON</a>
    </div>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">User</th>
            <th class="text-white">Kategori Dominan</th>
            <th class="text-white">Hasil Kategori</th>
            <th class="text-white">Skor Kategori Dominan</th>
            <th class="text-white">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($formattedResults as $index => $result)
          <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $result['user_name'] }}</td>
            <td>{{ $result['name'] }}</td>
            <td>{{ $result['category_result'] }}</td>
            <td>{{ $result['score'] }}</td>
            <td>
              <a href="{{ route('landing.questionnaire.result', $result['id']) }}" target="_blank" class="btn btn-sm btn-primary">View</a>
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
