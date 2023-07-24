<nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-item-center" href="#">
        <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" width="60" height="60" class="d-inline-block align-text-top" style="border-radius: 1rem 0 1rem 0" />
        <!-- <h6 class="my-auto mx-2">Umpak Sumbing</h6> -->
        <div class="title mx-2 mx-md-3">
          <div class="bandongan-1">Umpak Sumbing</div>
          <div class="address">Kawasan Pedesaan Umpak Sumbing, Kecamatan Bandongan</div>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top" style="border-radius: 1rem 0 1rem 0" />
          <h6 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Umpak Sumbing</h6>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link fs-6" aria-current="page" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6" href="{{ url('/pariwisata') }}">Pariwisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6" href="{{ url('/produk-unggulan') }}">Produk Unggulan</a>
            </li>
            <!-- {{-- <li class="nav-item">
              <a class="nav-link fs-6" href="halaman/bkad.html">BKAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6" href="halaman/bumdesma.html">BUMDESMA</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link fs-6" href="halaman/regulasi.html">Regulasi</a>
            </li> --}} -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> BKAD </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{ url('/bkad/profil-lembaga') }}">Profil Lembaga</a></li>
                <li><a class="dropdown-item" href="{{ url('/bkad/struktur-organisasi') }}">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="{{ url('/bkad/program-kerja') }}">Program Kerja</a></li>
                <li><a class="dropdown-item" href="{{ url('/bkad/rencana-pembangunan-kawasan-pedesaan') }}">RPKP</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> BUMDESMA </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{ url('/bumdesma/profil-lembaga') }}">Profil Lembaga</a></li>
                <li><a class="dropdown-item" href="{{ url('/bumdesma/struktur-organisasi') }}">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="{{ url('/bumdesma/program-kerja') }}">Program Kerja</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Regulasi </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{ url('/regulasi') }}">Regulasi 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/regulasi') }}">Regulasi 2</a></li>
                <li><a class="dropdown-item" href="{{ url('/regulasi') }}">Regulasi 3</a></li>
                <li><a class="dropdown-item" href="{{ url('/regulasi') }}">Regulasi 4</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>