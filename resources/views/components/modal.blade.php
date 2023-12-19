<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Karyawan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $item->nama }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $item->nik }}</td>
            </tr>
            <tr>
                <td>Kelamin</td>
                <td>:</td>
                <td>{{ $item->kelamin }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $item->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>{{ $item->jabatan->nama_jabatan }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $item->user->email }}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td>{{ $item->provinsi }}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>{{ $item->kota }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $item->alamat }}</td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>