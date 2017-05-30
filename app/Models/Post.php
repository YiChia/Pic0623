<?php

class User extends Eloquent {

    protected $table = 'user';//可以指定你想要的名稱
      $post = new User;
      $post->name = 'Laravel';
      $post->email = 'ksph5219@gmail.com';
      $post->password = '56789';
      $post->save();

}






?>
