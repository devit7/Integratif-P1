@extends('layouts.master')

@section('content')
    <div class="container  mt-4">
        <h2>Daftar Pengguna</h2>
        <p>list data daftar pengguna.</p>

        <div class="card rounded-1 ">
            <div class="card-header">
                <a href="{{ route('user.registrasi') }}" class="btn btn-sm btn-primary">Tambah Pengguna</a>
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
                        @foreach ($users as $u)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->password }}</td>
                            <td class="text-center">
                                <a href="{{ route('user.infoPengguna',['user'=>$u->id]) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
