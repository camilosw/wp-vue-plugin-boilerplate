<?php
/*
Plugin Name:  Rexer Events
Plugin URI:   
Description:  Display Rexer Events
Version:      0.1
Author:       TUAN NGUYEN
Author URI:   
License:      
License URI:  
Text Domain:  rexer
Domain Path:  /languages
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// TODO: replace PLUGIN_NAME with yours
define( 'REXER_EVENTS_FILE', __FILE__ );
define( 'REXER_EVENTS_VERSION', '0.1.0.0' );

require plugin_dir_path( REXER_EVENTS_FILE ) . 'includes/shortcodes.php';

add_action( 'wp_enqueue_scripts', function() {
  wp_register_script(
    'rexer-components',
    plugin_dir_url( REXER_EVENTS_FILE ) . 'public/js/events-rexer.js',
    array(),
    REXER_EVENTS_VERSION,
    true
  );
} );
