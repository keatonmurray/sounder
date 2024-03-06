<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArtistPanelController;
use App\Http\Controllers\ArtistProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ArtistLandingPageController;
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
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/add-merch', [ArtistPanelController::class, 'create']);
Route::post('/save-merch', [ArtistPanelController::class, 'store']);
Route::post('/login', [ArtistLoginController::class, 'login']);
Route::get('/create-an-account', [FormsController::class, 'registerLinks']);
Route::get('/artist-profile', [ArtistLandingPageController::class, 'index']);
Route::get('/edit/{id}',[ArtistController::class, 'edit'])->middleware('auth:artists');
Route::get('/edit-merch/{id}', [ArtistPanelController::class, 'edit']);
Route::post('save-artist-profile', [ArtistProfileSettingsController::class, 'store']);
Route::get('/update-artist-profile/{id}', [ArtistProfileSettingsController::class, 'edit']);
Route::put('/update-new-artist-profile/{id}', [ArtistProfileSettingsController::class, 'update']);
Route::put('/update/{id}', [ArtistController::class, 'update']);
Route::put('/update-merch/{id}', [ArtistPanelController::class, 'update']);
Route::put('update-artist-profile/{id}', [ArtistPanelController::class, 'update']);
Route::delete('/destroy/{id}', [ArtistController::class, 'destroy']);
Route::delete('/delete-merch/{id}', [ArtistPanelController::class, 'destroy']);

Auth::routes();
