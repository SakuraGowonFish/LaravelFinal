<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    //關閉流水號
    public $incrementing = false;

    //資料表名稱
    protected  $table = 'cart';
    
    //關閉時間戳
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'num',
        'cost',
    ];


}
