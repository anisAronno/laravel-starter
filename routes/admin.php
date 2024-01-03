<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->name('admin.')->group(function ()
{
    Route::get('/', [DashboardController::class, 'index'])->middleware(['verified'])->name('dashboard');
    Route::resource('roles', RolesController::class);
    Route::resource('user', UserController::class);
    Route::view('media', 'dashboard.media.index')->name('media.index');

    Route::view('email', 'dashboard.email.index')->name('email');
    Route::view('chat', 'dashboard.chat.index')->name('chat');
    Route::view('calendar', 'dashboard.calendar.index')->name('calendar');
    Route::view('invoice-create', 'dashboard.invoice.create')->name('invoice.create');
    Route::view('invoice-details', 'dashboard.invoice.details')->name('invoice.details');
    Route::view('ecommerce-report', 'dashboard.ecommerce.index')->name('ecommerce.report');
    Route::view('product', 'dashboard.product.index')->name('product.index');
    Route::view('product/edit', 'dashboard.product.edit')->name('product.edit');
    Route::view('order', 'dashboard.order.index')->name('order.index');
    Route::view('order/show', 'dashboard.order.show')->name('order.show');
    Route::view('customer', 'dashboard.customer.index')->name('customer.index');
});
