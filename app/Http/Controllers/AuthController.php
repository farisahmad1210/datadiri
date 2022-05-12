<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    public function indexLogin(){
        return view('auth.login');
    }

    public function registUser(Request $request)
    {
        $validate = Validator::make($request->all(),
            [
                'nik' => 'required|unique:users|max:16',
                'nama' => 'required',
            ],
            [
                'nik.unique' => 'NIK sudah terdaftar',
                'nama.required' => 'Nama tidak boleh kosong',
            ]
            )->validate();

            $validateData= [
                "nik" => $validate['nik'],
                "nama" => $validate['nama'],
                "password" => bcrypt($validate['nik'])
            ];

         // dd($validateData);
           User::create($validateData);
            return redirect('/')->with('success', 'Registrasi Berhasil, Silahkan Login!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/dashboard');
        }
 
        return back()->with('failed', 'Masuk gagal, Silahkan Coba Lagi Nanti');
    }

}

