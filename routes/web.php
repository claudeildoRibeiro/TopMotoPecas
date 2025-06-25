<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserIsAdmin;
use App\Http\Middleware\UserIsLogged;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Route Service order
|--------------------------------------------------------------------------
|
| This route is responsible for handling service orders.
|
*/
Route::middleware([UserIsLogged::class])->group(function () {
Route::get('service-create', [ServiceOrderController::class, 'create'])->name('service.create');
Route::post('service-store', [ServiceOrderController::class, 'store'])->name('service.store');
Route::get('service-order/{id}', [ServiceOrderController::class, 'show'])->name('service.show');
Route::get('service-order/{id}/edit', [ServiceOrderController::class, 'edit'])->name('service.edit');
Route::put('service-order/{id}', [ServiceOrderController::class, 'update'])->name('service.update');
Route::delete('service-order/{id}', [ServiceOrderController::class, 'destroy'])->name('service.destroy');
});

/*
|--------------------------------------------------------------------------
| Route User Management
|--------------------------------------------------------------------------
|
| This route is responsible for handling user management.
|
*/



/*
|--------------------------------------------------------------------------
| Route for Admin User
|--------------------------------------------------------------------------
|
| This route is responsible for handling admin user actions.
| just admin can manage users.
|
*/
Route::middleware([UserIsAdmin::class])->group(function () {
Route::get('admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/store', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

// Route for User Authentication
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route for User Profile
Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::put('profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

// Route for User Password Change
Route::get('profile/change-password', [UserController::class, 'changePassword'])->name('profile.change-password');
Route::put('profile/update-password', [UserController::class, 'updatePassword'])->name('profile.update-password');

// Route for User Registration
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'store'])->name('register.store');
