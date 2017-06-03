<?php


use Illuminate\Database\Seeder;
use App\Http;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
       // Model::unguard(); //problem not found Model
        // $this->call(PhotoTableSeeder::class);
      //   $this->call(WebcontentSeeder::class);
         $this->call(ArticleTableSeeder::class);
         $this->call(UserTableSeeder::class);

       //  Model::regurd();
         
          
    }
}
