@extends('global-layout')

@section('body')
<h1>new uploads</h1>

@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/medias', 'method'=>'POST', 'files'=>'true']) !!}


      <div class="form-group">
         <label for="userfile">Upload File</label>
         <input type="file" class="form-control" name="userfile">
      </div>

	<div class="form-group">
	    <label>Category of Upload
	        <select name="category" id="category" class="form-control input-sm">
	            @foreach($categories as $category)
	            <option value="{{ $category}}">{{ $category}}</option>
	            @endforeach
	           </select>
	    </label>
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