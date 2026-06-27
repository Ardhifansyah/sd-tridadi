<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/guru', [HomeController::class, 'guru']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/kontak', [HomeController::class, 'kontak']);


Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\AdminController;

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'authenticate']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/logout', [AdminController::class, 'logout']);
use App\Http\Controllers\GuruController;

Route::get('/admin/guru', [GuruController::class,'index']);
Route::get('/admin/guru/create', [GuruController::class,'create']);
Route::post('/admin/guru/store', [GuruController::class,'store']);
Route::get('/admin/guru/edit/{id}', [GuruController::class,'edit']);
Route::post('/admin/guru/update/{id}', [GuruController::class,'update']);
use App\Http\Controllers\BeritaController;
Route::get('/admin/guru/delete/{id}', [GuruController::class,'destroy']);
Route::get('/admin/berita', [BeritaController::class,'index']);
Route::get('/admin/berita/create', [BeritaController::class,'create']);
Route::post('/admin/berita/store', [BeritaController::class,'store']);
Route::get('/admin/berita/edit/{id}', [BeritaController::class,'edit']);
Route::post('/admin/berita/update/{id}', [BeritaController::class,'update']);
Route::get('/admin/berita/delete/{id}', [BeritaController::class,'destroy']);
use App\Http\Controllers\GaleriController;

Route::get('/admin/galeri', [GaleriController::class,'index']);
Route::get('/admin/galeri/create', [GaleriController::class,'create']);
Route::post('/admin/galeri/store', [GaleriController::class,'store']);
Route::get('/admin/galeri/edit/{id}', [GaleriController::class,'edit']);
Route::post('/admin/galeri/update/{id}', [GaleriController::class,'update']);
Route::get('/admin/galeri/delete/{id}', [GaleriController::class,'destroy']);
use App\Http\Controllers\JumlahSiswaController;

Route::get('/admin/jumlah-siswa',[JumlahSiswaController::class,'index']);
Route::get('/admin/jumlah-siswa/create',[JumlahSiswaController::class,'create']);
Route::post('/admin/jumlah-siswa/store',[JumlahSiswaController::class,'store']);
Route::get('/admin/jumlah-siswa/edit/{id}',[JumlahSiswaController::class,'edit']);
Route::post('/admin/jumlah-siswa/update/{id}',[JumlahSiswaController::class,'update']);
Route::get('/admin/jumlah-siswa/delete/{id}',[JumlahSiswaController::class,'destroy']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', [HomeController::class, 'profil']);

Route::get('/guru', [HomeController::class, 'guru']);

Route::get('/galeri', [HomeController::class, 'galeri']);

Route::get('/berita', [HomeController::class, 'berita']);

Route::get('/kontak', [HomeController::class, 'kontak']);
use App\Http\Controllers\HomeSettingController;
Route::get('/admin/home-setting', [HomeSettingController::class,'edit']);
Route::post('/admin/home-setting/update', [HomeSettingController::class,'update']);

Route::get('/admin/jumlah-siswa', [JumlahSiswaController::class,'index']);
Route::get('/admin/jumlah-siswa/create', [JumlahSiswaController::class,'create']);
Route::post('/admin/jumlah-siswa/store', [JumlahSiswaController::class,'store']);
Route::get('/admin/jumlah-siswa/edit/{id}', [JumlahSiswaController::class,'edit']);
Route::post('/admin/jumlah-siswa/update/{id}', [JumlahSiswaController::class,'update']);
Route::get('/admin/jumlah-siswa/delete/{id}', [JumlahSiswaController::class,'destroy']);
Route::get('/admin/home-setting', [HomeSettingController::class, 'edit'])->name('admin.home.edit');
Route::post('/admin/home-setting/update', [HomeSettingController::class, 'update'])->name('admin.home.update');
Route::get('/admin/profil-sekolah',);
use App\Http\Controllers\ProfilSekolahController;
Route::get('/admin/profil-sekolah', [ProfilSekolahController::class, 'edit']);

Route::post('/admin/profil-sekolah/update', [ProfilSekolahController::class, 'update']);