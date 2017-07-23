@extends('frontend.frontend')


@section('body')
      <div class="jumbotron">
        <video id="video-background" preload muted autoplay loop>
          <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
          <source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
        </video>
      </div>
	@include('frontend.partials.paintings4')
@stop