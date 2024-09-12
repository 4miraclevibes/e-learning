@extends('layouts.backend.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h3 class="mb-3 text-center">Create Lecturer</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('lecturers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="user_id" class="form-label col-sm-2">Pengguna</label>
                                <div class="col-sm-10">
                                  <select class="form-select" name="user_id" id="select1" aria-label="Default select example">
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="study_program_id" class="form-label col-sm-2">Program Studi</label>
                                <div class="col-sm-10">
                                  <select class="form-select" name="study_program_id" id="select2" aria-label="Default select example">
                                    @foreach ($studyPrograms as $program)
                                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip" class="form-label col-sm-2">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nip" name="nip" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nik" class="form-label col-sm-2">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label col-sm-2">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label col-sm-2">Nomor Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label col-sm-2">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="profile_picture" class="form-label col-sm-2">Foto Profil</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-sm btn-primary">Create</button>
                            <a href="{{ route('lecturers.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection