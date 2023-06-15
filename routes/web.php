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
Route::get('/default', 'SiteController@index')->name('site.default');
Route::get('/contact', 'SiteController@contact')->name('site.contact');
Route::get('/about', 'SiteController@about')->name('site.about');
Route::get('/login', 'SiteController@login')->name('site.login');

// rotas agrupadas pelo método group para o prefixo app
Route::prefix('/app')->group(function () {
    Route::get('/customers', 'AppController@customers')->name('app.customers');
    Route::get('/providers', 'AppController@providers')->name('app.providers');
    Route::get('/products', 'AppController@products')->name('app.products');
});

// rota com parametros utilizando função callback
Route::get('/contact_par/{name}/{category}/{assunt}/{message}', function (string $name, string $category, string $subject, string $message) {
    echo "Rota com parametros: $name - $category - $subject - $message";
});

// o caracter ? no parametro indica que é opcional
Route::get('/contact_par_opt/{name}/{category}/{assunt}/{message?}', function (string $name, string $category, string $subject, string $message = 'menssagem não informada') {
    echo "Rota com parametros: $name - $category - $subject - $message";
});

// expressões regulares para tratar parametros nas rotas 
Route::get('/contact_exp/{name}/{category_id}', function (string $name, string $category_id) {
    echo "Rota com parametros: $name - $category_id";
})->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');

// testando encaminhamento de parametros para controlador
Route::get('/test/{p1}/{p2}', 'TestController@test')->name('site.test');

// rota de contingência
Route::fallback(function () {
    echo 'A rota não existe - <a href="' . route('site.default') . '"Página Principal</a>';
});
