<?php

use App\Http\Controllers\dashboardBidanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardKaderController;
use App\Http\Controllers\dataKaderController;
use App\Http\Controllers\dataBidanController;
use App\Http\Controllers\dataLansiaController;
use App\Http\Controllers\laporanPemeriksaanController;
use App\Http\Controllers\pemeriksaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('kader')->group(
    function () {
        Route::get('/', function () {
            return view('kader.layout');
        });
        Route::get('/', [dashboardKaderController::class, 'index'])->name('dashboardKader.index');
        Route::resource('/data_kader', dataKaderController::class);
        Route::resource('/data_bidan', dataBidanController::class);
        Route::resource('/data_lansia', dataLansiaController::class);
        Route::get('/laporanPemeriksaan', [laporanPemeriksaanController::class, 'index'])->name('laporanPemeriksaan.index');
        Route::get('/laporanPemeriksaan/cetakLaporan', [laporanPemeriksaanController::class, 'cetakLaporan'])->name('laporanPemeriksaan.cetakLaporan');
    }
);

Route::prefix('bidan')->group(function () {
    Route::get('/', function () {
        return view('bidan.layout');
    });
    Route::get('/', [dashboardBidanController::class, 'index'])->name('dashboardBidan.index');
    Route::resource('/pemeriksaan', pemeriksaanController::class);
    Route::post('/getNameLansia', [pemeriksaanController::class, 'getNameLansia'])->name('getNameLansia');
});
