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

Route::get('/login','HomeController@login');
Route::get('/register','HomeController@register');
Route::get('/account','HomeController@account');
Route::get('/findParking','HomeController@findParking');
Route::get('/confirm','HomeController@confirm');
//Route::post('/register_form', 'HomeController@registerForm');
//Route::post('/login_form', 'HomeController@loginForm');
