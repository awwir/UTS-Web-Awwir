<?php

use App\http\Controllers\LokasiWisataController;
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

Route::get('/', [LokasiWisataController::class, 'index']);
Route::get('/tambah', [LokasiWisataController::class, 'tambah']);
Route::post('/tambah', [LokasiWisataController::class, 'store']);
Route::get('/hapus/{id}', [LokasiWisataController::class, 'hapus']);
Route::get('/edit/{id}', [LokasiWisataController::class, 'edit']);
Route::post('/edit/{id}', [LokasiWisataController::class, 'update']);
Route::get('/lihat/{id}', [LokasiWisataController::class, 'lihat']);

