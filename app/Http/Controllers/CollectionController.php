<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //
    //
    public function index()
    {
        return view('koleksi.daftarKoleksi', [
            "koleksi" => Collections::all()
        ]);
    }

    public function create()
    {
        return view('koleksi.registrasi');
    }

    public function store(Request $request)

    //validasi inputan
    {
        $this->validate($request, [
            'namaKoleksi' => 'required',
            'jenisKoleksi' => 'required',
            'jumlah' => 'required'
        ]);

        //menyimpan data
        Collections::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->route('koleksi.daftarKoleksi');
    }

    public function show(Collections $koleksi)
    {
        return view('koleksi.infoKoleksi', compact('koleksi'));
    }
}
