@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('lecturers.create') }}" class="btn btn-primary btn-sm">Create</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Table Lecturers</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Name</th>
            <th class="text-white">NIDN</th>
            <th class="text-white">Study Program</th>
            <th class="text-white">Phone</th>
            <th class="text-white">Address</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($lecturers as $lecturer)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $lecturer->user->name }}</td>
            <td>{{ $lecturer->nidn }}</td>
            <td>{{ $lecturer->studyProgram->name }}</td>
            <td>{{ $lecturer->phone }}</td>
            <td>{{ $lecturer->address }}</td>
            <td>
              <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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