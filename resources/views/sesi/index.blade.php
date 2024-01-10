@extends('layout/aplikasi')

@section('konten')


<div class="w-50 center border rounded px-3 py-3 mx-auto text-white">
    <div class="container mb-3 text-center">
        <h1>Login</h1>
    </div>
    <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{Session::get('email')}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-warning">Login</button>
        </div>
        <div class="text-center">
            <p>
                Belum punya akun? <a href="/sesi/register"><b>Register</b></a>
            </p>
        </div>
    </form>
@endsection