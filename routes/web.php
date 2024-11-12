<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');
// Route::resource('/', RegisterController::class);
// Route::resource('/register', RegisterController::class);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');
Route::resource('dashboard', DashboardController::class);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/games', [GamesController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
