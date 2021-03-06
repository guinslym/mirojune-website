@extends('global-layout')



@section('body')


<div class="container">
	<div class="row text-right">
		 <a href="{{ url('/medias/create') }}" class="btn btn-primary" role="button"> Add New Upload
	    </a>
	</div>
	
</div>

<!--
{{ $medias->render() }}
-->

<h1>List of uploads</h1>
<table class="table table-striped table-bordered table-fixed">
	<thead>
		<tr>
			<td>id</td>
			<td>category</td>
			<td class="text-center">file</td>
			<td>created</td>
			<td>Detail</td>
			<td>update</td>
			<td>delete</td>
		</tr>
	</thead>
	@if (count($medias) > 0)
	<tfoot>
		<tr>
			<td>id</td>
			<td>category</td>
			<td class="text-center">file</td>
			<td>created</td>
			<td>Detail</td>
			<td>update</td>
			<td>delete</td>
		</tr>
	</tfoot>
	@endif
	<tbody>
	@foreach($medias as $media)
		<tr>
			<td>{{ $media->id}} </td>
			<td>{{ $media->category}}</td>
			<td class="text-center">
			 @if($media->category == "Video")
				Video
			@elseif($media->category == "HomeVideo_ogg")
				<i class="fa fa-file-video-o fa-3x" style="color:#3369e8"> </i>
			@elseif($media->category == "HomeVideo_mp4")
				<i class="fa fa-file-video-o fa-3x" style="color:#3369e8"> </i>
			@elseif($media->category == "HomeVideo_webm")
				<i class="fa fa-file-video-o fa-3x" style="color:#3369e8"> </i>
			@else	
				<img src="{{asset($media->file)}}" alt="" width="150px">
			 {{ $media->file}}
			 @endif
			 <!--
			 -->
			</td>
			<td>{{ $media->created_at}}</td>
			<td><a href="{{ url('/medias/'.$media->id.'/') }}" class="btn btn-default pull-left">Show</a></td></td>
			<td><a href="{{ url('/medias/'.$media->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a></td>
			<td>
                     {!! Form::open(['url'=>'/medias/'.$media->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<div class="container">
	<div class="row text-right">
	 	<a href="{{ url('/medias/create') }}" class="btn btn-primary" role="button"> Add New Upload</a>
	</div>
	
</div>


@stop