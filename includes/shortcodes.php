<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_shortcode( 'events_rexer', function() {
  wp_enqueue_script( 'rexer-components' );

  return '<div class="rexer-events"></div>';
} );
