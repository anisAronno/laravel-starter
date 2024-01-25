<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SettingsControler;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->group(function ()
    {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/markNotification', [NotificationController::class, 'markNotification'])->name('notification');
        Route::resource('/notification', NotificationController::class);
        Route::resource('roles', RolesController::class);
        Route::resource('user', UserController::class);
        Route::view('media', 'dashboard.media.index')->name('media.index');
        Route::resource('settings', SettingsControler::class, ['only'=>['index', 'update', 'destroy']]);

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
        Route::view('chart', 'dashboard.chart.index')->name('chart.index');
        Route::view('icons', 'dashboard.icons.index')->name('icons.index');
        Route::view('typography', 'dashboard.typography.index')->name('typography.index');

        Route::prefix('common')
            ->name('common.')
            ->group(function ()
            {
                Route::view('accordion', 'dashboard.common.accordion')->name('accordion');
                Route::view('alert', 'dashboard.common.alert')->name('alert');
                Route::view('avatar', 'dashboard.common.avatar')->name('avatar');
                Route::view('badge', 'dashboard.common.badge')->name('badge');
                Route::view('button', 'dashboard.common.button')->name('button');
                Route::view('card', 'dashboard.common.card')->name('card');
                Route::view('carousel', 'dashboard.common.carousel')->name('carousel');
                Route::view('drawer', 'dashboard.common.drawer')->name('drawer');
                Route::view('dropdown', 'dashboard.common.dropdown')->name('dropdown');
                Route::view('list-group', 'dashboard.common.list-group')->name('list.group');
                Route::view('modal', 'dashboard.common.modal')->name('modal');
                Route::view('pagination', 'dashboard.common.pagination')->name('pagination');
                Route::view('progress-bar', 'dashboard.common.progress-bar')->name('progress.bar');
                Route::view('spinner', 'dashboard.common.spinner')->name('spinner');
                Route::view('tabs', 'dashboard.common.tabs')->name('tabs');
                Route::view('toast', 'dashboard.common.toast')->name('toast');
                Route::view('tooltip', 'dashboard.common.tooltip')->name('tooltip');
                Route::view('skeleton', 'dashboard.common.skeleton')->name('skeleton');
            });

        Route::prefix('form')
            ->name('form.')
            ->group(function ()
            {
                Route::view('input', 'dashboard.form.input')->name('input');
                Route::view('input-group', 'dashboard.form.input-group')->name('input.group');
                Route::view('textarea', 'dashboard.form.textarea')->name('textarea');
                Route::view('checkbox', 'dashboard.form.checkbox')->name('checkbox');
                Route::view('radio', 'dashboard.form.radio')->name('radio');
                Route::view('toggle', 'dashboard.form.toggle')->name('toggle');
                Route::view('select', 'dashboard.form.select')->name('select');
                Route::view('datepicker', 'dashboard.form.datepicker')->name('datepicker');
                Route::view('editor', 'dashboard.form.editor')->name('editor');
                Route::view('uploader', 'dashboard.form.uploader')->name('uploader');
                Route::view('layout', 'dashboard.form.form-layout')->name('layout');
                Route::view('validation', 'dashboard.form.form-validation')->name('validation');
            });

        Route::prefix('table')
            ->name('table.')
            ->group(function ()
            {
                Route::view('basic', 'dashboard.table.basic')->name('basic');
                Route::view('data', 'dashboard.table.data')->name('data');
            });

        Route::prefix('authentication')
            ->name('authentication.')
            ->group(function ()
            {
                Route::view('login', 'dashboard.authentication.login')->name('login');
                Route::view('register', 'dashboard.authentication.register')->name('register');
                Route::view('recover-password', 'dashboard.authentication.recover-password')->name('recover.password');
                Route::view('reset-password', 'dashboard.authentication.reset-password')->name('reset.password');
            });

        Route::prefix('miscellaneous')
            ->name('miscellaneous.')
            ->group(function ()
            {
                Route::view('starter', 'dashboard.miscellaneous.starter')->name('starter');
                Route::view('comming-soon', 'dashboard.miscellaneous.comming-soon')->name('comming.soon');
                Route::view('maintenance', 'dashboard.miscellaneous.maintenance')->name('maintenance');
                Route::view('404', 'dashboard.miscellaneous.404')->name('404');
                Route::view('500', 'dashboard.miscellaneous.500')->name('500');
                Route::view('403', 'dashboard.miscellaneous.403')->name('403');
            });
    });
