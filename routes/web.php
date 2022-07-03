<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
Route::get('/balance_history', [BalanceController::class, 'history'])->name('balance.history');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
