<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CakesController extends Controller
{
    public function index(){
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
    }

    public function show($id){
    // 使用$id变量来查询数据库中匹配的蛋糕预定信息
    return view('details',['id'=>$id]);
    }
}
