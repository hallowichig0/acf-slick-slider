(function( $ ){
    function slick_slider() {
        $('.aa-slick-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: false,
            autoplaySpeed: 8000,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            useTransform: false,
            pauseOnHover:false,
            fade: true,
        });
        
    }
    $(document).ready(function(){
        slick_slider();
        $('.aa-slick-slider').css('visibility', 'visible');
    });
})( jQuery );