<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;




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
    return view('home');
});


Route::prefix('/Absen')->name('Absen.')->group(function () {
    
    Route::get('/home', [App\Http\Controllers\AbsenController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\AbsenController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\AbsenController::class, 'store'])->name('store');
    Route::get('/{absen}', [App\Http\Controllers\AbsenController::class, 'show'])->name('show');
    Route::get('/{absen}/edit', [App\Http\Controllers\AbsenController::class, 'edit'])->name('edit');
    Route::put('/{absen}', [App\Http\Controllers\AbsenController::class, 'update'])->name('update');
    Route::delete('/{absen}', [App\Http\Controllers\AbsenController::class, 'destroy'])->name('destroy');
});



Route::prefix('/Pendaftaran')->name('Pendaftaran.')->group(function () {
    
});
