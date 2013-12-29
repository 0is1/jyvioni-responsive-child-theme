<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 *
 * Load the theme function files
 */
// add a favicon
function blog_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/images/favicon.png?=1" />';
}
add_action('wp_head', 'blog_favicon');

// Load css
add_action('wp_head', 'add_css', 4);
// Add css
function add_css(){
  wp_enqueue_style('font', 'http://fonts.googleapis.com/css?family=Asap&subset=latin', array(), '1.0.0', false);
}

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action('add_like_button_script', 'add_like_button_script', 1);
add_action('create_like_button', 'add_like_button', 10, 1);

function add_like_button_script(){
  echo '
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=541746489212041";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, "script", "facebook-jssdk"));</script>';
}
function add_like_button($page_url){
  echo '<div class="fb-like" data-href="'.$page_url.'" data-width="450" data-show-faces="false" data-layout="button_count" data-send="false"></div>';
}
// Twitter actions / filters
add_action('add_tweet_button_script', 'add_tweet_button_script', 1);
add_action('add_tweet_button', 'create_tweet_button', 10, 2);

function add_tweet_button_script(){
  echo '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
}
function create_tweet_button($page_url, $title) {
  echo '<div class="tweet-button"><a href="https://twitter.com/share" class="twitter-share-button" data-url="' .$page_url.'" data-text="'.$title.'" data-count="none" data-via="jyvioni">Twiittaa</a>
    </div>';
}