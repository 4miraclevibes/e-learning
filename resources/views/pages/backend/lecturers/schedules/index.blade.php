@extends('layouts.backend.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card mt-2">
    <h5 class="card-header">Schedules for Lecturer: <span class="text-primary">{{ $lecturer->user->name }}</span></h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Course</th>
            <th class="text-white">Date</th>
            <th class="text-white">Time</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($schedules as $schedule)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $schedule->courseDetail->course->name }}</td>
            <td>{{ \Carbon\Carbon::parse($schedule->date)->format('l, d F Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}</td>
            <td>
              <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $schedule->id }}">
                Detail
              </button>
              <a href="{{ route('courses.details.modules.index', $schedule->courseDetail->id) }}" class="btn btn-primary btn-sm">Modules</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Detail Modal -->
@foreach ($schedules as $schedule)
<div class="modal fade" id="detailModal{{ $schedule->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">
          <i class="bx bx-calendar me-2"></i>Schedule Detail
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-3">
          <div class="card-body">
            <div class="d-flex align-items-start mb-4">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #8897EA">
                <i class="bx bx-book text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Course</p>
                <h6 class="mb-0">{{ $schedule->courseDetail->course->name }}</h6>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #56CCF2">
                <i class="bx bx-code-alt text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Course Code</p>
                <h6 class="mb-0">{{ $schedule->courseDetail->code }}</h6>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #F2C94C">
                <i class="bx bx-calendar text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Date</p>
                <h6 class="mb-0">{{ \Carbon\Carbon::parse($schedule->date)->format('l, d F Y') }}</h6>
              </div>
            </div>

            <div class="d-flex align-items-start">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #27AE60">
                <i class="bx bx-time text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Time</p>
                <h6 class="mb-0">
                  {{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }} -
                  {{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="alert alert-info d-flex align-items-center" role="alert">
          <i class="bx bx-info-circle me-2"></i>
          <div>
            Total Students: {{ $schedule->scheduleStudents->count() }}
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <i class="bx bx-x me-1"></i>Close
        </button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
