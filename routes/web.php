<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardLeaderController;
use App\Http\Controllers\FormComplaintController;

Route::get('/', [HomepageController::class, 'homepage']);
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login-store', 'loginStore');
        Route::get('/register', 'register');
        Route::post('/register-store', 'registerStore');
    });
});

Route::middleware(['isAdmin'])->group(function () {
    Route::controller(DashboardAdminController::class)->group(function () {
        Route::get('/dashboard/admin/dashboard', 'index')->name('dashboard.admin');
        Route::get('/dashboard/admin/dashboard/setting', 'webSetting')->name('web-setting');
        Route::get('/dashboard/admin/dashboard/setting/edit', 'webSettingEdit')->name('web-setting.edit');
        Route::post('/dashboard/admin/dashboard/setting/update', 'webSettingUpdate')->name('web-setting.update');
    });
});

Route::middleware(['isLeader'])->group(function () {
    Route::controller(DashboardLeaderController::class)->group(function () {
        Route::get('/dashboard/leader/dashboard', 'index')->name('dashboard.leader');
    });
});

Route::middleware(['isSociety'])->group(function () {
    Route::controller(FormComplaintController::class)->group(function () {
        Route::get('/society-form-complaint', 'formComplaint')->name('form-complaint');
        Route::post('/society-form-complaint-store', 'formComplaintStore')->name('form-complaint.store');
    });
});
