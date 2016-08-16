$(document).ready(function () {

    if(jQuery(window).width() < 767) {
    $(this).after( $( ".popup" ) );
    $('.popup').show('slow',function(){}).addClass('popup-mobile').css('top', 0);
    $('html, body').animate({
        scrollTop: $('.popup').offset().top
    }, 500);
} else {
    $('.popup').removeClass('popup-mobile').css('top', newHeight).toggle();
};
});
var final_qresult = 0;
$('#nexter').click(function(event){

    if (qcounter === 1){

        if ($("input[name=q1]:checked").val()) {
            // do something
            $('#question01').animate({'opacity':'0'},500,function(){
                $('#question01').addClass('qdisplay');
                $('#question02').removeClass('qdisplay');
                $('#question02').animate({'opacity':'1'},1000);
                $('#backer2').animate({'opacity':'1'},500,function(){
                });
                $('#backer2').css('display','block');
                $('#backer2').css('opacity','1');
                $('#backer2').attr('name','question01;question02');
                qcounter = qcounter + 1;

            });


        }
        else {
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }

    if (qcounter === 2){
        if ($("input[name=q2]:checked").val()) {
            $('#question02').animate({'opacity':'0'},500,function(){
                $('#question02').addClass('qdisplay');
                $('#question03').removeClass('qdisplay');
                $('#question03').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question02;question03');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }


    if (qcounter === 3){
        if ($("input[name=q3]:checked").val()) {
            $('#question03').animate({'opacity':'0'},500,function(){
                $('#question03').addClass('qdisplay');
                $('#question04').removeClass('qdisplay');
                $('#question04').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question03;question04');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 4){
        if ($("input[name=q4]:checked").val()) {
            $('#question04').animate({'opacity':'0'},500,function(){
                $('#question04').addClass('qdisplay');
                $('#question05').removeClass('qdisplay');
                $('#question05').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question04;question05');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 5){
        if ($("input[name=q5]:checked").val()) {

            $('#question05').animate({'opacity':'0'},500,function(){
                $('#question05').addClass('qdisplay');
                $('#question06').removeClass('qdisplay');
                $('#question06').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question05;question06');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 6){
        if ($("input[name=q6]:checked").val()) {

            $('#question06').animate({'opacity':'0'},500,function(){
                $('#question06').addClass('qdisplay');
                $('#question07').removeClass('qdisplay');
                $('#question07').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question06;question07');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 7){
        if ($("input[name=q7]:checked").val()) {

            $('#question07').animate({'opacity':'0'},500,function(){
                $('#question07').addClass('qdisplay');
                $('#question08').removeClass('qdisplay');
                $('#question08').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question07;question08');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 8){
        if ($("input[name=q8]:checked").val()) {

            $('#question08').animate({'opacity':'0'},500,function(){
                $('#question08').addClass('qdisplay');
                $('#question09').removeClass('qdisplay');
                $('#question09').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question08;question09');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 9){
        if ($("input[name=q9]:checked").val()) {

            $('#question09').animate({'opacity':'0'},500,function(){
                $('#question09').addClass('qdisplay');
                $('#question10').removeClass('qdisplay');
                $('#question10').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question09;question10');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 10){
        if ($("input[name=q10]:checked").val()) {

            $('#question10').animate({'opacity':'0'},500,function(){
                $('#question10').addClass('qdisplay');
                $('#question11').removeClass('qdisplay');
                $('#question11').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question10;question11');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 11){
        if ($("input[name=q11]:checked").val()) {

            $('#question11').animate({'opacity':'0'},500,function(){
                $('#question11').addClass('qdisplay');
                $('#question12').removeClass('qdisplay');
                $('#question12').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question11;question12');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 12){
        if ($("input[name=q12]:checked").val()) {

            $('#question12').animate({'opacity':'0'},500,function(){
                $('#question12').addClass('qdisplay');
                $('#question13').removeClass('qdisplay');
                $('#question13').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question12;question13');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 13){
        if ($("input[name=q13]:checked").val()) {

            $('#question13').animate({'opacity':'0'},500,function(){
                $('#question13').addClass('qdisplay');
                $('#question14').removeClass('qdisplay');
                $('#question14').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question13;question14');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 14){
        if ($("input[name=q14]:checked").val()) {

            $('#question14').animate({'opacity':'0'},500,function(){
                $('#question14').addClass('qdisplay');
                $('#question15').removeClass('qdisplay');
                $('#question15').animate({'opacity':'1'},1000);
                $('#backer2').attr('name','question14;question15');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }
    }
    if (qcounter === 15){
        if ($("input[name=q15]:checked").val()) {

            $('#question15').animate({'opacity':'0'},500,function(){
                $('#question15').addClass('qdisplay');
                $('#qprogressor').removeClass('qdisplay');
                $('#qprogressor').animate({'opacity':'1'},1000);
                $('#nexter').val('Finish');
                $('#backer2').attr('name','question15;qprogressor');
                $('#assesstitle').css('display','none');
                $('#qnote').text('');
                qcounter = qcounter + 1;
            });
        }
        else{
            $( ".choices-container" ).effect( "shake" );
            event.preventDefault();
        }

    }
    if (qcounter === 16){
        var myElement = $('select[name="clevel"]');
        var answer1 = $('input[name=q1]:checked').val();
        var answer2 = $('input[name=q2]:checked').val();
        var answer3 = $('input[name=q3]:checked').val();
        var answer4 = $('input[name=q4]:checked').val();
        var answer5 = $('input[name=q5]:checked').val();
        var answer6 = $('input[name=q6]:checked').val();
        var answer7 = $('input[name=q7]:checked').val();
        var answer8 = $('input[name=q8]:checked').val();
        var answer9 = $('input[name=q9]:checked').val();
        var answer10 = $('input[name=q10]:checked').val();
        var answer11 = $('input[name=q11]:checked').val();
        var answer12 = $('input[name=q12]:checked').val();
        var answer13 = $('input[name=q13]:checked').val();
        var answer14 = $('input[name=q14]:checked').val();
        var answer15 = $('input[name=q15]:checked').val();
        if(answer1 === '01c'){
            final_qresult = final_qresult +1;
        }
        if(answer2 === '02d'){
            final_qresult = final_qresult +1;
        }
        if(answer3 === '03a'){
            final_qresult = final_qresult +1;
        }
        if(answer4 === '04b'){
            final_qresult = final_qresult +1;
        }
        if(answer5 === '05a'){
            final_qresult = final_qresult +1;
        }
        if(answer6 === '06b'){
            final_qresult = final_qresult +1;
        }
        if(answer7 === '07d'){
            final_qresult = final_qresult +1;
        }
        if(answer8 === '08b'){
            final_qresult = final_qresult +1;
        }
        if(answer9 === '09a'){
            final_qresult = final_qresult +1;
        }
        if(answer10 === '10d'){
            final_qresult = final_qresult +1;
        }
        if(answer11 === '11b'){
            final_qresult = final_qresult +1;
        }
        if(answer12 === '12b'){
            final_qresult = final_qresult +1;
        }
        if(answer13 === '13c'){
            final_qresult = final_qresult +1;
        }
        if(answer14 === '14a'){
            final_qresult = final_qresult +1;
        }
        if(answer15 === '15b'){
            final_qresult = final_qresult +1;
        }

        if(final_qresult<=5){
            myElement.find('option:eq(1)').prop('selected', true);
            $('#chosenl').html('beginner level');
        }
        if(final_qresult>5 &&  final_qresult<=7){
            myElement.find('option:eq(2)').prop('selected', true);
            $('#chosenl').html('Pre-intermediate level');
        }
        if(final_qresult>7 &&  final_qresult<=9){
            myElement.find('option:eq(3)').prop('selected', true);
            $('#chosenl').html('Intermediate level');
        }
        if(final_qresult>9 &&  final_qresult<=11){
            myElement.find('option:eq(4)').prop('selected', true);
            $('#chosenl').html('Upper-intermediate level');
        }
        if(final_qresult>11 &&  final_qresult<=13){
            myElement.find('option:eq(5)').prop('selected', true);
            $('#chosenl').html('advanced level');
        }
        if(final_qresult>13){
            myElement.find('option:eq(6)').prop('selected', true);
            $('#chosenl').html('expert level');
        }







        $('#nexter').css('display','none');
        $('#backer2').css('display','none');
        $('#qp').css('display','none');
        $('.loader2').css('display','block');
        setTimeout(function(){

            $('.loader2').css('display','none');
            result();
        }, 3000);





    }
});
/*$('.disabler').click(function() {
 $('.popup').hide();
 });*/
function result(){
    $('.result').css('display','block');
    setTimeout(function(){
        $('.popup-btn-close').trigger('click');

        $("#asses").animate({opacity: "0"},300,function(){
            $("#asses").css('display','none');
        });






        $("#clevel").animate({width: "100%"},1000,function(){
            $("#clevel").prop('disabled',true);
        });





    }, 5000);

}






$('#backer2').click(function(){
    var bname = $('#backer2').attr('name');
    if(bname ==='question15;qprogressor'){
        $('#nexter').attr('value','Next');
        $('#assesstitle').css('display','block');
        $('#qnote').text('Please answer the questions provided so that we can estimate your english skills and recommend the suitable course for you.');
    }
    var qs = bname.split(';');
    if(qs[0]==='question01'){
        $(this).css('display','none');
    }
    $('#' + qs[1]).addClass('qdisplay');
    $('#' + qs[0]).removeClass('qdisplay');
    $('#' + qs[0]).css('opacity','1');
    qcounter = qcounter - 1;
    temp = qs[0];
    temp02 = temp.replace('question','');
    tempint = parseInt(temp02);
    tempint = tempint - 1;
    if(tempint<=9){
        newname = "question0"+tempint+";"+qs[0];
    }
    else if(tempint>9){
        newname = "question"+tempint+";"+qs[0];
    }

    $(this).attr('name',newname);

});
$('.popup-btn-close').click(function(e){



    $('.disabler').attr('display','none');
    $('.disabler').css('display','none').hide().fadeOut("slow");
    $('.popup').hide('slow', function(){});

});

$('.popup').click(function(e){
    e.stopPropagation();
});
$('#male').click(function(){

    $('#female').prop('checked', false);
    $('#femaler').css('backgroundColor','transparent');
    $('#maler').css('backgroundColor','#0088cc');


});
$('#female').click(function(){

    $('#male').prop('checked', false);
    $('#maler').css('backgroundColor','transparent');
    $('#femaler').css('backgroundColor','#0088cc');


});

setTimeout(function() {
    $('.mode02').trigger('click');
},10);








$("input:file").change(function (){
    var newfile = $(this).val();
    var result;
    try{
        result = newfile.substring(newfile.lastIndexOf("\\"));
        result = result.substring(1, result.length);
        var lasttwo = result.substr(result.length - 2);
        if(lasttwo==="cx" || lasttwo==="oc"){
            $('#progressbar').css('visibility','visible');
            $('#progressbar').css('bottom','0px');
            $(".uploadstatus").css('width', '0%');

            $("#progressbar").animate({backgroundColor: '#0093DF'},3000);
            $('#uploadtext').css('display','none');
            $(".uploadstatus").animate({width: '70%'},{
                duration: 3000,
                specialEasing: {
                    width: "linear",
                    height: "easeOutBounce"
                },
                complete: function() {
                    $('#progressbar').css('visibility','hidden');
                    $('#uploadtext').css('display','block');
                    newtext2 = "<p color='red'>" + "Uploaded Successfully" +"</p>";
                    $('#uploadtext').html(newtext2);
                    $('#upload').html(result);
                }
            });

        }
        else{
            newtext = "<p color='red'>" + "Please upload a word file" +"</p>";
            $('#uploadtext').html(newtext);
        }
    }catch(e){
        result = newfile;
    }


});

var id1;
var id2;
$("#ctype").change(function (){
    var cval = $("#ctype").val();

    if(cval === 'general'){
        $('#asses').css('display','block');
        $('#clevel').css('width','44%');
        $("#clevel").attr('disabled', true);
        contents = '<option value="disabled" disabled selected>Choose course</option><option value="beginner">Beginner</option><option value="pintermediate">Pre - Intermediate</option><option value="intermediate">Intermediate</option><option value="uintermediate">Upper - Intermediate</option><option value="advanced">Advanced</option><option value="expert">Expert</option>';

        $("#clevel").empty();
        $("#clevel").html(contents);
        $("#clevel").attr('disabled', false);
    }

    if(cval === 'conversation'){
        $('#asses').css('display','none');
        $('#clevel').css('width','100%');
        $("#clevel").attr('disabled', true);
        contents2 = '<option value="disabled" disabled selected>Choose course</option><option value="beginner">Beginner</option><option value="intermediate">Intermediate</option><option value="uintermediate">Upper - Intermediate</option><option value="advanced">Advanced</option>';
        $("#clevel").empty();
        $("#clevel").html(contents2);
        $("#clevel").attr('disabled', false);
    }


    if(cval === 'business'){
        $('#asses').css('display','none');
        $('#clevel').css('width','100%');
        $("#clevel").attr('disabled', true);
        contents2 = '<option value="disabled" disabled selected>Choose course</option><option value="beginner">Beginner</option><option value="intermediate">Intermediate</option><option value="uintermediate">Upper - Intermediate</option><option value="advanced">Advanced</option>';
        $("#clevel").empty();
        $("#clevel").html(contents2);
        $("#clevel").attr('disabled', false);

    }

});

$("#lmode").change(function (){
    $("#dtime").prop('disabled',false);
    var lmode = $("#lmode").val();
    if(lmode ==='group'){
        contents3 = '<option value="disabled" disabled selected>Preferred daily timing</option><optgroup label="Morning shifts"><option value="8am">8:00 am - 10:00 am</option><option value="10am">10:00 am - 12:00 pm</option></optgroup><optgroup label="Afternoon shifts"><option value="2pm">2:00 pm - 4:00 pm</option><option value="4pm">4:00 pm - 6:00 pm</option></optgroup><optgroup label="Evening shifts"><option value="6pm">6:00 pm - 8:00 pm</option><option value="8pm">8:00 pm - 10:00 pm</option></optgroup>';
        $("#dtime").empty();
        $("#dtime").html(contents3);
    }
    if(lmode==='private'){
        contents3 = '<option value="disabled" disabled selected>Preferred daily timing</option><optgroup label="Morning shifts"><option value="8am">8:00 am - 9:00 am</option><option value="9am">9:00 am - 10:00 pm</option><option value="10am">10:00 am - 11:00 am</option><option value="11am">11:00 am - 12:00 pm</option></optgroup><optgroup label="Afternoon shifts"><option value="12pm">12:00 pm - 1:00 pm</option><option value="1pm">1:00 pm - 2:00 pm</option><option value="2pm">2:00 pm - 3:00 pm</option><option value="3pm">3:00 pm - 4:00 pm</option><option value="4pm">4:00 pm - 5:00 pm</option><option value="5pm">5:00 pm - 6:00 pm</option></optgroup><optgroup label="Evening shifts"><option value="6pm">6:00 pm - 7:00 pm</option><option value="7pm">7:00 pm - 8:00 pm</option><option value="8pm">8:00 pm - 9:00 pm</option><option value="9pm">9:00 pm - 10:00 pm</option></optgroup>';
        $("#dtime").empty();
        $("#dtime").html(contents3);
    }


});



var page = 1;
$('.about').hide();
$('.loader').hide();
// this is causing address bar to change - $(document).tooltip().off("mouseover mouseout");







$('#home').addClass('item-selected');




$.widget("custom.tooltipX", $.ui.tooltip, {
    options: {
        autoHide: true
    },
    _create: function () {
        this._super();
        if (!this.options.autoHide) {
            this._off(this.element, "mouseover focusin");
        }
    },
    _open: function (event, target, content) {
        this._superApply(arguments);

        if (!this.options.autoHide) {
            this._off(this.element, "mouseleave focusout");
        }
    }
});



var isTooltipOpened = false;
$('input').tooltipX({
    autoHide: false
});










$("#lang2").click(function () {

    if (clicked)
    {
        clicked = false;
        $(".lang").css('margin-top', '-20px');
        $(".lang").css('opacity', '0.7');
    } else
    {
        clicked = true;
        $(".lang").css('margin-top', '0px');
        $(".lang").css('opacity', '0');
    }
});



// Page changer and tooltip generation

$("#back").click(function () {
    $(".error-signup").css('visibility','hidden');
});








var validation_email = 1;
var validation_remail = 1;
var validation_regpassworder = 1;
var validation_fname = 1;
var validation_lname = 1;
var validation_username = 1;
var validation_gender;
var validation_location;
var validation_phone = 1;
var validation_nationality = 1;



var stepper = 1;
$('#fname').blur(function(){
    first_name = $('#fname').val();
    if(first_name === ""){
        validation_fname = 1;
        $('#fname').attr("title","What's your first name?");
    }
    else{
        validation_fname = 0;
    }


});
$('#lname').blur(function(){
    last_name = $('#fname').val();
    if(last_name === ""){
        validation_fname = 1;
        $('#lname').attr("title","What's your Family name?");
    }
    else{
        validation_lname = 0;
    }


});
$('#username').blur(function(){
    username_name = $('#username').val();
    if(username_name === ""){
        validation_username = 1;
        $('#username').attr("title","Choose Username");
    }
    else if(username_name.length <5){
        validation_username = 1;
        $('#username').attr("title","Minimm 5 characters allowed");
    }
    else{
        validation_username = 0;
    }


});
$('#username').focus(function(){

    $('#username').attr("title","Minimum 5 Characters with no SPACE");
    $('[data-toggle="username"]').tooltip('show');



});
$('#nationality').blur(function(){
    nationality = $('#nationality').val();
    if(nationality === ""){
        validation_nationality = 1;
        $('#nationality').attr("title","Nationality Please");
    }
    else{
        validation_nationality = 0;
    }


});


$('#remail').blur(function(){
    remail = $('#remail').val();
    remail2 = $('#regemail').val();
    if(remail !== remail2){
        validation_remail = 1;
        $('#remail').attr("title","Email is not correctly re-typed");
    }
    else{
        validation_remail = 0;
    }


});
$('#regpassword').blur(function(){
    password = $('#regpassword').val();
    if(password === ""){
        validation_regpassworder = 1;
        $('#regpassword').attr("title","Password please");
    }
    else{
        validation_regpassworder = 0;
    }


});
$('#phone').blur(function(){
    phone = $('#phone').val();
    if(phone === ""){
        validation_phone = 1;
        $('#phone').attr("title","Please enter proper phone number");
    }
    else{
        validation_phone = 0;
    }


});
$('#phone').keyup(function(){
    phone2 = $('#phone').val();
    if(phone2.length>10){
        $('#phone').val('');
    }


});





$('#regpassword').keyup(function() {
    var regpassword = $('#regpassword').val();
    //validate the length
    if ( regpassword.length < 8 ) {
        $('#length').removeClass('valid').addClass('invalid');
        validation_regpassworder = 1;
    } else {
        $('#length').removeClass('invalid').addClass('valid');
        validation_regpassworder = 0;
    }
    //validate letter
    if ( regpassword.match(/[A-z]/) ) {
        $('#letter').removeClass('invalid').addClass('valid');
        validation_regpassworder = 0;
    } else {
        $('#letter').removeClass('valid').addClass('invalid');
        validation_regpassworder = 1;
    }

//validate capital letter
    if ( regpassword.match(/[A-Z]/) ) {
        $('#capital').removeClass('invalid').addClass('valid');
        validation_regpassworder = 0;
    } else {
        $('#capital').removeClass('valid').addClass('invalid');
        validation_regpassworder = 1;
    }

//validate number
    if ( regpassword.match(/\d/) ) {
        $('#number').removeClass('invalid').addClass('valid');
        validation_regpassworder = 0;
    } else {
        $('#number').removeClass('valid').addClass('invalid');
        validation_regpassworder = 1;
    }


}).focus(function() {
    $('#pswd_info').css('display','block');
}).blur(function() {
    $('#pswd_info').hide();
});



$('#location').change(function(){
    $('#location option:selected').each(function(){
        var string = $(this).text();
        if(string === "Saudi Arabia"){
            $('#country-code').attr('value','+966');
        }
        if(string === "Qatar"){
            $('#country-code').attr('value','+974');
        }
        if(string === "Oman"){
            $('#country-code').attr('value','+968');
        }
        if(string === "Kuwait"){
            $('#country-code').attr('value','+965');
        }
        if(string === "Bahrain"){
            $('#country-code').attr('value','+973');
        }

        if(string === "UAE"){
            $('#country-code').attr('value','+971');
        }
    });

});






var token;

$('#register-btn').click(function (event) {
    var emailer = $('#regemail').val();
    var phonerer = $('#phone').val();
    var location2 = $('#location').val();
    if (stepper === 2){
        var cotype = $('#ctype').val();
        var final_firstname2 = $('#fname').val();
        var lmoder = $('#lmode').val();
        var cleveler = $('#clevel').val();
        var smonth = $('#smonth').val();
        var final_phonex = $('#country-code').val() + $('#phone').val();
        var sweek = $('#sweek').val();
        var dtime = $('#dtime').val();
        var tmode = $('#tmode').val();
        if(cotype===null){
            $('[data-toggle="ctype"]').tooltip('show');
            event.preventDefault();
        }
        else if(lmoder===null){
            $('[data-toggle="lmode"]').tooltip('show');
            event.preventDefault();
        }
        else if(cleveler===null){
            $('[data-toggle="clevel"]').tooltip('show');
            event.preventDefault();
        }
        else if(smonth===null){
            $('[data-toggle="smonth"]').tooltip('show');
            event.preventDefault();
        }
        else if(sweek===null){
            $('[data-toggle="sweek"]').tooltip('show');
            event.preventDefault();
        }
        else if(dtime===null){
            $('[data-toggle="dtime"]').tooltip('show');
            event.preventDefault();
        }
        else if(tmode===null){
            $('[data-toggle="tmode"]').tooltip('show');
            event.preventDefault();
        }
        else{
            var register = 'http://localhost/ominzy/' + 'ajax/token';

            $.ajax({
                url: register,
                data:{email:emailer,name:final_firstname2,phone:final_phonex},
                type: 'POST',
                success: function (data) {
                    token = data;


                }});
            $('#register-btn').attr("disabled", true);
            $(".phone-section").css('margin','0px auto');
            $("#companyname").fadeTo(100, 0);
            $(".phone-section2").fadeTo(100, 0);
            $('#register-btn').css('border', '0px');
            $('#register-btn').attr('value', 'Register!');
            $('#form-02').animate({"margin-left": "-800px"}, "fast");
            $('#step02').animate({"opacity": "1"}, "slow");
            $('.rules').css("display", "block");
            $('.progress-bar').css("display", "none");
            stepper = stepper + 1;
        }


    }
    else if (stepper === 3) {


        var final_email = $('#regemail').val();
        var cotype2 = $('#ctype').val();
        var lmoder2 = $('#lmode').val();
        var cleveler2 = $('#clevel').val();
        var smonth2 = $('#smonth').val();
        var sweek2 = $('#sweek').val();
        var dtime2 = $('#dtime').val();
        var tmode2 = $('#tmode').val();
        var final_username = $('#username').val();
        var final_password = $('#regpassword').val();
        var final_nationality = $('#nationality').val();
        var final_location = $('#location').val();
        var final_firstname = $('#fname').val();
        var final_lastname = $('#lname').val();
        var final_phon = $('#country-code').val() + $('#phone').val();
        var final_phone02 = final_phon.replace(/\+/g, '00');
        var final_gender;
        if($('#male').is(':checked')){
            final_gender = "Male";
        }
        else if($('#female').is(':checked')){
            final_gender = "Female";
        }
        var register23 = 'http://localhost/ominzy/' + 'ajax/register';


        $.ajax({
            url: register23,
            data: {token:token, coursetype:cotype2, coursemode:lmoder2, courselevel:cleveler2, startmonth:smonth2, weekly:sweek2, daily:dtime2, teachertype:tmode2, email:final_email, username:final_username, phone:final_phone02, password:final_password, lastname:final_lastname,firstname:final_firstname,nationality:final_nationality,location:final_location,gender:final_gender},
            type: 'POST',
            success: function (data) {


                if(data==="0"){

                    alert('Some error occured,Please refresh the page and try again.');
                }
                else if(data==="1"){


                    $('#msg001').css('color','white');
                    $('#backer').css('display','none');
                    $('#redirecter').css('display','inline');
                    $('#msg001').css('fontSize','25px');
                    $('#msg001').text('Registration Complete!');
                    $('#msg002').css('display','block');
                    $('#msg002').css('fontSize','13px');
                    $('#msg002').text('You will be re-directed to your page in:');

//$('.error-signup').css('border','1px solid white');
                    $('.error-signup').css('visibility','visible');
                    var urler02 = 'http://localhost/ominzy/ajax/set_session';
                    function counter($el, n) {
                        (function loop() {
                            $el.html(n);
                            if(n===0){
                                $.ajax({
                                    type: "POST",
                                    url: urler02,
                                    //contentType: "application/json; charset=utf-8",
                                    data: {email: final_email, password: final_password, username:final_username},
                                    success: function (data) {

                                        window.location.href = 'http://localhost/ominzy/';

                                    }

                                });

                            }
                            if (n--) {
                                setTimeout(loop, 1000);
                            }
                        })();
                    }

                    counter($('.number'), 10);
                }
            }

        });



    }
    else if (stepper === 1) {

        if(validation_fname ===1){
            $('[data-toggle="fname"]').tooltip('show');
            event.preventDefault();
        }
        else if(validation_lname ===1){
            $('[data-toggle="lname"]').tooltip('show');
            event.preventDefault();
        }
        else if(validation_username ===1){
            $('[data-toggle="username"]').tooltip('show');
            event.preventDefault();
        }

        else if(validation_nationality ===1){
            $('[data-toggle="nationality"]').tooltip('show');
            event.preventDefault();
        }
        else if((emailer.indexOf('@') === -1) || (emailer.indexOf('.') === -1) ){
            $('[data-toggle="email"]').tooltip('show');
            event.preventDefault();
        }
        else if(validation_remail ===1){
            $('[data-toggle="remail"]').tooltip('show');
            event.preventDefault();
        }
        else if(validation_regpassworder ===1){
            $('[data-toggle="passworder"]').tooltip('show');
            event.preventDefault();
        }
        else if(location2 ===null){
            $('[data-toggle="location"]').tooltip('show');
            event.preventDefault();
        }
        else if(phonerer === ""){
            $('[data-toggle="phone"]').tooltip('show');
            event.preventDefault();
        }
        else if((!$('#male').is(':checked')) && (!$('#female').is(':checked'))){
            $('[data-toggle="male"]').tooltip('show');

            event.preventDefault();
        }



        else{
            $('[data-toggle="male"]').tooltip('hide');
            var emailer = $("#regemail").val();
            var usernamer = $("#username").val();
            var final_phone = $('#country-code').val() + $('#phone').val();

            var location2 = 'http://localhost/ominzy/' + 'ajax/check';

            $.ajax({
                url: location2,
                data: {email: emailer, username: usernamer, phone:final_phone},
                type: 'POST',
                success: function (data) {
                    var arr = data.split(';');

                    if (data === ";;") {



                        $(".phone-section").css('margin','0px auto');
                        $("#companyname").fadeTo(100, 0);
                        $(".phone-section2").fadeTo(100, 0);
                        $('#register-btn').css('border', '0px');
                        $('#register-btn').attr('value', 'Next > >');
                        $('#form-01').animate({"margin-left": "-400px"}, "fast");
                        $('#step02').animate({"opacity": "1"}, "slow");
                        $('.rules').css("opacity", "0");
                        $('.rules').css("display", "block");

                        $('.progress-bar').css("display", "none");
                        stepper = stepper + 1;


                    } else if (arr[0] === usernamer) {
                        var errorer = "Username has already been taken, Please choose another.";
                        $('#msg001').text('');
                        $('#msg001').text(errorer);
                        $('.error-signup').css('visibility', 'visible');
                        event.preventDefault();

                    } else if (arr[1] === emailer) {
                        var errorer2 = "This email is already associated with an account, Please click on 'Forgot Password' to retrieve your credentials,or use different email.";
                        $('#msg001').text('');
                        $('#msg001').text(errorer2);
                        $('.error-signup').css('visibility', 'visible');
                        event.preventDefault();
                    }
                    else if(arr[2] === final_phone){
                        var errorer2 = "This number is associated with another account. If you have lost your credentials, click on 'Forgot Password' at the top of this screen";
                        $('#msg001').text('');
                        $('#msg001').text(errorer2);
                        $('.error-signup').css('visibility', 'visible');
                        event.preventDefault();
                    }

                }
            });
        }
    }


});


/*

 $(".lang").click(function () {
 $(".lang").css('margin-top', '0px');
 $(".lang").css('opacity', '0');
 });

 */




var username = "";
var cpassword = "";
if ($.cookie('username')) {
    username = $.cookie('username');
}
if ($.cookie('password')) {
    cpassword = $.cookie('password');
}
$('#email').attr('value', username);
$('#password').attr('value', cpassword);

$('#logger').attr('disabled', false);

$('#logout').on('click',function(){
    window.location.href = 'http://localhost/ominzy/' + "logout";
});
$('.customized-btn').on('click', function() {
    $('.error-login').css('opacity', '0');
    var email = $("#email").val();
    var password = $("#password").val();
    if (email === "" || password === "") {
        $("#email").removeAttr("title");
        $('#email').attr('title', 'Please provide your email and password properly');
        $('[data-toggle="tooltip"]').tooltip('show');
    } else if (email !== "" && password !== "") {
        index01 = email.indexOf('@');
        index02 = email.indexOf('.');
        if (index01 === -1 || index02 === -1)
        {
            $("#email").removeAttr("title");
            $('#email').attr('title', 'Proper Email format required');
            $('[data-toggle="tooltip"]').tooltip('show');
        } else {

            $('[data-toggle="tooltip"]').tooltip('hide');
            $('#email').css('border', 'none');
            $('#password').css('border', 'none');
            var d = document.getElementById("logger");
            d.className += " active";
            var input = this;
            input.disabled = true;
            $('.login_fixer').attr("disabled", true);
            $('.logo').css("opacity", "0");
            $('.ajax-loader').css("opacity", "1");
            url = 'http://localhost/ominzy/' + 'login/login';

            $.ajax({
                url: url,
                type: "POST",
                data: {'email': email, 'password': password},
                success: function (data) {
                    if (data === "0") {
                        $('.ajax-loader').css('opacity', '0');
                        $('.error-login').css('opacity', '1');
                        $('.login_fixer').attr("disabled", false);
                        $('.customized-btn').attr("disabled", false);
                        $('.login_fixer').attr("border", '1px solid rgba(0,0,0,0.3)');

                        $('#logger').removeClass("active");



                    } else if (data === "1") {
                        $.cookie('username', email, {expires: 1});
                        $.cookie('password', password, {expires: 1});
                        window.location.href = 'http://localhost/ominzy/home/news';
                    }



                }
            });
        }



    }






});

window.statuser=0;
$('#activation').keyup(function() {
    var activate = $('#activation').val();

    var activate_length = activate.length;
    if(activate_length===5){


        $('#activation').prop("disabled", true);
        var activator = $('#activation').val();
        var activator = activator.toUpperCase();

        /*  var user01 = $('#username').val();
         var locationer2 = 'http://localhost/ominzy/ajax/activation';


         $.ajax({
         url:locationer2,
         data: {token: token,username:user01, activator:activator},
         type: 'POST',
         success: function (data) {
         alert(data);*/

        if(activator!==token){
            $('.activationstatus').css('backgroundImage','url("http://localhost/ominzy/application/public/css/cross.png")');
            $("#activation").val("");
            $('#activation').prop("disabled", false);

        }
        else if(activator===token){
            $('.activationstatus').css('backgroundImage','url("http://localhost/ominzy/application/public/css/tick.png")');
            window.statuser=1;
            $('#activation').prop("disabled", true);
            $('#register-btn').prop("disabled", false);

        }

    }
});



// Nav-bar Items on click removes current page layout and adds layout of the clicked item


$('.item').click(function () {
    var sel = this.id;
    if(sel==='courses'){
        NProgress.configure({ showSpinner: true });
        NProgress.set(0.2);
        setTimeout(function(){
            NProgress.set(0.7);

        },1000);

        setTimeout(function(){
            NProgress.set(1);
            window.location.href = 'http://localhost/ominzy/courses/';

        },2000);
    }
    else if(sel==='home'){
        NProgress.configure({ showSpinner: true });
        NProgress.set(0.2);
        setTimeout(function(){
            NProgress.set(0.7);

        },1000);

        setTimeout(function(){
            NProgress.set(1);
            window.location.href = 'http://localhost/ominzy/';

        },2000);
    }
    else if(sel==='about'){
        NProgress.configure({ showSpinner: true });
        NProgress.set(0.2);
        setTimeout(function(){
            NProgress.set(0.7);

        },1000);

        setTimeout(function(){
            NProgress.set(1);
            window.location.href = 'http://localhost/ominzy/about/';

        },2000);
    }
    /*
     $('.item').removeClass('item-selected');
     $(this).addClass('item-selected');
     */


});

