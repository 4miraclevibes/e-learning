@extends('layouts.backend.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary">
      <h5 class="mb-0 text-white">
        <i class='bx bx-book-reader me-2'></i>Detail Module
      </h5>
      <a href="{{ route('courses.details.modules.index', $module->course_detail_id) }}" class="btn btn-dark btn-sm">
        <i class='bx bx-arrow-back me-1'></i>Back
      </a>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <!-- Course Info Card -->
          <div class="card shadow-sm mb-4 bg-light border-0">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar avatar-lg me-3" style="background: #696CFF">
                  <i class='bx bx-book text-white' style="font-size: 1.5rem"></i>
                </div>
                <div>
                  <h5 class="mb-1">{{ $module->courseDetail->course->name }}</h5>
                  <span class="badge bg-label-primary">{{ $module->learningCategory->name }}</span>
                </div>
              </div>

              <div class="row g-3">
                <div class="col-md-4">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm me-2 bg-label-info">
                      <i class='bx bx-calendar'></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Pertemuan</small>
                      <span class="fw-semibold">Pertemuan {{ $module->pertemuan }}</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm me-2 bg-label-success">
                      <i class='bx bx-bookmark'></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Module Name</small>
                      <span class="fw-semibold">{{ $module->name }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Description Card -->
          <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3 bg-label-primary">
                  <i class='bx bx-text'></i>
                </div>
                <h5 class="card-title mb-0">Description</h5>
              </div>
            </div>
            <div class="card-body">
              <div class="bg-light p-3 rounded">
                <div class="module-description">
                  {!! $module->description !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.avatar {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 38px;
  height: 38px;
  border-radius: 50%;
}

.avatar-lg {
  width: 48px;
  height: 48px;
}

.avatar-sm {
  width: 32px;
  height: 32px;
}

.module-description img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  margin: 1rem 0;
}

.module-description {
  line-height: 1.6;
  color: #566a7f;
}

.bg-label-primary {
  background-color: #e7e7ff !important;
  color: #696cff !important;
}

.bg-label-success {
  background-color: #e8fadf !important;
  color: #71dd37 !important;
}

.bg-label-info {
  background-color: #d7f5fc !important;
  color: #03c3ec !important;
}
</style>
@endsection
