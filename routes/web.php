<?php

use Illuminate\Support\Facades\Request;
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

Route::get('/contact-form', function () {
    return view('contact-form');
});

Route::post('/register', function () {
// Is a class that provides access to a function that is in class that is bound in the 
// service container.

dd(Request::url());

});



Route::get('/resolve-a-key-bound-in-the-service-container', function () {

    dd(resolve('request'));
});
