<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RolesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['verified'])->name('dashboard');
    Route::resource('roles', RolesController::class);
});
