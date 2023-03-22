<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    // método principal
    public function index(){
        echo "Principal";
    }

    public function contact(){
        echo "Contato";
    }

    public function about(){
        echo "Sobre";
    }
}
