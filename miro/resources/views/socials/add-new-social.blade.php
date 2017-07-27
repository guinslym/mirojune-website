@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/socials', 'method'=>'POST']) !!}


      <div class="form-group">
         <label for="icon">Icon</label>
         <input type="text" class="form-control" name="icon" value="" placeholder="fa fa-facebook-official">
      </div>

      <div class="form-group">
         <label for="url">Url</label>
         <input type="text" class="form-control" name="url" value="" placeholder="http://www.facebook.com">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ url('/socials') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop