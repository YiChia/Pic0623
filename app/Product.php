<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Product;

class Product extends Model
{
    //
     protected $table = 'products';//可以指定你想要的名稱
    protected $fillable =['name'];
}
