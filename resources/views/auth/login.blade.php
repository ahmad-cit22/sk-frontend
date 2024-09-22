@extends('layouts.frontend')

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
                            <form action="#">
                                <div class="form-group">
                                    <label for="login-email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" class="form-input form-wide" id="login-email" name="email"
                                        placeholder="Enter your email" required />
                                </div>

                                <div class="from-group">
                                    <label for="login-password">
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-input form-wide" id="login-password" name="password" placeholder="Enter your password" required />
                                </div>

                                <div class="form-footer">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" />
                                        <label class="custom-control-label mb-0" for="lost-password">Remember
                                            me</label>
                                    </div>

                                    <a href="forgot-password.html"
                                        class="forget-password text-dark form-footer-right">Forgot
                                        Password?</a>
                                </div>
                                <button type="submit" class="btn btn-dark btn-md w-100">
                                    LOGIN
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End .main -->
@endsection
