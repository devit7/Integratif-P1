@extends('layouts.master')

@section('content')
<div class="container  mt-4">
    <h2>Info Pengguna</h2>
    <p>list data info pengguna.</p>

    <div class="card rounded-1 ">
        <div class="card-header">
            <p class="">Info Pengguna</p>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label for="nama" class="col-md-4 col-form-label text-md-end">Nama</label>
                <div class="col-md-6">
                    <input readonly type="text" class="form-control" id="nama" name="nama"  value="{{ $user->name }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                <div class="col-md-6">
                    <input readonly type="email" class="form-control" id="email" name="email"  value="{{ $user->email }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                <div class="col-md-6">
                    <input readonly type="text" class="form-control" id="password" name="password"  value="{{ $user->password }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-4">
                    <a href="{{ route('user.daftarPengguna') }}" class="btn btn-primary ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection