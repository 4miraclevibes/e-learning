@extends('layouts.backend.main')

@section('content')
<div class="card container p-3">
    <h3 class="mb-3 text-center">Create Schedule</h3>
    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control form-control-sm" id="date" value="{{ date('Y-m-d') }}" name="date" required>
            </div>
            <div class="col-md-6">
                <label for="start_time" class="form-label">Start Time</label>
                <input type="time" class="form-control form-control-sm" id="start_time" name="start_time" value="{{ date('H:i') }}" required>
            </div>
            <div class="col-md-6">
                <label for="end_time" class="form-label">End Time</label>
                <input type="time" class="form-control form-control-sm" id="end_time" value="{{ date('H:i', strtotime('+1 hour', strtotime(date('H:i')))) }}" name="end_time" required>
            </div>
            <div class="col-md-6">
                <label for="course_detail_id" class="form-label">Course Detail</label>
                <select name="course_detail_id" id="select2" class="form-select form-select-sm" aria-label="Default select example">
                    <option value="">Pilih Course Detail</option>
                    @foreach($courseDetails as $courseDetail)
                        <option value="{{ $courseDetail->id }}">{{ $courseDetail->course->name }} - {{ $courseDetail->lecturer->user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
    </form>
</div>
@endsection