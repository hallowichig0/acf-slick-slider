(function( $ ){
    function aa_slick_slider_lightbox(settings) {
        var lightBox = $('.aa-slick-slider-lightbox');
        var slick_slider = $('.aa-slick-slider');
        var defaults = {
            slick_autoPlay: true,
        };
        var options = $.extend(defaults,settings);
        var slickAutoPlay = options['slick_autoPlay'];
        
        if(slickAutoPlay == true){
            slickAutoPlay = 'slickPause';
        }else{
            slickAutoPlay = 'slickPlay';
        }

        var venoOptions = {
            // Options
            titleattr: 'data-title',
            numeratio: true,

            // Callback
            // is called before the venobox pops up, return false to prevent opening;
            cb_pre_open : function(obj){
                slick_slider.slick(slickAutoPlay);
            },
            // is called before closing, return false to prevent closing
            cb_pre_close : function(obj, gallIndex, thenext, theprev){
                slick_slider.slick('slickPlay');
            },
        }
        lightBox.venobox(venoOptions);
    }
    function aa_slick_slider() {
        $('.aa-slick-slider').each(function(){
            var tis = $(this);
            var autoplay_switch = tis.attr('data-autoplay');
            var autoplayspeed = tis.attr('data-autospeed');
            var slidespeed = tis.attr('data-speed');
            var adaptive_height = tis.attr('data-adaptiveheight');

            if(autoplay_switch == '1'){
                autoplay_switch = true;
            }else{
                autoplay_switch = false;
            }

            if(adaptive_height == '1'){
                adaptive_height = true;
            }else{
                adaptive_height = false;
            }

            tis.slick({
                dots: true,
                arrows: true,
                infinite: true,
                autoplay: autoplay_switch,
                autoplaySpeed: autoplayspeed,
                speed: slidespeed,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: adaptive_height,
                useTransform: false,
                pauseOnHover:false,
                fade: true,
            });
            tis.css('visibility', 'visible');
        });
    }
    $(document).ready(function(){
        aa_slick_slider();
        aa_slick_slider_lightbox({
            slick_autoPlay: true, // enable/disable slider autoplay when lightbox was opened. Default: true
        });
    });
})( jQuery );