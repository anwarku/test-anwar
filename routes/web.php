<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/logout', [LoginController::class, 'logout']);
});
Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/registrasi', [RegistrasiController::class, 'index']);
    Route::post('registrasi', [RegistrasiController::class, 'store']);
    Route::post('/login', [LoginController::class, 'login']);
});
