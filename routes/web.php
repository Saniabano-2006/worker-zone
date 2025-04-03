<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\Services;


Route::get('/', function () {
    $services = services::take(6)->get();
    return view('home',compact('services'));
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'viewDashboard'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        
        Route::get('AddServices',[DashboardController::class, 'addServices'])->name('add.services');
        Route::get('/UpdateServices',[DashboardController::class, 'updateServices'])->name('update.services');
        Route::get('/ViewServices',[DashboardController::class, 'viewServices'])->name('view.services');
        Route::get('/DeleteServices',[DashboardController::class, 'deleteServices'])->name('delete.services');
        Route::post('/dashboard', [DashboardController::class, 'store'])->name('services.store');
        Route::get('/services/{service}/edit', [DashboardController::class, 'edit'])->name('services.edit');
        Route::put('/services/{service}', [DashboardController::class, 'storeupdate'])->name('services.storeupdate');
        Route::delete('/services/{service}', [DashboardController::class, 'destroy'])->name('services.destroy');


    });
    
    Route::middleware(['role:worker'])->group(function () {
        Route::get('/ViewServices', [DashboardController::class, 'viewServices'])->name('view.services');
    });
    
    Route::middleware(['role:client'])->group(function () {
        Route::get('/ViewServices',[DashboardController::class, 'viewServices'])->name('view.services');
    });
    // Route::get('/ViewServices', [ServicesController::class, 'view'])->name('services.view');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


