<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Form\TestController;


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
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

// patch and put do the same things, but there are conventions
Route::put('/users/update/{user}', [UserController::class, 'update'])->name('users.update');

Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');
