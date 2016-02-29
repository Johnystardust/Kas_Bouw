/**
 * Created by Tim on 2/29/2016.
 */

var lightbox = $('#lightbox');

$(document).ready(function(){

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
    })


});