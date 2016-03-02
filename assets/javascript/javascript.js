/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Set Mobile Device Classes.
    |-------------------------------------------------------------------------------------------------------------------
    */
    var deviceAgent = navigator.userAgent.toLowerCase();

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
    |   Lightbox Functionality.
    |-------------------------------------------------------------------------------------------------------------------
    */
    var lightbox = $('#lightbox');

    // Lightbox function
    lightbox.hide();

    $('.open-lightbox').click(function(){
        // Get the image that is to be displayed in the lightbox
        var lightboxImage = $(this).attr('href');

        lightbox.fadeIn();

        // Add the image to the lightbox
        lightbox.find('img').attr('src', lightboxImage);

        return false;
    });

    $(window).click(function(){
        lightbox.fadeOut();
    });

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
    |-------------------------------------------------------------------------------------------------------------------
    |   Adds custom scroll-bars via niceScroll.
    |-------------------------------------------------------------------------------------------------------------------
    */
    $(document).ready(function() {
        $("html").niceScroll({zindex: 30000000000});
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Window Scroll Function.
    |-------------------------------------------------------------------------------------------------------------------
    */
    $(window).scroll(function(){

        /*
        |-------------------------------------------------------------------------------------------------------------------
        |   Nav Resize function.
        |-------------------------------------------------------------------------------------------------------------------
        */
        var $this = $(this),
            pos = $this.scrollTop();

        if(pos < 20){
            $('#main-nav').removeClass('menu-close');
        }
        else {
            $('#main-nav').addClass('menu-close');
        }
    });

});
