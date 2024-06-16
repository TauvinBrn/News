<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreatNewsController;
use App\Http\Controllers\CreatController;


Route::prefix('news')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/create', CreatController::class);
    Route::post('/create', CreatNewsController::class)->name('create.news');

});
