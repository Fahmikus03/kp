@extends('layouts.main')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Pengaduan</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Fullname</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ auth()->user()->fullname }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jenis Pengaduan</label>
                                <select class="form-control" name="type" id="type" required>
                                    <option value="">Pilih Jenis Pengaduan</option>
                                    <option value="KTP">KTP</option>
                                    <option value="KK">Kartu Keluarga</option>
                                    <option>Akte Kelahiran</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pengaduan</label>
                                <textarea class="form-control" rows="3" cols="50" name="complaint" id="complaint" required autofocus placeholder="Masukkan Pengaduan ..."></textarea>
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
