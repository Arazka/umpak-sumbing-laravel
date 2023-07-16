@extends('layouts.app')

@section('main')
<div class="container container-header">
    <nav>
        <div class="nav nav-tabs d-flex align-items-center justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link active" id="desa-bandongan-tab" data-bs-toggle="tab" data-bs-target="#desa-bandongan" type="button" role="tab" aria-controls="desa-bandongan" aria-selected="true">Desa Bandongan</button>
            <button class="nav-link" id="desa-gandusari-tab" data-bs-toggle="tab" data-bs-target="#desa-gandusari" type="button" role="tab" aria-controls="desa-gandusari" aria-selected="false">Desa Gandusari</button>
            <button class="nav-link" id="desa-kalegen-tab" data-bs-toggle="tab" data-bs-target="#desa-kalegen" type="button" role="tab" aria-controls="desa-kalegen" aria-selected="false">Desa Kalegen</button>
            <button class="nav-link" id="desa-ngepanrejo-tab" data-bs-toggle="tab" data-bs-target="#desa-ngepanrejo" type="button" role="tab" aria-controls="desa-ngepanrejo" aria-selected="false">Desa Ngepanrejo</button>
            <button class="nav-link" id="desa-rejosari-tab" data-bs-toggle="tab" data-bs-target="#desa-rejosari" type="button" role="tab" aria-controls="desa-rejosari" aria-selected="false">Desa Rejosari</button>
            <button class="nav-link" id="desa-sidorejo-tab" data-bs-toggle="tab" data-bs-target="#desa-sidorejo" type="button" role="tab" aria-controls="desa-sidorejo" aria-selected="false">Desa Sidorejo</button>
            <button class="nav-link" id="desa-trasan-tab" data-bs-toggle="tab" data-bs-target="#desa-trasan" type="button" role="tab" aria-controls="desa-trasan" aria-selected="false">Desa Trasan</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="desa-bandongan" role="tabpanel" aria-labelledby="desa-bandongan-tab" tabindex="0">
            <div class="card projects-img">
                <a href="your-page-url">
                    <img src="img/desa_geo_map/desa_bandongan.png" class="card-img-top" alt="projects1" style="height:25rem; object-fit: cover;" />
                </a>
                <div class="card-body align-items-center justify-content-center">
                    <h5 class="card-title text-center">Desa Bandongan</h5>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center"> <!-- Add text-center class here -->
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade align-items-center justify-content-center" id="desa-gandusari" role="tabpanel" aria-labelledby="desa-gandusari-tab" tabindex="0">
            <div class="card projects-img">
                <a href="your-page-url">
                    <img src="img/desa_geo_map/desa_gandusari.png" class="card-img-top" alt="projects1" style="height:25rem; object-fit: cover;" />
                </a>
                <div class="card-body align-items-center justify-content-center">
                    <h5 class="card-title text-center">Desa Gandusari</h5>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center"> <!-- Add text-center class here -->
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="desa-kalegen" role="tabpanel" aria-labelledby="desa-kalegen-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="desa-ngepanrejo" role="tabpanel" aria-labelledby="desa-ngepanrejo-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="desa-rejosari" role="tabpanel" aria-labelledby="desa-rejosari-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="desa-sidorejo" role="tabpanel" aria-labelledby="desa-sidorejo-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="desa-trasan" role="tabpanel" aria-labelledby="desa-trasan-tab" tabindex="0">...</div>
    </div>
</div>

<!-- DESA -->
<section id="desa">
    <div class="container mt-5">
        <div class="row justify-content-left">
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/desa bandongan.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Bandongan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/Desa Gandusari.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Gandusari</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/Desa Kalegen.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Kalegen</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/Desa Ngepanrejo.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Ngepanrejo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/Desa Rejosari.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Rejosari</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/desa sidorejo.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Sidorejo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card projects-img h-100">
                    <img src="img/foto desa/Desa Trasan.png" class="card-img-top" alt="projects1" style="object-fit: cover; height: 15rem;" />
                    <div class="card-body">
                        <h5 class="card-title">Desa Trasan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection