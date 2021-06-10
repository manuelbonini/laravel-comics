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
    $comics = config('comics');

    $data = [
        'comics' => $comics
    ];

    return view('home', $data);
})->name('home');

Route::get('/product/{id}', function ($id) {
    $comics = config('comics');

    $product = [];
    foreach($comics as $item) {
        if($item['id'] == $id) {
            $product = $item;
        }
    }

    // se non trova prodotto in "$product" stampa errore 404
    if(empty($product)) {
        abort('404');
    }

    $data = [
        'product' => $product
    ];

    return view('product', $data);
})->name('product');