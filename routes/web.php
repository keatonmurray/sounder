<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\FanPanelController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArtistPanelController;
use App\Http\Controllers\ArtistProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FanProfileSettingsController;
use App\Http\Controllers\Auth\ArtistRegisterController;
use App\Http\Controllers\ArtistProfileSettingsController;

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

Route::get('/', [ArtistController::class, 'index']);
Route::get('/upload-music', [ArtistController::class, 'create'])->middleware('auth:artists');
Route::get('/albums/{id}', [ArtistController::class, 'show']);
Route::post('/store', [ArtistController::class, 'store']);
Route::get('/artist-account-signup', [FormsController::class, 'artistSignupForm']);
Route::get('/artist-dashboard', [ArtistPanelController::class, 'index']);
Route::post('/artist/register', [ArtistRegisterController::class, 'register']);
Route::get('/fan-account-signup', [FormsController::class, 'fanSignupForm']);
Route::get('/dashboard/{id}', [FanPanelController::class, 'index']);
Route::get('/add-merch', [ArtistPanelController::class, 'create']);
Route::post('/save-merch', [ArtistPanelController::class, 'store']);
Route::post('/login', [ArtistLoginController::class, 'login']);
Route::post('/add-to-wishlist', [WishlistController:: class, 'store']);
Route::get('/create-an-account', [FormsController::class, 'registerLinks']);
Route::get('/artist-profile/{id}', [ArtistPanelController::class, 'show']);
Route::get('/edit/{id}',[ArtistController::class, 'edit'])->middleware('auth:artists');
Route::get('/edit-merch/{id}', [ArtistPanelController::class, 'edit']);
Route::post('save-artist-profile', [ArtistProfileSettingsController::class, 'store']);
Route::post('save-fan-profile', [FanProfileSettingsController::class, 'store']);
Route::get('/update-artist-profile/{id}', [ArtistProfileSettingsController::class, 'edit']);
Route::put('/update-new-artist-profile/{id}', [ArtistProfileSettingsController::class, 'update']);
Route::put('/update-new-fan-profile/{id}', [FanProfileSettingsController::class, 'update']);
Route::get('/update-fan-profile/{id}', [FanProfileSettingsController::class, 'edit']);
Route::put('/update/{id}', [ArtistController::class, 'update']);
Route::put('/update-merch/{id}', [ArtistPanelController::class, 'update']);
Route::put('update-artist-profile/{id}', [ArtistPanelController::class, 'update']);
Route::put('update-fan-profile/{id}', [FanProfileSettingsController::class, 'update']);
Route::delete('/destroy/{id}', [ArtistController::class, 'destroy']);
Route::delete('/delete-merch/{id}', [ArtistPanelController::class, 'destroy']);

Auth::routes();
