<?php

use Illuminate\Database\Seeder;
use App\Webcontent;

class WebcontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('webcontent')->insert([
            'id' => '1',
            'About' => 'Everything',
            'AboutPic'=>'jpg',
                'Contact'=>'EmailContact',
                'ContactPic'=>'EmailContact',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                
            
        ]);
    }
}
