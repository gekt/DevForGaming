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

$(document).click(function(event) {
    if ($('#search-active-detect').hasClass("active")) {
        $('#input-cv').removeClass("hide-label");
        $('#input-projet').removeClass("hide-label");
        $('#input-jeu').removeClass("hide-label");
    }
    else {
        $('#input-cv').addClass("hide-label");
        $('#input-projet').addClass("hide-label");
        $('#input-jeu').addClass("hide-label");
    }
    if ($(event.target).is('#input-cv') || $(event.target).is('#input-jeu') || $(event.target).is('#input-projet') || $(event.target).is('#search') || $(event.target).is('#div-search-label') || $(event.target).is('#search-submit-btn')) {
        $('#search-div').addClass("focus-by-label");
        $('#search-active-detect').addClass("active");
        $('#search-logo').addClass("active-by-label");
        $('#search-submit-btn').addClass("active-by-label");
    }
    else {
        if (!$(event.target).is('input#cv'))  {
            if (!$(event.target).is('input#jeu'))  {
                if (!$(event.target).is('input#projet'))  {
                    if (!$(event.target).is('#div-search-label')) {
                        if (!$(event.target).is('#search-submit-btn')) {
                            $('#search-div').removeClass("focus-by-label");
                            $('#input-cv').addClass("hide-label");
                            $('#input-projet').addClass("hide-label");
                            $('#input-jeu').addClass("hide-label");
                            $('#search-logo').removeClass("active-by-label");
                            $('#search-submit-btn').removeClass("active-by-label");
                        }
                    }
                }
            }
        }
    }
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

//CV JS
// Initializations
$('.tooltipped').tooltip();
$('.modal-trigger').leanModal();
// Accordion
$('.accordion').collapsible({
    accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
});
// Interaction
$('.collapsible-header').click(function() {
    $('.collapsible-header').addClass('grey-text').removeClass('blue-grey-text text-darken-1').children('.icon').removeClass('pink-text text-lighten-4');
    $(this).addClass('blue-grey-text text-darken-1').removeClass('grey-text').children('.icon').addClass('pink-text text-lighten-4');
});

//FIN CV JS