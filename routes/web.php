<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/cakes', 'CakeController@index');
Route::get('/cakes/create', 'CakeController@create');
Route::post('/cakes', 'CakeController@store');
Route::get('/cakes/{id}', 'CakeController@show');
Route::DELETE('/cakes/{id}','CakeController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
