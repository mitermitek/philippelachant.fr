<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\TopicalityController;
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
    return Inertia::render('Home');
});
Route::get('/actu', [FeedController::class, 'index']);
Route::get('/parcours', function () {
    return Inertia::render('Career');
});
Route::get('/connexion', [AuthController::class, 'login'])->name('login');
Route::post('/connexion', [AuthController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::get('/deconnexion', [AuthController::class, 'logout']);

    Route::get('/tableau-de-bord', function () {
       return Inertia::render('Dashboard');
    });

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

    Route::get('/oeuvres', [ArtworkController::class, 'index'])->name('artworks.index');
    Route::get('/oeuvres/creer', [ArtworkController::class, 'create'])->name('artworks.create');
    Route::post('/oeuvres', [ArtworkController::class, 'store'])->name('artworks.store');
    Route::get('/oeuvres/{artwork}/modifier', [ArtworkController::class, 'edit'])->name('artworks.edit');
    Route::put('/oeuvres/{artwork}', [ArtworkController::class, 'update'])->name('artworks.update');
    Route::delete('/oeuvres/{artwork}', [ArtworkController::class, 'destroy'])->name('artworks.destroy');

    Route::get('/actualites', [TopicalityController::class, 'index'])->name('topicalities.index');
    Route::get('/actualites/creer', [TopicalityController::class, 'create'])->name('topicalities.create');
    Route::post('/actualites', [TopicalityController::class, 'store'])->name('topicalities.store');
    Route::get('/actualites/{topicality}/modifier', [TopicalityController::class, 'edit'])->name('topicalities.edit');
    Route::put('/actualites/{topicality}', [TopicalityController::class, 'update'])->name('topicalities.update');
    Route::delete('/actualites/{topicality}', [TopicalityController::class, 'destroy'])->name('topicalities.destroy');
});
