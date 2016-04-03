/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

$(document).ready(function(){

    var carousel        = $('#testimonial-container');
    var wrapper         = carousel.find('.carousel-wrapper');
    var ul              = carousel.find('.carousel-container');

    var slide_count     = ul.children().length;
    var item_width;
    var ul_width;

    /*
    |----------------------------------------------------------------
    |  CalcItemWidth Function
    |----------------------------------------------------------------
    */
    function calcItemWidth(){
        item_width = wrapper.width() / 2;
        ul_width = item_width * (slide_count + 1);
    }
    calcItemWidth();

    /*
    |----------------------------------------------------------------
    |  SetCss Function
    |----------------------------------------------------------------
    */
    function setCss(){
        ul.css('width', ul_width);

        ul.find('.carousel-item').each(function(){
            $(this).css('width', item_width);
        });

        ul.css('left', -item_width);

        var carousel_height = ul.height();
        wrapper.css('height', carousel_height);
    }
    setCss();

    /*
    |----------------------------------------------------------------
    |  Resize Function
    |----------------------------------------------------------------
    */
    $(window).resize(function(){
        calcItemWidth();
        setCss();
    });

    /*
    |----------------------------------------------------------------
    |  Timer Function
    |----------------------------------------------------------------
    */
    var timer;

    function slide_timer(){
        slide();
    }
    timer = setInterval(slide_timer, 6000);

    /*
    |----------------------------------------------------------------
    |   The Slide Function
    |----------------------------------------------------------------
    */
    function slide(){
        var left_indent = -(item_width * 2);

        ul.animate({
            'left': left_indent
        },{
            queue: false,
            duration: 400,
            complete: function(){
                ul.find('li:last').after(ul.find('li:first'));

                ul.css({'left': -item_width});
            }
        });
    }



});