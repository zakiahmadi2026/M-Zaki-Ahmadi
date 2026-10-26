@extends('layouts.app')
@section('title', 'Register | IT Student Portal')
@section('content')
<main class="auth-wrap">
    <section class="auth-card">
        <div class="auth-heading">
            <div class="round-icon">♟</div>
            <div><h1>Create an Account</h1><p>Register to access the student portal.</p></div>
        </div>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Full Name <span class="required">*</span></label>
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required maxlength="100" autocomplete="name">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email Address <span class="required">*</span></label>
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password <span class="required">*</span></label>
                <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required minlength="8" autocomplete="new-password">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label" for="password_confirmation">Confirm Password <span class="required">*</span></label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" required minlength="8" autocomplete="new-password">
            </div>
            <button class="btn btn-teal w-100 py-2" type="submit">♟ Register</button>
        </form>
        <p class="form-foot">Already registered? <a href="{{ route('login') }}">Login</a></p>
    </section>
</main>
@endsection
