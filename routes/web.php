<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
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
Route::get('/dashboard', [AbsenController::class, 'index']);
Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/absen/post', [AbsenController::class,'post']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class ,'create']);
Route::get('/siswa/{id_siswa}', [SiswaController::class, 'edit']);
Route::get('/siswa/{id_siswa}/update', [SiswaController::class, 'update']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
Route::any('/siswa/{id_siswa}/delete', [SiswaController::class, 'destroy']);
