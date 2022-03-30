// html5media enables <video> and <audio> tags in all major browsers
// External File: http://api.html5media.info/1.1.8/html5media.min.js


// Add user agent as an attribute on the <html> tag...
// Inspiration: http://css-tricks.com/ie-10-specific-styles/
var b = document.documentElement;
b.setAttribute('data-useragent',  navigator.userAgent);
b.setAttribute('data-platform', navigator.platform );


// HTML5 audio player + playlist controls...
// Inspiration: http://jonhall.info/how_to/create_a_playlist_for_html5_audio
// Mythium Archive: https://archive.org/details/mythium/
jQuery(function ($) {
    var supportsAudio = !!document.createElement('audio').canPlayType;
    if (supportsAudio) {
        var index = 0,
            playing = false;
        mediaPath = '/playlist/',
        extension = '',
        tracks = [{
            "track": 1,
            "name": "Cueillir la Rose",
            "length": "05:30",
            "file": "CLR_CDP"
        }, {
            "track": 2,
            "name": "Dans Paris",
            "length": "05:38",
            "file": "DP_CDP"
        }, {
            "track": 3,
            "name": "Par derrière notre Maison",
            "length": "03:41",
            "file": "PDNM_CDP"
        }, {
            "track": 4,
            "name": "Se ieu Sabia",
            "length": "05:11",
            "file": "SIS_CDP"
        }],
        trackCount = tracks.length,
        npAction = $('#npAction'),
        npTitle = $('#npTitle'),
        audio = $('#audio1').bind('play', function () {
            playing = true;
            $('#btnPlayPause').removeClass('fa-play').addClass('fa-pause');
        }).bind('pause', function () {
            playing = false;
            $('#btnPlayPause').removeClass('fa-pause').addClass('fa-play');
        }).bind('ended', function () {
            console.log("ended");
            if ((index + 1) < trackCount) {
                index++;
                loadTrack(index);
                audio.play();
                $('#btnPlayPause').removeClass('fa-play').addClass('fa-pause');
                console.log(index);
                if(index > 0){
                    $('#btnPrev').removeClass('disabled');
                }
            } else {
                index = 0;
                loadTrack(index);
                audio.pause();
                $('#btnPlayPause').removeClass('fa-pause').addClass('fa-play');
                $('#btnNext').removeClass('disabled');
                $('#btnPrev').addClass('disabled');
            }
        }).get(0),
        btnPrev = $('#btnPrev').click(function () {
            if ((index - 1) > 0) {
                index--;
                ($('#btnNext').hasClass('disabled')) ? $('#btnNext').removeClass('disabled') : '';
                loadTrack(index);
                (playing) ? audio.play() : '';
            } else {
                index = 0;
                loadTrack(index);
                $('#btnPrev').addClass('disabled');
                (playing) ? audio.play() : '';
            }
        }),
        btnNext = $('#btnNext').click(function () {
            if ((index + 1) < trackCount-1) {
                index++;
                ($('#btnPrev').hasClass('disabled')) ? $('#btnPrev').removeClass('disabled') : '';
                loadTrack(index);
                (playing) ? audio.play() : '';
            } else {
                index = trackCount-1;
                loadTrack(index);
                $('#btnNext').addClass('disabled');
                (playing) ? audio.play() : '';
                $('#btnPlayPause').removeClass('fa-pause').addClass('fa-play');
            }
        }),
        li = $('#plList li').click(function () {
            var id = parseInt($(this).index());
            if (id !== index) {
                playTrack(id);
                if(id == trackCount-1){
                    $('#btnNext').addClass('disabled');
                    ($('#btnPrev').hasClass('disabled')) ? $('#btnPrev').removeClass('disabled') : '';
                }else if(id == 0){
                    $('#btnPrev').addClass('disabled');
                    ($('#btnNext').hasClass('disabled')) ? $('#btnNext').removeClass('disabled') : '';
                }else if( 0 < id < trackCount-1){
                    $('#btnPrev').removeClass('disabled');
                    $('#btnNext').removeClass('disabled');
                };
            }
        }),
        loadTrack = function (id) {
            $('.plSel').removeClass('plSel');
            $('#plList li:eq(' + id + ')').addClass('plSel');
            npTitle.text(tracks[id].name);
            index = id;
            audio.src = mediaPath + tracks[id].file + extension;
            console.log(index);
        },
        playTrack = function (id) {
            loadTrack(id);
            audio.play();
        },
        btnPause = $('#btnPause').click(function () {
            audio.pause();
        }),
        btnPlay = $('#btnPlay').click(function () {
            audio.play();
        }),
        btnPlayPause = $('#btnPlayPause').click(function() {
            (!playing) ? audio.play() : audio.pause();
        });

        extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
        loadTrack(index);
    }
});