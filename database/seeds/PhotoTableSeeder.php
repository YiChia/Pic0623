<?php

use Illuminate\Database\Seeder;
use App\Http;
class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        
        foreach(range(26,28) as $number){
            \App\Photo::create([
                'picNo'=>$number,
                'picName'=>'P'.$number,
                'pictype'=>'jpg',
                'picWidth'=>$number,
                'hashtag'=>'test',
                'picDate'=>'2016-07-23',
                'picMb'=>$number,
            ]);
            }
           
            /*
            DB::table('picdata')->insert([
            'picNo' => mt_rand(5,10),
            'picName' => str_random(2).'N',
            'pictype'=>'jpg',
                'picWidth'=>mt_rand(2,10),
                'hashtag'=>'ran2',
                'picDate'=>'2017-05-22',
                'picMb'=>mt_rand(2,10),
            
        ]);*/
        
    }
}
