<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MontirController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DetailLayananController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'] )->name('dashboard');
        

        Route::prefix('/layanan')->group(function () {
            Route::get('/', [LayananController::class, 'index'] );
            Route::middleware('admin')->get('/create', [LayananController::class, 'create'] );
            Route::middleware('admin')->post('/store', [LayananController::class, 'store'] );
            Route::middleware('admin')->get('/show/{id}', [LayananController::class, 'show'] );
            Route::middleware('admin')->get('/edit/{id}', [LayananController::class, 'edit'] );
            Route::middleware('admin')->put('/update/{id}', [LayananController::class, 'update'] );
            Route::middleware('admin')->delete('/destroy/{id}', [LayananController::class, 'destroy'] );
        });

        Route::middleware('admin')->prefix('/montir')->group(function () {
            Route::get('/', [MontirController::class, 'index'] );
            Route::get('/create', [MontirController::class, 'create'] );
            Route::post('/store', [MontirController::class, 'store'] );
            Route::get('/show/{id}', [MontirController::class, 'show'] );
            Route::get('/edit/{id}', [MontirController::class, 'edit'] );
            Route::put('/update/{id}', [MontirController::class, 'update'] );
            Route::delete('/destroy/{id}', [MontirController::class, 'destroy'] );
        });

        Route::middleware('admin')->prefix('/detail_layanan')->group(function () {
            Route::get('/', [DetailLayananController::class, 'index'] );
            Route::get('/create', [DetailLayananController::class, 'create'] );
            Route::post('/store', [DetailLayananController::class, 'store'] );
            Route::get('/show/{id}', [DetailLayananController::class, 'show'] );
            Route::get('/edit/{id}', [DetailLayananController::class, 'edit'] );
            Route::put('/update/{id}', [DetailLayananController::class, 'update'] );
            Route::delete('/destroy/{id}', [DetailLayananController::class, 'destroy'] );
        });
    });
});

require __DIR__.'/auth.php';

Route::get('/contact', [ContactController::class, 'index'] );
Route::get('/about', [AboutController::class, 'index'] );
