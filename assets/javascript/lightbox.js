/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

$(document).ready(function(){
    var lightbox                    = $('#lightbox');
    var imagesContainer             = $('.single-projecten-images');
    var imagesLength                = imagesContainer.children().length;
    var imageIndex;

    lightbox.hide();

    /*
    |----------------------------------------------------------------
    |   Open the Light box.
    |----------------------------------------------------------------
    */
    $('.open-lightbox').click(function(){

        imageIndex = $(this).attr('data-index');

        imagesContainer.find('.open-lightbox').each(function(){
            var href = $(this).attr('href');
            var index = $(this).attr('data-index');

            lightbox.find('.lightbox-inner').append('<div class="lb-image" data-index="'+index+'" style="background-image: url('+href+')"></div>');
        });

        slide(imageIndex);
        lightbox.fadeIn();

        return false;
    });

    function slide(index){
        lightbox.find('.lb-image').removeClass('active');
        lightbox.find('.lb-image[data-index="'+index+'"]').addClass('active');

        if(imageIndex == imagesLength){
            $('.lightbox-next').hide();
        }
        else {
            $('.lightbox-next').show();
        }
        if(imageIndex == 1){
            $('.lightbox-prev').hide();
        }
        else {
            $('.lightbox-prev').show();
        }
    }

    $('.lightbox-next').click(function(){
        imageIndex ++;
        slide(imageIndex);

        return false;
    });

    $('.lightbox-prev').click(function(){
        imageIndex --;
        slide(imageIndex);

        return false;
    });

    /*
    |----------------------------------------------------------------
    |   Close the Lightbox
    |----------------------------------------------------------------
    */
    $('.lightbox-close').click(function(){
        // fade out animation
        lightbox.fadeOut();

        // Reset the image
        lightbox.find('.lb-image').removeClass('active');

        return false;
    });

    $('body').click(function(){
        lightbox.fadeOut();
        lightbox.find('.lb-image').removeClass('active');
    });


    $(window).resize(function(){

    });

});


