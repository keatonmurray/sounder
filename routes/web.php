<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArtistProfileController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/upload-music', [FrontController::class, 'create'])->middleware('auth:artists');
Route::get('/albums/{id}', [FrontController::class, 'show']);
Route::post('/store', [FrontController::class, 'store']);
Route::get('/artist-account-signup', [FormsController::class, 'artistSignupForm']);
Route::get('/artist-dashboard', [ArtistController::class, 'index']);
Route::post('/artist/register', [ArtistRegisterController::class, 'register']);
Route::get('/fan-account-signup', [FormsController::class, 'fanSignupForm']);
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/add-merch', [FormsController::class, 'addMerchForm'])->middleware('auth:artists');
Route::post('/save-merch', [MerchController::class, 'saveMerch']);
Route::post('/login', [ArtistLoginController::class, 'login']);
Route::get('/create-an-account', [FormsController::class, 'registerLinks']);
Route::get('/artist-profile', [ArtistController::class, 'artistProfile']);
Route::get('/edit/{id}',[FrontController::class, 'edit'])->middleware('auth:artists');
Route::get('/edit-merch/{id}', [MerchController::class, 'editMerch'])->middleware('auth:artists');
Route::put('/update/{id}', [FrontController::class, 'update']);
Route::put('/update-merch/{id}', [MerchController::class, 'updateMerch']);

Route::delete('/destroy/{id}', [FrontController::class, 'destroy']);

Auth::routes();
