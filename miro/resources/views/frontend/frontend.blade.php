
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
    
    <link rel="stylesheet" href="{{  asset('css/styles.css') }}" />




    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Crimson+Text|Indie+Flower|Raleway" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    </style>
  </head>

  <body>

@include('frontend.partials.navbar')



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
     <script>
              new WOW().init();
              </script>
  </body>
</html>
