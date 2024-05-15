<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardKaderController;

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
    }
);
