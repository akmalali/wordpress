<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_action( 'init', 'add_vimeo_oembed_correctly' );
function add_vimeo_oembed_correctly()
{
    wp_oembed_add_provider(
        '#http://(www\.)?vimeo\.com/.*#i',
        'http://vimeo.com/api/oembed.{format}',
        true
    );
}
?>