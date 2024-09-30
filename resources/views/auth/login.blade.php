@extends('layouts.frontend')

@section('title')
    Login
@endsection

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Login
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>Login to your account</h1>
            </div>
        </div>

        <div class="container login-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="login-email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" class="form-input form-wide" id="login-email" name="email"
                                        placeholder="Enter your email" required />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="from-group">
                                    <label for="login-password">
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-input form-wide" id="login-password" name="password"
                                        placeholder="Enter your password" required />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-footer">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="remember-me"
                                            name="remember" />
                                        <label class="custom-control-label mb-0" for="remember-me">Remember
                                            me</label>
                                    </div>

                                    <a href="{{ route('password.request') }}"
                                        class="forget-password text-dark form-footer-right">Forgot
                                        Password?
                                    </a>
                                </div>
                                <button type="submit" class="btn btn-dark btn-md w-100">
                                    LOGIN
                                </button>
                                <div class="form-footer">
                                    <p class="my-2 text-center mx-auto" style="font-size: 14px !important;">
                                        Don't have an account?
                                        <a href="{{ route('register') }}">Register here</a>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End .main -->
@endsection
