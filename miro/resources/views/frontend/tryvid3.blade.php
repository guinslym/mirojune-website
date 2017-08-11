
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pushy - Off-Canvas Navigation Menu</title>
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" />
        <link rel="stylesheet" href="css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pushy/1.1.0/css/pushy.css" />
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
	html, body {
  overflow-x: hidden;
}

/* Lists */
ul {
  margin: 0;
  padding: 0;
}

/* Container */
#container {
  position: relative;
  padding: 20px 40px;
  padding-top: 80px;
}

/* Menu Button */
.menu-btn {
  width: 100px;
  padding: 10px;
  margin-bottom: 30px;
  background: #000;
  color: #FFF;
  text-align: center;
  cursor: pointer;
  border: 0px;
}
.menu-btn:hover {
  opacity: 0.6;
}

/* Header */
.site-header {
  position: fixed;
  background: #000;
  color: #FFF;
  width: 100%;
  padding: 20px 0;
  text-align: center;
  z-index: 9998;
}

/* Footer */
.site-footer {
  position: relative;
  border-top: 1px solid #EEE;
  color: #999;
  padding: 10px;
  font-size: 0.8em;
  text-align: center;
}

/*# sourceMappingURL=demo.css.map */
</style>
    </head>
    <body>


        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link">Submenu 1</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 2</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 3</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 4</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-link"><a href="#">Item 1</a></li>
                    <li class="pushy-link"><a href="#">Item 2</a></li>
                    <li class="pushy-link"><a href="#">Item 3</a></li>
                    <li class="pushy-link"><a href="#">Item 4</a></li>
                </ul>
            </div>
        </nav>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

<style>
	.homepage-hero-module {
    border-right: none;
    border-left: none;
    position: relative;
}
.no-video .video-container video,
.touch .video-container video {
    display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
    display: block !important;
}
.video-container {
    position: relative;
    bottom: 0%;
    left: 0%;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background: #000;
}
.video-container .poster img {
    width: 100%;
    bottom: 0;
    position: absolute;
}
.video-container .filter {
    z-index: 100;
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    width: 100%;
}
.video-container video {
    position: absolute;
    z-index: 0;
    bottom: 0;
}
.video-container video.fillWidth {
    width: 100%;
}
</style>
<div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="{{ asset('/crystal/gif/aaa.mp4') }}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="{{ asset('/crystal/gif/aaa.mp4') }}" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="{{ asset('/crystal/gif/aaa.mp4') }}" alt="">
        </div>
    </div>
</div>

        <!-- Your Content -->
        <div id="container">
            <!-- Menu Button -->
            <button class="menu-btn">&#9776; </button>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra neque a diam cursus pulvinar. Suspendisse faucibus mi id accumsan lobortis. Pellentesque consectetur varius turpis, nec viverra justo pellentesque sit amet. Vestibulum convallis leo non purus vehicula, non faucibus libero rhoncus. Morbi aliquam tincidunt facilisis. Aenean sodales nulla ac semper consectetur. Vivamus commodo massa convallis justo posuere vestibulum. Aenean congue non mauris ac auctor. Ut suscipit et eros nec suscipit. Nulla congue, mauris nec bibendum sagittis, urna orci tincidunt massa, in vulputate velit nulla vitae nunc. Etiam urna justo, imperdiet nec orci sollicitudin, tempus feugiat erat. Vivamus id lectus nulla. Vestibulum sagittis cursus metus vel ultricies. <a href="https://github.com/christophery/pushy">Suspendisse viverra</a> interdum metus eu placerat. Quisque tristique velit nisi, scelerisque consectetur tortor vehicula ut. Donec id fermentum mi, nec venenatis felis.</p>

            <p>Praesent id metus imperdiet, congue leo sed, eleifend purus. Donec congue scelerisque tempus. Maecenas eget nunc pharetra, laoreet enim sed, dictum odio. Sed non mollis purus. Aliquam aliquet, risus eget dictum commodo, neque mi dapibus ipsum, tempus iaculis elit lorem pharetra mauris. Vivamus pulvinar scelerisque lectus a congue. Sed vitae odio massa. Pellentesque condimentum sit amet arcu in convallis.</p>

            <p>Etiam dapibus nisl nibh, et <a href="https://christopheryee.ca">commodo nisi</a> euismod vehicula. In consectetur eleifend felis, eget iaculis lectus scelerisque vel. Mauris non nibh nec sem consequat dapibus sed at tellus. Nunc egestas ac diam sed pretium. Praesent ultrices malesuada nisi at ornare. Aliquam arcu eros, pellentesque vitae fringilla ac, rhoncus id urna. Curabitur sit amet tortor eu neque sollicitudin congue. Proin mattis, diam quis ullamcorper iaculis, metus lectus vulputate tellus, id imperdiet nibh ante vel risus. Nam ut mi libero. Suspendisse auctor neque at pulvinar vestibulum. Suspendisse potenti. Cras molestie eros at feugiat gravida.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra neque a diam cursus pulvinar. Suspendisse faucibus mi id accumsan lobortis. Pellentesque consectetur varius turpis, nec viverra justo pellentesque sit amet. Vestibulum convallis leo non purus vehicula, non faucibus libero rhoncus. Morbi aliquam tincidunt facilisis. Aenean sodales nulla ac semper consectetur. Vivamus commodo massa convallis justo posuere vestibulum. Aenean congue non mauris ac auctor. Ut suscipit et eros nec suscipit. Nulla congue, mauris nec bibendum sagittis, urna orci tincidunt massa, in vulputate velit nulla vitae nunc. Etiam urna justo, imperdiet nec orci sollicitudin, tempus feugiat erat. Vivamus id lectus nulla. Vestibulum sagittis cursus metus vel ultricies. Suspendisse viverra interdum metus eu placerat. Quisque tristique velit nisi, scelerisque consectetur tortor vehicula ut. Donec id fermentum mi, nec <a href="https://google.ca">venenatis felis.</a></p>

            <p>Praesent id metus imperdiet, congue leo sed, eleifend purus. Donec congue scelerisque tempus. Maecenas eget nunc pharetra, laoreet enim sed, dictum odio. Sed non mollis purus. Aliquam aliquet, risus eget dictum commodo, neque mi dapibus ipsum, tempus iaculis elit lorem pharetra mauris. Vivamus pulvinar scelerisque lectus a congue. Sed vitae odio massa. Pellentesque condimentum sit amet arcu in convallis.</p>

            <p>Etiam dapibus nisl nibh, et commodo nisi euismod vehicula. In consectetur eleifend felis, eget iaculis lectus scelerisque vel. Mauris non nibh nec sem consequat dapibus sed at tellus. Nunc egestas ac diam sed pretium. Praesent ultrices malesuada nisi at ornare. Aliquam arcu eros, pellentesque vitae fringilla ac, rhoncus id urna. Curabitur sit amet tortor eu neque sollicitudin congue. Proin mattis, diam quis ullamcorper iaculis, metus lectus vulputate tellus, id imperdiet nibh ante vel risus. Nam ut mi libero. Suspendisse auctor neque at pulvinar vestibulum. Suspendisse potenti. Cras molestie eros at feugiat gravida.</p>

        </div>

        <footer class="site-footer push">This is a footer</footer>

        <!-- Pushy JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pushy/1.1.0/js/pushy.js"></script>

<script>
	//jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}
</script>
    </body>
</html>
