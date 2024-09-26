<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/login', [AuthController::class, 'login_index'])->name('auth.login_index');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/artwork/{artworkId}', [ArtworkController::class, 'showById']);
