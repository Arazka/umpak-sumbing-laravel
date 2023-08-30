<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\UserController;

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

// ============================== Route Admin ============================== //
Route::get('/admin/login', function () {return view('admin.login.login');});
Route::get('/admin/dashboard', function () {return view('admin.dashboard');});

Route::get('/admin/users', function () {return view('admin.users.index');});

Route::get('/admin/users/create', function () {return view('admin.users.create');});
Route::get('/admin/berita', function () {return view('admin.beranda.berita.index');});


use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::resource('admin/users', UserController::class);

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('/users', UserController::class);
});