<?php

use App\Http\Controllers\Admin\DealerController as AdminDealerController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\PacketController as AdminPacketController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\ClientController;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::group(['middleware' => ['login']], function () {
   Route::get('/', [MainController::class, 'index'])->name('main.index');

   Route::get('/server', [ServerController::class, 'index'])->name('server.index');

   Route::get('/packet/{client}', [PacketController::class, 'index'])->name('packet.index');
   Route::post('/packet/{client}', [PacketController::class, 'store'])->name('packet.store');
   Route::get('/packet/stop/{client_packet}', [PacketController::class, 'stop'])->name('packet.stop');


   Route::get('/tuner', [TunerController::class, 'index'])->name('tuner.index');
   Route::get('/port', [PortController::class, 'index'])->name('port.index');

   Route::get('/dealer', [DealerController::class, 'index'])->name('dealer.index');

   Route::post('/client', [ClientController::class, 'store'])->name('client.store');
   Route::get('/dealer/{client}', [ClientController::class, 'edit'])->name('client.edit');
   Route::put('/dealer/{client}', [ClientController::class, 'update'])->name('client.update');
   Route::put('/dealer', [ClientController::class, 'server'])->name('client.server');


   Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
   Route::get('/balance_history', [BalanceController::class, 'history'])->name('balance.history');

   Route::get('/news', [NewsController::class, 'index'])->name('news.index');
   Route::get('/rules', [RulesController::class, 'index'])->name('rules.index');
   Route::get('/help', [HelpController::class, 'index'])->name('help.index');
   Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');

   Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
   Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
   Route::get('/', function () {
      return redirect()->route('admin.packet.index');
   })->name('admin.index');

   Route::get('/packet', [AdminPacketController::class, 'index'])->name('packet.index');
   Route::post('/packet', [AdminPacketController::class, 'store'])->name('packet.store');
   Route::get('/packet/{packet}/delete', [AdminPacketController::class, 'delete'])->name('packet.delete');
   Route::get('/packet/{packet}', [AdminPacketController::class, 'edit'])->name('packet.edit');
   Route::put('/packet/{packet}', [AdminPacketController::class, 'update'])->name('packet.update');

   Route::get('/dealer', [AdminDealerController::class, 'index'])->name('dealer.index');
   Route::post('/dealer', [AdminDealerController::class, 'store'])->name('dealer.store');
   Route::get('/dealer/{dealer}/delete', [AdminDealerController::class, 'delete'])->name('dealer.delete');
   Route::get('/dealer/{dealer}', [AdminDealerController::class, 'edit'])->name('dealer.edit');
   Route::put('/dealer/{dealer}', [AdminDealerController::class, 'update'])->name('dealer.update');

   Route::get('/news', [AdminNewsController::class, 'index'])->name('news.index');
   Route::post('/news', [AdminNewsController::class, 'store'])->name('news.store');
   Route::get('/news/{article}/delete', [AdminNewsController::class, 'delete'])->name('news.delete');
   Route::get('/news/{article}', [AdminNewsController::class, 'edit'])->name('news.edit');
   Route::put('/news/{article}', [AdminNewsController::class, 'update'])->name('news.update');
});
