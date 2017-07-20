<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('videos', function(Blueprint $table)
          {
             $table->increments('id');
             $table->string('file');
             $table->string('image');
             $table->string('caption');
             $table->string('category')->default('video');
             $table->text('description');
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
        //
        Schema::dropIfExists('videos');
    }
}
