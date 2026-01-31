<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupportController;
use App\Http\Middleware\VerifySession;
use Illuminate\Support\Facades\Route;

Route::middleware(VerifySession::class)->group(function () {
    Route::view('verify', 'verify')->name('verify');

    Route::get('support', SupportController::class)->name('support');
    Route::get('login', LoginController::class)->name('login');

    Route::fallback(fn() => redirect()->route('login'));
});
