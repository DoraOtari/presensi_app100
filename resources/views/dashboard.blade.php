@extends('layouts.tema')
@section('konten')
    <div class="row justify-content-around mt-5">
        <div class="col-lg-5">
            <h1>
                <i class="bi-webcam"></i> Presensi
            </h1>
            <h3 class="display-1">The Productivity</h3>
            <h1 class="fw-bolder text-primary">WORKER</h1>
            <p class="fs-4 text-muted">
                Pantau performa anda pada aplikasi ini semudah anda memantau mantan
            </p>
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('dashboard.png') }}" class="img-fluid" >
        </div>
    </div>
@endsection