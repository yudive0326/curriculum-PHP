<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 追記


class Posts extends Model
{
    protected $fillable = [
        'tweet'
    ];
    public static $rules = array(
        'tweet' => 'required',
    );

    //ソフトデリートを有効化
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
