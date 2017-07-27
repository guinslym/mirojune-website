@extends('frontend.frontend')


 @section('body')
<style>
  .paintings img {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .paintings img:hover {
    box-shadow: 0 12px 10px rgba(0, 0, 0, 0.2);
  }
  .paintings img{
    margin: 0 auto;
  }


</style>

     <div class="container">
       
      <div class="row">

            <div class="col-md-12 big-title wow bounceIn animated paintings" style="visibility: visible;">
                  <h2>Videos</h2>
            </div>


        @foreach($videos as $video)
          <div class="col-lg-6 text-center paintings">

          <video width="400" controls>
              <source src="{{  asset($video->file) }}" >
              Your browser does not support HTML5 video.
            </video>

            <address style="font-size:1.3em; line-height:1.4em;" class="">
              <h4>
                <a href="#">Sun Kang</a>
              </h4>
                
            </address>
          </div>
        @endforeach

        
      </div>
    </div>
  </div>

@stop