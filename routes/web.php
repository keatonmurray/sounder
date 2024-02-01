<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//Route::get('/upload-music', [FrontController::class, 'create']); //should be pulled from th Artist Controller because it is the controller responsible for Artist functionalities
Route::get('/albums/{id}', [FrontController::class, 'show']);
Route::post('/store', [FrontController::class, 'store']);


Route::get('/artist-login', [ArtistController::class, 'loginForm']);
Route::get('/artist-register', [ArtistController::class, 'registerForm']);
Route::post('/artist/register', [ArtistRegisterController::class, 'register']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::get('/artist', [ArtistController::class, 'index']); //modify route name to make it clearner
