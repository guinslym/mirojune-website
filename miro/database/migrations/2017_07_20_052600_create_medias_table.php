<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medias', function(Blueprint $table)
      {
         $table->increments('id');
         $table->string('category');
         $table->string('file');
         $table->string('video_thumbnail');
         $table->string('caption');
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
        Schema::dropIfExists('homevideos');
    }
}
