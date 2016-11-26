<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model //模型和数据库关联
{
//   protected $table='forms';   //连接到数据库的表 可以任意指定数据库表

//    public $timestamps=false;   //因为已经在框架中建立了forms表所以默认连接不用指定数据库中表
//    protected $fillable = [
//        'name', 'text',
//    ];
    protected $fillable = ['name', 'text', 'class', 'c', 'java', 'csharp','python'];
    public $timestamps=false;


}
