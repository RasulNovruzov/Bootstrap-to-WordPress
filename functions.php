<?php

function enqueue_styles()
{
    wp_register_style('main-styles', get_template_directory_uri() . "/css/styles.css");

    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700');
    wp_register_style('fonts-etc', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic');
    wp_register_style('magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');

    wp_enqueue_style('main-styles');
    wp_enqueue_style('fonts');
    wp_enqueue_style('fonts-etc');
    wp_enqueue_style('magnific');
}

function enqueue_scripts()
{
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', [], time(), true);
    wp_register_script('fa', 'https://use.fontawesome.com/releases/v5.12.1/js/all.js', ['jquery'], time(), true);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', ['jquery'], time(), true);
    wp_register_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', ['jquery'], time(), true);
    wp_register_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', ['jquery'], time(), true);
    wp_register_script('main-scripts', get_template_directory_uri() . "/js/script.js",  ['jquery', 'bootstrap', time(), true]);

    wp_enqueue_script('main-scripts');
    wp_enqueue_script('fa');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('easing');
    wp_enqueue_script('magnific-popup');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_theme_support('post-thumbnails');
add_theme_support('menus');
register_nav_menu('primary-menu','primary-menu');


// add class to menu <li> tag
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1,3);


//add class to menu <a> tag
function add_specific_menu_location_atts($atts, $item, $args) {
    if($args->theme_location == 'primary-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10,3);