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
        Route::get('/dashboard/admin/dashboard', 'index');
    });
});

Route::middleware(['isLeader'])->group(function () {
    Route::controller(DashboardLeaderController::class)->group(function () {
        Route::get('/dashboard/leader/dashboard', 'index');
    });
});

Route::middleware(['isSociety'])->group(function () {
    Route::controller(FormComplaintController::class)->group(function () {
        Route::get('/society-form-complaint', 'formComplaint');
    });
});
