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
         $table->increments('media_id');
         $table->integer('user_id')->unsigned();
         $table->foreign('media_id')->references('id')->on('categories')->onDelete('cascade');
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
