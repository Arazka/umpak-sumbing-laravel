<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route fitur
Route::get('/', function () {return view('welcome');});
Route::get('/umpak-sumbing', function () {return view('welcome');});
Route::get('/pariwisata', function () {return view('pariwisata/pariwisata');});
Route::get('/produk-unggulan', function () {return view('produk_unggulan/produk_unggulan');});
// bkad
Route::get('/bkad/profil-lembaga', function () {return view('bkad/profilLembaga');});
Route::get('/bkad/struktur-organisasi', function () {return view('bkad/strukturOrganisasi');});
Route::get('/bkad/program-kerja', function () {return view('bkad/programKerja');});
Route::get('/bkad/rencana-pembangunan-kawasan-pedesaan', function () {return view('bkad/rpkp');});
// budesma
Route::get('/bumdesma/profil-lembaga', function () {return view('bumdesma/profilLembaga');});
Route::get('/bumdesma/struktur-organisasi', function () {return view('bumdesma/strukturOrganisasi');});
Route::get('/bumdesma/program-kerja', function () {return view('bumdesma/programKerja');});
Route::get('/bumdesma/regulasi', function () {return view('bumdesma/regulasi');});
// regulasi
Route::get('/regulasi', function () {return view('regulasi/regulasi');});
// map experimental
Route::get('/experimental', function () {return view('map-experimental/map');});


// detail desa
Route::get('/desa/desa-bandongan', function () {return view('desa/desa_bandongan');});
Route::get('/desa/desa-gandusari', function () {return view('desa/desa_gandusari');});
Route::get('/desa/desa-kalegen', function () {return view('desa/desa_kalegen');});
Route::get('/desa/desa-ngepanrejo', function () {return view('desa/desa_ngepanrejo');});
Route::get('/desa/desa-rejosari', function () {return view('desa/desa_rejosari');});
Route::get('/desa/desa-sidorejo', function () {return view('desa/desa_sidorejo');});
Route::get('/desa/desa-trasan', function () {return view('desa/desa_trasan');});