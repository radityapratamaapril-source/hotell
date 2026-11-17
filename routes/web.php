<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

// Halaman Utama & Informasi
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/kamar', function () {
    return view('kamar');
})->name('kamar');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Autentikasi
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Pemesanan / Booking (Menggunakan Controller)
Route::get('/pesan', [BookingController::class, 'index'])->name('pesan.index');
Route::post('/pesan', [BookingController::class, 'store'])->name('pesan.store');