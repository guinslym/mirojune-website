@extends('frontend.frontend')


@section('body')
    <link rel="stylesheet" href="{{  asset('css/videos.css') }}" />

      <div class="jumbotron">
        <video id="video-background" preload muted autoplay loop>
          <source src="{{ asset('videos/Moving-Forward.mp4') }}" type="video/mp4">
          <source src="{{ asset('videos/Moving-Forward.webm') }}" type="video/mp4">
        </video>
      </div>
       



	@include('frontend.partials.paintings-real')

@stop