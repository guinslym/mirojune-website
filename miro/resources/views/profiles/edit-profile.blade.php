@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::model($profile,['url' => '/profile/'.$profile->id, 'method' => 'PUT', 'files'=>true]) !!}
      <span>Actual video for the frontpage</span><br>
      <video width="400" controls>
        <source src="{{ asset($profile->video_mp4) }}" type="video/mp4">
        <source src="{{ asset($profile->video_ogg) }}" type="video/ogg">
        Your browser does not support HTML5 video.
      </video>


      <div class="form-group">
         <label for="aboutmepicture">About me Picture</label>
         {!! Form::file('aboutmepicture',null,['class'=>'form-control']) !!}
      </div>
      
      <div class="form-group">
         <label for="video_ogg">Upload File (video ogg)</label>
         {!! Form::file('video_ogg',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="video_mp4">Upload File (video webm)</label>
         {!! Form::file('video_mp4',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="about_me">Description</label>
         {!! Form::textarea('about_me',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/profile') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop