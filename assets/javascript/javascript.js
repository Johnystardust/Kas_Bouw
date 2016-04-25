/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

/*
|-------------------------------------------------------------------------------------------------------------------
|   Pace Pre-Loader.
|-------------------------------------------------------------------------------------------------------------------
*/
Pace.on("start", function(){
    $("#preloader").show();
});

Pace.on("done", function(){
    $("#preloader").fadeOut();
});

$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Set Mobile Device Classes.
    |-------------------------------------------------------------------------------------------------------------------
    */
    var deviceAgent = navigator.userAgent.toLowerCase();
    var html        = $('html');

    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        html.addClass('ios');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(Windows Phone)/i)) {
        html.addClass('windows');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(iemobile)/i)) {
        html.addClass('iemobile');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/android/)) {
        html.addClass('android');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/blackberry/)) {
        html.addClass('blackberry');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
        html.addClass('mobile');
    }

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   About us Services Function.
    |-------------------------------------------------------------------------------------------------------------------
    */
    $('.services-nav-item').click(function(){
        // Remove all the active classes on the nav items
        $('.services-nav-item').removeClass('active');

        // Add the active class to the clicked nav item
        $(this).addClass('active');

        // Find the index number
        var index = $(this).attr('data-index');

        // Remove all the active classes on the text items
        $('.service-text').removeClass('active');

        // Add the active class to the requested text item
        $('.services-text').find('[data-index="'+index+'"]').addClass('active');

        return false;
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Open the mobile menu
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    $('.menu-icon').click(function(){
        // Add the class to the mobile hoofdmenu
        $('.menu-container').toggleClass('menu-container-open');

        // Add the class to the menu icon
        $(this).toggleClass('open');
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Add Icon to Sub-menu.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    $('.menu-item-has-children').each(function(){
        $(this).find('a').first().append('<i class="icon icon-angle-down"></i>');
    });

    $('.menu-item-has-children a i').click(function(){
        $(this).toggleClass('icon-submenu-clicked');
        $(this).closest('.menu-item-has-children').find('.sub-menu').first().toggleClass('sub-menu-open');
        return false;
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Adds custom scroll-bars via niceScroll.
    |-------------------------------------------------------------------------------------------------------------------
    */
    if(!html.hasClass('mobile')){
        $("html").niceScroll({zindex: 30000000000});
    }

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Go To Top.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    var $scroll_top = $('#go-to-top');

    // Scroll to top fadeIn/fadeOut
    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $scroll_top.addClass('go-to-top-active');
        } else {
            $scroll_top.removeClass('go-to-top-active');
        }
    });

    // Scroll to top
    $scroll_top.click(function(){
        $("html, body").animate({ scrollTop: 0 },600);
        return false;
    });

});
