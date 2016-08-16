
    
    $("div.feed-options-selected").addClass('feed-options-unselected');
    $("div.feed-options-selected").removeClass('feed-options-selected');
    $('#' + type).addClass('feed-options-selected');
    $('#jobs').on('click', function () {
        window.location.href = 'http://localhost/ominzy/' + "home/jobs/";
    });
    $('#market').on('click', function () {
        window.location.href = 'http://localhost/ominzy/' + "home/market/";
    });
    $('#forum').on('click', function () {
        window.location.href = 'http://localhost/ominzy/' + "home/forum/";
    });
    $('#places').on('click', function () {
        window.location.href = 'http://localhost/ominzy/' + "home/places/";
    });
    $('#news').on('click', function () {
        window.location.href = 'http://localhost/ominzy/' + "home/news/";
    });
    if (window.mode === 'politics') {
        $('#news').removeClass('feed-switch');
        $('#news').addClass('selected');

    }
    else if (window.mode === 'jobs') {
        $('#jobs').removeClass('feed-switch');
        $('#jobs').addClass('selected');
    }
    else if (window.mode === 'market') {
        $('#market').removeClass('feed-switch');
        $('#market').addClass('selected');
    }
    else if (window.mode === 'forum') {
        $('#forum').removeClass('feed-switch');
        $('#forum').addClass('selected');
    }
    else if (window.mode === 'places') {
        $('#places').removeClass('feed-switch');
        $('#places').addClass('selected');
    }


    $('.framer').attr("src", "http://www.google.com/");


    var settings;
    var sphere = false;
    $('#new_story').on('click', function () {
        $("html, body").animate({scrollTop: 0}, "fast");
        $('#new_story').css('display', 'none');
    });

    $('.temp-feed').css('display', 'block');
//$('#ad-loader').css('display','block');


    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        // Do something
        if (scroll > 750) {
//scroll = scroll - (scroll/1.1);
            $('#ad-section2').addClass('fixed-search');
            //$("#ad-section").css({top: scroll});
            //$('#sticky-anchor').height($('#ad-section').outerHeight());
        } else {
            $('#ad-section2').removeClass('fixed-search');
            // $('#sticky-anchor').height(0);
        }
    });


    $('.closer').on('click', function () {
        $('body').css('maxHeight', '');
        $('body').css('overflowY', 'auto');
        enableScroll();
        $('.setting').css('display', 'none');
        $('#settings-loader').css('display', 'block');
    });

    $('#account').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });

    });


    $('#preference').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });
    });
    $('#privacy').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });
    });
    $('#security').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });
    });
    $('#apis').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });
    });
    $('#help').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });
    });
    $('#authentication').on('click', function (e) {

        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });


    });


    $('#tagsedit').on('click', function () {
        settingval = $(this).attr('id');
        settings = settingsg + '/' + settingval;

        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.framer').attr('src', settings);
        $('.framer').on('load', function () {
            $('#settings-loader').fadeOut('fast');
        });
    });


// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    var keys = {37: 1, 38: 1, 39: 1, 40: 1};

    function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault)
            e.preventDefault();
        e.returnValue = false;
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    function disableScroll() {
        if (window.addEventListener) // older FF
            window.addEventListener('DOMMouseScroll', preventDefault, false);
        window.onwheel = preventDefault; // modern standard
        window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
        window.ontouchmove = preventDefault; // mobile
        document.onkeydown = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        if (window.removeEventListener)
            window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.onmousewheel = document.onmousewheel = null;
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }


    $('#sports').on('click', function () {


        if ($(this).hasClass("feed-options-selected")) {
            e.preventDefault();
        }
        else {
            window.location.href = 'http://localhost/ominzy/' + "home/news/sports/";
        }
    });
    $('#buzz').on('click', function () {


        if ($(this).hasClass("feed-options-selected")) {
            e.preventDefault();
        }
        else {
            window.location.href = 'http://localhost/ominzy/' + "home/news/buzz/";
        }
    });
    $('#entertainment').on('click', function () {
        if ($(this).hasClass("feed-options-selected")) {
            e.preventDefault();
        }
        else {
            window.location.href = 'http://localhost/ominzy/' + "home/news/entertainment";
        }
    });
    $('#technology').on('click', function () {
        if ($(this).hasClass("feed-options-selected")) {
            e.preventDefault();
        }
        else {
            window.location.href = 'http://localhost/ominzy/' + "home/news/technology";
        }
    });
    $('#politics').on('click', function () {
        if ($(this).hasClass("feed-options-selected")) {
            e.preventDefault();
        }
        else {
            window.location.href = 'http://localhost/ominzy/' + "home/news/politics";

        }
    });


    $('.float-sphere').on('mouseover', function () {
        $this.removeAttr('title');
    });
    $('.float-sphere').draggable({
        stop: function (event, ui) {
            // event.toElement is the element that was responsible
            // for triggering this event. The handle, in case of a draggable.
            $(event.toElement).one('click', function (e) {
                e.stopImmediatePropagation();
            });
        }
    });

    $('.float-sphere').on('click', function (e) {
        if (e.target !== this)
            return;
        if (sphere === false) {


            $('.sphere-content-area').animate({opacity: 1}, 300);
            $('.sphere-content').animate({width: '520px'}, 100);
            $('.float-sphere').css('opacity', '1');
            $('.sphere-btns').css('visibility', 'visible');


            $('.float-sphere').css('backgroundImage', 'url("http://localhost/ominzy/application/public/img/_logo02.png")');
            $('.float-sphere').animate({width: 45, height: 45}, 200);

            /*
             //for firefox
             "-moz-animation-name":"rotatebox",
             "-moz-animation-duration":"0.5s",
             "-moz-animation-iteration-count":"1",
             "-moz-animation-fill-mode":"forwards",

             //for safari & chrome
             "-webkit-animation-name":"rotatebox",
             "-webkit-animation-duration":"0.5s",
             "-webkit-animation-iteration-count":"1",
             "-webkit-animation-fill-mode" : "forwards",
             */


            sphere = true;
        }
        else {

            $('.float-sphere').css('backgroundImage', 'url("http://localhost/ominzy/application/public/img/_logo01.png")');

            $('.float-sphere').animate({width: 50, height: 50}, 200);
            $('.sphere-content-area').animate({opacity: 0}, 100);
            $('.sphere-content').animate({width: '0px'}, 100);
            /*/for firefox
             "-moz-animation-name":"rotatebox2",
             "-moz-animation-duration":"0.5s",
             "-moz-animation-iteration-count":"1",
             "-moz-animation-fill-mode":"forwards",

             //for safari & chrome
             "-webkit-animation-name":"rotatebox2",
             "-webkit-animation-duration":"0.5s",
             "-webkit-animation-iteration-count":"1",
             "-webkit-animation-fill-mode" : "forwards",
             */

            $('.sphere-content').animate({width: '0px'}, 100);
            $('.float-sphere').css('opacity', '0.5');
            $('.sphere-btns').css('visibility', 'hidden');
            sphere = false;
        }

    });


    $("#sphere-jtype").on('click', function (e) {
        e.preventDefault();
    });




