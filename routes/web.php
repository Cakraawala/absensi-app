<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/absen', [AbsenController::class, 'absen']);
Route::get('/absen/{id_absensi}/edit', [AbsenController::class, 'edit']);
Route::post('/absen/{id_absensi}/update', [AbsenController::class, 'update']);
Route::any('/absen/{id_absensi}/delete', [AbsenController::class, 'destroy']);

Route::get('/dashboard', [AbsenController::class, 'index']);
Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/absen/post', [AbsenController::class,'post']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class ,'create']);
Route::get('/siswa/{id_siswa}', [SiswaController::class, 'edit']);
Route::post('/siswa/{id_siswa}/update', [SiswaController::class, 'update']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::any('/siswa/{id_siswa}/delete', [SiswaController::class, 'destroy']);

Route::get('/report', [AbsenController::class, 'report']);
Route::get('/report/cari', [AbsenController::class, 'reportsearch']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin/{user:username}', [AdminController::class, 'show']);
Route::post('/admin/{user:username}/update', [AdminController::class, 'update']);
Route::post('/admin/{user:username}/changepassword', [AdminController::class, 'changepassword']);
Route::any('/admin/{user:username}/delete', [AdminController::class, 'destroy']);





