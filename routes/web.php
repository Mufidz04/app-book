<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', Controllers\HomeController::class);

Route::get('/about', [Controllers\AboutController::class, 'index']);

Route::get('/contact', [Controllers\ContactController::class, 'index']);

Route::get('/galery', [Controllers\GaleryController::class, 'index']);

