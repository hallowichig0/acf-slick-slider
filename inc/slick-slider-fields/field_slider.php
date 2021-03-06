<?php

#Slick Slider
acf_add_local_field_group(array(
    'key'           => 'optionAASlick_slider_key',
    'title'         => 'Slick Slider',
    'fields'        => array (),
    'position'      => 'acf_after_title',
    'menu_order'    => 1,
    'location'      => array (
        array (
            array (
                'param'     => 'options_page',
                'operator'  => '==',
                'value'     => 'asslider-settings',
            ),
        ),
    ),
));

        #Slick Slider Row
        acf_add_local_field(array(
            'key'           => 'optionAASlick_slider_main_flexible_field_key',
            'label'         => '',
            'instructions'  => 'shortcode: [acf_slick_slider id="1"]',
            'name'          => 'optionAASlick_slider_main_flexible_field1',
            'type'          => 'flexible_content',
            'button_label'  => 'Add Slick Slider',
            'parent'        => 'optionAASlick_slider_key',
            'layouts'       => array(
                array(
                    'key'           => 'optionAASlick_slider_main_flexible_layout1_key',
                    'name'          => 'optionAASlick_slider_main_flexible_layout1',
                    'label'         => 'Slick Slider',
                    'display'       => 'block',
                    'min'           => '',
                    'max'           => '',
                    ),
            )
        ));

                //Tab1 Slider
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_tab1_key',
                    'label'         => 'Slider',
                    'name'          => 'optionAASlick_slider_tab1',
                    'type'          => 'tab',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                #Slick Slider Image Row Fields
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_flexible_field_key',
                    'label'         => '',
                    'name'          => 'optionAASlick_slider_flexible_field1',
                    'type'          => 'flexible_content',
                    'button_label'  => 'Add Image',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key

                    'layouts' => array(
                        array(
                            'key'           => 'optionAASlick_slider_flexible_layout1_key',
                            'name'          => 'optionAASlick_slider_flexible_layout1',
                            'label'         => 'Image',
                            'display'       => 'block',
                            'min'           => '',
                            'max'           => '',
                            ),
                    )
                ));
                            //Image
                            acf_add_local_field(array(
                                'key'           => 'optionAASlick_slider_layout1_subfield1_key',
                                'label'         => 'Image',
                                'name'          => 'optionAASlick_slider_layout1_subfield1',
                                'type'          => 'image',
                                'parent'        => 'optionAASlick_slider_flexible_field_key', //flexible field key
                                'parent_layout' => 'optionAASlick_slider_flexible_layout1_key', // layout key
                            ));
                
                //Tab2 Setting
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_tab2_key',
                    'label'         => 'Setting',
                    'name'          => 'optionAASlick_slider_tab2',
                    'type'          => 'tab',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key',
                ));

                // Enable Arrows
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_arrow_tab2_key',
                    'label'         => 'Enable Arrows',
                    'instructions'  => 'This will display prev/next arrows on the both sides of the image',
                    'name'          => 'optionAASlick_slider_subfield_arrow_tab2',
                    'type'          => 'true_false',
                    'default_value' => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Enable Dots
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_dots_tab2_key',
                    'label'         => 'Enable Dots',
                    'instructions'  => 'This will display dots at the bottom of the image',
                    'name'          => 'optionAASlick_slider_subfield_dots_tab2',
                    'type'          => 'true_false',
                    'default_value' => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Limit Caption
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_limitcaption_tab2_key',
                    'label'         => 'Limit Caption',
                    'instructions'  => 'Limit the characters in image caption',
                    'name'          => 'optionAASlick_slider_subfield_limitcaption_tab2',
                    'type'          => 'number',
                    'min'           => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Autoplay
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_autoplay_tab2_key',
                    'label'         => 'Enable Autoplay',
                    'name'          => 'optionAASlick_slider_subfield_autoplay_tab2',
                    'type'          => 'true_false',
                    'default_value' => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Autoplay Speed
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_autoplayspeed_tab2_key',
                    'label'         => 'Autoplay Speed',
                    'instructions'  => 'Adjust the speed of slideshow autoplay',
                    'name'          => 'optionAASlick_slider_subfield_autoplayspeed_tab2',
                    'type'          => 'number',
                    'min'           => '1',
                    'required'      => '1',
                    'default_value' => '5000',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Speed
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_speed_tab2_key',
                    'label'         => 'Speed',
                    'instructions'  => 'Adjust the fade animation speed',
                    'name'          => 'optionAASlick_slider_subfield_speed_tab2',
                    'type'          => 'number',
                    'min'           => '1',
                    'required'      => '1',
                    'default_value' => '1000',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Enable Adaptive Height
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_adaptiveheight_tab2_key',
                    'label'         => 'Enable Adaptive Height',
                    'instructions'  => 'Enables adaptive height for single slide horizontal carousels',
                    'name'          => 'optionAASlick_slider_subfield_adaptiveheight_tab2',
                    'type'          => 'true_false',
                    'default_value' => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));
                
                // Enable Caption
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_enable_caption_tab2_key',
                    'label'         => 'Enable Image Caption',
                    'name'          => 'optionAASlick_slider_subfield_enable_caption_tab2',
                    'type'          => 'true_false',
                    'default_value' => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Caption Background Color
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_caption_bgColor_tab2_key',
                    'label'         => 'Caption Background Color',
                    'instructions'  => 'Background color of image caption',
                    'name'          => 'optionAASlick_slider_subfield_caption_bgColor_tab2',
                    'type'          => 'color_picker',
                    'default_value' => '#000000',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                    'conditional_logic' => array(
                        array(
                            array(
                                'field'     => 'optionAASlick_slider_subfield_enable_caption_tab2_key',
                                'operator'  => '==',
                                'value'     => '1',
                            ),
                        ),
                    ),
                ));

                // Caption Background Color Range
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_caption_bgColor_range_tab2_key',
                    'label'         => 'Caption Background Color Range (Transparent)',
                    'instructions'  => 'Increase/decrease the thickness of background color',
                    'name'          => 'optionAASlick_slider_subfield_caption_bgColor_range_tab2',
                    'type'          => 'range',
                    'max'           => '1',
                    'min'           => '0',
                    'step'          => '0.1',
                    'default_value' => '0.7',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                    'conditional_logic' => array(
                        array(
                            array(
                                'field'     => 'optionAASlick_slider_subfield_enable_caption_tab2_key',
                                'operator'  => '==',
                                'value'     => '1',
                            ),
                        ),
                    ),
                ));
                
                // Caption Text Color
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_caption_txtColor_tab2_key',
                    'label'         => 'Caption Text Color',
                    'instructions'  => 'Text color of image caption',
                    'name'          => 'optionAASlick_slider_subfield_caption_txtColor_tab2',
                    'type'          => 'color_picker',
                    'default_value' => '#ffffff',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                    'conditional_logic' => array(
                        array(
                            array(
                                'field'     => 'optionAASlick_slider_subfield_enable_caption_tab2_key',
                                'operator'  => '==',
                                'value'     => '1',
                            ),
                        ),
                    ),
                ));

                // Enable Lightbox
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_enable_lightbox_tab2_key',
                    'label'         => 'Enable Lightbox',
                    'instructions'  => 'Enable lightbox for each images',
                    'name'          => 'optionAASlick_slider_subfield_enable_lightbox_tab2',
                    'type'          => 'true_false',
                    'default_value' => '0',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));

                // Lightbox Unique Name
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_lightbox_uniquename_tab2_key',
                    'label'         => 'Add Unique Name',
                    'instructions'  => 'Make sure the unique name that you will input is not the same in the other slick slider',
                    'name'          => 'optionAASlick_slider_subfield_lightbox_uniquename_tab2',
                    'type'          => 'text',
                    'required'      => 1,
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                    'conditional_logic' => array(
                        array(
                            array(
                                'field'     => 'optionAASlick_slider_subfield_enable_lightbox_tab2_key',
                                'operator'  => '==',
                                'value'     => '1',
                            ),
                        ),
                    ),
                ));

                // Lightbox Title
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_lightbox_title_tab2_key',
                    'label'         => 'Lightbox Title',
                    'instructions'  => 'Show the title for each images in lightbox',
                    'name'          => 'optionAASlick_slider_subfield_lightbox_title_tab2',
                    'type'          => 'true_false',
                    'default_value' => '1',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                    'conditional_logic' => array(
                        array(
                            array(
                                'field'     => 'optionAASlick_slider_subfield_enable_lightbox_tab2_key',
                                'operator'  => '==',
                                'value'     => '1',
                            ),
                        ),
                    ),
                ));

                // Lightbox Spinner
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_lightbox_spinner_tab2_key',
                    'label'         => 'Spinner',
                    'instructions'  => 'Loader animation',
                    'name'          => 'optionAASlick_slider_subfield_lightbox_spinner_tab2',
                    'type'          => 'select',
                    'default_value' => 'double-bounce',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                    'choices'       => array(
                        'rotating-plane'    => 'Rotating Plane',
                        'double-bounce'     => 'Double Bounce',
                        'wave'              => 'Wave',
                        'wandering-cubes'   => 'Wandering Cubes',
                        'spinner-pulse'     => 'Spinner Pulse',
                        'three-bounce'      => 'Three Bounce',
                        'cube-grid'         => 'Cube Grid',
                    ),
                    'conditional_logic' => array(
                        array(
                            array(
                                'field'     => 'optionAASlick_slider_subfield_enable_lightbox_tab2_key',
                                'operator'  => '==',
                                'value'     => '1',
                            ),
                        ),
                    ),
                ));

                // Add Class
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_subfield_class_tab2_key',
                    'label'         => 'Additional Class',
                    'instructions'  => 'Add class in the aa-slick-slider-list',
                    'name'          => 'optionAASlick_slider_subfield_class_tab2',
                    'type'          => 'text',
                    'parent'        => 'optionAASlick_slider_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAASlick_slider_main_flexible_layout1_key', // layout key
                ));