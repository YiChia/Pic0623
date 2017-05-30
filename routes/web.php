<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ContactUs', 'ContactUsController@index'); //聯繫我
Route::get('/About', 'AboutController@index');         //關於我
Route::get('/Work', 'WorkController@index');           //作品集
Route::post('/submitContact', 'ContactUsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login','AdminContactController@index');
Route::get('Admin/contact','AdminContactController@index');


Route::get('/View',function()
{
  return View::make('test')
         ->with('title','homepage')
         ->with('hello','ni how');
});

Route::get('View/{id}','TestController@show');
//Route::get('/View0','TestController@Sql');
Route::get('/View0', 'TestController@Select');

Route::get('/hello', function()
{
  // 測試一：取得users資料表的全部資料
  $users = DB::table('picdata')->get();
  return $users;
  
  // 測試二：取得users資料表，id為1的資料
  //$user = DB::table('users')->find(1);
  //dd($user);  // dd means: die(var_dump($user));
  //return $user->username;
  
  // 測試三：用where條件式來取得相關資料
  //$users = DB::table('users')->where("username", "!=", "carlos")->get();
  //也可使用：DB::select('select * from users');
  //return $users;
});
