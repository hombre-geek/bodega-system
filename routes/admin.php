<?php

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('users',UserController::class)->except('show');
Route::resource('categories',CategoryController::class)->except('show');

