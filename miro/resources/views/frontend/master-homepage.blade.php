<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Miro June - Painter - Artist - Model - Photograph</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/crystal/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/crystal/css/line-icons.css">
    <link rel="stylesheet" href="/public/crystal/css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" />

    <link rel="stylesheet" href="{{  asset('/public/'. 'css/styles.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Crimson+Text|Indie+Flower|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Kaushan+Script|Satisfy" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/smartphoto@0.7.6/css/smartphoto.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
    </script>

    <script src="{{  asset('/public/'.'js/bootstrap-paper.min.js') }}"></script>
    
    <link rel="stylesheet" href="{{  asset('/public/'.'css/styles.css') }}" />




<style>
  /* ==========================================================================
   Video Background
   ========================================================================== */
#video-area {
  overflow: hidden;
  position: relative;
}
#video-area .contents {
  padding: 160px 0 80px;
}
#video-area .contents h1 {
  color: #fff;
  font-size: 50px;
  font-weight: 600;
  margin-bottom: 25px;
  line-height: 70px;
}
#video-area .contents p {
  font-size: 14px;
  color: #fff;
  font-weight: 400;
  line-height: 30px;
  letter-spacing: 0.5px;
}
#video-area .contents .btn {
  margin: 20px 10px;
  text-transform: uppercase;
}
#video-area .banner_bottom_btn {
  margin-top: 40px;
}
#video-area .banner_bottom_btn i {
  color: #fff;
  font-size: 48px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
#video-area .banner_bottom_btn i:hover {
  color: #4676fa;
}
.overlay-2 {
  background: rgba(0, 0, 0, 0.7) !important;
}
</style>

    <style>
        .contents{
    padding-bottom: 80px;
  }
  .navbar .navbar-default{
    margin-bottom: 0;
  }
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}
.navbar-collapse {
    background-color: rgba(255,255,255,1);
    width: 100%;
    border-bottom: 1px solid #e6e9ed;
}
.navbar, .navbar-default {
    background-color: rgba(255,255,255,1);
    width: 100%;
    border-bottom: 1px solid #e6e9ed;
}
section{
  margin:0px 0px;
}


#loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #333;
  z-index: 9999999999;
}
.spinner {
  width: 40px;
  height: 40px;
  top: 45%;
  position: relative;
  margin: 0px auto;
}
.double-bounce1,
.double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #4676fa;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: sk-bounce 2s infinite ease-in-out;
  animation: sk-bounce 2s infinite ease-in-out;
}
.double-bounce2 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
@-webkit-keyframes sk-bounce {
  0%,
  100% {
    -webkit-transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
  }
}
@keyframes sk-bounce {
  0%,
  100% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}
    </style>
  </head>
  <body>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>  

  @include('frontend.partials.navbar')
  <!--
      <div class="menu-wrap">
        <nav class="menu navbar">
          <div class="icon-list navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#video-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">Our Works</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>     
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#subscribe">Subscribe</a>
              </li>
            </ul>
          </div>
        </nav> 
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
      </div>      
   -->

    <header id="video-area" data-stellar-background-ratio="0.5">    
      <div id="block" data-vide-bg="{{ $video_mp4 }}" style="min-height: 210px;" class="wow"></div>
     
      <div class="overlay overlay-2"></div>      
      <div class="container">
        <div class="row ">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"></h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></p>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><i class=""></i> </a>
            </div>
          </div>
        </div> 
      </div>      
    </header>
    <!-- Header Section End --> 

 @yield('body')


    <!-- Portfolio Section 
    <section id="portfolios" class="section">

      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Works</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">

            <div class="controls text-center wow fadeInUp" data-wow-delay=".6s">
              <a class="control mixitup-control-active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="control btn btn-common" data-filter=".marketing">
                Design 
              </a>
              <a class="control btn btn-common" data-filter=".planning">
                Development
              </a>
              <a class="control btn btn-common" data-filter=".research">
                Print 
              </a>
            </div>

            <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="http://miro.mongexweb.ca/public/uploads/QbBpSU__MG_5032.jpg">
                      <img src="http://miro.mongexweb.ca/public/uploads/QbBpSU__MG_5032.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="http://miro.mongexweb.ca/public/uploads/zyI5EV__MG_5351.jpg">
                      <img src="http://miro.mongexweb.ca/public/uploads/zyI5EV__MG_5351.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="http://miro.mongexweb.ca/uploads/JQEw7d_miro3.jpg">
                      <img src="http://miro.mongexweb.ca/uploads/JQEw7d_miro3.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="http://miro.mongexweb.ca/uploads/M6EgtI_miro4.jpg">
                      <img src="http://miro.mongexweb.ca/uploads/M6EgtI_miro4.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="http://miro.mongexweb.ca/uploads/JQEw7d_miro3.jpg">
                      <img src="http://miro.mongexweb.ca/uploads/JQEw7d_miro3.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="http://miro.mongexweb.ca/uploads/M6EgtI_miro4.jpg">
                      <img src="http://miro.mongexweb.ca/uploads/M6EgtI_miro4.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    --> 

@include('frontend.partials.socials')
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
  
     <script>
   $(window).load(function() {
    "use strict";
    $('#loader').fadeOut();
   });
         $( document ).ready(function() {

            new WOW().init();
          });
     </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/public/crystal/js/tether.min.js"></script>
    <script src="/public/crystal/js/bootstrap.min.js"></script>
    <script src="/public/crystal/js/jquery.vide.js"></script>

  </body>
</html>