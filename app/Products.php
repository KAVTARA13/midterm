<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        "img",'title', 'price', 'inStock','code','brand','type','model','caliber','weight','length','cartridgeNumber','manufacturer','tight'
    ];
}
