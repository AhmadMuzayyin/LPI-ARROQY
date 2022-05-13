<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AdministratorController;

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

Route::get('/', [HomeController::class, 'index'])->middleware('guest');
Route::get('/page', [HomeController::class, 'page'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/home', [AdminController::class, 'index'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/profil/{profil:slug}', [ProfilController::class, 'edit'])->middleware('auth');
Route::post('/profil/{profil:slug}', [ProfilController::class, 'update'])->middleware('auth');

Route::get('/user', [AdministratorController::class, 'index'])->middleware('auth');
Route::post('/user', [AdministratorController::class, 'update'])->middleware('auth');

// Alumni
Route::get('/alumni', [UserController::class, 'alumni'])->middleware('auth');
Route::get('/alumni/add', [UserController::class, 'add_alumni'])->middleware('auth');
Route::post('/alumni', [UserController::class, 'store_alumni'])->middleware('auth');
Route::get('/alumni/edit/{User:nickname}', [UserController::class, 'edit_alumni'])->middleware('auth');
Route::post('/alumni/edit/{User:nickname}', [UserController::class, 'update_alumni'])->middleware('auth');
Route::get('/alumni/{User:nickname}', [UserController::class, 'detail_alumni'])->middleware('auth');
Route::post('/alumni/{User:nickname}', [UserController::class, 'destroy_alumni'])->middleware('auth');

// pendidik
Route::get('/pendidik', [UserController::class, 'pendidik'])->middleware('auth');
Route::get('/pendidik/add', [UserController::class, 'add_pendidik'])->middleware('auth');
Route::post('/pendidik', [UserController::class, 'store_pendidik'])->middleware('auth');
Route::get('/pendidik/edit/{User:nickname}', [UserController::class, 'edit_pendidik'])->middleware('auth');
Route::post('/pendidik/edit/{User:nickname}', [UserController::class, 'update_pendidik'])->middleware('auth');
Route::get('/pendidik/{User:nickname}', [UserController::class, 'detail_pendidik'])->middleware('auth');
Route::post('/pendidik/{User:nickname}', [UserController::class, 'destroy_pendidik'])->middleware('auth');

// pendidik
Route::get('/siswa', [UserController::class, 'siswa'])->middleware('auth');
Route::get('/siswa/add', [UserController::class, 'add_siswa'])->middleware('auth');
Route::post('/siswa', [UserController::class, 'store_siswa'])->middleware('auth');
Route::get('/siswa/edit/{User:nickname}', [UserController::class, 'edit_siswa'])->middleware('auth');
Route::post('/siswa/edit/{User:nickname}', [UserController::class, 'update_siswa'])->middleware('auth');
Route::get('/siswa/{User:nickname}', [UserController::class, 'detail_siswa'])->middleware('auth');
Route::post('/siswa/{User:nickname}', [UserController::class, 'destroy_siswa'])->middleware('auth');

// Kelas
Route::get('/kelas', [KelasController::class, 'index'])->middleware('auth');
Route::get('/kelas/add', [KelasController::class, 'create'])->middleware('auth');
Route::post('/kelas', [KelasController::class, 'store'])->middleware('auth');
Route::post('/kelas/{kelas:id}', [KelasController::class, 'destroy'])->middleware('auth');

Route::get('/service', [ServiceController::class, 'index'])->middleware('auth');
Route::post('/service', [ServiceController::class, 'UserImport'])->middleware('auth');
Route::get('/service/UserExport', [ServiceController::class, 'UserExport'])->name('export')->middleware('auth');

// galeri
Route::get('/galeri', [GaleryController::class, 'index'])->middleware('auth');
Route::get('/galeri/madin', [GaleryController::class, 'indexMADIN'])->middleware('auth');
Route::get('/galeri/paud', [GaleryController::class, 'indexPAUD'])->middleware('auth');
Route::get('/galeri/alumni', [GaleryController::class, 'indexAlumni'])->middleware('auth');
Route::get('/galeri/add', [GaleryController::class, 'create'])->middleware('auth');
Route::post('/galeri', [GaleryController::class, 'store'])->middleware('auth');
Route::post('/galeri/{Galery:id}', [GaleryController::class, 'destroy'])->middleware('auth');

// galeri
Route::get('/info', [PengumumanController::class, 'index'])->middleware('auth');
Route::post('/info', [PengumumanController::class, 'store'])->middleware('auth');
