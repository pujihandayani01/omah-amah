<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/laundry', function () {
    return view('laundry');
});

Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/settings', function () {
    return view('settings');
})->name('settings');
