<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/profil/{profil:slug}', [ProfilController::class, 'edit'])->middleware('auth');
Route::post('/profil/{profil:slug}', [ProfilController::class, 'update'])->middleware('auth');

Route::get('/user', [AdministratorController::class, 'index'])->middleware('auth');
Route::post('/user', [AdministratorController::class, 'update'])->middleware('auth');

Route::get('/santri', [UserController::class, 'santri'])->middleware('auth');
Route::get('/pendidik', [UserController::class, 'pendidik'])->middleware('auth');

// Alumni
Route::get('/alumni', [UserController::class, 'alumni'])->middleware('auth');
Route::get('/alumni/add', [UserController::class, 'add_alumni'])->middleware('auth');
Route::post('/alumni', [UserController::class, 'store_alumni'])->middleware('auth');
Route::get('/alumni/edit/{student:nama_panggilan}', [UserController::class, 'edit_alumni'])->middleware('auth');
Route::post('/alumni/edit/{student:nama_panggilan}', [UserController::class, 'update_alumni'])->middleware('auth');

// pendidik
Route::get('/pendidik', [UserController::class, 'pendidik'])->middleware('auth');
Route::get('/pendidik/add', [UserController::class, 'add_pendidik'])->middleware('auth');
Route::post('/pendidik', [UserController::class, 'store_pendidik'])->middleware('auth');
Route::get('/pendidik/edit/{student:nama_panggilan}', [UserController::class, 'edit_pendidik'])->middleware('auth');
Route::post('/pendidik/edit/{student:nama_panggilan}', [UserController::class, 'update_pendidik'])->middleware('auth');

// pendidik
Route::get('/santri', [UserController::class, 'santri'])->middleware('auth');
Route::get('/santri/add', [UserController::class, 'add_santri'])->middleware('auth');
Route::post('/santri', [UserController::class, 'store_santri'])->middleware('auth');
Route::get('/santri/edit/{student:nama_panggilan}', [UserController::class, 'edit_santri'])->middleware('auth');
Route::post('/santri/edit/{student:nama_panggilan}', [UserController::class, 'update_santri'])->middleware('auth');
