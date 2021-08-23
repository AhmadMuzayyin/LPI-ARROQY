<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/user', [AdministratorController::class, 'index']);
Route::post('/user', [AdministratorController::class, 'update']);