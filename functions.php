<?php

if(!defined('ABSPATH')){
    exit;
}

//initialize theme
require_once(get_template_directory() . '/init.php');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


function current_year_shortcode() {
    return date('Y');
}
add_shortcode('year', 'current_year_shortcode');








