<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\TunerController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/server', [ServerController::class, 'index'])->name('server.index');
Route::get('/packet', [PacketController::class, 'index'])->name('packet.index');
Route::get('/tuner', [TunerController::class, 'index'])->name('tuner.index');
Route::get('/port', [PortController::class, 'index'])->name('port.index');
Route::get('/dealer', [DealerController::class, 'index'])->name('dealer.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
Route::get('/balance_history', [BalanceController::class, 'history'])->name('balance.history');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/rules', [RulesController::class, 'index'])->name('rules.index');
Route::get('/help', [HelpController::class, 'index'])->name('help.index');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
