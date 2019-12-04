<?php

if( function_exists('acf_add_options_page') ) {

    // AAGG Option Page
    acf_add_options_page(array(
        'page_title' 	=> 'ACF Slick Slider',
        'menu_title'	=> 'ACF Slick Slider',
        'menu_slug' 	=> 'asslider-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        'icon_url'      => 'dashicons-images-alt2',
    ));

}

if( function_exists('acf_add_local_field_group') ):

    // Include files for acf (groups & fields)
    include_once ASSlider__PLUGIN_DIR . 'inc/slick-slider-fields/field_slider.php';
endif;