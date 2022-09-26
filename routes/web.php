<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome');
});
Route::get('/connexion', [AuthController::class, 'login']);
Route::post('/connexion', [AuthController::class, 'authenticate']);
Route::get('/deconnexion', [AuthController::class, 'logout']);

Route::get('/utilisateurs', [UserController::class, 'index'])->name('users.index');
Route::get('/utilisateurs/creer', [UserController::class, 'create'])->name('users.create');
Route::post('/utilisateurs', [UserController::class, 'store'])->name('users.store');
Route::get('/utilisateurs/{user}/modifier', [UserController::class, 'edit'])->name('users.edit');
Route::put('/utilisateurs/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/utilisateurs/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/creer', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/modifier', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
