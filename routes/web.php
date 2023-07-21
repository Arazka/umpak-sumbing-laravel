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
// bkad
Route::get('/bkad/profil-lembaga', function () {return view('bkad/profilLembaga');});
Route::get('/bkad/struktur-organisasi', function () {return view('bkad/strukturOrganisasi');});
Route::get('/bkad/program-kerja', function () {return view('bkad/programKerja');});
Route::get('/bkad/rencana-pembangunan-kawasan-pedesaan', function () {return view('bkad/rpkp');});
// budesma
Route::get('/bumdesma/profil-lembaga', function () {return view('bumdesma/profilLembaga');});
Route::get('/bumdesma/struktur-organisasi', function () {return view('bumdesma/strukturOrganisasi');});
Route::get('/bumdesma/program-kerja', function () {return view('bumdesma/programKerja');});
Route::get('/bumdesma/rencana-pembangunan-kawasan-pedesaan', function () {return view('bumdesma/regulasi');});
// end route fitur

// detail desa
Route::get('/desa/desa-bandongan', function () {return view('desa/desa_bandongan');});