<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">  
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
</head>
  <body>

    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
        </div>
    @endif
    <div class="card col-md-6 mx-md-auto border-0">
        <div class="card-body">
            <form action="{{ url('presensi') }}" method="post">
                @csrf
                <div class="mx-auto col-12" id="my_camera" ></div>
                <input type="hidden" readonly name="foto" id="hasil_foto">
                <div class="d-flex justify-content-evenly my-3">
                    <button id="reset" type="button" class="btn btn-lg btn-outline-success"><i class="bi-arrow-counterclockwise"></i></button>
                    <button id="capture" type="button" class="btn btn-lg btn-success"><i class="bi-camera-fill"></i></button>
                </div>
                <label for="" class="form-label">Keterangan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="keterangan" checked value="masuk">
                    <label class="form-check-label" for="">Masuk</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="keterangan" value="pulang">
                    <label class="form-check-label" for="">Pulang</label>
                </div>
                <div id="map" style="height: 200px"></div>
                <input type="hidden" id="lokasi" name="lokasi" readonly>
                <section class="text-end">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </section>
            </form>
        </div>
        </div>
    </div>

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="webcam.js"></script>
    <script language="JavaScript">
       Webcam.set({
            flip_horiz:true,
            height:200,
            width:320,
        }) //merubah setting kamera

        Webcam.attach( '#my_camera' );

        let tombolCapture = document.querySelector('#capture')
        var hasilFoto = document.querySelector('#hasil_foto')
        tombolCapture.onclick = function(){
            Webcam.snap(function(data){
                hasilFoto.value = data
                Webcam.freeze()
            })
        } //kode untuk mengambil gambar

        let tombolReset = document.querySelector('#reset')
        tombolReset.onclick = function(){
            Webcam.unfreeze()
        } //kode untuk mereset kamera

        // ini bagian map kode
        var map = L.map('map').setView([-2.966994, 104.748244], 18);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var circle = L.circle([-2.966994, 104.748244], {
            color: 'green',
            fillColor: 'green',
            fillOpacity: 0.5,
            radius: 30
        }).addTo(map);

        navigator.geolocation.getCurrentPosition(cekPosisi);
        function cekPosisi(posisi){
            let lokasi = document.querySelector('#lokasi')
            var lintang = posisi.coords.latitude;
            var bujur = posisi.coords.longitude;
            lokasi.value = lintang+','+bujur
            var marker = L.marker([lintang, bujur]).addTo(map);
        }
    </script>
  </body>

</html>