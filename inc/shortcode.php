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
                            
                            ?>
                            <div data-autoplay="<?php echo $slick_slider_autoplay; ?>" data-autospeed="<?php echo $slick_slider_autoplayspeed; ?>" data-speed="<?php echo $slick_slider_speed; ?>" class="aa-slick-slider <?php
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
                                                <img class="aa-slick-slider-image" src="<?php echo $slick_image['url'] ?>" alt="<?php echo $slick_image['alt'] ?>"/>
                                                <?php if(!empty($slick_image['caption']) && isset($slick_image['caption'])){ ?>
                                                <div class="aa-slick-slider-caption">
                                                    <p class="aa-slick-slider-caption-text">
                                                        <?php
                                                        if($slick_slider_limitCaption){
                                                            echo substr($slick_image['caption'],0,$slick_slider_limitCaption);
                                                        }else{
                                                            echo $slick_image['caption'];
                                                        }
                                                        
                                                        ?>
                                                    </p>
                                                </div>
                                                <?php } ?>
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