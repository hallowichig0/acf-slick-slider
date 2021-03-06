<?php

if(class_exists('ACF') && class_exists('acf_field_flexible_content')){
    function acf_slick_slider_shortcode($atts){
        ob_start();
        $args = shortcode_atts(array(
            'id'            => '',
        ), $atts);

        $id = $args['id'];
        $count = 0;
        

        if(!empty($id)){
            // Check value exists.
            if( have_rows('optionAASlick_slider_main_flexible_field1', 'option') ){
                // Loop through rows.
                while ( have_rows('optionAASlick_slider_main_flexible_field1', 'option') ){
                    the_row();

                    $count++;
                    $items = '';

                    if( get_row_layout() == 'optionAASlick_slider_main_flexible_layout1' ){
                        if($count == $id){

                            // Class
                            $slick_slider_class = get_sub_field('optionAASlick_slider_subfield_class_tab2', 'option');
                            // Arrows
                            $slick_slider_arrows = get_sub_field('optionAASlick_slider_subfield_arrow_tab2', 'option');
                            // Dots
                            $slick_slider_dots = get_sub_field('optionAASlick_slider_subfield_dots_tab2', 'option');
                            // Limit Caption
                            $slick_slider_limitCaption = get_sub_field('optionAASlick_slider_subfield_limitcaption_tab2', 'option');
                            // Autoplay
                            $slick_slider_autoplay = get_sub_field('optionAASlick_slider_subfield_autoplay_tab2', 'option');
                            // Autoplay Speed
                            $slick_slider_autoplayspeed = get_sub_field('optionAASlick_slider_subfield_autoplayspeed_tab2', 'option');
                            // Speed
                            $slick_slider_speed = get_sub_field('optionAASlick_slider_subfield_speed_tab2', 'option');
                            // Enable Adaptive Height
                            $slick_slider_adaptiveHeight = get_sub_field('optionAASlick_slider_subfield_adaptiveheight_tab2', 'option');
                            // Enable Caption
                            $slick_slider_caption = get_sub_field('optionAASlick_slider_subfield_enable_caption_tab2', 'option');
                            // Caption Background Color
                            $slick_slider_caption_bgColor = get_sub_field('optionAASlick_slider_subfield_caption_bgColor_tab2', 'option');
                            // Caption Background Color Range
                            $slick_slider_caption_bgColorRange = get_sub_field('optionAASlick_slider_subfield_caption_bgColor_range_tab2', 'option');
                            // Caption Text Color
                            $slick_slider_caption_txtColor = get_sub_field('optionAASlick_slider_subfield_caption_txtColor_tab2', 'option');
                            // Enable Lightbox
                            $slick_slider_lightbox = get_sub_field('optionAASlick_slider_subfield_enable_lightbox_tab2', 'option');
                            // Lightbox Unique Name
                            $slick_slider_lightbox_uniqueName = get_sub_field('optionAASlick_slider_subfield_lightbox_uniquename_tab2', 'option');
                            // Lightbox Title
                            $slick_slider_lightbox_title = get_sub_field('optionAASlick_slider_subfield_lightbox_title_tab2', 'option');
                            // Lightbox Spinner
                            $slick_slider_lightbox_spinner = get_sub_field_object('optionAASlick_slider_subfield_lightbox_spinner_tab2', 'option');

                            // RGBA Converter
                            $hexTorgba = acf_slick_slider_hex2rgba($slick_slider_caption_bgColor, $slick_slider_caption_bgColorRange);
                            
                            ?>
                            <div data-autoplay="<?php echo $slick_slider_autoplay; ?>" data-autospeed="<?php echo $slick_slider_autoplayspeed; ?>" 
                            data-speed="<?php echo $slick_slider_speed; ?>" data-adaptiveheight="<?php echo $slick_slider_adaptiveHeight; ?>" 
                            data-loadspinner="<?php echo esc_attr($slick_slider_lightbox_spinner['value']); ?>" class="aa-slick-slider <?php
                            // auto-increment class
                            echo 'aa-slick-slider-count-'.$count;

                            // enable arrows
                            if($slick_slider_arrows){
                                echo ' arrow-on';
                            }
                            // enable dots
                            if($slick_slider_dots){
                                echo ' dots-on';
                            }
                            // additional class field
                            if(!empty($slick_slider_class)){
                                echo ' ' . $slick_slider_class;
                            }
                            
                            ?>">
                                <?php
                                if( have_rows('optionAASlick_slider_flexible_field1', 'option') ){
                                    while ( have_rows('optionAASlick_slider_flexible_field1', 'option') ){
                                        the_row();

                                        $items++;

                                        if( get_row_layout() == 'optionAASlick_slider_flexible_layout1' ){
                                            $slick_image = get_sub_field('optionAASlick_slider_layout1_subfield1', 'option');
                                            ?>
                                            <div class="aa-slick-slider-item aa-slick-slider-item-<?php echo $items; ?>">
                                                <?php
                                                if($slick_slider_lightbox){
                                                ?>
                                                <a class="aa-slick-slider-lightbox" <?php echo ($slick_slider_lightbox_title) ? 'data-title='.$slick_image['title'] : ''; ?> data-gall="<?php echo $slick_slider_lightbox_uniqueName; ?>" href="<?php echo $slick_image['url']; ?>">
                                                    <img class="aa-slick-slider-image" src="<?php echo $slick_image['url']; ?>" alt="<?php echo $slick_image['alt']; ?>"/>
                                                </a>
                                                <?php
                                                }else{
                                                ?>
                                                <img class="aa-slick-slider-image" src="<?php echo $slick_image['url']; ?>" alt="<?php echo $slick_image['alt']; ?>"/>
                                                <?php
                                                }
                                                if($slick_slider_caption){
                                                    if(!empty($slick_image['caption']) && isset($slick_image['caption'])){
                                                ?>
                                                <div class="aa-slick-slider-caption" style="background-color: <?php echo $hexTorgba; ?>">
                                                    <p class="aa-slick-slider-caption-text" style="color: <?php echo $slick_slider_caption_txtColor; ?>">
                                                        <?php
                                                        if($slick_slider_limitCaption){
                                                            echo substr($slick_image['caption'],0,$slick_slider_limitCaption);
                                                        }else{
                                                            echo $slick_image['caption'];
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <?php
                        }
                    }
                }
            }
        }

        return ob_get_clean();
    }
    add_shortcode('acf_slick_slider', 'acf_slick_slider_shortcode');
}