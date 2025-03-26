<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', function () {
            return "Welcome Admin";
        });
    });
    
    Route::middleware(['role:worker'])->group(function () {
        Route::get('/worker', function () {
            return "Welcome worker";
        });
    });
    
    Route::middleware(['role:client'])->group(function () {
        Route::get('/client', function () {
            return "Welcome client";
        });
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


