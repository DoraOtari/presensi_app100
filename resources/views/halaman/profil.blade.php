@extends('layouts.tema')
@section('konten')
@if (session('pesan'))
    {{-- bs5-alert-default --}}
    <div class="col-md-6 mx-auto mt-2">
        <div class="alert alert-primary" role="alert">
            <strong>
                <i class="bi-bell"></i>    
            </strong> 
            {{ session('pesan') }}
        </div>
    </div>
@endif
{{-- bs5-card-default --}}
    <div class="card col-lg-6 mx-auto shadow mt-2">
        <div class="card-body">
            <h4 class="card-title">Upload Foto</h4>
            <hr>
            <form enctype="multipart/form-data" action="{{ url('/upload') }}" method="post">
                @csrf
                {{-- bs5-form-file --}}
                <livewire:upload-file />
                {{-- bs5-form-submit --}}
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </form>
        </div>
    </div>
@endsection