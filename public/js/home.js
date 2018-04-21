var count = 0;
$(document).ready(function () {
    $('.playmp3, .pausemp3').click(function () {
        if (count == 0) {
            audio.play();
            $('.playmp3').css({'display': 'none'});
            $('.pausemp3').css({'display': 'block'});
            count++;
        } else {
            $('.pausemp3').css({'display': 'none'});
            $('.playmp3').css({'display': 'block'});
            audio.pause();
            count = 0;
        }
    });

    $('.nextmp3').click(function () {
        $('.pausemp3').css({'display': 'none'});
        $('.playmp3').css({'display': 'block'});
        audio.pause();
        count = 0;
        var track = $('li.track').get(1);
        audio.src = "mp3/" + track.getAttribute('value');

    });

    $('#toTop').click(function () {
        $('body , html').animate({
            scrollTop: 0
        }, 2500);
    })
});


