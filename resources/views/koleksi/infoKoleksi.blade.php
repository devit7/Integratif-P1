@extends('layouts.master')

@section('content')
    <div class="container  mt-4">
        <h2>Tambah kolleksi</h2>
        <p>Form tambah data koleksi.</p>

        <div class="card rounded-1  ">
            <div class="card-header">
                <h6>Registrasi Form</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('koleksi.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Koleksi</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control" id="nama" name="namaKoleksi" required value="{{ $koleksi->namaKoleksi }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Jenis Koleksi</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" required name="jenisKoleksi" ">

                                <option value="{{ $koleksi->jenisKoleksi }}">Buku</option>
                              </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Jumlah</label>
                        <div class="col-md-6">
                            <input readonly type="number" class="form-control" id="password" name="jumlah" required value="{{ $koleksi->jumlah }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('koleksi.daftarKoleksi') }}" class="btn btn-primary ">kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
