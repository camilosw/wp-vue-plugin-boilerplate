<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_shortcode( 'simple_example', function() {
  wp_enqueue_script( 'vue-simple-example' );

  return '<div class="vue-simple-example"></div>';
} );

add_shortcode( 'components_example', function() {
  wp_enqueue_script( 'vue-components-example' );

  return '<div class="vue-components-example"></div>';
} );
