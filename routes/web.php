<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\ArtistLoginController;
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

Route::get('/', [FrontController::class, 'index']); 
Route::get('/upload-music', [FrontController::class, 'create']);
Route::get('/albums/{id}', [FrontController::class, 'show']);
Route::post('/store', [FrontController::class, 'store']);
Route::post('/artist/login', [ArtistLoginController::class, 'login']);
Route::get('/artist-login', [ArtistController::class, 'loginForm']);
Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/artist-register', [ArtistController::class, 'registerForm']);
Route::post('/artist/register', [ArtistRegisterController::class, 'register']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
