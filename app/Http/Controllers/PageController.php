<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function android()
    {
        return view('android');
    }

    public function support()
    {
        return view('support');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function androidCallback()
    {
        return view('android-callback');
    }

    public function webmanifest()
    {
        return response()
            ->view('pages.webmanifest')
            ->header('Content-Type', 'application/manifest+json');
    }

    public function robots()
    {
        return response()
            ->view('pages.robots')
            ->header('Content-Type', 'text/plain');
    }
}
