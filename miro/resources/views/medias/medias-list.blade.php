@extends('global-layout')



@section('body')


<div class="container">
	<div class="row text-right">
		 <a href="{{ url('/medias/create') }}" class="btn btn-primary" role="button"> Add New Upload
	    </a>
	</div>
	
</div>


{!! $medias->render() !!}

<h1>List of uploads</h1>
<table class="table table-striped table-bordered table-fixed">
	<thead>
		<tr>
			<td>id</td>
			<td>
				<a href="{{ URL::route('medias-category') }} ">
					category
				&nbsp;
				<i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
				</a>
			</td>
			<td class="text-center">file</td>
			<td>
				<a href="{{ URL::route('medias.index') }} ">
					created
				&nbsp;
				<i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
				</a>
			</td>
			<td>updated</td>
			<td>detail</td>
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
			<td>updated</td>
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
				<i class="fa fa-video-camera  fa-3x" style="color:#ffd921"></i>
			@elseif($media->category == "HomeVideo_ogg")
				<i class="fa fa-file-video-o fa-3x" style="color:#3369e8"> </i>
			@elseif($media->category == "HomeVideo_mp4")
				<i class="fa fa-file-video-o fa-3x" style="color:#3369e8"> </i>
			@elseif($media->category == "HomeVideo_webm")
				<i class="fa fa-file-video-o fa-3x" style="color:#3369e8"> </i>
			@else	
				<img src="{{asset($media->file)}}" alt="" width="150px">
				<br>
			 <!--
			 {{ $media->file}}
			 -->
			 @endif
			</td>
			<td>{{ $media->created_at->diffForHumans() }}</td>
			<td>{{ $media->updated_at->diffForHumans() }}</td>
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


{!! $medias->render() !!}

@stop