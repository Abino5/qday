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

    if (mode === 'news') {

        var ajax_url2 = 'http://localhost/ominzy/' + 'ajax/news_feed_updates';
        var ajax_url = 'http://localhost/ominzy/' + 'ajax/news_feed';
        $.ajax({
            url: ajax_url,
            data: {differ: '0', type: type},
            type: 'post',
            success: function (response) {


                    var i = 0;
                    $('.temp-feed').remove();
                    var arr = $.parseJSON(response);
                    // ('.temp-feed').css('display','none');
                    $(arr).each(function (i, val) {
                        var imageUrl = val.image;
                        var image = new Image();
                        image.src = imageUrl;
                        var title = val.title;
                        title2 = title.replace(/ /g, '-');
                        title2 = title2.replace(/,/g, '');
                        title2 = title2.replace(/'/g, '');
                        title2 = title2.replace(/"/g, '');
                        var link = 'http://localhost/ominzy/' + 'home/news/'+title2;
                        var description = val.description;
                        var description2 = val.description;
                        description = description.substring(0, description.indexOf('.'));
                        description = description + '...'

                        var pubdate = val.pubdate;

                        $.ajax(imageUrl, {
                            statusCode: {
                                404: function() {
                                    imageUrl = 'http://localhost/ominzy/application/public/img/default.jpg';
                                },
                                200: function() {
                                  //  $("#result1").html("working");
                                }
                            }
                        });

                        if (imageUrl === '0' || imageUrl === '[object Object]') {
                            var feed_code6 = '<div class="feed"><div class="feed-title"><div class="feed-title-text">' + title + '</div><div class="feed-source">' + pubdate + '</div></div><div style="clear: both;"></div> <div class="feed-description"> <p class="feed-description-text">' + description + ' </p>  <input type="submit" class="feed-description-readmore" value="Read more"/> </div> <div class="feed-reaction"></div> </div></form>';

                        }
                        else {
                            var feed_code6 = '<div class="feed"><div class="feed-title"><div class="feed-title-text">' + title + '</div><div class="feed-source">' + pubdate + '</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="' + imageUrl + '" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text">' + description + ' </p> <a href="'+link+'"> <div class="feed-description-readmore">Read more</div> </a></div> <div class="feed-reaction"></div> </div></form>';

                        }
                        $(".backup-image").on('error',function(){
                            $(this).attr('src', 'http://localhost/ominzy/application/public/img/default.jpg');
                        });
                        $('.feeds-container').append(feed_code6);
                        $('.feed-description').find('iframe').remove();
                        $('.feed-description').find('small').remove();
                        $('.feed-description p a').prop('target', '_blank')
                    });



            }
        });



/*

        var updater = window.setInterval(function () {

            /// call your function here
            var ajuxer1 = $.ajax({
                url: ajax_url2,
                data: {differ: '1', type: type},
                type: 'post',
                success: function (data) {

                    var json = $.parseJSON(data);
                    if (data !== '[]') {

                        var scroll1 = $(window).scrollTop();

                        if (scroll1 > 750) {
                            $('#new_story').animate({opacity: '1'}, 1000);
                            $('#new_story').css('display', 'block');
                        }
                        else if (scroll1 < 751) {
                            $('#new_story').animate({opacity: '0'}, 1000);
                            $('#new_story').css('display', 'none');
                        }



                        else if (type === 'politics') {
                            var json = $.parseJSON(data);

                            var i = 0;
                            // ('.temp-feed').css('display','none');
                            $(json).each(function (i, val) {
                                imageUrl = val.image;
                                if (imageUrl == '[object Object]'){
                                    imageUrl = 'http://localhost/ominzy/application/public/img/default.jpg';
                                }
                                else{
                                    var image = new Image();
                                    image.src = imageUrl;
                                    $(image).on('load', function() {
                                        if (image.width == 0 || image.width ==24) {
                                            imageUrl = 'http://localhost/ominzy/application/public/img/default.jpg';
                                        }
                                    });
                                }

                                link = stringifier(val.link);
                                description = val.description;
                                description = description.substring(0, description.indexOf('.'));
                                description = description + '...'
                                pubdate = val.pubdate;
                                title = stringifier(val.title);
                                if (imageUrl === '[object Object]') {
                                    feed_code8 = '<div class="feed"><div class="feed-title"><div class="feed-title-text">' + title + '</div><div class="feed-source">' + pubdate + '</div></div> <div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text">' + description + ' </p> <a class="d_link" href="' + link + '" target="_blank"> <div class="feed-description-readmore">Read more</div></a> </div> <div class="feed-reaction"></div> </div>';

                                }
                                else {
                                    feed_code8 = '<div class="feed"><div class="feed-title"><div class="feed-title-text">' + title + '</div><div class="feed-source">' + pubdate + '</div></div> <div class="feed-thumbnail"><div><img class="feed-image" src="' + imageUrl + '" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text">' + description + ' </p>  <a class="d_link" href="' + link + '" target="_blank"><div class="feed-description-readmore">Read more</div></a> </div> <div class="feed-reaction"></div> </div>';

                                }

                                $('.feeds-container').prepend(feed_code8);

                            });
                        }



                    }


                }
            });


        }, 15000);
*/

    }

    else if (mode === 'jobs') {


        var ajax_url2 = 'http://localhost/ominzy/' + 'ajax/news_feed_updates';
        var ajax_url_jobs = 'http://localhost/ominzy/' + 'ajax/jobs_feed';
        $.ajax({
            url: ajax_url_jobs,
            data: {differ: '0', type: type, location:location2, username: username},
            type: 'post',
            success: function (response) {


                var arr = $.parseJSON(response);
                if (arr.notfound) {
                    $('#job-feed-temp').css('background-image', 'url(http://localhost/ominzy/application/public/img/nothing.png)');
                }
                else{
                    $('#job-feed-temp').remove();
                var i = 0;
                $('.temp-feed').remove();

                // ('.temp-feed').css('display','none');
                $(arr).each(function (i, val) {
                    var job_title = val.job_title;
                    var job_id = val.job_id;
                    var applied = val.applied;
                    var applied2 = applied + 'success';
                    var job_poster = val.job_poster;
                    var post_time = val.post_time;
                    var post_date2 = val.post_date;
                    var post_date = post_date2.slice(0, -8);
                    var job_status = val.job_status;
                    var job_definition = val.job_definition;
                    var job_type = val.job_type;
                    var job_level = val.job_level;
                    var applicant_location = val.applicant_location;
                    var experience = val.experience;
                    var salary = val.salary;
                    var join = val.join;
                    var job_poster_image = val.job_poster_image;

                    var feed_code6 = '<div class="job-feed" id="' + job_id + 'feed' + '"><div class="job-poster"><div class="job-poster-image"><img src="' + job_poster_image + '" width="50" height="50" /></div><div class="job-poster-title-date"><p class="job-poster-title">' + job_poster + '</p><p class="job-poster-date">' + post_date + ' - ' + post_time + '</p></div></div><div class="job-status"> ' + job_status + '</div><div class="job-title">' + job_title + '</div><div class="job-definition">' + job_definition + '</div><div class="job-expander" value="' + job_id + '" id="' + job_id + 'feeder' + '"></div><div class="job-requirements"><div class="req-section"><div class="req-title">Employment type:</div><div class="req-title-response">' + job_type + '</div></div><div class="req-section"><div class="req-title">Job Level:</div><div class="req-title-response">' + job_level + '</div></div><div class="req-section"><div class="req-title">Applicant Location:</div><div class="req-title-response">' + applicant_location + '</div></div><div class="req-section"><div class="req-title">Experience:</div><div class="req-title-response">' + experience + '</div></div><div class="req-section"><div class="req-title">Salary:</div><div class="req-title-response">' + salary + '</div></div><div class="req-section"><div class="req-title">Join:</div><div class="req-title-response">' + join + '</div></div></div><div class="clearfix2"></div><div class="job-buttons"><div class="job-apply-button' + ' ' + applied + '" id="' + job_id + '">APPLY NOW!</div><div class="job-apply-button-loading' + ' ' + job_id + ' ' + applied + '"></div><img src="http://localhost/ominzy/application/public/img/jobsuccess.gif" class="job-apply-button-success' + ' ' + applied2 + '"/> </div></div>';


                    if (applied === 1) {
                        //   $('#'+job_id).css('visibility','hidden');
                        //  $('.'+job_id).css('visibility','hidden');
                        //  $('.'+id).css('background-image', 'url(http://localhost/ominzy/application/public/img/jobsuccess.png)');

                    }


                    $('.feeds-container').append(feed_code6);

                });

            }
            }
        });
        $('.applied').remove();



    }

    $(document).on('click', '.job-apply-button', function () {
        var insert_url = 'http://localhost/ominzy/' + 'ajax/job_insert';
        var id = $(this).attr('id');
        $(this).css('visibility', 'hidden');

        $('.' + id).css('visibility', 'visible');

        $.ajax({
            url: insert_url,
            data: {username: user, job_id: id},
            type: 'post',
            success: function (data) {

                if (data == 0) {
                    $('.' + id).css('visibility', 'hidden');
                    $('.' + id).next().css('visibility', 'visible');
                    var image = new Image();
                    image.src = 'http://localhost/ominzy/application/public/img/jobsuccess.gif';
                    $('.' + id).next().attr('src', image.src);
                }
                else if (data == 1) {
                    alert('You have applied already');
                    $('.' + id).css('visibility', 'hidden');
                    $('.' + id).next().css('visibility', 'visible');
                    var image = new Image();
                    image.src = 'http://localhost/ominzy/application/public/img/jobsuccess.gif';
                    $('.' + id).next().attr('src', image.src);
                }

            }
        });


    });

    $(document).on('click', '.job-expander', function () {
        var val = $(this).attr('value');


        val = val + 'feed';
        var val2 = val + 'er';

        var height = $('#' + val).height();
        if (height > 500) {

            $(this).css('background-image', 'url(http://localhost/ominzy/application/public/img/icon-down.png)');
            $('#' + val).animate({height: 340}, 500);
            $('#' + val).css('overflow', 'hidden');
        }
        else if (height < 500) {
            $(this).css('background-image', 'url(http://localhost/ominzy/application/public/img/icon-up.png)');
            $('#' + val).animate({height: 770}, 500);
            $('#' + val).css('overflow', 'hidden');
        }

    });
    $(document).on('click', '#sphere-go', function () {

        var job_title = $('#job-title option:selected').val();
        var job_location = $('#job-location option:selected').val();

        window.location.href = 'http://localhost/ominzy/home/jobs/' + job_title + '/' + job_location;
    });

    function stringifier(data) {
        title2 = JSON.stringify(data);
        var parsed = JSON.parse(title2);
        return parsed[0];
    }

var interest = 'http://localhost/ominzy/ajax/interest/';
    $.ajax({
        url: interest,
        data: {username: window.user},
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
        data: {username: window.user},
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
        data: {username:window.user},
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

