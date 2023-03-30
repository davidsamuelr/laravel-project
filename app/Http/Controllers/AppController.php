<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function products(){
        echo "Products";
    }

    public function customers(){
        echo "Customers";
    }

    public function providers(){
        echo "Providers";
    }
}
