@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto text-white">
        <div class="container mb-3 text-center">
            <h1>Register</h1>
        </div>
        <form action="/sesi/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{Session::get('name')}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{Session::get('email')}}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-warning">Register</button>
            </div>
            <div class="text-center">
                <p>
                    Sudah punya akun? <a href="/sesi"><b>Login</b></a>
                </p>
            </div>
            
        </form>
    </div>

@endsection