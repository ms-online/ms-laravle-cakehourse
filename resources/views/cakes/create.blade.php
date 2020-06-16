@extends('layouts.layout')

@section('content')
<div class="wrapper create-cake">
<h1>创建蛋糕预定单</h1>
<form action="/cakes" method="POST">
<label for="name">预定者姓名：</label>
<input type="text" name="name" id="name">
<label for="type">蛋糕类型：</label>
<select name="type" id="type">
<option value="spongecake">海绵蛋糕</option>
<option value="chiffoncake">戚风蛋糕</option>
<option value="cheesecake">奶酪蛋糕</option>
<option value="schwarzwaldcake">黑森林蛋糕</option>
<option value="chocolatecake">巧克力蛋糕</option>
</select>
<label for="size">蛋糕尺寸：</label>
<select name="size" id="size">
<option value="mini">4英寸</option>
<option value="small">6英寸</option>
<option value="normal">8英寸</option>
<option value="large">10英寸</option>
</select>
<input type="submit" value="预定蛋糕">
</form>
</div>
@endsection
