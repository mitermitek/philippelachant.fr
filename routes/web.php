<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return \Inertia\Inertia::render('Welcome');
});
Route::get('/connexion', [AuthController::class, 'login']);
Route::post('/connexion', [AuthController::class, 'authenticate']);
Route::get('/deconnexion', [AuthController::class, 'logout']);
