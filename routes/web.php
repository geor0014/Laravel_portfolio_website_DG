<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;
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

// Admin Page
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'attachPermissions'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'detachPermissions'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('useres/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('users/{user}/roles', [UserController::class, 'attachRoles'])->name('users.roles');
    Route::delete('users/{user}/roles/{role}', [UserController::class, 'detachRoles'])->name('users.roles.remove');
});
