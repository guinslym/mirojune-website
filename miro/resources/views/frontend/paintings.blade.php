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
                  <h2>Paintings</h2>
            </div>


        @foreach($paintings as $painting)
          <div class="col-lg-3 text-center paintings">
            <img src="{{  asset($painting->file) }}" alt="" class="img-responsive" width="255" height="327">
            <address style="font-size:1.3em; line-height:1.4em;" class="">
              <h4>Sun Kang</h4>
                by Miró June<br>
                25x30inch<br>
                Oil<br>
                
            </address>
          </div>
        @endforeach

        
      </div>
    </div>
  </div>

@stop