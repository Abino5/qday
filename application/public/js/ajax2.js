$(document).ready(function () {

    var ajax_url_ad = 'http://localhost/ominzy/' + 'ajax/ad_loader';
    var NameLinkBreaker = " | ";
    $.ajax({
        url: ajax_url_ad,
        type: 'post',
        success: function (response) {

            $('.ad-loader').remove();


            var x = 0;

            var ad = $.parseJSON(response);

            $(ad).each(function (i, val) {
                var adname = val.adname;
                var adlink = val.adlink;
                var adpic = val.adpic;
                var admotto = val.admotto;
                var adtext = val.adtext;
                var feed_code3 = '<div class="ad-feed"> <div class="ad-image"><img class="ad-img" src="' + adpic + '" /> </div> <div class="ad-clearfx"></div> <p class="ad-motto">' + admotto + '</p> <p class="ad-company">' + adname + NameLinkBreaker + '</p><p class="ad-company"> </p><a href="' + adlink + '" class="ad-company-link" target="_blank">' + adlink + '</a> <p class="ad-text">' + adtext + '</p> </div>';

                $('#ad-section').prepend(feed_code3);

            });


        }
    });


    var url_tooltip = 'http://localhost/ominzy/' + 'ajax/tooltip';
    var user = window.username;
    var sphere = false;
    $.ajax({
        url: url_tooltip,
        data: {username: user},
        type: 'post',
        success: function (data) {

            if (data === '0') {
                var tooler1 = setTimeout(function () {

                    $('.float-sphere').css('opacity', '1');
                    $('.tooltiper').css('display', 'block');
                    var tooler = setTimeout(function () {
                        $('.tooltiper').animate({opacity: '1'}, 500);
                        $('.float-sphere').css('opacity', '.5');
                        $('.tooltiper').css('display', 'none');
                    }, 6000);

                }, 1500);

            }


        }
    });


    var ajaxu1 = '/reminders';
    var ajaxu = '/notifications';

    var ajaxurl2 = ajax22 + ajaxu;
    var ajaxurl3 = ajax22 + ajaxu1;

    $.ajax({
        url: ajaxurl2,
        data: {username: window.username},
        type: 'post',
        success: function (response) {


            if (response !== null) {


                if (response > 0) {
                    window.x = response;
                    $('#notifier').html(response);
                    $('#notifier').css('opacity', '1');
                    $('#notification').css('background-image', 'url(http://localhost/ominzy/application/public/img/notifywhite.png)');
                    $('#notification').css('opacity', '1');

                    $(json).each(function (i, val) {

                        //add notifications somewhere
                    });
                }
                if (response < 0) {
                    $('#notifier').html(response);
                    $('#notifier').css('opacity', '0');
                    $('#notification').css('background-image', 'url(http://localhost/ominzy/application/public/img/notify.png)');
                    $('#notification').css('opacity', '0.4');
                }

            }
        }
    });


    $.ajax({
        url: ajaxurl3,
        data: {username: window.username},
        type: 'post',
        success: function (response) {

            if (response > 0) {
                $('#r').html(response);
                $('#r').css('opacity', '1');
                $('#reminder').css('background-image', 'url(http://localhost/ominzy/application/public/img/reminderwhite.png)');
                $('#reminder').css('opacity', '1');
                $(json).each(function (i, val) {


                });
            }
            if (response < 0 || response === null) {
                $('#r').html(response);
                $('#r').css('opacity', '0');
                $('#reminder').css('background-image', 'url(http://localhost/ominzy/application/public/img/reminder.png)');
                $('#reminder').css('opacity', '0.4');
                $(json).each(function (i, val) {


                });
            }

        }
    });
    var ajaxu3 = '/notifications';
    var ajaxu5 = '/reminders';
    var ajaxurlreminder = ajax22 + ajaxu5;
    var ajaxurl3 = ajax22 + ajaxu3;
    window.setInterval(function(){


        var ajuxer2 = $.ajax({
            url: ajaxurl3,
            data: {username: window.username},
            type: 'post',
            success: function (response) {

                if (response !== null) {
                    if (response > window.x) {
                        var scroll2 = $(window).scrollTop();
                        window.x = response;
                        if (scroll2 > 750) {
                            $('#new_story').animate({opacity: '1'}, 1000);
                            $('#new_story').css('display', 'block');
                        }
                        else if (scroll2 < 751) {
                            $('#new_story').animate({opacity: '0'}, 1000);
                            $('#new_story').css('display', 'none');
                        }

                        $('#notifier').html(response);
                        $('#notifier').css('opacity', '1');

                        $(json).each(function (i, val) {


                        });
                    }
                    if (response <= 0) {
                        $('#notifier').html(response);
                        $('#notifier').css('opacity', '0');
                        $('#notification').css('background-image', 'url(http://localhost/ominzy/application/public/img/notify.png)');
                        $('#notification').css('opacity', '.4');

                    }
                    else{
                        $('#notifier').html(response);
                        $('#notifier').css('opacity', '1');
                        $('#notification').css('background-image', 'url(http://localhost/ominzy/application/public/img/notifywhite.png)');
                        $('#notification').css('opacity', '1');
                        $(json).each(function (i, val) {


                        });

                    }


                }
            }
        });
        $.ajax({
            url: ajaxurlreminder,
            data: {username: window.username},
            type: 'post',
            success: function (response) {
                if (response > 0) {
                    $('#r').html(response);
                    $('#r').css('opacity', '1');
                    $('#reminder').css('background-image', 'url(http://localhost/ominzy/application/public/img/reminderwhite.png)');
                    $('#reminder').css('opacity', '1');
                    $(json).each(function (i, val) {


                    });
                }
                if (response == 0) {
                    $('#r').html(response);
                    $('#r').css('opacity', '0');
                    $('#reminder').css('background-image', 'url(http://localhost/ominzy/application/public/img/reminder.png)');
                    $('#reminder').css('opacity', '0.4');
                    $(json).each(function (i, val) {


                    });
                }

            }
        });



    },15000);



    function stringifier(data) {
        title2 = JSON.stringify(data);
        var parsed = JSON.parse(title2);
        return parsed[0];
    }




    var interest = 'http://localhost/ominzy/ajax/interest/';
    $.ajax({
        url: interest,
        data: {username: user},
        type: 'post',
        success: function (data) {

            var json = $.parseJSON(data);
            $(json).each(function (i, val) {
                var final_data = val.interest;
                var final_data2 = final_data;
                final_data = ">> " +final_data;
                var data2 = '<div class="tags">'+final_data+'</div>';
                var inter_data = '<div class="interest" id="'+final_data2+'">'+final_data2+'<div title="'+final_data2+'" class="close-interest"></div> </div>';
                $('.interests').append(data2);
                $('.interests-area').append(inter_data);
            });

            //  var json = parseJSON(data);
            //   $(json).each(function(i){

            //  });

        }

    });
    var file = 'http://localhost/ominzy/ajax/files/';
    $.ajax({
        url: file,
        data: {username: user},
        type: 'post',
        success: function (data) {

            var json = $.parseJSON(data);
            $(json).each(function (i, val) {
                var type = val.type;
                var link = val.location;
                var name = val.name;
                if(type==='doc' || type ==='docx'){
                    var image = 'http://localhost/ominzy/application/public/img/word.png';
                }
                else if(type==='pdf'){
                    var image = 'http://localhost/ominzy/application/public/img/pdf.png';
                }

                var data = '<a href="'+link+'"> <div class="file"><img src="'+image+'" class="file-image"><p class="file-name">'+name+'</p></div></a>';
                var data2 = '<div class="file untifile"><div class="deleter"></div><img src="'+image+'" class="file-image"><p class="file-name">'+name+'</p> </div>';

                $('.user-files-location').append(data);
                $('.files-area').append(data2);

            });

            //  var json = parseJSON(data);
            //   $(json).each(function(i){

            //  });

        }

    });




    var items = 'http://localhost/ominzy/ajax/items/';
    var mcounter = 0;
    $.ajax({
        url: items,
        data: {username: user},
        type: 'post',
        success: function (data) {
            if(data == '[]'){
                $('.noitem').css('display','block');
            }
            else{
                $('.noitem').remove();
                var json = $.parseJSON(data);
                $(json).each(function (i, val) {

                    var title = val.title;

                    var location = val.location;
                    var definition = val.definition;
                    var id = val.itemid;
                    var price = val.price + ' ' + 'QR';
                    if(mcounter==9){
                        var data = '<div class="mitem"> <input type="hidden" value="'+id+'"/> <div class="mitem-image"><img src="'+location+'"/> </div> <div class="mitem-text"> <div class="mitem-title">'+title+'</div> <div class="mitem-desc">'+definition+'</div> </div> <div class="item-price">'+price+'</div></div><div class="itemview-all">>>> View All <<<</div>';
                        $('.market-items-location').append(data);
                        return false;
                    }
                    else{
                        var data = '<div class="mitem"> <input type="hidden" value="'+id+'"/> <div class="mitem-image"><img src="'+location+'"/> </div> <div class="mitem-text"> <div class="mitem-title">'+title+'</div> <div class="mitem-desc">'+definition+'</div> </div> <div class="item-price">'+price+'</div></div>';
                        $('.market-items-location').append(data);
                    }


                    mcounter = mcounter + 1;
                });
            }


            //  var json = parseJSON(data);
            //   $(json).each(function(i){

            //  });

        }

    });








});

