<?php

use App\Http\Controllers\StorageController;
use Illuminate\Auth\Events\Login;
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
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'auth']);

// Route::get('/register',[RegisterController::class, 'index']);
// Route::post('/register',[RegisterController::class, 'store']);

Route::resource('/dashboard', StorageController::class);

Route::get('/', [StorageController::class, 'show']);