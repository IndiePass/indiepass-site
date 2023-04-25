<?php

use App\Http\Controllers\PageController;
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

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/android', 'android')->name('android');
    Route::get('/desktop', 'desktop')->name('desktop');
    Route::get('/support', 'support')->name('support');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/android-callback', 'androidCallback')->name('android-callback');
});

Route::get('/teapot', function () {
    return abort(418);
})->name('teapot');
