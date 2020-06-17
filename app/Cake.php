<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    // protected $table = '数据表名称'
    protected $casts = [
        'fresh_fruits' =>'array'
    ];
}
