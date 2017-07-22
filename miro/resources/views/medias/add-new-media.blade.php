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


@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/medias', 'method'=>'POST', 'files'=>'true']) !!}

      <div class="form-group">
         <label for="userfile">Upload File</label>
         <input type="file" class="form-control" name="userfile">
      </div>

      <div class="form-group">
         <label for="caption">Caption</label>
         <input type="text" class="form-control" name="caption" value="">
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         <textarea class="form-control" name="description"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Upload</button>
      <a href="{{ url('/medias') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop


@stop