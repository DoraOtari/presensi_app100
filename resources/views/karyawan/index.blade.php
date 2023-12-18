{{-- bs5-card-default -> untuk membuat tampilan card --}}
{{-- bs5-grid-col -> untuk membuat tampilan kolom --}}
{{-- bs5-table-default -> untuk membuat tampilan table --}}
@extends('layouts.tema')
@section('konten')
    <div class="col-10 mx-auto">
        @if (session('pesan'))
            <div class="alert alert-success" role="alert">
                <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
            </div>
        @endif
        
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Karyawan</h4>
                <p class="card-text">data karyawan akan tampil disini</p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($karyawan as $item)
                                <tr>
                                    <td><img src="{{ asset($item->user->avatar) }}" width="55"></td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>{{ $item->jabatan->nama }}</td>
                                    <td>
                                        <a href='{{ url("/karyawan/$item->id/edit") }}' class="btn">
                                            <i class="bi-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <a href="{{ url('/karyawan/create') }}" class="btn btn-primary float-end">
                                Buat
                            </a>
                        </tfoot>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
@endsection