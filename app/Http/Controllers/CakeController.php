<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake;

class CakeController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

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
        $cake = new Cake();

        $cake->name = request('name');
        $cake->type = request('type');
        $cake->size= request('size');
        $cake->fresh_fruits = request('fresh_fruits');

        $cake->save();

        return redirect('/')->with('msg','恭喜你蛋糕预定成功！');
    }

    public function destroy($id){
        $cake = Cake::findOrFail($id);

        $cake->delete();
        return redirect('/cakes');
    }
}
