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
<script src="https://unpkg.com/smartphoto@0.7.6/js/smartphoto.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/smartphoto@0.7.6/css/smartphoto.min.css">

     <div class="container contents">
       
      <div class="row">

            <div class="col-md-12 big-title wow fadeIn animated paintings" style="visibility: visible;">
                  <h2>Paintings</h2>
            </div>
      </div>
<style>
  .thumb {
    margin-bottom: 30px;
}

</style>
        @foreach($paintings as $painting)
        <div class="row "  >
          <div class="col-lg-12 thumb text-center paintings wow fadeIn" data-wow-duration="4s" data-wow-offset="40" >
          <!--
            <img src="{{  asset($painting->file) }}" alt="" class="img-responsive" width="255" height="327">
            -->
            <a href="{{  asset($painting->file) }}" class="js-smartPhoto " data-caption="miro" data-id="miro" data-group="miro">
              <img src="{{  asset($painting->file) }}" alt="" class="img-responsive" width="50%" >
           </a>
            <address style="font-size:1.3em; line-height:1.4em;" class="">
              <h4>My Title</h4>
                by Miró June<br>
                25x30inch<br>
                Oil<br>
                
            </address>
          </div>
        @endforeach

        
      </div>


    </div>
  </div>

<script>
window.addEventListener('DOMContentLoaded',function(){
    new smartPhoto(".js-smartPhoto");
});
</script>
@stop