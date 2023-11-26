<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormComplaintController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardLeaderController;

Route::get('/', [HomepageController::class, 'homepage']);
// Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login-store', [AuthController::class, 'loginStore'])->middleware('guest');
// Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
// Route::get('/register-store', [AuthController::class, 'registerStore'])->middleware('guest');
// Route::get('/dashboard/admin/dashboard', [DashboardController::class, 'index'])->middleware('isAdmin');
// Route::resource('/dashboard/information', InformationController::class)->middleware('isAdmin');
// Route::get('/form-complaint', [FormComplaintController::class, 'formComplaint'])->middleware('isSociety');
// Route::post('/form-complaint-store', [FormComplaintController::class, 'formComplaintStore'])->middleware('isSociety');
Route::post('logout', [DashboardController::class, 'logout'])->middleware('auth')->name('logout');
// Route::get('/dashboard/leader/dashboard', [DashboardController::class, 'index']);


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
    Route::controller(AuthController::class)->group(function () {

    });
});
