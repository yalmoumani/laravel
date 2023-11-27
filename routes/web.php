<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
// Register a new user
Route::post('/register', [AuthController::class, 'register']);

// Log in an existing user
Route::post('/login', [AuthController::class, 'login']);

// Log out the authenticated user
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
