<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('paintings', function(Blueprint $table)
          {
             $table->increments('id');
             $table->string('file');
             $table->string('caption');
             $table->string('category')->default('painting');
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
        Schema::dropIfExists('paintings');
    }
}
