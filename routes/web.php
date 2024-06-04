<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;

use Illuminate\Support\Facades\Route;



Route::view('/', 'auth.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/users', function () {
    return view('users');
})->middleware(['auth', 'verified'])->name('users');


Route::get('/attendance', function () {
    return view('attendance');
})->middleware(['auth', 'verified'])->name('attendance');

Route::get('/guides', function () {
    return view('guides');
})->middleware(['auth', 'verified'])->name('guides');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('register', [RegisteredUserController::class, 'create'])
->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

require __DIR__.'/auth.php';
