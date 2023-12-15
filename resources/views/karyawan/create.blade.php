@extends('layouts.tema')
@section('konten')
    <div class="col-lg-8 mx-auto">
        <div class="card border-0" >
            <div class="card-body">
                <h4 class="card-title"><i class="bi-person-plus"></i> Tambah Karyawan</h4>
                <form action="{{ url('karyawan') }}" method="post">
                    @csrf
                    
                    {{--  --}}
                    <livewire:nik-otomatis :user="$user" />
                    {{--  --}}
                    <div class="mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="masukan nama">
                    </div>
                    {{--  --}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan_id">
                                    <option selected>--Pilih Satu--</option>
                                    @foreach($jabatan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="user_id">
                                    <option selected>--Pilih Satu--</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <livewire:daerah-indo />
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="masukan alamat karyawan"></textarea>
                    <button type="submit" class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection