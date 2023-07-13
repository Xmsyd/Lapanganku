@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="login-box">

                <!-- Card Mulai -->
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="#" class="h1"><b>Lapangan</b>ku</a>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <p class="login-box-msg">Loin untuk memulai Memesan</p>

                        <!-- Form disini -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                <!-- Pesan Kesalahan -->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                
                            </div>

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <!-- pesan kesalahan -->
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Ingat Saya -->
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol Masuk -->
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                        </form>

                        <!-- Forgot Password -->
                        <p class="mt-3 mb-1 text-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </p>

                        <!-- Register -->
                        <p class="text-center">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
