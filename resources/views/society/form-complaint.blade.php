@extends('layouts.main')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card card-primary">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Form Pengaduan</h3>
                    </div>
                    <form action="society-form-complaint-store" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Fullname</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ auth()->user()->fullname }}" name="{{ auth()->user()->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jenis Pengaduan</label>
                                <select class="form-control" name="type_of_complaint_id" id="type_of_complaint_id" required>
                                    <option value="">Pilih Jenis Pengaduan</option>
                                    @foreach ($type_of_complaint as $type)
                                        <option value="{{ $type->id }}"> {{ $type->name_type_of_complaint }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pengaduan</label>
                                <textarea class="form-control" rows="3" cols="50" name="fill_in_the_complaint" id="fill_in_the_complaint"
                                    required autofocus placeholder="Masukkan Pengaduan ..."></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
