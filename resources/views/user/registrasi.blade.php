@extends('layouts.master')

@section('content')
    <div class="container  mt-4">
        <h2>Registrasi Pengguna</h2>
        <p>Form registrasi pengguna.</p>

        <div class="card rounded-1 w-50 ">
            <div class="card-header">
                <h6>Registrasi Form</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-md-4 col-form-label text-md-end">Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('user.daftarPengguna') }}" class="btn btn-primary ">Kembali</a>
                            <button type="submit" class="btn btn-success ">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
