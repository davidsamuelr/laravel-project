<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

# rota executa controlador@ação
Route::get('/default', 'SiteController@index');
Route::get('/contact', 'SiteController@contact');
Route::get('/about', 'SiteController@about');