<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // método principal
    public function index()
    {
        return view('site.default', ['title' => 'Home']); // retorna view dentro do diretório site
    }

    public function contact()
    {
        var_dump($_GET);
        return view('site.contact', ['title' => 'Contact']); // enviando variável do controllador para view 
    }

    public function about()
    {
        return view('site.about', ['title' => 'About']);
    }

    public function login()
    {
        echo "Login";
    }
}
