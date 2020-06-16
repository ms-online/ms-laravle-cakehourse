<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake;

class CakeController extends Controller
{
    public function index(){
        $cakes = Cake::all();  
        // $cakes = Cake::orderBy('name', 'desc')->get();
        // $cakes = Cake::where('type','起司蛋糕')->get();
        // $cakes = Cake::latest()->get();

        return view('cakes.index',['cakes'=> $cakes]);
    }

    public function show($id){
    // 使用$id变量来查询数据库中匹配的蛋糕预定信息
    return view('cakes.show',['id'=>$id]);
    }

    public function create(){
        return view('cakes.create');
    }
}
