<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Crystal - Free Video Background Website Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/crystal/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset('/crystal/css/main.css') }}">    
    <link rel="stylesheet" href="{{ asset('/crystal/css/responsive.css') }}">

  </head>
  <body>
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
  	<!-- Header Section Start -->

    <header id="video-area" data-stellar-background-ratio="0.5">    
      <div id="block" data-vide-bg="{{ asset('/crystal/video/video') }}"></div>
      <div class="fixed-top">
          <div class="container">
            <div class="logo-menu">
              <a href="index.html" class="logo"><span class="lnr lnr-diamond"></span> CRYSTAL</a>
              <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>    
            </div>           
          </div>
      </div>
      <div class="overlay overlay-2"></div>      
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Crystal - Free Video Background HTML5 Bootstrap Template</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Free High-quality Responsive Video Background Website Template Based on Bootstrap 4 to Create Complete Business Website in Minutes</p>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><i class="lnr lnr-download"></i> Download</a>
            </div>
          </div>
        </div> 
      </div>      
    </header>
    <!-- Header Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('/crystal/js/jquery-min.js')}}"></script>
    <script>
    	height = $(window).height();
    	 $( '#video-area' ).height( height );
    </script>
    <script src="{{ asset('/crystal/js/tether.min.js')}}"></script>
    <script src="{{ asset('/crystal/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/crystal/js/classie.js')}}"></script>
    <script src="{{ asset('/crystal/js/mixitup.min.js')}}"></script>
    <script src="{{ asset('/crystal/js/nivo-lightbox.js')}}"></script>
    <script src="{{ asset('/crystal/js/owl.carousel.min.js')}}"></script>    
    <script src="{{ asset('/crystal/js/jquery.stellar.min.js')}}"></script>    
    <script src="{{ asset('/crystal/js/jquery.nav.js')}}"></script>    
    <script src="{{ asset('/crystal/js/smooth-scroll.js')}}"></script>    
    <script src="{{ asset('/crystal/js/smooth-on-scroll.js')}}"></script>    
    <script src="{{ asset('/crystal/js/wow.js')}}"></script>    
    <script src="{{ asset('/crystal/js/menu.js')}}"></script>
    <script src="{{ asset('/crystal/js/jquery.vide.js')}}"></script>
    <script src="{{ asset('/crystal/js/jquery.counterup.min.js')}}"></script>    
    <script src="{{ asset('/crystal/js/jquery.magnific-popup.min.js')}}"></script>    
    <script src="{{ asset('/crystal/js/waypoints.min.js')}}"></script>    
    <script src="{{ asset('/crystal/js/form-validator.min.js')}}"></script>
    <script src="{{ asset('/crystal/js/contact-form-script.js')}}"></script>     
    <script src="{{ asset('/crystal/js/main.js')}} "></script>
    
  </body>
</html>