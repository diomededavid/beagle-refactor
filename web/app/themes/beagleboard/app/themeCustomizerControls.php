<?php

    namespace App;

    use WP_Customize_Image_Control;
    use WP_Customize_Manager;
    use WP_Customize_Media_Control;

    /**
     * Theme customizer
     */
    add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
        // Add postMessage support
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->selective_refresh->add_partial('blogname', [
            'selector' => '.brand',
            'render_callback' => function () {
                bloginfo('name');
            }
        ]);

        //    Add hero Panel
        $wp_customize->add_panel('landing_panel', [
            'title' => 'Hero Panel',
            'priority' => 10,
            'capability' => 'edit_theme_options'
        ]);

        //    Add hero Section
        $wp_customize->add_section('landing_page_home', [
            'title' => __('Hero Customizer'),
            'panel' => 'landing_panel'
        ]);

        //    Hero Title
        $wp_customize->add_setting('landing_small_header', [
            'default' => __('PocketBeagle® Grove Kit')
        ]);
        $wp_customize->add_control('landing_small_header', [
            'label' => 'Heading',
            'section' => 'landing_page_home',
            'priority' => 1
        ]);

        //        Title color
        $wp_customize->add_setting('landing_small_header_color', [
            'default' => 'text-white'
        ]);

        $wp_customize->add_control(
            'landing_small_header_color',
            [
                'label' => __('Heading text color'),
                'description' => esc_html__('Heading text color'),
                'section' => 'landing_page_home',
                'priority' => 2, // Optional. Order priority to load the control. Default: 10
                'type' => 'select',
                'choices' => [ // Optional.
                    'text-white' => __('Text White'),
                    'text-dark' => __('Text Dark'),
                    'text-primary' => __('Text Primary'),
                    'text-secondary' => __('Text Secondary'),
                    'text-success' => __('Text Success'),
                    'text-danger' => __('Text Danger'),
                    'text-warning' => __('Text Warning'),
                    'text-muted' => __('Text Muted'),
                ]
            ]
        );

        //    Hero Description
        $wp_customize->add_setting('landing_textarea', [
            'default' => __('')
        ]);
        $wp_customize->add_control('landing_textarea', [
            'label' => 'Description',
            'section' => 'landing_page_home',
            'priority' => 3,
            'type' => 'textarea',
        ]);

        //    Hero url
        $wp_customize->add_setting('landing_url', [
            'default' => __('https://beagleboard.org/')
        ]);
        $wp_customize->add_control('landing_url', [
            'label' => 'Page URL',
            'section' => 'landing_page_home',
        ]);

        // Image upload
        $wp_customize->add_setting(
            'landing_image',
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => 'absint'
            )
        );

        $wp_customize->add_control(new WP_Customize_Media_Control(
            $wp_customize,
            'landing_image',
            [
                'label' => __('Default Media Control'),
                'description' => esc_html__('This is the description for the Media Control'),
                'section' => 'landing_page_home',
                'settings' => 'landing_image',
                'flex_width' => true,
                'flex_height' => true,
                'width' => 46,
                'height' => 46,
                'priority' => 5,
                'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
                'button_labels' => [ // Optional
                    'select' => __('Select File'),
                    'change' => __('Change File'),
                    'default' => '',
                    'remove' => __('Remove'),
                    'placeholder' => __('No file selected'),
                    'frame_title' => __('Select File'),
                    'frame_button' => __('Choose File'),
                ]
            ]
        ));

        $wp_customize->add_setting(
            'landing_background_color',
            array(
                'default' => '#03b2ee',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            )
        );

        $wp_customize->add_control(
            'landing_background_color',
            array(
                'label' => __('Background Color'),
                'section' => 'landing_page_home',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'color',
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            )
        );
        //        Title color
        $wp_customize->add_setting('landing_description_color', [
            'default' => 'text-white'
        ]);

        $wp_customize->add_control(
            'landing_description_color',
            [
                'label' => __('Description text color'),
                'section' => 'landing_page_home',
                'priority' => 2, // Optional. Order priority to load the control. Default: 10
                'type' => 'select',
                'choices' => [ // Optional.
                    'text-white' => __('Text White'),
                    'text-dark' => __('Text Dark'),
                    'text-primary' => __('Text Primary'),
                    'text-secondary' => __('Text Secondary'),
                    'text-success' => __('Text Success'),
                    'text-danger' => __('Text Danger'),
                    'text-warning' => __('Text Warning'),
                    'text-muted' => __('Text Muted'),
                ]
            ]
        );

        //        Title color
        $wp_customize->add_setting('landing_background_pattern', [
            'default' => 'robots.svg'
        ]);

        $wp_customize->add_control(
            'landing_background_pattern',
            [
                'label' => __('Background Pattern'),
                'section' => 'landing_page_home',
                'priority' => 2, // Optional. Order priority to load the control. Default: 10
                'type' => 'select',
                'choices' => [ // Optional.
                    'robots.png' => __('Robots'),
                    'object-background.svg' => __('Tech Objects'),
                    'tech-sketched-bg.svg' => __('Tech Sketched'),
                    'retro-drawn-tech-bg.svg' => __('Retro Drawn'),
                    'circuit-board-bg.svg' => __('Circuit Board'),
                    'gold-mesh.svg' => __('Gold Mesh'),
                    'white-mesh.svg' => __('White Mesh'),
                ]
            ]
        );
    });

    /**
     * Customizer JS
     */
    add_action('customize_preview_init', function () {
        wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), [ 'customize-preview' ], null, true);
    });
