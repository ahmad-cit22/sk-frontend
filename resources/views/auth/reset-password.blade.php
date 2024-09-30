@extends('layouts.frontend')

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Reset Password
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>Reset Password</h1>
            </div>
        </div>

        <div class="container reset-password-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="feature-box border-top-primary">
                        <div class="feature-box-content">
                            <form class="mb-0" method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Token input field (required for password reset) -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <p>Please enter your email and new password below to reset your password.</p>

                                <!-- Email Field -->
                                <div class="form-group mb-0">
                                    <label for="email" class="font-weight-normal">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                           value="{{ old('email') }}" autofocus />

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password Field -->
                                <div class="form-group mb-0">
                                    <label for="password" class="font-weight-normal">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required />

                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="form-group mb-0">
                                    <label for="password_confirmation" class="font-weight-normal">Confirm New Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                           name="password_confirmation" required />

                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Form footer with login link and submit button -->
                                <div class="form-footer mb-0">
                                    <a href="{{ route('login') }}">Click here to login</a>

                                    <button type="submit"
                                        class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
                                        Reset Password
                                    </button>
                                </div>
                            </form>

                        </div>

                        <!-- Success message if password reset email is sent -->
                        @if (session('status'))
                            <div class="alert alert-success mt-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
@endsection
