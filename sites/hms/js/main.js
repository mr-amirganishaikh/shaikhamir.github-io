$(document).ready(function () {
    $(window).scroll(function () {
        var headHeight = $('#logo-bar').outerHeight();
        if($(window).scrollTop() > headHeight){
            $('.navbar-brand').addClass('fixed');
            $('header').addClass('fixed-color');
        }else {
            $('.navbar-brand').removeClass('fixed');
            $('header').removeClass('fixed-color');
        }
    });
});