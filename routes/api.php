<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// route pegawai
Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('pegawai/cari/{id}', [PegawaiController::class, 'cari']);
Route::post('pegawai/buat/', [PegawaiController::class, 'create']);
Route::post('pegawai/masuk', [PegawaiController::class, 'masuk']);
Route::put('pegawai/ubah/{id}', [PegawaiController::class, 'update']);
Route::delete('pegawai/hapus/{id}', [PegawaiController::class, 'hapusData']);
Route::patch('pegawai/aktif/{id}', [PegawaiController::class, 'aktifData']);

// route customer
Route::get('customer', [CustomerController::class, 'index']);
Route::get('customer/cari/{id}', [CustomerController::class, 'cari']);
Route::post('customer/buat/', [CustomerController::class, 'create']);
Route::put('customer/ubah/{id}', [CustomerController::class, 'update']);
Route::delete('customer/hapus/{id}', [CustomerController::class, 'hapusData']);
Route::patch('customer/aktif/{id}', [CustomerController::class, 'aktifData']);

// route meja
Route::get('meja', [MejaController::class, 'index']);
Route::get('meja/cari/{id}', [MejaController::class, 'cari']);
Route::put('meja/ubah/{id}', [MejaController::class, 'update']);
Route::post('meja/buat/', [MejaController::class, 'create']);
Route::delete('meja/hapus/{id}', [MejaController::class, 'hapusData']);
Route::patch('meja/aktif/{id}', [MejaController::class, 'aktifData']);

// route reservasi
Route::get('reservasi', [ReservasiController::class, 'index']);
Route::get('reservasi/all', [ReservasiController::class, 'indexAll']);
Route::get('reservasi/cari/telepon/{telepon}', [ReservasiController::class, 'cariBerdasarkanCustomer']);
Route::post('reservasi/buat/', [ReservasiController::class, 'create']);
Route::put('reservasi/ubah/{id}', [ReservasiController::class, 'update']);
Route::delete('reservasi/hapus/{id}', [ReservasiController::class, 'hapusData']);
Route::patch('reservasi/aktif/{id}', [ReservasiController::class, 'aktifData']);
Route::post('reservasi/cetak/{id}', [ReservasiController::class, 'cetakQR']);

// route menu
Route::get('menu', [MenuController::class, 'index']);
Route::get('menu/cari/{id}', [MenuController::class, 'cari']);
Route::post('menu/buat/', [MenuController::class, 'create']);
Route::post('menu/uploadgambar/', [MenuController::class, 'uploadGambar']);
Route::put('menu/ubah/{id}', [MenuController::class, 'update']);
Route::delete('menu/hapus/{id}', [MenuController::class, 'hapusData']);
Route::patch('menu/aktif/{id}', [MenuController::class, 'aktifData']);


// route bahan
Route::get('bahan/all', [BahanController::class, 'indexAll']);
Route::get('bahan/menu/{id}', [BahanController::class, 'cariBerdasarkanIdMenu']);
Route::post('bahan/buat/', [BahanController::class, 'create']);
Route::post('bahan/update/bulk/', [BahanController::class, 'updateBulk']);
Route::put('bahan/update/{id}', [BahanController::class, 'update']);
Route::delete('bahan/hapus/{id}', [BahanController::class, 'hapusData']);
Route::patch('bahan/aktif/{id}', [BahanController::class, 'aktifData']);

