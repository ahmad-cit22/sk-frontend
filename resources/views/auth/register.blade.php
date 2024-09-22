@extends('layouts.frontend')

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
                            <form action="#">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="register-name">
                                                Name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-input form-wide" id="register-name"
                                                name="name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="register-contact-no">
                                                Contact No.
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-input form-wide" id="register-contact-no"
                                                name="contact" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="register-email">
                                        Email address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" class="form-input form-wide" id="register-email" name="email"
                                        required />
                                </div>

                                <div class="form-group">
                                    <label for="register-password">
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-input form-wide" id="register-password"
                                        name="password" required />
                                </div>
                                <div class="form-group">
                                    <label for="register-confirm-password">
                                        Confirm Password
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-input form-wide" id="register-confirm-password"
                                        name="password_confirmation" required />
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
