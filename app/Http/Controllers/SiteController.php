<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // método principal
    public function index(){
        return view('site.default'); // retorna view dentro do diretório site
    }

    public function contact(){
        return view('site.contact');
    }

    public function about(){
        return view('site.about');
    }

    public function login(){
        echo "Login";
    }
}
