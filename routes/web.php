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

Route::get('cakes', 'CakeController@index')->name('cakes.index')->middleware('auth');
Route::get('cakes/create', 'CakeController@create')->name('cakes.create');
Route::post('/cakes', 'CakeController@store')->name('cakes.store');
Route::get('cakes/{id}', 'CakeController@show')->name('cakes.show')->middleware('auth');
Route::DELETE('cakes/{id}','CakeController@destroy')->name('cakes.destroy')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
