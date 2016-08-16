$(document).ready(function () {
    $('#about').addClass('item-selected');
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

