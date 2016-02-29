/**
 * Created by Tim on 2/29/2016.
 */

var lightbox = $('#lightbox');

$(document).ready(function(){

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


    // About us Services function
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


});
