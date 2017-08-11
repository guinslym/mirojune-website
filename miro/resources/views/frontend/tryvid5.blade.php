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
	</style>
</head>
<!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
            <div class="jumbotron">
            <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap friendly HTML, CSS and Javascript. Bootstrap is a front-end framework that uses CSS and JavaScript to
                        facilitate responsive Web design. </p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
                
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/span-->


    </div>
    <!--/row-->

    <hr>

    <footer>
        <p>© Company 2017</p>
    </footer>

</div>
<!--/.container-->

</body>
<script>
	$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
</script>
</html>