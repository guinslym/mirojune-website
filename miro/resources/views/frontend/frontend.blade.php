
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

    <title>Miro June - Painter - Artist - Mannequin - Photograph</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{  asset('css/bootstrap-paper.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" />
    <script src="{{  asset('js/bootstrap-paper.min.js') }}"></script>
    



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

      .big-title {
    text-align: center;
}
  .big-title h2 {
      padding: 12px 10px 10px;
      color: #566473;
      font-size: 44px;
      line-height: 50px;
      margin: 0 auto 50px;
      text-align: center;
      text-transform: uppercase;
      text-shadow: none;
      font-weight: 700;
      position: relative;
      display: inline-block;
  }


  .big-title h2::before,
  .big-title h2::after {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 3px;
      background: #566473;
      content: '';
      -webkit-transition: -webkit-transform 0.3s;
      -moz-transition: -moz-transform 0.3s;
      transition: transform 0.3s;
      -webkit-transform: scale(0.85);
      -moz-transform: scale(0.85);
      transform: scale(0.85);
  }

  .big-title h2::after {
      opacity: 0;
      -webkit-transition: top 0.3s, opacity 0.3s, -webkit-transform 0.3s;
      -moz-transition: top 0.3s, opacity 0.3s, -moz-transform 0.3s;
      transition: top 0.3s, opacity 0.3s, transform 0.3s;
  }

  .big-title h2:hover::before,
  .big-title h2:hover::after,
  .big-title h2:focus::before,
  .big-title h2:focus::after {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      transform: scale(1);
  }
  .big-title h2:hover::after,
  .big-title h2:focus::after {
      top: 0%;
      opacity: 1;
  }

  /* big title light */

  .big-title.light h2::before,
  .big-title.light h2::after {
      background: white;
  }

  .big-title{
    margin: 80px 0 20px 0;
  }
.jumbotron{
  position: relative;
    overflow: hidden;
    min-height: 500px;
 
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

@include('frontend.partials.navbar')

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

<!--
  ___  _                 _   
 / _ \| |               | |  
/ /_\ \ |__   ___  _   _| |_ 
|  _  | '_ \ / _ \| | | | __|
| | | | |_) | (_) | |_| | |_ 
\_| |_/_.__/ \___/ \__,_|\__|

-->

       @yield('body')




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
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
    </script>
  </body>
</html>
