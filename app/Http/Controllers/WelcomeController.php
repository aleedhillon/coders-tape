<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = [
            'WebSite Development',
            'Andriod Apps',
            '.NET Applications'
        ];   

        return view('services', compact('services'));
    }
}