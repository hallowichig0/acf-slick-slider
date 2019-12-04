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

                //Tab1 Gallery
                acf_add_local_field(array(
                    'key'           => 'optionAASlick_slider_tab1_key',
                    'label'         => 'Gallery',
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