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


  .thumbnailgallery {
    margin-bottom: 30px;
}
img.photogallery {
        width: 50%;
    }
  @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    img.photogallery {
        width: 100%;
    }
}

</style>
      

            <div class="col-md-12 big-title wow fadeIn animated paintings" style="visibility: visible;">
                  <h2>Paintings</h2>
            </div>
      </div>

        @foreach($paintings as $painting)
          <div class="col-lg-12 thumbnailgallery text-center paintings wow fadeIn" data-wow-duration="4s" data-wow-offset="40" >

            <a href="{{  asset($painting->file) }}" class="js-smartPhoto " data-caption="miro" data-id="miro" data-group="miro">
              <img src="{{  asset($painting->file) }}" alt="" class="img-responsive photogallery"  >
           </a>
            <address style="font-size:1.3em; line-height:1.4em;" class="">
              <h4>{{ $painting->caption }}</h4>
              <div class="row text-center">
                {{  $painting->description }}
              </div>
                
            </address>
          </div>
        @endforeach

        



<script>
window.addEventListener('DOMContentLoaded',function(){
    new smartPhoto(".js-smartPhoto");
});
</script>
@stop