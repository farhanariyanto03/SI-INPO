<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dataBidanController;
use App\Http\Controllers\dataKaderController;
use App\Http\Controllers\dataLansiaController;
use App\Http\Controllers\pemeriksaanController;
use App\Http\Controllers\dashboardBidanController;
use App\Http\Controllers\dashboardKaderController;
use App\Http\Controllers\laporanPemeriksaanController;

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
Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login'])->name('cekLogin');
});


Route::prefix('kader')->middleware('auth')->group(
    function () {
        Route::get('/', function () {
            return view('kader.layout');
        });
        Route::get('/logout', [loginController::class, 'logout'])->name('logout');
        Route::get('/', [dashboardKaderController::class, 'index'])->name('dashboardKader.index');
        Route::resource('/data_kader', dataKaderController::class);
        Route::resource('/data_bidan', dataBidanController::class);
        Route::resource('/data_lansia', dataLansiaController::class);
        Route::get('/laporanPemeriksaan', [laporanPemeriksaanController::class, 'index'])->name('laporanPemeriksaan.index');
        Route::get('/laporanPemeriksaan/cetakLaporan', [laporanPemeriksaanController::class, 'cetakLaporan'])->name('laporanPemeriksaan.cetakLaporan');
    }
);

Route::prefix('bidan')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('bidan.layout');
    });
    Route::get('/logout', [loginController::class, 'logout'])->name('logout');
    Route::get('/', [dashboardBidanController::class, 'index'])->name('dashboardBidan.index');
    Route::resource('/pemeriksaan', pemeriksaanController::class);
    Route::post('/getNameLansia', [pemeriksaanController::class, 'getNameLansia'])->name('getNameLansia');
});
