<?php

use App\Http\Controllers\PelangganController;

Route::resource('pelanggan', PelangganController::class);

Route::get('/pelanggan/{id}/delete', [PelangganController::class, 'delete'])->name('pelanggan.delete');