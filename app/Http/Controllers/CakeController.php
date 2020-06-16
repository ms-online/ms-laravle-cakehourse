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
    $cake = Cake::findOrFail($id);
    return view('cakes.show',['cake'=>$cake]);
    }

    public function create(){
        return view('cakes.create');
    }

    public function store(){
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('size'));

        return redirect('/');
    }
}
