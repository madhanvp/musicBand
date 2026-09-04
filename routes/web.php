<?php

use Illuminate\Support\Facades\Route;
use App\Models\Instrument;

use App\Http\Controllers\Admin\InstrumentController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AuthController;

// Public routes
Route::get('/', function () {
    $instruments = Instrument::all();

    return view('home', compact('instruments'));
});

// Canonical admin authentication routes
Route::get('/admin', [AuthController::class, 'showLogin'])->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Protected admin routes (require authentication)
Route::prefix('dashboard')
    ->name('admin.')
    ->middleware(['web', 'admin'])
    ->group(function () {

        Route::get('/', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/instruments', [InstrumentController::class, 'index'])
            ->name('instruments.index');

        Route::get('/instruments/create', [InstrumentController::class, 'create'])
            ->name('instruments.create');

        Route::post('/instruments', [InstrumentController::class, 'store'])
            ->name('instruments.store');

        Route::get('/instruments/{instrument}/edit', [InstrumentController::class, 'edit'])
            ->name('instruments.edit');

        Route::put('/instruments/{instrument}', [InstrumentController::class, 'update'])
            ->name('instruments.update');

        Route::delete('/instruments/{instrument}', [InstrumentController::class, 'destroy'])
            ->name('instruments.destroy');
    });
