<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;

Route::redirect('/', '/home');

Route::get('home', [HomeController::class, 'index'])->name('home'); 

Route::resource('barangs', BarangController::class);
