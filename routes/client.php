<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Middleware\ForceSSL;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'client.', 'middleware' => [Localization::class, ForceSSL::class]], function ()
{
    Route::any('/', [HomeController::class, 'home'])->name('home');

    Route::POST('/contactUs', [HomeController::class, 'contact'])->name('contactUs');
    Route::POST('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
    Route::get('sidePages/{type}', [HomeController::class, 'sidePages'])->name('sidePages');
});