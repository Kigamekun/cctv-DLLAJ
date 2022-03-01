<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <video id="video" src="http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN.stream/playlist.m3u8" controls
        width="200px" height="200px"></video>
    <script>
        if (Hls.isSupported()) {
            var video = document.getElementById('video');
            var hls = new Hls();
            hls.loadSource('http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN.stream/playlist.m3u8');
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, function() {
                video.play();
            });
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN.stream/playlist.m3u8';
            video.addEventListener('canplay', function() {
                video.play();
            });
        }
    </script>



</body>

</html>
