@extends('layouts.app')
@section('title', 'Login | IT Student Portal')
@section('content')
<main class="auth-wrap">
    <section class="auth-card login-card">
        <div class="auth-heading">
            <div class="round-icon">🔒</div>
            <div><h1>Login to Your Account</h1><p>Sign in to access your dashboard.</p></div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">The email or password is incorrect, or the form contains errors.</div>
        @endif
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">Email Address <span class="required">*</span></label>
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password <span class="required">*</span></label>
                <input class="form-control" id="password" name="password" type="password" required autocomplete="current-password">
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button class="btn btn-teal w-100 py-2" type="submit">↪ Login</button>
        </form>
        <p class="form-foot">No account yet? <a href="{{ route('register') }}">Register</a></p>
    </section>
</main>
@endsection
