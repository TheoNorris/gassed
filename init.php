<?php

require_once('settings.php');
require_once('shortcodes.php');
require_once('vite.php');

function mytheme_enqueue(){
    $theme_directory = get_template_directory_uri();
    wp_enqueue_style('mystyle', $theme_directory . '/style.css');
    wp_enqueue_script('app', $theme_directory . '/app.js');
 }

add_action('wp_enqueue_scripts', 'mytheme_enqueue');

function mytheme_init(){
    $menus = array(
        'main_menu' => 'main_menu'
    );
register_nav_menus($menus);
}
add_action('after_setup_theme', 'mytheme_init');