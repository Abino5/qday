$(document).ready(function () {
    var ccount = 0;
    $('.user-image').css('background-image','url(' + userbgimage + ')');
    $('.user-type-image').css('background-image','url(' + userimage + ')');
$('.comment-item').on('click',function(){

    if(ccount==0){
        $(this).parent().next(".comments").css('display','block');
    ccount=1;
   }
    else{
       $(this).parent().next(".comments").css('display','none');
ccount = 0;
    }

});

    var del_files_array = [];
    var del_files_counter = 0;
    var urler = 'http://localhost/ominzy/home/uploader/';
    $('#add-file').attr('src',urler);
    if(mode==='jobs'){
    $('.feed-switcher').css('height','80px');
}
   $('#home2').on('click',function(){
       window.location.href='http://localhost/ominzy/home/news/';

   });
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
        $('#add-file').attr('src','');
        $('#add-file').attr('src','http://localhost/ominzy/home/uploader/');

        $('body').css('maxHeight', '');
        $('body').css('overflowY', 'auto');
        enableScroll();
        $('.setting').css('display', 'none');

    });
    $(document).on('click', '#usernsubmit', function () {


        var val = $("#usern").val();
        if(val==''){
            $("#usern").css('border','1px solid red');

            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#user-load').css('display','block');
            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:val,type:'username'},
                type:'post',
                success:function(data){

                    if(data == 1){
                        $('#usern').val('');
                        $('#usern').attr('placeholder',val);
                        $('#user-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{
                        $('#usern').val('');
                        $('#usern').attr('placeholder','Error, please try again later.');
                        $('#usern').css('border',('1px solid red'));
                        $('#user-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });

    $(document).on('click', '#fnamesubmit', function () {


        var fname = $("#fnamer").val();
        if(fname==''){
            $("#fnamer").css('border','1px solid red');

            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#fname-load').css('display','block');
            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:fname,type:'name'},
                type:'post',
                success:function(data){

                    if(data == 1){
                        $('#fnamer').val('');
                        $('#fnamer').attr('placeholder',fname);
                        $('#fname-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{
                        $('#fname').val('');
                        $('#fname').attr('placeholder','Error, please try again later.');
                        $('#fname').css('border',('1px solid red'));
                        $('#fname-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });



    $(document).on('click', '#emailsubmit', function () {


        var val = $("#emailer").val();
        if(val==''){
            $("#emailer").css('border','1px solid red');

            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#email-load').css('display','block');
            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:val,type:'email'},
                type:'post',
                success:function(data){

                    if(data == 1){
                        $('#emailer').val('');
                        $('#emailer').attr('placeholder',val);
                        $('#email-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{
                        $('#emailsubmit').remove();
                        $('#emailer').val('');
                        $('#emailer').attr('placeholder','Error, please try again later.');
                        $('#emailer').css('border',('1px solid red'));
                        $('#email-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });




    $(document).on('click', '#nationalitysubmit', function () {


        var val = $("#nationaliter").val();
        if(val==''){
            $("#nationaliter").css('border','1px solid red');

            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#nation-load').css('display','block');
            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:val,type:'nationality'},
                type:'post',
                success:function(data){

                    if(data == 1){
                        $('#nationaliter').val('');
                        $('#nationaliter').attr('placeholder',val);
                        $('#nation-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{
                        $('#nationalitysubmit').remove();
                        $('#nationaliter').val('');
                        $('#nationaliter').attr('placeholder','Error, please try again later.');
                        $('#nationaliter').css('border',('1px solid red'));
                        $('#nation-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });




    $(document).on('click', '#phonesubmit', function () {


        var val = $("#phoner").val();
        if(val==''){
            $("#phoner").css('border','1px solid red');

            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#phone-load').css('display','block');
            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:val,type:'phone'},
                type:'post',
                success:function(data){

                    if(data == 1){
                        $('#phoner').val('');
                        $('#phoner').attr('placeholder',val);
                        $('#phone-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{
                        $('#phonesubmit').remove();
                        $('#phoner').val('');
                        $('#phoner').attr('placeholder','Error, please try again later.');
                        $('#phoner').css('border',('1px solid red'));
                        $('#phone-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });




    $(document).on('click', '#locationsubmit', function () {


        var val = $("#locationer").val();
        if(val==''){
            $("#locationer").css('border','1px solid red');

            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#location-load').css('display','block');
            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:val,type:'location'},
                type:'post',
                success:function(data){

                    if(data == 1){
                        $('#locationsubmit').remove();
                        $('#locationer').val('');
                        $('#locationer').attr('placeholder',val);
                        $('#location-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{

                        $('#locationer').val('');
                        $('#locationer').attr('placeholder','Error, please try again later.');
                        $('#locationer').css('border',('1px solid red'));
                        $('#location-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });




    $(document).on('click', '#passwordsubmit', function (e) {
        var val = $("#passworder").val();
        var val2 = $("#passworder2").val();
        if(val=='' || val2==''){
            $("#passworder2").css('border','1px solid red');
            $("#passworder").css('border','1px solid red');
            e.preventDefault();
        }
        else{
            $(this).css('display','none');
            $('#pass-load').css('display','block');


            var user_url = 'http://localhost/ominzy/' + 'account/userpost';

            $.ajax({
                url:user_url,
                data:{value:val,type:'password',value2:val2},
                type:'post',
                success:function(data){
alert(data);
                    if(data == 1){
                        $('#passwordsubmit').remove();


                        $('#pass-load').css('background-image','url(http://localhost/ominzy/application/public/img/jobsuccess.gif)');
                    }
                    else{

                        $('#passworder').val('');
                        $('#passworder').attr('placeholder','Incorrect old password');
                        $('#passworder').css('border',('1px solid red'));
                        $('#pass-load').css('background-image','url(http://localhost/ominzy/application/public/img/no.png)');
                    }

                }
            })
        }

    });










    $('#account').on('click', function () {


        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.account-info').css('display', 'block');


    });



    $('#jinterest').on('click', function () {


        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.jinterest').css('display', 'block');


    });
    window.counterfile = $(".files-area").children().length;
    $('#filesedit').on('click', function () {


        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.files-window').css('display', 'block');


    });



    $('#preference').on('click', function () {
        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();

        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.preferences').css('display', 'block');
        });

    $('#privacy').on('click', function () {
        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.privacy').css('display', 'block');
    });
    $('#security').on('click', function () {
        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.security').css('display', 'block');
    });

    $('#help').on('click', function () {
        $('html,body').animate({scrollTop: 0}, 'fast');
        $('body').css('maxHeight', '535');
        $('body').css('overflowY', 'hidden');
        disableScroll();
        $('.setting').css('display', 'block');
        $('.setting-box').css('display', 'none');
        $('.help').css('display', 'block');
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
    window.counter = $(".interests-area").children().length;
    $(document).on('click','.close-interest',function(){

        $(this).parent().remove();
        window.counter = window.counter-1;
    });
    $(document).on('click','.deleter',function(){
        var item = $(this).parent().find('.file-name').html();
        del_files_array[del_files_counter] = item;

        del_files_counter = del_files_counter+1;
        $(this).parent().remove();
        window.counter = window.counterfile-1;
    });
    $('#add-interest-btn').on('click',function(e){
        window.counter = $(".interests-area").children().length;

       var interest = $('#add-interest-text').val();
        interest = interest.toUpperCase();
        if(interest==''){
            $('.jinterest-status').html('Type a word above to save it in your interest area');
            e.preventDefault();
        }
        else{

            if(window.counter<=9){
                $('.jinterest-status').css('color','green');
                $('.jinterest-status').html('Added Successfully');
                $('#add-interest-text').val('');

                var inter_data_new = '<div class="interest" id="'+interest+'">'+interest+'<div class="close-interest"></div> </div>';
                $('.interests-area').append(inter_data_new);
            }
            else{
                $('.jinterest-status').css('color','red');
                $('.jinterest-status').html('You can\'t have more than 10 tags on your interest area');
                e.preventDefault();
            }


        }
    });
    $('#add-file-text').bind('change', function() {

        //this.files[0].size gets the size of your file.

        var validExtensions = ['docx','pdf',['doc']]; //array of valid extensions
        var fileName = this.files[0].name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        if ($.inArray(fileNameExt, validExtensions) == -1){
            alert('error');
        }
        else{

            alert('done');
        }

    });



        $('#upload_file').submit(function(e) {

            var file_url = 'http://localhost/ominzy/' + "ajax/upload_file";
            e.preventDefault();
            $.ajaxFileUpload({
                url 			:file_url,
                secureuri		:false,
                fileElementId	:'add-file-text',
                dataType		: 'json',

                success	: function (data, status)
                {
                    if(data.status != 'error')
                    {

                    }
                    alert(data.msg);
                }
            });
            return false;
        });




    $('#add-interest-text').keypress(function (e) {
        var key = e.which;
        if(key == 13)  // the enter key code
        {
            $('#add-interest-btn').trigger('click');
            return false;
        }
    });

    $('#saveexitj2').on('click',function(e) {
        var del_files = 'http://localhost/ominzy/' + "ajax/del_files/";

        if(del_files_array[0]=='' || del_files_array[0]==null){
            $('.closer').trigger('click');
        }
        else{
            $.ajax({
                url: del_files,
                data: {files: del_files_array},
                type: 'post',
                success: function (data) {
                    $('.closer').trigger('click');
                    location.reload();
                }
            });
        }
    });
$(document).on('click','.mitem',function(){
    

    var id = $(this).find('input').val();

    window.location.href = 'http://localhost/ominzy/home/market/' + id;
});
    $('#saveexitj').on('click',function(e){
        $('.jinterest-status').html('');
        $('#add-interest-text').attr('value','');
        window.counter = $(".interests-area").children().length;
        var finalnumber = window.counter;
        var obj = {};

var jcount;
        for(jcount=1;jcount<=finalnumber;jcount++){
           j = jcount-1;
            obj[j] = $(".interests-area div:nth-child(1)").attr('id');
            $(".interests-area div:nth-child(1)").remove();

        }


       var update_interest = 'http://localhost/ominzy/' + "ajax/update_interest/";
        $.ajax({
            url:update_interest,
            data:{interests:obj,username:window.username},
            type:'post',
            success:function(data){
                var json = $.parseJSON(data);
                $('.user-settings-section').find('.tags').remove();


                for(var i=0;i<json.length;i++){
                    var jsn = '>> ' + json[i];
                    var data2 = '<div class="tags">'+jsn+'</div>';
                    var inter_data = '<div class="interest" id="'+json[i]+'">'+json[i]+'<div title="'+json[i]+'" class="close-interest"></div> </div>';
                    $('.interests').append(data2);
                    $('.interests-area').append(inter_data);
                }


            }
        });
        $('.closer').trigger('click');

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


    //  $(this).css('visibility','hidden');
       // var id = $(this).attr('id');
       // window.setTimeout(function(){
            //  $('.'+id).css('visibility','hidden');

     //   },3000);
        // $('.'+id).css('visibility','visible');




// Popup Window
$("#dtime").prop('disabled',true);
var resulter = 1;
var qcounter = 1;
		var scrollTop = '';
		var newHeight = '100';

		$(window).bind('scroll', function() {
		   scrollTop = $( window ).scrollTop();
		   newHeight = scrollTop + 100;
		});
		
  
		$('.popup-trigger').click(function(e) {


            e.stopPropagation();
            //$('.disabler').attr('display','block');
            $('.disabler').css('display', 'block').hide().fadeIn("slow");


        });

                            });




     
