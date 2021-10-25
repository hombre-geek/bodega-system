<?php

use App\Models\Backend\Resource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ResourceController;
use App\Http\Controllers\Backend\AssigmentController;
use App\Http\Controllers\Backend\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('users',UserController::class)->except('show');

Route::resource('categories',CategoryController::class)->except('show');

Route::resource('resources',ResourceController::class)->except(['show', 'edit']);
Route::get('/resources/{resource}/categories/{category}', [ResourceController::class, 'edit'])->name('resources.edit');

Route::resource('assigments',AssigmentController::class)->except('show');

