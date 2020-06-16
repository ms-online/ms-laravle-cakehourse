@extends('layouts.layout')

@section('content')
<div class="wrapper cake-details">
 <h1>预定者姓名：{{$cake->name}}</h1>
 <p class="type">蛋糕类型：{{$cake->type}}</p>
 <p class="size">蛋糕尺寸：{{$cake->size}}</p>
</div>
<a href="/cakes" class="back"><- 返回所有预定列表 -></a>
@endsection
