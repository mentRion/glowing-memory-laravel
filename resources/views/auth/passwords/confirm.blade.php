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
                            Logo
                        </div>
                    </div>

                    <!-- Title Section -->
                    <div class="row my-3">
                        <div class="h3 text-center">
                            {{ __('Confirm Password') }}
                        </div>
                        
                    </div>

                    <!-- Title Section -->
                    <div class="row my-3">
                        <div class="text-center">
                        {{ __('Please confirm your password before continuing.') }}
                        </div>
                    </div>

                    <!-- Confirmation Form -->
                    <form method="POST" action="{{ route('password.confirm') }}">

                        <!-- CSRF Token -->
                        @csrf

                        <div class="row mb-5">

                            <!-- Input Password -->
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password Button -->
                        <div class="row mb-5">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Confirm Password') }}
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
