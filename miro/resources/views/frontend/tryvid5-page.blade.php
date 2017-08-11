<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		@import url("https://bootswatch.com/flatly/bootstrap.min.css");

body {
  /*padding-top: 50px;*/
  padding-top: 0px;
  margin-top: 0;
}
footer {
  padding-left: 15px;
  padding-right: 15px;
}

/*
 * Off Canvas
 * --------------------------------------------------
 */

@media (min-width: 300px) {
  .navbar {
    display: none;
  }
}

@media screen and (max-width: 768px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
    background:#ecf0f1;
    background: white;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -40%;
  }

  .row-offcanvas-left.active {
    left: 40%;
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 40%;
    margin-left: 12px;
    padding-top: 0px!important;
    margin-top: 0;
  }
}

#sidebar {
    padding:0 15px;
    /*margin-top:10px;*/
    margin-top: 0;
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
    margin: 0px 0 20px 0;
  }
	</style>
</head>
<!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/smartphoto@0.7.6/css/smartphoto.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<body>

<!--
<div class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
 /.navbar -->

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="sidebar-nav">
                <ul class="nav">
                    
                    <li class="active"><a href="#">Miro June</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="#">Paintings</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Pictures</a></li>
                   <li class="nav-divider"></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->


		<div class="col-xs-12 col-sm-9">
        {{-- Paintings --}}
        <a href="#" class="visible-xs" data-toggle="offcanvas" style="padding-top: 30px;"><i class="fa fa-lg fa-reorder"></i></a>
        <div class="row">
					<div class="col-md-12 big-title wow bounceIn animated paintings" style="visibility: visible;">
			                  <h2>Paintings</h2>
			        </div>
				</div>
				

				<div class="text-center">
					

		        @foreach($paintings as $picture)
		          <div class="thumb text-center paintings wow fadeIn" data-wow-duration="4s" data-wow-offset="40" >
		          <a href="{{  asset($picture->file) }}" class="js-smartPhoto" data-caption="miro" data-id="miro" data-group="miro">
		            <img src="{{  asset($picture->file) }}" alt="" class="img-responsive center-block   photogallery" width="60%">
		            </a>
		            <address style="font-size:1.3em; line-height:1.4em;" class="">
		              <h4>{{ $picture->caption }}</h4>
		              <div class="row text-center">
		                {{  $picture->description }}
		              </div>
		                
		            </address>
		          </div>
		        @endforeach
			</div>


		{{-- col-xs-12 col-sm-9 --}}
		</div>




<!--
		<div class="col-xs-12 col-sm-9">
		{{-- About Me --}}

            <div class="col-md-12 big-title wow fadeIn animated paintingsShow" style="visibility: visible;">
                  <h2>About me</h2>
            </div>


            <section class="About">
              <div class="col-lg-12">
                <img src="{{asset($about_me_pic)}}" alt="" class="img-responsive center-block" width="60%" style="padding-bottom: 60px;">

              </div>
              <div class="col-lg-12 vertical">
                <p>{{ $about_me_description }} </p>
              </div>
            </section>


		</div>
-->



		{{-- About Me --}}
		{{-- Pictures --}}
		{{-- Contact Me --}}

        </div>
        <!--/span-->

@include('frontend.partials.socials')

    </div>
    <!--/row-->


</div>
<!--/.container-->

</body>
    <script src="https://unpkg.com/smartphoto@0.7.6/js/smartphoto.min.js"></script>



     <script>

         $( document ).ready(function() {

            new WOW().init();
          });
     </script>
<script>
	$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
</script>
</html>