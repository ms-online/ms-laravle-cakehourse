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

Route::get('/cakes', function () {
    $cakes = [
        'type'=>'生日蛋糕',
        'size'=> '8 英寸',
        'price'=> 80
    ];
    return view('cakes',$cakes);
    // return '甜品屋';
    // return ['name'=>'Triamisu', 'size'=>'8 inch'];
});
