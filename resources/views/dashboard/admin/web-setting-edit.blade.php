@extends('layouts.main')
@section('content')

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.components.navbar')
            <!-- Main Sidebar Container -->
            @include('layouts.components.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">{{ $title }}</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">{{ $title }}</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $title }}</h3>
                                </div>
                                <form action="{{ route('web-setting.update') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="about" class="col-sm-2 col-form-label">About</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="5" name="about" id="about" autofocus>{{ $info[0]->about }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="street" class="col-sm-2 col-form-label">Street</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="street" id="street" value="{{ $info[0]->street }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address" id="address" value="{{ $info[0]->address }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="country" class="col-sm-2 col-form-label">Coutry</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="country" id="country" value="{{ $info[0]->country }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="phone" id="phone" value="{{ $info[0]->phone }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $info[0]->email }}">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mt-4">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    @endsection
