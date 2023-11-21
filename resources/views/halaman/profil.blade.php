@extends('layouts.tema')
@section('konten')
{{-- bs5-card-default --}}
    <div class="card col-lg-6 mx-auto shadow mt-2">
        <div class="card-body">
            <h4 class="card-title">Upload Foto</h4>
            <hr>
            <form action="{{ url('/upload') }}" method="post">
                @csrf
                {{-- bs5-form-file --}}
                <livewire:upload-file />
                {{-- bs5-form-submit --}}
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </form>
        </div>
    </div>
@endsection