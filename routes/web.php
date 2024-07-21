<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/android', 'android')->name('android');
    Route::get('/support', 'support')->name('support');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/android-callback', 'androidCallback')->name('android-callback');

    Route::get('/site.webmanifest', 'webmanifest')->name('webmanifest');
    Route::get('/robots.txt', 'robots')->name('robots');
});

Route::controller(SitemapController::class)->group(function () {
    Route::get('/sitemap.xml', 'index')->name('sitemap');
    Route::get('/sitemap_pages.xml', 'pages')->name('sitemap.pages');
});

Route::get('/teapot', function () {
    return abort(418);
})->name('teapot');
