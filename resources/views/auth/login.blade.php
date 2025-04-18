@extends('auth.layout')

@section('title', 'Login')

@section('content')
<div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4 text-primary fw-bold">Login</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-semibold">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
        </div>
        <div class="mb-4">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">LOGIN</button>
    </form>
    <div class="mt-3 text-center">
    </div>
</div>
@endsection
