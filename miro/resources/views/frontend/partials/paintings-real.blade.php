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

     <div class="container">
       
      <div class="row">

            <div class="col-md-12 big-title wow bounceIn animated paintings" style="visibility: visible;">
                  <h2>Paintings</h2>
            </div>


        @for ($i = 0; $i < 3; $i++)
          <div class="col-lg-4 text-center paintings wow fadeInUp" data-wow-offset="10" data-wow-duration="2s">
           @if ($i % 2 == 0)
            <img src="https://mirojune.s3.amazonaws.com/uploads/painting/image/11/_MG_5032.jpg" alt="" class="img-responsive" width="255" height="327">
          @else
            <img src="https://mirojune.s3.amazonaws.com/uploads/painting/image/12/_MG_5351.jpg" alt="" class="img-responsive" width="255" height="327">
          @endif 
            <address style="font-size:1.3em; line-height:1.4em;" class="">
              <h4>Sun Kang</h4>
                by Miró June<br>
                25x30inch<br>
                Oil<br>
                
            </address>
          </div>
        @endfor

        
      </div>
    </div>
  </div>