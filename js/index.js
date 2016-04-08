jQuery(window).load(function() {
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 200);
    $('.modal-trigger').leanModal();
    animateTitle('AnimTitle1' ,'fadeInRight', 'fadeOutLeft', 4000);
    setTimeout(function() {
        animateSubtitle('AnimSubtitle1' ,'fadeInRight', 'fadeOutLeft', 4000);
    }, 500);
})

$(document).ready(function(){
	$('.parallax').parallax();
	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();
	$('#aside').pushpin({ top:110, bottom:500 });
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 200
    });

    setTimeout(function(){
        window.scrollTo(0, 0);
    }, 1);
});

function changePage(url) {
    $('body').removeClass('loaded');
    $('body').addClass('unloaded');
    setTimeout(function() {
        window.location = url;
    }, 1000);
};

function animateTitle(id, animationNameIn, animationNameOut, time) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $('#' + id).addClass('animated ' + animationNameIn).one(animationEnd, function() {
        $('#' + id).removeClass('hideText');
        $('#' + id).removeClass('animated ' + animationNameIn);
        setTimeout(function() {
            $('#' + id).addClass('animated ' + animationNameOut).one(animationEnd, function() {
                $('#' + id).addClass('hideText');
                $('#' + id).removeClass('animated ' + animationNameOut);
                animateTitle2('AnimTitle2', 'fadeInLeft', 'fadeOutRight', time);
            });
        }, time);
    });
};

function animateSubtitle(id, animationNameIn, animationNameOut, time) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $('#' + id).addClass('animated ' + animationNameIn).one(animationEnd, function() {
        $('#' + id).removeClass('hideText');
        $('#' + id).removeClass('animated ' + animationNameIn);
        setTimeout(function() {
            $('#' + id).addClass('animated ' + animationNameOut).one(animationEnd, function() {
                $('#' + id).addClass('hideText');
                $('#' + id).removeClass('animated ' + animationNameOut);
                animateSubtitle2('AnimSubtitle2', 'fadeInLeft', 'fadeOutRight', time);
            });
        }, time);
    });
};

function animateTitle2(id, animationNameIn, animationNameOut, time) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $('#' + id).addClass('animated ' + animationNameIn).one(animationEnd, function() {
        $('#' + id).removeClass('hideText');
        $('#' + id).removeClass('animated ' + animationNameIn);
        setTimeout(function() {
            $('#' + id).addClass('animated ' + animationNameOut).one(animationEnd, function() {
                $('#' + id).addClass('hideText');
                $('#' + id).removeClass('animated ' + animationNameOut);
                animateTitle('AnimTitle1', 'fadeInRight', 'fadeOutLeft', time);
            });
        }, time);
    });
};

function animateSubtitle2(id, animationNameIn, animationNameOut, time) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $('#' + id).addClass('animated ' + animationNameIn).one(animationEnd, function() {
        $('#' + id).removeClass('hideText');
        $('#' + id).removeClass('animated ' + animationNameIn);
        setTimeout(function() {
            $('#' + id).addClass('animated ' + animationNameOut).one(animationEnd, function() {
                $('#' + id).addClass('hideText');
                $('#' + id).removeClass('animated ' + animationNameOut);
                animateSubtitle('AnimSubtitle1', 'fadeInRight', 'fadeOutLeft', time);
            });
        }, time);
    });
};