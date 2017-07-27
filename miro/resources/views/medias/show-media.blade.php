@extends('global-layout')

@section('body')
<h1>show upload</h1>

 @if($media->category == "Video")
				
          <video width="400" controls>
              <source src="{{  asset($media->file) }}" >
              Your browser does not support HTML5 video.
            </video>

			@else	
				<img src="{{asset($media->file)}}" alt="" width="300px">
			 {{ $media->file}}
			 @endif

@stop