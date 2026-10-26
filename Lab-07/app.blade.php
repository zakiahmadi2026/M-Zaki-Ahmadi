<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'IT Student Portal')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/portal.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark portal-nav">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="{{ auth()->check() ? route('dashboard') : route('login') }}">
            <span class="cap">◆</span> IT Student Portal
        </a>
        @auth
            <div class="d-flex align-items-center gap-3 text-white">
                <span class="d-none d-md-inline">Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-teal btn-sm" type="submit">Logout</button>
                </form>
            </div>
        @else
            <div class="d-flex gap-3">
                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
            </div>
        @endauth
    </div>
</nav>

@yield('content')
</body>
</html>
