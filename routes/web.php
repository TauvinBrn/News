<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreatNewsController;
use App\Http\Controllers\CreatController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ShowIdController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\EditController;


Route::prefix('news')->group(function () {
    Route::get('/', IndexController::class)->name('news.index');
    Route::get('/create', CreatController::class)->name('news.create');
    Route::post('/create', CreatNewsController::class)->name('news.store');
    Route::get('/show', ShowController::class)->name('news.show');
    Route::get('/show/{id}',ShowIdController::class)->name('news.show_by_index');
    Route::get('/show/{id}/edit', EditController::class)->name('news.edit');
    Route::put('/show/{id}', UpdateController::class)->name('news.update');
    Route::get('/delete/{id}', DeleteController::class)->name('news.delete');

});
