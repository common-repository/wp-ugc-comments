<?php
/*
Plugin Name: WP UGC comments
Plugin URI: https://timvaniersel.com/en/plugins/wp-ugc-comments/
Description: Adds the "ugc" attribute to links in comments and author URLs.
Version: 1.00
License: GPL
Author: Tim van Iersel, Websitescanner
Author URI: https://websitescanner.io
*/


// DON'T REMOVE ATTRIBUTES WHEN IN ADMIN PAGES
if (strpos($_SERVER['REQUEST_URI'], 'wp-admin') === false) {
      add_filter('comment_text', 'add_ugc');
      add_filter('get_comment_author_link', 'add_ugc');
}

function add_ugc($text) {
   $text = str_ireplace('rel="nofollow"', 'rel="nofollow ugc"', $text);
   return $text;
}
