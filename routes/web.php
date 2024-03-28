<?php

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

Route::get('/', fn () => view('home'));

Route::get('/about', fn() => view('about'));

Route::get('/contact', fn () => view('contact'));

Route::get('/galery', fn () => view('galery'));

Route::get('users', function () {
    $users = [
        ['id' => 1, 'name' => 'Mufid', 'email' => 'mufidmutashim@gmai.com'],
        ['id' => 2, 'name' => 'Salsa', 'email' => 'sarsabilla@gmail.com']
    ];

    return view('users.index', compact('users'));
});