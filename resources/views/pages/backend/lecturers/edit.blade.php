@extends('layouts.backend.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Data Dosen</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Form Edit Dosen</h5>
                <div class="card-body">
                    <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $lecturer->user->name }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $lecturer->user->email }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="study_program_id" class="form-label col-sm-2">Program Studi</label>
                                <div class="col-sm-10">
                                  <select class="form-select" name="study_program_id" id="select1" aria-label="Default select example">
                                    @foreach ($studyPrograms as $program)
                                    <option value="{{ $program->id }}" {{ $lecturer->study_program_id == $program->id ? 'selected' : '' }}>{{ $program->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" value="{{ $lecturer->nip }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="{{ $lecturer->nik }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="Laki-laki" {{ $lecturer->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $lecturer->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $lecturer->phone }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required>{{ $lecturer->address }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="profile_picture" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                            <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection