@extends('frontend.frontend')


@section('body')
    <link rel="stylesheet" href="{{  asset('css/videos.css') }}" />

<!--
      <div class="jumbotron">
        <video id="video-background" preload muted autoplay loop>
          <source src="{{ asset('videos/Moving-Forward.mp4') }}" type="video/mp4">
          <source src="{{ asset('videos/Moving-Forward.webm') }}" type="video/mp4">
        </video>
      </div>
      -->
       

        <section id="home" class="video-section">
            <div class="overlay"></div>
            <div class="video-overlay">
            <!--
                <div class="container scroll-to">
                    <h1 class="wow animated fadeInDown" data-wow-delay="0.1s">Bavely Studio</h1>
                    <p class="wow animated fadeInDown" data-wow-delay="0.2s">
                        We're a creative web design studio based in Usa. Lorem<br>Ipsum dolor sit amet.
                    </p>
                    <a href='#about' class="btn btn-lg btn-white-bg wow animated fadeInDown" data-wow-delay="0.3s">Learn more</a>
                </div>
                -->
            </div>
        </section>


	@include('frontend.partials.paintings-real')

<link rel="stylesheet" href="{{  asset('css/background.css') }}" />
<style>
#home{
	min-height: 500px;
}
	.video-section {
    width: 100%;
    height: 100%;
    position: relative;
    display: table;
    overflow: hidden;
}
.fs-background, .fs-background-container, .fs-background-media {
    -webkit-transition: none;
    transition: none;
}
.video-section .video-overlay h1 {
    font-weight: 700;
    color: #fff;
    font-size: 70px;
    text-transform: capitalize;
}
.video-section .video-overlay p {
    color: #fff;
    margin-bottom: 25px;
    margin-top: 20px;
}
.video-section .video-overlay {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    z-index: 2;
}
.video-section .fs-background-container {
    left: 0;
}

</style>
<script src="{{  asset('js/core.js') }}"></script>
<script src="{{  asset('js/transition.js') }}"></script>
<script src="{{  asset('js/background.js') }}"></script>

<script>
    var mp4 = "{{ $video_mp4 }}";
    var ogg = "{{ $video_ogg }}";

</script>
<script>
              // Formstone Background - Video Background Settings
    $(".video-section").background({
        source: {
            poster: ogg,
            mp4: mp4
        }
    });
</script>


@stop