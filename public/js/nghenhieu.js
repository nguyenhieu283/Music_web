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
        audios[activeTrack].play();
        musicTracker = 'playMusic';
    } else {
        audios[activeTrack].pause();
        musicTracker = 'noMusic';
    }
    showPlaying();
};

var stop = function() {
    if (musicTracker == 'playMusic') {
        audios[activeTrack].pause();
        audios[activeTrack].currentTime = 0;
        audios[activeTrack].play();
    } else {
        audios[activeTrack].currentTime = 0;
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
        //audios[activeTrack].currentTime = 0;
        increment();
        audios[activeTrack].play();
    } else {
        increment();
    }
    showPlaying();
};

var backward = function(){
    function decrement(){
        if (activeTrack > 0)
            activeTrack--;
        else activeTrack = audios.length -1;
    }
    if (musicTracker == 'playMusic') {
        audios[activeTrack].pause();
        //audios[activeTrack].currentTime = 0;
        decrement();
        audios[activeTrack].play();
    } else {
        decrement();
    }
    showPlaying();
};

var showPlaying = function(){
    var src = audios[activeTrack].src;
    document.getElementById("song_control").setAttribute("src", src);
    $(".item_song").removeClass("playing");
    $("div[url='" + src + "']").addClass("playing");
    console.log( $("div[url='" + src + "']"));
};