<?php

use App\Http\Controllers\PelangganController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});


Route::get('/pelanggan/{id}/delete', [PelangganController::class, 'delete'])->name('pelanggan.delete');
Route::resource('pelanggan', PelangganController::class);
