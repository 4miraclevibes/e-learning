@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  @if (Auth::user()->role->name == 'ADMIN')
  <div class="card">
    <div class="card-header">
      <a href="{{ route('schedules.create') }}" class="btn btn-primary btn-sm">Create</a>
    </div>
  </div>
  @endif
  <div class="card mt-2">
    <h5 class="card-header">Table Schedules</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Course Detail</th>
            <th class="text-white">Date</th>
            <th class="text-white">Start Time</th>
            <th class="text-white">End Time</th>
            @if (Auth::user()->role->name == 'ADMIN' || Auth::user()->student)
            <th class="text-white">Actions</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @foreach ($schedules as $schedule)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $schedule->courseDetail->course->name ?? 'N/A' }} - {{ $schedule->courseDetail->lecturer->user->name ?? 'N/A' }}</td>
            <td>{{ $schedule->date }}</td>
            <td>{{ $schedule->start_time }}</td>
            <td>{{ $schedule->end_time }}</td>
            @if (Auth::user()->role->name == 'ADMIN' || Auth::user()->student)
            <td>
                @if (Auth::user()->student)
                @if (Auth::user()->student->scheduleStudents->where('schedule_id', $schedule->id)->count() == 0)
                <form action="{{ route('schedule_students.store', $schedule->id) }}" method="POST" style="display:inline-block;">
                  @csrf
                  <button type="submit" class="btn btn-success btn-sm">Join</button>
                </form>
                @else
                <a href="#" class="btn btn-primary disabled btn-sm">Joined</a>
                @endif
                @else
                <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                @endif
            </td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- / Content -->
@endsection
