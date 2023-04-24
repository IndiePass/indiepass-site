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

Route::get('/', function ()

Route::get('/downloads', function () {
    return view('downloads')
});
Route::get('/android', function () {
    return view('android');
});
Route::get('/desktop', function () {
    return view('desktop');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/terms', function () {
    return view('docs');
});
Route::get('/android-callback', function () {
    return view('android-callback');
});
