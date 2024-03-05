@extends('layouts.master')

@section('content')
    <div class="container  mt-4">
        <h2>Daftar Koleksi</h2>
        <p>list data daftar koleksi.</p>

        <div class="card rounded-1 ">
            <div class="card-header">
                <a href="{{ route('koleksi.registrasi') }}" class="btn btn-sm btn-primary">Tambah Pengguna</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th class="text-center" width="150px">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>dev@gmail.com</td>
                            <td>231fd</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
