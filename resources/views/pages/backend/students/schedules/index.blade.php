@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('landing.questionnaire') }}" class="btn btn-primary btn-sm">Ambil Kuesioner</a>
    </div>
  </div>
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
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($scheduleStudents as $scheduleStudent)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $scheduleStudent->schedule->courseDetail->course->name ?? 'N/A' }} - {{ $scheduleStudent->schedule->courseDetail->lecturer->user->name ?? 'N/A' }}</td>
            <td>{{ $scheduleStudent->schedule->date }}</td>
            <td>{{ $scheduleStudent->schedule->start_time }}</td>
            <td>{{ $scheduleStudent->schedule->end_time }}</td>
            <td>
              <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $scheduleStudent->id }}">
                Detail
              </button>
              <a href="{{ route('courses.details.modules.index', $scheduleStudent->schedule->courseDetail->id) }}" class="btn btn-primary btn-sm">Modules</a>
              <form action="{{ route('schedule_students.destroy', $scheduleStudent->id) }}" method="POST" style="display:inline-block;">
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

<!-- Detail Modal -->
@foreach ($scheduleStudents as $scheduleStudent)
<div class="modal fade" id="detailModal{{ $scheduleStudent->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">
          <i class="bx bx-calendar me-2"></i>Detail Schedule
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-3">
          <div class="card-body">
            <div class="d-flex align-items-start mb-4">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #8897EA">
                <i class="bx bx-book-open text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Course</p>
                <h6 class="mb-0">{{ $scheduleStudent->schedule->courseDetail->course->name ?? 'N/A' }}</h6>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #56CCF2">
                <i class="bx bx-user text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Lecturer</p>
                <h6 class="mb-0">{{ $scheduleStudent->schedule->courseDetail->lecturer->user->name ?? 'N/A' }}</h6>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #F2C94C">
                <i class="bx bx-calendar text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Date</p>
                <h6 class="mb-0">{{ \Carbon\Carbon::parse($scheduleStudent->schedule->date)->format('l, d F Y') }}</h6>
              </div>
            </div>

            <div class="d-flex align-items-start">
              <div class="avatar avatar-sm flex-shrink-0 me-3" style="background: #27AE60">
                <i class="bx bx-time text-white" style="font-size: 1.2rem; margin-top: 8px;"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-1 text-muted small">Time</p>
                <h6 class="mb-0">
                  {{ \Carbon\Carbon::parse($scheduleStudent->schedule->start_time)->format('H:i') }} -
                  {{ \Carbon\Carbon::parse($scheduleStudent->schedule->end_time)->format('H:i') }}
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="alert alert-info d-flex align-items-center" role="alert">
          <i class="bx bx-info-circle me-2"></i>
          <div>
            Pastikan Anda hadir tepat waktu sesuai jadwal yang telah ditentukan.
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
