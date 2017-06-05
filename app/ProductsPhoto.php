<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\ProductsPhoto;

class ProductsPhoto extends Model
{
    //
    protected $fillable =['product_id','filename'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }


}
