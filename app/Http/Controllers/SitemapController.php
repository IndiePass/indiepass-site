<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    public function index()
    {
        return response()
            ->view('sitemaps.index')
            ->header('Content-Type', 'text/xml');
    }

    public function pages()
    {
        return response()
            ->view('sitemaps.pages')
            ->header('Content-Type', 'text/xml');
    }
}
