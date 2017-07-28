<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Block background example</title>
  <style>
    html, body {
      margin: 0;
    }
  </style>
</head>
<body>

<!-- Easy as hell -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div id="block" style="width: 100%; height: 500px;" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%"></div>
<script src="https://vodkabears.github.io/vide/js/jquery.vide.min.js"></script>
<br><br>

<div id="block2" style="width: 100%; height: 500px;"
  data-vide-bg="mp4: video/ocean, webm: video/ocean, ogv: http://vodkabears.github.io/vide/video/ocean, poster: video/ocean"
  data-vide-options="position: 0% 50%">
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="../src/jquery.vide.js"></script>
<script>
//  $(document).ready(function () {
//    $('#block').vide('video/ocean'); // Non declarative initialization
//
//    var instance = $('#block').data('vide'); // Get the instance
//    var video = instance.getVideoObject(); // Get the video object
//    instance.destroy(); // Destroy instance
//
//    $('#block2').vide({
//      'mp4': 'https://github.com/vodkabears/Vide/tree/master/examples/video/ocean',
//      'webm': 'https://github.com/vodkabears/Vide/tree/master/examples/video/ocean',
//      'ogv': 'https://github.com/vodkabears/Vide/tree/master/examples/video/ocean',
//      'poster': 'https://github.com/vodkabears/Vide/tree/master/examples/video/ocean',
//    });
//  });
</script>
</body>
</html>