<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/vacancy/{vacancy}', [VacancyController::class, 'show'])->name('vacancy.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


