<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sesi/index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $info_login = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($info_login)){
            return redirect('todo')->with('success', 'Berhasil Login');
        }else{
            return redirect('sesi')->withErrors('Email dan Password tidak valid');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil logout');
    }

    function register()
    {
        return view('sesi/register');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],[
            'name.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'Silakan masukkan email yang valid',
            'email.unique'=>'Email sudah terdaftar',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Password minimal 6 karakter'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];

        User::create($data);

        $info_login = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($info_login)){
            return redirect('todo')->with('success', Auth::user()->name.' Berhasil melakukan registrasi');
        }else{
            return redirect('sesi')->withErrors('Email dan Password tidak valid');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
