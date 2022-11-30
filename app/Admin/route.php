<?php

use App\Admin\Controllers\Auth\AuthenticatedSessionController;
use App\Admin\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->as('admin.')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/', [AuthenticatedSessionController::class, 'store'])->name('login_post');
