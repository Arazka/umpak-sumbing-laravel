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
Route::get('/bkad/profil-lembaga', function () {return view('bkad/profilLembaga');});
Route::get('/bkad/struktur-organisasi', function () {return view('bkad/strukturOrganisasi');});
Route::get('/bkad/program-kerja', function () {return view('bkad/programKerja');});
Route::get('/bkad/rencana-pembangunan-kawasan-pedesaan', function () {return view('bkad/rpkp');});
// end route fitur

// detail desa
Route::get('/desa/desa-bandongan', function () {return view('desa/desa_bandongan');});