@extends('layouts.main')

@section('content')

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <p><b>Admin</b>LTE</p>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="/login-store" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                placeholder="Username" name="username" id="username" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text"></div>
                            </div>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password" name="password" id="password" requiredS>
                            <div class="input-group-append">
                                <div class="input-group-text"></div>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-block btn-success">
                                Login
                            </button>
                        </div>
                        <p class="mt-3 mb-1">
                            <a href="/register" class="text-center">Register a new membership</a>
                        </p>
                </div>
                </form>
            </div>
        </div>
    @endsection
