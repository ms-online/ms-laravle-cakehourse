@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            蛋糕预定列表
        </div>

        <p>{{$name}}</p>
        <p>{{$age}}</p>

        <!-- @for($i = 0; $i < 5; $i++)
        <p>i变量的值分别为：{{$i}}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($cakes); $i++)
        <p>{{$cakes[$i]['type']}}</p>
        @endfor -->

        @foreach($cakes as $cake)
        <div>
            {{$loop -> index}} - {{$cake['type']}} - {{$cake['size']}}

            @if($loop->first)
            <span> - 这个是循环体中的第一项</span>
            @endif

            @if($loop->last)
            <span> - 这个是循环体中的最后一项</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
