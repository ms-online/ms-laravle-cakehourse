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
<fieldset>
<label>额外预定水果拼盘:</label>
<input type="checkbox" name="fresh_fruits[]" value="芒果">芒果<br />
<input type="checkbox" name="fresh_fruits[]" value="苹果">苹果<br />
<input type="checkbox" name="fresh_fruits[]" value="草莓">草莓<br />
<input type="checkbox" name="fresh_fruits[]" value="西瓜">西瓜<br />
<input type="checkbox" name="fresh_fruits[]" value="葡萄">葡萄<br />
    </fieldset>
<input type="submit" value="预定蛋糕">
</form>
</div>
@endsection
