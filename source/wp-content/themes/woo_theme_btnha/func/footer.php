<?php
function register_footer_widgets() {
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array(
            'name'          => __('Footer Widget Area ' . $i, 'text_domain'),
            'id'            => 'footer_widget_area_' . $i,
            'description'   => __('Widget area for Footer ' . $i, 'text_domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

            // Add customizer settings
            add_action('customize_register', function ($wp_customize) use ($i) {
                $wp_customize->add_section('footer_widget_area_' . $i, array(
                    'title'    => __('Footer Widget Area ' . $i, 'text_domain'),
                    'priority' => 30 + $i, // Adjust priority based on your needs
                ));

                $wp_customize->add_setting('footer_widget_area_' . $i . '_content', array(
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_text_field',
                ));

                $wp_customize->add_control('footer_widget_area_' . $i . '_content', array(
                'label'    => __('Content for Footer Widget Area ' . $i, 'text_domain'),
                'section'  => 'footer_widget_area_' . $i,
                'type'     => 'textarea',
            ));
        });
    }
}

add_action('widgets_init', 'register_footer_widgets');
?>