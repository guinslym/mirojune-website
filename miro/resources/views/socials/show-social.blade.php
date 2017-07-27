@extends('global-layout')

@section('body')
   <form class="form-horizontal">

     <div class="form-group">
       <label class="col-sm-2 control-label">Icon</label>
       <div class="col-sm-10">
         <p class="form-control-static">{{ $social->icon }}</p>
       </div>
     </div>


      <a href="{{ url('/socials/'.$social->id.'/edit') }}" class="btn btn-warning">Edit</a>
      <a href="{{ url('/socials') }}" class="btn btn-warning">&lt;Back</a>
      
   </form>
@stop