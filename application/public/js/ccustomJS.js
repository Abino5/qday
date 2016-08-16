$(document).ready(function () {
    var p0 = 0;
    var p1 = 0;
    var p2 = 0;
    var p3 = 0;
    var p4 = 0;
    var p5 = 0;
    var c=0;
    
    $(".ca-menu li:eq(0)").click(function(event){
        if(p0===0){
             
            $('#p1').css('display','block');
            $('#p1').animate({'height':'700px'},1000);
       p0=1;
       event.preventDefault();
        }
        else if(p0===1){
            $('#p1').animate({'height':'0px'},1000);
           
            $('#p1').css('display','none');
       p0=0;
       event.preventDefault();
        }
       
    });
    
    
    $(".ca-menu li:eq(1)").click(function(event){
        if(p1===0){
            
            $('#p2').css('display','block');
            $('#p2').animate({'height':'700px'},1000);
       p1=1;
       event.preventDefault();
        }
        else if(p1===1){
            $('#p2').animate({'height':'0px'},1000);
            $('#p2').css('display','none');
       p1=0;
       event.preventDefault();
        }
       
    });
    
    
    
    $(".ca-menu li:eq(2)").click(function(event){
        if(p2===0){
             
            $('#p3').css('display','block');
            $('#p3').animate({'height':'700px'},1000);
       p2=1;
       event.preventDefault();
        }
        else if(p2===1){
            $('#p3').animate({'height':'0px'},1000);
            $('#p3').css('display','none');
       p2=0;
       event.preventDefault();
        }
       
    });
    
    
    
    
    $(".ca-menu li:eq(3)").click(function(event){
        
        if(p3===0){
            
            $('#p4').css('display','block');
            $('#p4').animate({'height':'700px'},1000);
       p3=1;
       event.preventDefault();
        }
        else if(p3===1){
            $('#p4').animate({'height':'0px'},1000);
            $('#p4').css('display','none');
       p3=0;
       event.preventDefault();
        }
       
    });
    
    
    
    
    $(".ca-menu li:eq(4)").click(function(event){
        if(p4===0){
             
            $('#p5').css('display','block');
            $('#p5').animate({'height':'700px'},1000);
       p4=1;
       event.preventDefault();
        }
        else if(p4===1){
            $('#p5').animate({'height':'0px'},1000);
            $('#p5').css('display','none');
       p4=0;
       event.preventDefault();
        }
       
    });
    
    $(".cd-dropdown").change(function(){
               
    });
    
    
    $(".ca-menu li:eq(5)").click(function(event){
        if(p5===0){
             
            $('#p6').css('display','block');
            $('#p6').animate({'height':'700px'},1000);
       p5=1;
       event.preventDefault();
        }
        else if(p5===1){
            $('#p6').animate({'height':'0px'},1000);
            $('#p6').css('display','none');
       p5=0;
       event.preventDefault();
        }
       
    });
    
    
    
    $( '#cd-dropdown' ).dropdown( {
					gutter : 5,
					delay : 100,
					
				} );
                                
    $('#courses').addClass('item-selected');
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
            });