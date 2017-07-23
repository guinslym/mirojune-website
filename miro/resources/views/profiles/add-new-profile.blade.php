@extends('global-layout')

@section('body')
<h1>Create Profile</h1>

@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/profile', 'method'=>'POST', 'files'=>'true']) !!}

      <div class="form-group">
         <label for="about_me">About Me</label>
         <textarea class="form-control" name="about_me"></textarea>
      </div>

      <div class="form-group">
         <label for="video_ogg">Upload Video (ogg)</label>
         <input type="file" class="form-control" name="video_ogg">
      </div>

      <div class="form-group">
         <label for="video_mp4">Upload Video (mp4)</label>
         <input type="file" class="form-control" name="video_mp4">
      </div>


      <button type="submit" class="btn btn-primary">Upload</button>
      <a href="{{ url('/profile') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop


@stop