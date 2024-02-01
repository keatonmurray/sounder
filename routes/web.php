<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ArtistRegisterController;

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

/**
 * CORE FUNCTIONALITIES
 */

Route::get('/', [FrontController::class, 'index']); 
Route::get('/upload-music', [FrontController::class, 'create']);
Route::get('/albums/{id}', [FrontController::class, 'show']);
Route::post('/store', [FrontController::class, 'store']);

/**
 * ARTIST ACCOUNT ROUTES 
 */

Route::get('/artist-login', [FormsController::class, 'artistLoginForm']);
Route::get('/artist-account-signup', [FormsController::class, 'artistSignupForm']);
Route::get('/artist', [ArtistController::class, 'index']);
Route::post('/artist/register', [ArtistRegisterController::class, 'register']);

/**
 * FAN ACCOUNT ROUTES
 */

Route::get('/login', [FormsController::class, 'fanLoginForm']);
Route::get('/fan-account-signup', [FormsController::class, 'fanSignupForm']);
Route::get('/dashboard', [HomeController::class, 'index']);

/**
 * LOGIN ROUTE
 */

Route::post('/login', [ArtistLoginController::class, 'login']);

Auth::routes();
