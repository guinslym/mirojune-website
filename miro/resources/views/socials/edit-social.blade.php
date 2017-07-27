@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::model($social,['url' => '/socials/'.$social->id, 'method' => 'PUT']) !!}

      <div class="form-group">
         <label for="icon">Icon</label>
         {!! Form::text('icon',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="icon">Url</label>
         {!! Form::text('url',null,['class'=>'form-control', 'placeholder'=>'http://www.twitter.com']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ url('/socials') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop