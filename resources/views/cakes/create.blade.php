@extends('layouts.layout')

@section('content')
<div class="wrapper create-cake">
<h1>创建蛋糕预定单</h1>
<form action="/cakes" method="POST">
@csrf
<label for="name">预定者姓名：</label>
<input type="text" name="name" id="name">
<label for="type">蛋糕类型：</label>
<select name="type" id="type">
<option value="海绵蛋糕">海绵蛋糕</option>
<option value="戚风蛋糕">戚风蛋糕</option>
<option value="奶酪蛋糕">奶酪蛋糕</option>
<option value="黑森林蛋糕">黑森林蛋糕</option>
<option value="巧克力蛋糕">巧克力蛋糕</option>
</select>
<label for="size">蛋糕尺寸：</label>
<select name="size" id="size">
<option value="4英寸">4英寸</option>
<option value="6英寸">6英寸</option>
<option value="8英寸">8英寸</option>
<option value="10英寸">10英寸</option>
</select>
<input type="submit" value="预定蛋糕">
</form>
</div>
@endsection
