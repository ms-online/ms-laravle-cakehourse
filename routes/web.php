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
        ['type' => '海绵蛋糕', 'size' => '10英寸'],
        ['type' => '戚风蛋糕', 'size' => '8英寸'],
        ['type' => '奶酪蛋糕', 'size' => '6英寸']
      ];
      $name = request('name');
    return view('cakes',[
        'cakes'=> $cakes,
        'name' => $name,
        'age'=>request('age')
        ]);
    // return '甜品屋';
    // return ['name'=>'Triamisu', 'size'=>'8 inch'];
});
