<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label">Provinsi</label>
            <select class="form-select" name="provinsi">
                <option selected>--Pilih Satu--</option>
                @foreach ($provinsi as $item)
                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                @endforeach
                
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