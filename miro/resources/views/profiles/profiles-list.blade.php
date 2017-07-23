@extends('global-layout')



@section('body')


<div class="container">
	<div class="row text-right">
		 <a href="{{ url('/profile/create') }}" class="btn btn-primary" role="button"> Add a Profile
	    </a>
	</div>
	
</div>

<h1>Configuration of the Site</h1>
<table class="table table-striped table-bordered table-fixed">
	<thead>
		<tr>
			<td>id</td>
			<td>About Me</td>
			<td>video ogg</td>
			<td>video mp4</td>
			<td>created</td>
			<td>Detail</td>
			<td>update</td>
			<td>delete</td>
		</tr>
	</thead>
	@if (count($profiles) > 0)
	<tfoot>
		<tr>
			<td>id</td>
			<td>About Me</td>
			<td>video ogg</td>
			<td>video mp4</td>
			<td>created</td>
			<td>Detail</td>
			<td>update</td>
			<td>delete</td>
		</tr>
	</tfoot>
	@endif
	<tbody>
	@foreach($profiles as $media)
		<tr>
			<td>{{ $media->id}} </td>
			<td>{{ $media->about_me}} </td>
			<td>{{ $media->video_ogg}} </td>
			<td>{{ $media->video_mp4}} </td>
			<td><a href="" class="btn btn-default pull-left">Show</a></td></td>
			<td><a href="{{ url('/profile/'.$media->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a></td>
			<td>
                     {!! Form::open(['url'=>'/profile/'.$media->id, 'class'=>'pull-left']) !!}
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
	 	<a href="{{ url('/profile/create') }}" class="btn btn-primary" role="button"> Add New Profile</a>
	</div>
	
</div>


@stop