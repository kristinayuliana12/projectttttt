<?php

use App\Http\Controllers\ComentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComentsController::class, 'index'])->name('profil');

Route::get('/contact', 'ComentsController@kontak');

Route::post('/proses-form', 'ComentsController@prosesForm');