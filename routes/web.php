<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'services'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/AddServices', function () {
            // Worker Link 1
        })->name('add.services');
        Route::get('/UpdateServices', function () {
            // Worker Link 1
        })->name('update.services');
        Route::get('/ViewServices', function () {
            // Worker Link 1
        })->name('view.services');
        Route::get('/DeleteServices', function () {
            // Worker Link 1
        })->name('delete.services');
    
    });
    
    Route::middleware(['role:worker'])->group(function () {
        Route::get('/ViewServices', function () {
            // Worker Link 1
        })->name('view.services');
    });
    
    Route::middleware(['role:client'])->group(function () {
        Route::get('/ViewServices', function () {
            // Worker Link 1
        })->name('view.services');
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


