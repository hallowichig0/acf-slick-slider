(function( $ ){
    function slick_slider() {
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
        });
    }
    $(document).ready(function(){
        slick_slider();
        $('.aa-slick-slider').css('visibility', 'visible');
    });
})( jQuery );