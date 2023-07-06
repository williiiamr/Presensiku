@extends('layouts.presensi')
@section('header')
 <!-- App Header -->
 <div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Presensi</div>
    <div class="right"></div>
</div>
<!-- * App Header -->
<style>
    .webcam-capture,
    .webcam-capture video{
        diplay: inline-block;
        width: 100% !important;
        margin: auto;
        height: auto !important;
        border-radius: 15px;
    }

    #map { height: 250px; }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/> 
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
@endsection
@section('content')
<div class='row' style='margin-top: 70px'>
    <div class="col">
        {{-- bisa di hidden pada bagian type untuk ilangin coordinate --}}
        <input type='text' id='lokasi'> 
        <div class='webcam-capture'></div> 
    </div>
</div>
<div class='row'>
    <div class='col'> 
        @if ($cek > 0)
            <button id='absen' class='btn btn-danger btn-block'>Absen Pulang</button>
        @else
            <button id='absen' class='btn btn-primary btn-block'>Absen Masuk</button>
        @endif
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <div id="map"></div>
    </div>
</div>
@endsection

@push('myscript')
<script>
    Webcam.set({
        height:480,
        width:640,
        image_format:'jpeg',
        jpeg_quality:80
    });

    Webcam.attach('.webcam-capture');

    var lokasi = document.getElementById('lokasi');
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    }

    function successCallback(position){
        lokasi.value = position.coords.latitude + ',' + position.coords.longitude;  
        var map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);

        var circle = L.circle([-6.224833003263079, 106.6498009576709], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 20
        }).addTo(map);
    }

    function errorCallback(){

    }

    $('#absen').click(function(e) {
        Webcam.snap(function(uri){
            image = uri;
        });
        var lokasi = $('#lokasi').val();
        $.ajax({
            type:'POST',
            url:'/presensi/store',
            data:{
                _token:'{{ csrf_token() }}',
                image:image,
                lokasi:lokasi
            },
            cache:false,
            success:function(respond){
                var status = respond.split('|');
                if(status[0] == 'Success'){
                    alert(status[1]);
                    setTimeout("location.href='/dashboard'", 2000);
                } else if (status == 'Error'){
                    alert(status[1]);
                }else {
                    alert(status[1]);
                }
            }
        });
    });
</script>
@endpush
