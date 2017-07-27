@extends('global-layout')



@section('body')
<style>
     .social-list{
    margin: 20px 0;
    padding-top: 20px;
    border-top: 3px solid #eee8e2;
    text-align: center;
  }
  .social-list a:hover{
    text-decoration: none;
    color:inherit;
  }
  .social-list a {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    font-size: 20px;
    line-height: 40px;
    outline: 0;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;

}
.social-list a i:hover{
    color: white;
    background-color: #222;
    border-radius: 100%;
    font-size: 20px;
    line-height: 40px;
    outline: 0;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
        display: block;
    width: 40px;
    height: 40px;
         -webkit-transition-duration: 400ms;
     transition-duration: 400ms;
}

</style>

<div class="container">
   <div class="row text-right">
       <a href="{{ url('/socials/create') }}" class="btn btn-primary" role="button"> Add a New Social Media Icon
       </a>
   </div>
   
</div>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<h1>List of icons</h1>
<table class="table table-striped table-bordered table-fixed">
   <thead>
      <tr>
         <td>id</td>
         <td>icon</td>
         <td>created</td>
         <td>update</td>
         <td>delete</td>
      </tr>
   </thead>
   @if (count($socials) > 0)
   <tfoot>
      <tr>
         <td>id</td>
         <td>icon</td>
         <td>created</td>
         <td>update</td>
         <td>delete</td>
      </tr>
   </tfoot>
   @endif
   <tbody>
   @foreach($socials as $social)
      <tr>
         <td>{{ $social->id}} </td>
         <td class="text-center social-list">
            <a href="{{  $social->url }}" target="_blank">
                  <i class=" fa {{ $social->icon}} fa-2x"></i>
            </a>
         </td>
         <td>
         {{ Carbon\Carbon::parse($social->created_at)->format('d-m-Y') }}
         </td>
         <td><a href="{{ url('/socials/'.$social->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a></td>
         <td>
                     {!! Form::open(['url'=>'/socials/'.$social->id, 'class'=>'pull-left']) !!}
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
      <a href="{{ url('/socials/create') }}" class="btn btn-primary" role="button"> Add New Social Media Icon</a>
   </div>
   
</div>


@stop