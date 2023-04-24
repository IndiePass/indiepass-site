<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function downloads()
    {
        return view('downloads');
    }

    public function android()
    {
        return view('android');
    }

    public function desktop()
    {
        return view('desktop');
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
}
