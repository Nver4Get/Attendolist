<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ReviewController;
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
Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/games', [GamesController::class, 'index']);
Route::resource('/profile', ProfileController::class)->middleware('auth');
Route::get('/profile/{id}', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
Route::get('/quiz', [QuizController::class, 'index'])->middleware('auth');;
Route::get('/questions', [QuestionController::class, 'showQuiz'])->middleware('auth');;
Route::post('/submit-quiz', [QuizController::class, 'submitQuiz']);
Route::post('/reviews', [ReviewController::class, 'store'])->name('review.store');
Route::get('/admin/reviews', [ReviewController::class, 'index'])->name('reviews.index')->middleware('auth');
Route::get('/login-notice', function () {
    return redirect()->back()->with('error', 'Anda harus membuat akun atau login terlebih dahulu.');
})->name('login-notice');
