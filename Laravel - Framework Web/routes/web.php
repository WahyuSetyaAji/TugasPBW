<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// profile bawaan laravel
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});


// user biasa
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return "Selamat datang, User!";
    });
});

// route rahasia (khusus admin)
Route::get('/rahasia', function () {
    return 'Ini path rahasia hanya untuk admin!';
})->middleware(['auth', 'role:admin']);

// contoh untuk product controller (admin dan owner boleh akses)
Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    Route::get('/product/{angka}', [ProductController::class, 'index']);
});

require __DIR__.'/auth.php';
