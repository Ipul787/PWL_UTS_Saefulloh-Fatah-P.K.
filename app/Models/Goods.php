<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table="goods";
    public $timestamps= false;
    protected $primaryKey = 'goods_code';
    public $incrementing = false;

    protected $fillable = [
        'goods_code', 
        'goods_name',
        'category', 
        'goods_price', 
        'qty', 
    ];
}
