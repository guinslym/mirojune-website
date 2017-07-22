@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::model($media,['url' => '/medias/'.$media->id, 'method' => 'PUT', 'files'=>true]) !!}

      <img src="{{ asset($media->file) }}" height="150" />
      <div class="form-group">
         <label for="userfile">Upload File</label>
         {!! Form::file('userfile',null,['class'=>'form-control']) !!}
      </div>

	<div class="form-group">
	    <label>Category of Upload
	        <select name="category" id="category" class="form-control input-sm">
	            @foreach($categories as $category)
	            <option value="{{ $category }}" {{ Input::old($media->category) == $category ? 'selected' : '' }}>{{ $category }}</option>

	            @endforeach
	           </select>
	    </label>

	</div>


      <div class="form-group">
         <label for="caption">Caption</label>
         {!! Form::text('caption',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         {!! Form::textarea('description',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/medias') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop