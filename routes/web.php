<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/submid', [ContactController::class, 'submit'])->name('contact.submit');
});


