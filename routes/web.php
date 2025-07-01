<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\GaleriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/loginPage', [AdminController::class, 'loginPage'])->name('admin.loginPage');
Route::post('/admin/loginPage', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//SECTION ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/penduduk', [PendudukController::class, 'index'])->name('admin.penduduk');
Route::post('/admin/penduduk/store', [PendudukController::class, 'store'])->name('admin.penduduk.store');
Route::put('/admin/penduduk/{id}', [PendudukController::class, 'update'])->name('admin.penduduk.update');
Route::delete('/admin/penduduk/destroy/{id}', [PendudukController::class, 'destroy'])->name('admin.penduduk.destroy');

Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

Route::get('/admin/umkm', [UmkmController::class, 'index'])->name('admin.umkm');
Route::post('/admin/umkm/store', [UmkmController::class, 'store'])->name('admin.umkm.store');
Route::put('/admin/umkm/{id}', [UmkmController::class, 'update'])->name('admin.umkm.update');
Route::delete('/admin/umkm/destroy/{id}', [UmkmController::class, 'destroy'])->name('admin.umkm.destroy');

Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('admin.galeri.store');
Route::put('/admin/galeri/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
Route::delete('/admin/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
//SECTION UMUM
Route::get('/home', [AdminController::class, 'home'])->name('home');
