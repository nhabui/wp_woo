<?php
function slider_theme_customizer_settings($wp_customize) {
    // Slider Content
    $wp_customize->add_section('slider_section', array(
        'title'    => __('Slider Settings', 'custom-theme'),
        'priority' => 30,
    ));

    // Number of slides
    $num_slides = 5;

    for ($i = 1; $i <= $num_slides; $i++) {
        // Background Image
        $wp_customize->add_setting("slider_bg_image_$i", array(
            'default'   => "assets/img/slider/slider{$i}_bg.jpg",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slider_bg_image_$i", array(
            'label'    => __("Slider {$i} Background Image", 'custom-theme'),
            'section'  => 'slider_section',
            'settings' => "slider_bg_image_$i",
        )));

        // Slider Title
        $wp_customize->add_setting("slider_title_$i", array(
            'default'   => "Slide Title {$i}",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("slider_title_$i", array(
            'label'    => __("Slider {$i} Title", 'custom-theme'),
            'section'  => 'slider_section',
            'type'     => 'text',
        ));

        // Slider Content
        $wp_customize->add_setting("slider_content_$i", array(
            'default'   => "Slider {$i} Content",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("slider_content_$i", array(
            'label'    => __("Slider {$i} Content", 'custom-theme'),
            'section'  => 'slider_section',
            'type'     => 'textarea',
        ));
    }
}

add_action('customize_register', 'slider_theme_customizer_settings');
?>