<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/create', [NewsController::class, 'creat'])->name('news.create');
    Route::post('/create', [NewsController::class,'store'])->name('news.store');
    Route::get('/show', [NewsController::class,'show'])->name('news.show');
    Route::get('/show/{id}',[NewsController::class,'showID'])->name('news.show_by_index');
    Route::get('/show/{id}/edit', [NewsController::class,'edit'])->name('news.edit');
    Route::put('/show/{id}', [NewsController::class,'update'])->name('news.update');
    Route::get('/delete/{id}', [NewsController::class,'delete'])->name('news.delete');

});
