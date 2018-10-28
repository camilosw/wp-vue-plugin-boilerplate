<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_shortcode( 'simple_example', function() {
  wp_enqueue_script( 'vue-simple-example' );

  return '<div>testing 3</div><div class="vue-simple-example">not working</div>';
} );

add_shortcode( 'components_example', function() {
  wp_enqueue_script( 'vue-components-example' );

  return '<div>testing 4</div><div class="vue-components-example">not working</div>';
} );
