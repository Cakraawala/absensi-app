<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
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
Route::get('/', [AbsenController::class, 'index']);
Route::post('/absen/post', [AbsenController::class,'post']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class ,'create']);
Route::get('/siswa/{id}', [SiswaController::class, 'edit']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
