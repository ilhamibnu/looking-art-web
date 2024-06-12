<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PenyewaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

# Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

# User
Route::get('/admin/user', [UserController::class, 'index']);
Route::post('/admin/user/store', [UserController::class, 'store']);
Route::put('/admin/user/update/{id}', [UserController::class, 'update']);
Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy']);

# Art
Route::get('/admin/art', [ArtController::class, 'index']);
Route::post('/admin/art/store', [ArtController::class, 'store']);
Route::put('/admin/art/update/{id}', [ArtController::class, 'update']);
Route::delete('/admin/art/delete/{id}', [ArtController::class, 'destroy']);

# Penyewaan
Route::get('/admin/penyewaan', [PenyewaanController::class, 'index']);
