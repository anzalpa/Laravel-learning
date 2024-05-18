<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admins')->as('admin.')->group(
    base_path('./routes/admin/routes.php'),
);

Route::prefix('/customers')->as('customer.')->group(
    base_path('./routes/customer/routes.php'),
);

Route::prefix('/users')->as('user.')->group(
    base_path('./routes/user/routes.php'),
);

Route::get('/', HomeController::class)->name('home');

/**
 * Tasks
 *
 * [v] Admin login
 * [v] Admin logout
 * [v] Customer login
 * [v] Customer logout
 * [ ] Prevent accessing features by guard
 * [v] Set layout
 *      [v] app-layout
 *      [v] nav bar
 */
