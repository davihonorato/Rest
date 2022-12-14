<?php

// clear website Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
// end clear website Header

// renu theme suport
add_theme_support( 'menus' );

function register_my_menu() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );
// end renu theme suport

// remove content editor from pages
add_action('init', 'remove_content_editor');
/**
 * Remove the content editor from ALL pages 
 */
function remove_content_editor() { 
    remove_post_type_support('page', 'editor');       
}

// end remove content editor from pages

?>