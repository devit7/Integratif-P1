@extends('layouts.master')

@section('content')
    <div class="container  mt-4">
        <h2>Daftar Koleksi</h2>
        <p>list data daftar koleksi.</p>

        <div class="card rounded-1 ">
            <div class="card-header">
                <a href="{{ route('koleksi.registrasi') }}" class="btn btn-sm btn-primary">Tambah Koleksi</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Koleksi</th>
                            <th>Jenis Koleksi</th>
                            <th>Jumlah</th>
                            <th class="text-center" width="150px">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($koleksi as $k)
                            
                        <tr>
                            <td>{{ @$loop->first }}</td>
                            <td>{{ $k->namaKoleksi }}</td>
                            <td>{{ $k->jenisKoleksi }}</td>
                            <td>{{ $k->jumlah }}</td>
                            <td class="text-center">
                                <a href="{{ route('koleksi.infoKoleksi',['koleksi' => $k->id]) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
