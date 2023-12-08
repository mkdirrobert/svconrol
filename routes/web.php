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

Route::get('/', function () {
    return view('home');
});

Route::get('/planning', function () {
    return view('planning');
})->name('planning');

Route::get('/construct', function () {
    return view('construction');
})->name('construction');

Route::get('/programming', function () {
    return view('programming');
})->name('programming');