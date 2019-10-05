<?php 
/*
    Plugin Name: My carousel Plugin
    Description: 
    Author: Akshat Trigunait
    Version: 1.0
*/

function my_register_scripts() {
    if (!is_admin()) {
        // register
        wp_register_script('my_nivo-script', plugins_url('nivoslider/jquery.nivo.slider.js', __FILE__), array( 'jquery' ));
        wp_register_script('my_script', plugins_url('nivoslider/script.js', __FILE__));
 
        
    }
}
 
function my_register_styles() {
    // register
    wp_register_style('my_styles', plugins_url('nivoslider/nivo-slider.css', __FILE__));
    wp_register_style('my_styles_theme', plugins_url('nivoslider/themes/default/default.css', __FILE__));
 
    
}
add_action('wp_print_scripts', 'my_register_scripts');
add_action('wp_print_styles', 'my_register_styles');
add_image_size('my_function', 700, 300, true);
add_theme_support( 'post-thumbnails' );

function my_function($atts,$type='my_function') {

wp_enqueue_style('my_styles');
wp_enqueue_style('my_styles_theme');
wp_enqueue_script('my_nivo-script');
wp_enqueue_script('my_script');

  extract(shortcode_atts(array(
        'category' => ''
    ), $atts)); 


    $args = array(
        'post_type' => 'post',
        'order' => 'asc',
        'cat'=>$category
        
    );
    
    $result = '<div class="slider-wrapper theme-default">';
    $result .= '<div class="nivoSlider">';
 
    //the loop
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
 
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID), $type);
        $result .='<img title="" src="' . $the_url[0] . '" data-thumb="' . $the_url[0] . '" alt=""/>';
    }
    $result .= '</div>';
    $result .='</div>';
    return $result;
}
add_shortcode('my-carousel','my_function')

?>