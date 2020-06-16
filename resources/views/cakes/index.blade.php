@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            蛋糕预定列表
        </div>


        <!-- @for($i = 0; $i < 5; $i++)
        <p>i变量的值分别为：{{$i}}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($cakes); $i++)
        <p>{{$cakes[$i]['type']}}</p>
        @endfor -->

        @foreach($cakes as $cake)
        <div>
           {{ $cake['name']}} - {{$cake['type']}} - {{$cake['size']}}
        </div>
        @endforeach
    </div>
</div>
@endsection
