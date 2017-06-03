<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Article extends Model
{
     //
     protected $table ='articles';//可以指定你想要的名稱
    public $timestamps = false;
    protected $fillable=['title','content'];
    //$fillable=array('title','content');
}

