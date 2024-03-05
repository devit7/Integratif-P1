<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.daftarPengguna', [
            "users" => User::all()
        ]);
    }

    public function create()
    {
        return view('user.registrasi');
    }

    public function store(Request $request)

    //validasi inputan
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required | email',
            'password' => 'required'
        ]);

        //menyimpan data
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)//enkripsii xd
        ]);

        return redirect()->route('user.daftarPengguna');
    }

    public function show(User $user)
    {
        return view('user.infoPengguna', compact('user'));
    }
}
