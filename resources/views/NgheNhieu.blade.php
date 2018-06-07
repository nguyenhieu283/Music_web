<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nghe nhiều</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_nghenhieu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/nghenhieu.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
@extends('layouts.master_header')
@section('content')
    <div class="vn1">
        <div class="song_poster">
            <img style="width: 834px; height: 300px;" src="{{ asset('image/world_cup.jpg') }}">
            <p class="song_name"> Bài hát: {{$first_song->description}}</p>
            <div class="auto_next">
                <img id="btn_pre" src="{{ asset('image/previous.ico') }}">
                <img id="btn_play" src="{{ asset('image/play.ico') }}"> 
                <img id="btn_next" src="{{ asset('image/next.ico') }}">
            </div>
            <audio id="song_control" src="{{ asset('mp3/'. $first_song->name) }} " controls></audio>
        </div>
        <div class="table_song" id="top_song">
            <ul class="list_songs" style="width: 700px;">
                @foreach ($songs as $song)
                    <li id="{{$song->id}}">
                        <div class="item_song" url="{{ asset('mp3/'. $song->name) }}">
                            <p style="margin: center">&nbsp &nbsp {{$song->id}} &nbsp {{$song->description}}</p>
                            <audio src="{{ asset('mp3/'. $song->name) }}" controls></audio>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="table_mv">
            <ul class="list_videos">
                @foreach ($videos as $video)
                    <li id="{{$video->id}}">
                        <a class="image" href="#">
                            <img src="{{ asset('image/'. $video->src) }}">
                        </a>
                        <p class="info">
                            <a class="name" href="#">{{$video->name}}</a>
                            <br>
                            <span class="single" style="color: black">{{$video->single}}</span>
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
<script>
    var imageTracker = 'playImage';
//set events handlers for on click
document.getElementById("btn_play").onclick = function() {
    swapImage();
    playPause();
}
document.getElementById("btn_next").onclick = function() {
    forward();
}
document.getElementById("btn_pre").onclick = function() {
    backward();
}

//hadlers
var swapImage = function() {
    var image = document.getElementById('btn_play');
    if (imageTracker == 'playImage') {
        image.src = '../image/pause.ico';
        imageTracker = 'stopImage';
    } else {
        image.src = '../image/play.ico';
        imageTracker = 'playImage';
    }
};

//playing flag 
var musicTracker = 'noMusic';
//playlist audios
var audios = [];
$(".item_song").each(function(){
    var load = new  Audio($(this).attr("url"));
    load.load();
    load.addEventListener('ended',function(){
       forward();
    });
    audios.push(load);
});
//active track
var activeTrack = 0;

    
var playPause = function() {
    if (musicTracker == 'noMusic') {
        audios[activeTrack].muted = true;
        audios[activeTrack].play();
        musicTracker = 'playMusic';
        showPlaying();
    } else {
        audios[activeTrack].pause();
        musicTracker = 'noMusic';
        pauseSongPlaying();
    }
};

var forward = function(){
    function increment(){
        if (activeTrack < audios.length - 1)
        activeTrack++;
        else activeTrack = 0;
    }
    if (musicTracker == 'playMusic') {
        audios[activeTrack].pause();
        increment();
        audios[activeTrack].muted = true;
        audios[activeTrack].play();
        showPlaying();
    } else {
        increment();
        var src = audios[activeTrack].src;
        var song = document.getElementById("song_control");
        song.setAttribute("src", src);
    }
};

var backward = function(){
    function decrement(){
        if (activeTrack > 0)
            activeTrack--;
        else activeTrack = audios.length -1;
    }
    if (musicTracker == 'playMusic') {
        audios[activeTrack].pause();
        decrement();
        audios[activeTrack].muted = true;
        audios[activeTrack].play();
        showPlaying();
    } else {
        decrement();
        var src = audios[activeTrack].src;
        var song = document.getElementById("song_control");
        song.setAttribute("src", src);
    }
};

var showPlaying = function(){
    var src = audios[activeTrack].src;
    var song = document.getElementById("song_control");
    song.setAttribute("src", src);
    if(musicTracker = "playMusic") {
        song.play();
    }
    $(".item_song").removeClass("playing");
    $("div[url='" + src + "']").addClass("playing");
    console.log( $("div[url='" + src + "']"));
};

var pauseSongPlaying = function(){
    var src = audios[activeTrack].src;
    var song = document.getElementById("song_control");
    song.pause();
};
</script>
</html>
@endsection
