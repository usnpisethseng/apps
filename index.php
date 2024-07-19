<p align="center">
 Live Streaming ...  </p>
<!-- Live -->			
<!-- CSS  -->
 <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">

<p align="center">
<!-- HTML -->
<video id='playlists'class="video-js vjs-default-skin"  width="" height="480" controls="autoplay">
<source type="application/vnd.apple.mpegurl" src="./Videos/vdo.m3u8">
<source type="application/x-mpegURL" src="./Videos/vdo.m3u8">
<source type="video/mp4" src="./Videos/vdo01.mp4">

</video></p>

<!-- JS code -->
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
<script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

<script>
var player = videojs('playlists');
player.play();
</script>
<p align="center">

</p>