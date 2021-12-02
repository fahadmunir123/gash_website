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
    return view('Frontend/home');
});

Route::get('/footer', function () {
    return view('Frontend/footer');
});

Route::get('/contactus', function () {
    return view('Frontend/contactus');
});

Route::get('/ourproducts', function () {
    return view('Frontend/ourproducts');
});



