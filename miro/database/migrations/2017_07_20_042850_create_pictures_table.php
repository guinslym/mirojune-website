<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('pictures', function(Blueprint $table)
          {
             $table->increments('id');
             $table->string('file');
             $table->string('caption');
             $table->string('category')->default('picture');
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
        Schema::dropIfExists('pictures');
    }
}
