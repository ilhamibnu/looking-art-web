<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\AuthController as UserAuthController;


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

################ Admin ################

Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/login', [AuthController::class, 'postlogin']);
Route::get('/admin/logout', [AuthController::class, 'logout']);

// group middleware
Route::group(['middleware' => ['IsAdmin']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    # Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    # User
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::post('/admin/user/store', [UserController::class, 'store']);
    Route::put('/admin/user/update/{id}', [UserController::class, 'edit']);
    Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy']);

    # Art
    Route::get('/admin/art', [ArtController::class, 'index']);
    Route::post('/admin/art/store', [ArtController::class, 'store']);
    Route::put('/admin/art/update/{id}', [ArtController::class, 'edit']);
    Route::delete('/admin/art/delete/{id}', [ArtController::class, 'destroy']);

    # Penyewaan
    Route::get('/admin/penyewaan', [PenyewaanController::class, 'index']);
    Route::delete('/admin/penyewaan/delete/{id}', [PenyewaanController::class, 'destroy']);
    Route::put('/admin/penyewaan/sewastatus/{id}', [PenyewaanController::class, 'sewastatus']);
});


################ User ################

Route::get('/', [LandingController::class, 'index']);
Route::get('/user/login', [UserAuthController::class, 'indexLogin']);
Route::post('/user/login', [UserAuthController::class, 'postLogin']);
Route::get('/user/register', [UserAuthController::class, 'indexRegister']);
Route::post('/user/register', [UserAuthController::class, 'postRegister']);



Route::get('/user/detail/{id}', [LandingController::class, 'detail']);

// group middleware
Route::group(['middleware' => ['IsUser']], function () {

    Route::get('/user/logout', [UserAuthController::class, 'logout']);
    Route::get('/user/profil', [UserAuthController::class, 'indexProfil']);


    Route::post('/user/sewa', [LandingController::class, 'sewa']);
    Route::put('/user/tidakjadisewa/{id}', [LandingController::class, 'tidakjadisewa']);
    Route::get('/user/penyewaan', [LandingController::class, 'penyewaan']);
});
