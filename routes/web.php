<?php

// utility
use Illuminate\Support\Facades\Route;

// middlewares
use App\Http\Middleware\Authenticate;

// controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/users', [UserController::class, 'page'])->name('users.page');
Route::post('/api/users/authenticate', [UserController::class, 'authenticate'])->name('api.users.authenticate');
Route::post('/api/users/logout', [UserController::class, 'logout'])->name('api.users.logout');

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/', [DashboardController::class, 'page'])->name('dashboard.page');
});
