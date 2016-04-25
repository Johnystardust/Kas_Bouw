/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

$(document).ready(function(){
    var lightbox                    = $('#lightbox');
    var lightboxWrapper             = $('.lightbox-wrapper');

    var lightboxWidth               = lightbox.width();
    var lightboxHeight              = lightbox.height();

    var originalImageWidth;
    var originalImageHeight;

    var imageWidth;
    var imageHeight;

    var imagesContainer     = $('.single-projecten-images');
    var imageIndex;


    //var lightboxInner       = $('.lightbox-inner');
    //var imagesLength        = imagesContainer.children().length;

    lightbox.hide();


    /*
     |----------------------------------------------------------------
     |   Function Determine Landscape or Portrait
     |----------------------------------------------------------------
     */
    function landscapeOrPortrait(){
        //originalImageWidth  = lightbox.find('img').width();
        //originalImageHeight = lightbox.find('img').height();

        originalImageWidth  = lightbox.find('img').clientWidth;
        originalImageHeight = lightbox.find('img').clientHeight;

        //alert('originalImageWidth :'+originalImageWidth+' originalImageHeight :'+originalImageHeight);

        //if(originalImageHeight > originalImageWidth){
        //    lightbox.find('img').addClass('portrait-lb-image');
        //}
        //else {
        //    lightbox.find('img').addClass('landscape-lb-image');
        //}
    }

    /*
     |----------------------------------------------------------------
     |   Function Determine the dom image size
     |----------------------------------------------------------------
     */
    function getDomImageSize(){
        imageWidth      = lightbox.find('.image-wrapper').width();
        imageHeight     = lightbox.find('.image-wrapper').height();

        //alert('imageWidth :'+imageWidth+' imageHeight :'+imageHeight);

        if(imageHeight > lightboxHeight){
            lightbox.find('img').removeClass('landscape-lb-image');
            lightbox.find('img').addClass('portrait-lb-image');

            lightbox.find('.image-wrapper').addClass('portrait-lb-image');
        }

        if(imageWidth > lightboxWidth){
            lightbox.find('img').addClass('landscape-lb-image');
            lightbox.find('img').removeClass('portrait-lb-image');

            lightbox.find('.image-wrapper').removeClass('portrait-lb-image');
        }
    }

    /*
     |----------------------------------------------------------------
     |   Open the Light box.
     |----------------------------------------------------------------
     */
    $('.open-lightbox').click(function(){
        imageIndex          = $(this).attr('data-index');
        var href            = $(this).attr('href');

        /*
         |----------------------------------------------------------------
         |   Set the inner light box width
         |----------------------------------------------------------------
         */
        lightboxWrapper.css('height', lightboxHeight);
        lightboxWrapper.css('width', lightboxWidth);

        //alert('LightboxWidth :'+lightboxWidth+' LightboxHeight :'+lightboxHeight);

        /*
         |----------------------------------------------------------------
         |   Set The Href and fade in
         |----------------------------------------------------------------
         */
        lightbox.find('img').attr('src', href);
        lightbox.fadeIn();

        landscapeOrPortrait();
        getDomImageSize();

        return false;
    });


    /*
     |----------------------------------------------------------------
     |   Lightbox menu
     |----------------------------------------------------------------
     */
    $('.lightbox-next').click(function(){
        imageIndex ++;
        var newHref = imagesContainer.find('[data-index="'+imageIndex+'"]').attr('href');

        lightbox.find('img').attr('src', newHref);

        // Reset the image
        lightbox.find('.image-wrapper').removeClass('portrait-lb-image');
        lightbox.find('img').removeClass('landscape-lb-image');
        lightbox.find('img').removeClass('portrait-lb-image');

        landscapeOrPortrait();
        getDomImageSize();

        return false;
    });

    $('.lightbox-prev').click(function(){
        imageIndex --;
        var newHref = imagesContainer.find('[data-index="'+imageIndex+'"]').attr('href');

        lightbox.find('img').attr('src', newHref);

        // Reset the image
        lightbox.find('.image-wrapper').removeClass('portrait-lb-image');
        lightbox.find('img').removeClass('landscape-lb-image');
        lightbox.find('img').removeClass('portrait-lb-image');

        landscapeOrPortrait();
        getDomImageSize();

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

        // Reset the wrapper height
        lightboxWrapper.css('width' ,'');
        lightboxWrapper.css('height' ,'');

        // Reset the image
        lightbox.find('.image-wrapper').removeClass('portrait-lb-image');
        lightbox.find('img').removeClass('landscape-lb-image');
        lightbox.find('img').removeClass('portrait-lb-image');

        return false;
    });

    $(window).resize(function(){

        var lightboxHeight  = lightbox.height();
        var lightboxWidth   = lightbox.width();

        lightboxWrapper.css('height', lightboxHeight);
        lightboxWrapper.css('width', lightboxWidth);

        landscapeOrPortrait();
        getDomImageSize();

    });

});


