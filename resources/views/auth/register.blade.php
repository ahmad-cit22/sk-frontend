@extends('layouts.frontend')

@section('title')
    Register
@endsection

@push('css')
    <style>
        .form-input {
            border-width: 2px !important;
            border-color: #505969;
        }
    </style>
@endpush

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Register
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>Register New Account</h1>
            </div>
        </div>

        <div class="container login-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="register-name">
                                                Name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-input form-wide" id="register-name"
                                                name="name" placeholder="Enter your name" required />
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="register-contact-no">
                                                Contact No.
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-input form-wide" id="register-contact-no"
                                                name="contact" placeholder="Enter your contact no." required />
                                            @error('contact')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="register-email">
                                        Email address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" class="form-input form-wide" id="register-email" name="email"
                                        placeholder="Enter your email address" required />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="register-password">
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-input form-wide" id="register-password"
                                        name="password" placeholder="Enter your password" required />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="register-confirm-password">
                                        Confirm Password
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-input form-wide" id="register-confirm-password"
                                        name="password_confirmation" placeholder="Confirm your password" required />
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="register-address">
                                        Address
                                    </label>
                                    <input type="text" class="form-input form-wide" id="register-address"
                                        name="billing_address" placeholder="Enter your shipping address" />
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="register-city">
                                                City
                                            </label>
                                            <input type="text" class="form-input form-wide" id="register-city"
                                                name="billing_city" placeholder="Enter your city" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="register-country">
                                                Country
                                            </label>
                                            <input type="text" class="form-input form-wide" id="register-country"
                                                name="billing_country" placeholder="Enter your country" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="register-zipcode">
                                        Zipcode
                                    </label>
                                    <input type="text" class="form-input form-wide" id="register-zipcode"
                                        name="billing_zip" placeholder="Enter your zipcode" />
                                </div>

                                <div class="form-footer mb-2">
                                    <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                        Register
                                    </button>
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
