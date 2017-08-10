@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::model($media,['url' => '/medias/'.$media->id, 'method' => 'PUT', 'files'=>true]) !!}
      <h4>Actual file</h4>
      @if(($media->category == "Video") || ($media->category == "HomeVideo_ogg") || ($media->category == "HomeVideo_mp4") || ($media->category == "HomeVideo_webm") )
            <video width="400" controls loop>
              <source src="{{  asset($media->file) }}" >
              Your browser does not support HTML5 video.
            </video>
      @else
         <img src="{{ asset($media->file) }}" height="150" />
      @endif

      <div class="form-group">
         <label for="userfile">Upload File</label>
         {!! Form::file('userfile',null,['class'=>'form-control']) !!}
      </div>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Help</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Category</h4>
      </div>
      <div class="modal-body">
        <table class="table-stripped table-bordered">
        <thead>
           <tr>
              <td>Category name</td>
              <td>Description</td>
              <td>Url</td>
           </tr>
        </thead>
           <tr>
              <td>Paintings</td>
              <td>This is Miro June's painting <br> <strong>The last 3 recents picture will be display on the Homepage too </strong></td>
              <td><a href="/paintings" target="_blank">paintings</a></td>
           </tr>
           <tr>
              <td>Video</td>
              <td>This is Miro June's video</td>
              <td><a href="/videos-miro" target="_blank">Videos</a></td>
           </tr>
           <tr>
              <td>Pictures</td>
              <td>This is the pictures that will be on the Miro June's Picture pages <br>
                <strong>Make sure that you choose this option.</strong>
              </td>
              <td><a href="/pictures" target="_blank">Pictures</a></td>
           </tr>
           <tr>
              <td>Homevideo_mp4</td>
              <td>This is the background video that will be on the homepage <br>
               <span>
                <strong>Make sure that you choose this option.</strong>
              <br>The maximum file size is <strong>32 MB</strong> but I suggest that you keep it under <strong>10 MB</strong> so that your homepage will load faster
              </span>
              </td>
              <td><a href="/" target="_blank">Homepage</a></td>
           </tr>
           <tr>
              <td>About me picture</td>
              <td>This is the picture that will be on the About me page</td>
              <td><a href="/about" target="_blank">About Me</a></td>
           </tr>
        </table>
<hr>
        <h4 class="title">Caption</h4>
        <hr>
        <h4 class="title">Description</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>









	<div class="form-group">
	    <label>Category of Upload
	        <select name="category" id="category" class="form-control input-sm">
	            @foreach($categories as $category)
	            <option value="{{ $category }}" {{ $media->category == $category ? 'selected' : '' }}>{{ $category }}</option>
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