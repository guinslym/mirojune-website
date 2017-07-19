
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Starter Template for Bootstrap</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css" />

    <style type="text/css">
      @-ms-viewport     { width: device-width; }
      @-o-viewport      { width: device-width; }
      @viewport         { width: device-width; }
      body {
        padding-top: 50px;
      }
            *{
        color: #2c2a29;
      }
      .starter-template {
        padding: 40px 15px;
        text-align: center;
      }
.jumbotron{
  position: relative;
    overflow: hidden;
    min-height: 400px;
 
  /* Tried setting the height. Didnt work either */
  /* height: 200px; */
}
.container {
  position: relative;
  color: #ffffff;
  z-index: 2;
}

#video-background{ 
  position: absolute;
  height: auto;
  width: auto;
  min-height: 100%;
  min-width: 100%;
  left: 50%;
  top: 50%;
  -webkit-transform: translate3d(-50%, -50%, 0);
  transform: translate3d(-50%, -50%, 0);
  z-index: 1;
} 
    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Crimson+Text|Indie+Flower|Raleway" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Miro June</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      <div class="jumbotron">
        <video id="video-background" preload muted autoplay loop>
          <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
          <source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
        </video>
        <div class="container">
          Hello World Wocka Wocka
        </div>
      </div>


    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->

    <div class="container">
      <div class="row">
        <section class="Signature"></section>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <section class="paintingsButton"></section>
      </div>
    </div>

<!--
             _       _        _____ _                   
            (_)     | |      /  ___| |                  
 _ __   __ _ _ _ __ | |_ ___ \ `--.| |__   _____      __
| '_ \ / _` | | '_ \| __/ __| `--. \ '_ \ / _ \ \ /\ / /
| |_) | (_| | | | | | |_\__ \/\__/ / | | | (_) \ V  V / 
| .__/ \__,_|_|_| |_|\__|___/\____/|_| |_|\___/ \_/\_/  
| |                                                     
|_|                                                     
-->
@include('frontend.partials.paint')

<!--
  ___  _                 _   
 / _ \| |               | |  
/ /_\ \ |__   ___  _   _| |_ 
|  _  | '_ \ / _ \| | | | __|
| | | | |_) | (_) | |_| | |_ 
\_| |_/_.__/ \___/ \__,_|\__|

-->
@include('frontend.partials.about')


    <div class="container">
      <div class="row">
        <section class="Contact"></section>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <section class="Thanks"></section>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <section class="paintingsList"></section>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <section class="paintingsIsotope"></section>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <section class="sociaIcons"></section>
      </div>
    </div>

    <div class="container">
       @yield('body')
    </div>


<!--
                _       _______          _            
               (_)     | |  ___|        | |           
 ___  ___   ___ _  __ _| | |_ ___   ___ | |_ ___ _ __ 
/ __|/ _ \ / __| |/ _` | |  _/ _ \ / _ \| __/ _ \ '__|
\__ \ (_) | (__| | (_| | | || (_) | (_) | ||  __/ |   
|___/\___/ \___|_|\__,_|_\_| \___/ \___/ \__\___|_|   
-->
@include('frontend.partials.socials')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
