$(document).ready(function(){
    $(window).bind('scroll', function(){
        var gap = 50;
        if($(window).scrollTop()> gap){
            $('header').addClass('active-nav');
        } else{
            $('header').removeClass('active-nav');
        }
    });
});

$('.nav-menu li a').click(function(){
    $('.nav-menu li a').removeClass('active');
    $(this).addClass('active');
})
