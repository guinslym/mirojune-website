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
<!--
 _                                                 
| |                                                
| |__   ___  _ __ ___   ___ _ __   __ _  __ _  ___ 
| '_ \ / _ \| '_ ` _ \ / _ \ '_ \ / _` |/ _` |/ _ \
| | | | (_) | | | | | |  __/ |_) | (_| | (_| |  __/
|_| |_|\___/|_| |_| |_|\___| .__/ \__,_|\__, |\___|
                           | |           __/ |     
                           |_|          |___/      


-->

<script src="https://unpkg.com/smartphoto@0.7.6/js/smartphoto.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/smartphoto@0.7.6/css/smartphoto.min.css">
     <div class="container">
       
      <div class="row">

            <div class="col-md-12 big-title wow bounceIn animated paintings" style="visibility: visible;">
                  <h2>Paintings</h2>
            </div>

        @foreach($paintings as $painting)
          <div class="col-lg-4 text-center paintings wow fadeInUp" data-wow-offset="10" data-wow-duration="2s">
          
            <a href="{{asset($painting->file)}}" class="js-smartPhoto" data-caption="miro" data-id="miro" data-group="miro">
              <img src="{{asset($painting->file)}}" alt="" class="img-responsive" width="255" height="327">
            </a>
          
            <address style="font-size:1.3em; line-height:1.4em;" class="">
              <h4>{{ $painting->caption }}</h4>
                
            </address>
          </div>
        @endforeach

        
      </div>
    </div>

<script>
window.addEventListener('DOMContentLoaded',function(){
    new smartPhoto(".js-smartPhoto");
});
</script>

<style>
  .btn-large {
    padding: 14px 26px 16px;
    font-size: 15px;
    background-color: #f8f8f8;
    color: black;
    box-shadow: inset 0 -2px 0 rgba(0,0,0,0.15);
}

.btn:hover, .btn:focus, .btn:active, .btn.active, .pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>li>a:hover, .pagination>li>a:focus {
    background-color: #2eaef0;
    color:black;
}
.btn:hover, .btn:focus, .btn:active, .btn.active {
    background: #2eaef0;
    color: #FFF!important;
    -webkit-transition: all 200ms ease-out;
    -o-transition: all 200ms ease-out;
    -moz-transition: all 200ms ease-out;
    -webkit-box-shadow: inset 0 -2px 0 rgba(0,0,0,0.15);
    -moz-box-shadow: inset 0 -2px 0 rgba(0,0,0,0.15);
    box-shadow: inset 0 -2px 0 rgba(0,0,0,0.15);
}
.paintingsButton{
  padding: 60px 0;
}
</style>
<div class="container">
    <div class="row text-center paintingsButton">
      <a href="/paintings" class="btn btn-large">View more Paintings</a>
    </div>
  
</div>
