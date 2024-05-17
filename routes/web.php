<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\DashboardController;
use App\Http\Controllers\Auth\Customer\LoginController as CustomerLoginController;
use App\Http\Controllers\Auth\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\HomeController;

Route::prefix('/admin')->as('admin.')->group(function () {

    Route::get('/dashboard', DashboardController::class);

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('/customer')->as('customer.')->group(function () {
    Route::get('/dashboard', CustomerDashboardController::class);

    Route::get('/login', [CustomerLoginController::class, 'login'])->name('login');
    Route::post('/login', [CustomerLoginController::class, 'authenticate'])->name('authenticate');

    Route::post('/logout', [CustomerLoginController::class, 'logout'])->name('logout');
});

Route::get('/', HomeController::class);

/**
 * Tasks
 *
 * [v] Admin login
 * [ ] Admin logout
 * [ ] Customer login
 * [ ] Customer logout
 * [ ] Prevent accessing features by guard
 * [v] Set layout
 *      [v] app-layout
 *      [v] nav bar
 */
