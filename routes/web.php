<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/allcake', function () {
    return view('user.home');
})->middleware(['auth', 'verified'])->name('allcake');

Route::get('/custom', function () {
    return view('user.Custom');
})->middleware(['auth', 'verified'])->name('custom');

Route::get('/list-pesanan', function () {
    return view('user.datapesanan');
})->middleware(['auth', 'verified'])->name('list-pesanan');

Route::get('/Contact', function () {
    return view('user.kontak');
})->middleware(['auth', 'verified'])->name('Contact');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
