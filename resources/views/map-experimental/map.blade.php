@extends('layouts.app')

@section('main')
<div class="container container-header">
  <div id="map" style="height: 400px;"></div>
  <br class="my-5">
  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1nlxV8ZRaihqy1f9ckuHRBbmkPNNIHOg&ehbc=2E312F" width="640" height="480"></iframe>
</div>

<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
  center: { lat: -7.607868, lng: 110.348291 }, // Bandongan, Central Java, Indonesia
  zoom: 14, // You can adjust the zoom level as needed
});


    var kmlLayer = new google.maps.KmlLayer({
      url: 'https://www.google.com/maps/d/u/0/kml?mid=1nlxV8ZRaihqy1f9ckuHRBbmkPNNIHOg&forcekml=1',
      map: map,
    });
  }
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>



<!-- Pariwisata Unggulan -->
<section id="desa" class="container-header">
    <div class="container mt-5">
        <h3 class="text-center mb-4">Pariwisata Unggulan</h3>
        <div class="row justify-content-left">
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark h-100">
                    <a class="h-100" href="{{ url('/desa/desa-bandongan') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                        <img src="{{ asset('img/foto desa/desa bandongan.jpg') }}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Desa Bandongan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark h-100">
                    <a href="{{ url('/desa/desa-gandusari') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                        <img src="{{ asset('img/foto desa/desa gandusari.jpg') }}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Desa Gandusari</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark h-100">
                    <a href="{{ url('/desa/desa-kalegen') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                        <img src="{{ asset('img/foto desa/desa kalegen.jpg') }}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Desa Kalegen</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark h-100">
                    <a href="{{ url('/desa/desa-rejosari') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                        <img src="{{ asset('img/foto desa/desa rejosari.jpg') }}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Desa Rejosari</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark h-100">
                    <a href="{{ url('/desa/desa-sidorejo') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                        <img src="{{ asset('img/foto desa/desa sidorejo.jpg') }}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Desa Sidorejo</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark h-100">
                    <a href="{{ url('/desa/desa-trasan') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                        <img src="{{ asset('img/foto desa/desa trasan.jpg') }}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Desa Trasan</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-dark h-25 d-inline-block w-100">
                <a href="{{ url('/desa/desa-ngepanrejo') }}" style="text-shadow: 1px 1px 0 #000; color:white;">
                    <img src="{{ asset('img/foto desa/desa ngepanrejo.jpg') }}" class="card-img h-100" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Desa Ngepanrejo</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection