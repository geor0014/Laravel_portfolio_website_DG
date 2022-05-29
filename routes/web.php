<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home Page
Route::get('/', [WelcomeController::class, 'show']);

// FAQ Page
Route::resource('/faq', FaqController::class);
//Blog Page
Route::resource('/blog', ArticleController::class);
// Grades
Route::resource('/grades', GradeController::class);
//Profile Page
Route::get('/profile', [ProfileController::class, 'show']);

// Authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Admin Login
Route::get('/admin-login', [AdminController::class, 'index'])->name('admin-login-form');
Route::get('/admin-login/owner', [AdminController::class, 'login'])->name('admin-login');
Route::get('/admin-dashboard', [DashboardController::class, 'dashboard'])->name('admin-dashboard');
