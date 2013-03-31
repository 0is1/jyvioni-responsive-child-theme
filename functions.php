<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */
// add a favicon
function blog_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/images/favicon.png" />';
}
add_action('wp_head', 'blog_favicon');
