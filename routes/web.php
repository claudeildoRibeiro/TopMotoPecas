<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceOrderController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
Route::get('service-create', [ServiceOrderController::class, 'create'])->name('service.create');
Route::post('service-store', [ServiceOrderController::class, 'store'])->name('service.store');
Route::get('service-order/{id}', [ServiceOrderController::class, 'show'])->name('service.show');
Route::get('service-order/{id}/edit', [ServiceOrderController::class, 'edit'])->name('service.edit');
Route::put('service-order/{id}', [ServiceOrderController::class, 'update'])->name('service.update');
Route::delete('service-order/{id}', [ServiceOrderController::class, 'destroy'])->name('service.destroy');
