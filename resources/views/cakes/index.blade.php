@extends('layouts.app')

@section('content')
    <div class="wrapper cake-index">
        <h1>蛋糕预定列表</h1>
          @foreach($cakes as $cake)
        <div class="cake-item">
             <img src="/img/cake.png" alt="cake icon">
             <h4><a href="{{route('cakes.show',$cake->id)}}">{{$cake->name}}</a></h4>
        </div>
        @endforeach
    </div>
      

@endsection
