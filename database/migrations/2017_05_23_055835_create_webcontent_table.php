<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebcontentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webcontent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('About')->comment('關於我');
            $table->string('AboutPic')->comment('關於我Pic');
            $table->string('Contact')->comment('與我聯繫');
            $table->string('ContactPic')->comment('聯繫Pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webcontent');
    }
}
