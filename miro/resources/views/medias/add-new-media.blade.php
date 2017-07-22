@extends('global-layout')

@section('body')
<h1>new uploads</h1>
         $table->increments('id');
         $table->integer('category_id')->unsigned();
         $table->string('category');
         $table->string('file');
         $table->string('video_thumbnail');
         $table->string('caption');
         $table->text('description');
         $table->timestamps();
@stop