<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
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

// Dashboard Page
Route::get('/dashboard', [DashboardController::class, 'show']);
//Profile Page
Route::get('/profile', [ProfileController::class, 'show']);
