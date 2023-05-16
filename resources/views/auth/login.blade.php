@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">

                <div class="card-body mx-5 my-3">

                <!-- Logo Section -->
                <div class="row my-3">
                    <div class="text-center">
                        <img src="{{ asset('taskpulse.jpeg') }}" alt="" width="50px" height="50px" class="rounded">
                    </div>
                </div>

                <!-- Title Section -->
                <div class="row my-3">
                    <div class="h3 text-center">
                        {{ __('Login') }}
                    </div>
                    
                </div>

                <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        <!-- CSRF Token -->
                        @csrf

                        <!-- Input Email -->
                        <div class="row mb-3">
                             <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <!-- Input Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- Remember Check -->
                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="row mb-5">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <!-- Forgot Password Anchor -->
                        <div class="row mb-3">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
