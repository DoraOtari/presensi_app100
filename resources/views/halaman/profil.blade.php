@extends('layouts.tema')
@section('konten')
{{-- bs5-card-default --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Upload Foto</h4>
            <hr>
            <form action="{{ url('/upload') }}" method="post">
                @csrf
                {{-- bs5-form-file --}}
                <div class="mb-3">
                  <label for="" class="form-label">Choose file</label>
                  <input type="file" class="form-control" name="foto" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
                {{-- bs5-form-submit --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection