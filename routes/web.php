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
    return view("home");
});

Route::get('/about', function () {
    return view("about", [
        "text" => "kirim parameter dari routes"
    ]);
});

Route::get('/blog', function () {
    return view("blog");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/products', function () {
    return view("products");
});

Route::get('/product-details', function () {
    return view("product-details");
});

Route::get('/news', function () {
    return view("news");
});

Route::get('/news-details', function () {
    return view("news-details");
});
