<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{
    //
     public function index()
    {

       //連接資料庫
       //$pic = DB::table('picdata')->get();
       $data = DB::table('picdata')->where('id','1')->first(); 

       // return view('Work.index', ['data' => $data->picName]);
      //  return "welcome to Laravel";
        var_dump($data->picName);
        return view('Work.index');
    }
}
