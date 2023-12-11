@extends('layouts.tema')
@section('konten')
    <div class="col-lg-8 mx-auto">
        <div class="card border-0" >
            <div class="card-body">
                <h4 class="card-title"><i class="bi-person-plus"></i> Tambah Karyawan</h4>
                <form action="{{ url('karyawan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label badge bg-primary">NIK</label>
                      <input type="text" readonly class="form-control-plaintext" name="nik">
                    </div>
                    {{--  --}}
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <select class="form-select" name="user_id">
                                    <option selected>--Pilih Satu--</option>
                                    @foreach ($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->email }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                              <label class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div>
                    </div>
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
                                <select class="form-select" name="user_id">
                                    <option selected>--Pilih Satu--</option>
                                    <option value="">New Delhi</option>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Provinsi</label>
                                <select class="form-select" name="provinsi">
                                    <option selected>--Pilih Satu--</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Kota</label>
                                <select class="form-select" name="kota">
                                    <option selected>--Pilih Satu--</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="masukan alamat karyawan"></textarea>
                    <button type="submit" class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection