<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Miro June - Backend Administration</title>
      <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
   </head>
   <body>

   <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/dashboard">Admin Interface</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li><a href="/dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
                      <li><a href="/medias">Medias <span class="sr-only">(current)</span></a></li>
                      <li><a href="/socials">Socials <span class="sr-only">(current)</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="/">Go to the website</a></li>
                    </ul>
                  </div>
                </div>
              </nav>

<div class="container">
   
         <div id="body">
            @yield('body')
         </div>
</div>

         <p class="footer">
            
         </p>
      </div>

   </body>
</html>