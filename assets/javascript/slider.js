/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

$(document).ready(function(){

    var slider          = $('#slider');
    var ul              = slider.find('.slide-container');
    var slide_count     = ul.children().length;

    var ul_width        = (slide_count * 100) + "%";
    var slide_width     = (100 / slide_count) + "%";

    var slide_index     = 0;

    var slider_nav      = $('.slider-nav');

    /*
    |----------------------------------------------------------------
    |   Set Slider CSS Function.
    |----------------------------------------------------------------
    */
    function setSliderCss(){
        // Set the container width
        ul.css('width', ul_width);

        // Set the slide width to 100% / slide count.
        ul.find('.slide').each(function(i){
            var left_percent = (slide_width * i) + "%";

            $(this).css('left', left_percent);
            $(this).css('width', slide_width);
        });
    }
    setSliderCss();

    /*
    |----------------------------------------------------------------
    |  Slide Function.
    |----------------------------------------------------------------
    */
    function slide(new_slide_index){
        // Set the animate distance
        var animate_left = (new_slide_index * (-100)) + "%";

        // Apply the animate distance
        ul.css('margin-left', animate_left);

        // Update the menu
        updateMenu(new_slide_index);

        // The slide_index is the new_slide_index
        slide_index = new_slide_index;
    }

    /*
    |----------------------------------------------------------------
    |  Update Menu Function.
    |----------------------------------------------------------------
    */
    function updateMenu(slide_number){
        var clicked_li = $('li[data-slide-number="'+slide_number+'"]');
        /*
        |----------------------------------------------------------------
        |  Bottom Menu.
        |----------------------------------------------------------------
        */
        // Set the active menu item back to original
        slider_nav.find('.active').find('i').removeClass('icon-circle');
        slider_nav.find('.active').find('i').addClass('icon-circle-empty');

        // Remove the active class
        slider_nav.find('li').removeClass('active');

        // Set the clicked item icon
        clicked_li.find('i').removeClass('icon-circle-empty');
        clicked_li.find('i').addClass('icon-circle');

        // Set the clicked item to active
        clicked_li.addClass('active');
    }

    /*
    |----------------------------------------------------------------
    |  Timer Function
    |----------------------------------------------------------------
    */
    var timer;

    function slide_timer(){
        if(slide_index <= (slide_count - 2)){
            slide(parseInt(slide_index) + 1);
        }
        else {
            slide(0);
            slide_index = 0;
        }
    }
    timer = setInterval(slide_timer, 6000);

    /*
    |----------------------------------------------------------------
    |   Menu Bottom click function.
    |----------------------------------------------------------------
    */
    slider_nav.find('li').click(function(){
        // Get the data slide number
        var slide_number = $(this).attr('data-slide-number');

        //// Restart the timer
        clearInterval(timer);
        timer = setInterval(slide_timer, 6000);

        // Call the setSlide function
        slide(slide_number);
    });

});
