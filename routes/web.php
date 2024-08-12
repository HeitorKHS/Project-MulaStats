<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('site/index');
Route::get('/player/{id}', [SiteController::class, 'player'])->name('site/player');