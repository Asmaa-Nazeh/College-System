{{-- resources/views/auth/login.blade.php --}}

@extends('layouts.app')

@section('content')

<style>
    body {
        background-image: url('https://i.pinimg.com/1200x/71/b6/e6/71b6e6118d6deb932f4b62cb5b3f33b1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
    }

    .login-card {
        background-color: rgba(0, 0, 0, 0.7); /* dark transparent */
        color: white;
        border-radius: 15px;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.2rem;
        color: #fff !important;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        border: 1px solid #ccc;
    }

    .form-control::placeholder {
        color: #ccc;
    }

    .form-label {
        color: #ddd;
    }

    .form-check-label {
        color: #ccc;
    }

    a {
        color: #ccc;
    }

    a:hover {
        color: #fff;
    }
</style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg p-4 login-card" style="width: 100%; max-width: 500px;">
        <h3 class="text-center mb-4">Login to Your Account</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input 
                    id="email" 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus
                >
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    id="password" 
                    type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                >
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="remember" 
                    id="remember" 
                    {{ old('remember') ? 'checked' : '' }}
                >
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

            <!-- Login Button -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                @if (Route::has('password.request'))
                    <a class="text-center mt-2" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>

@endsection
