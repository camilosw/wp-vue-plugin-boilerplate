<?php
/*
Plugin Name:  Vue.js plugin boilerplate
Plugin URI:   https://yoursite.com/
Description:  A WordPress plugin boilerplate with Vue.js
Version:      0.1
Author:       Your name
Author URI:   https://yoursite.com/
License:      Your license
License URI:  https://yourlicense.org/
Text Domain:  yourplugin
Domain Path:  /languages
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// TODO: replace PLUGIN_NAME with yours
define( 'PLUGIN_NAME_FILE', __FILE__ );
define( 'PLUGIN_NAME_VERSION', '0.1.0.0' );

require plugin_dir_path( PLUGIN_NAME_FILE ) . 'includes/shortcodes.php';

add_action( 'wp_enqueue_scripts', function() {
  wp_register_script(
    'vue-simple-example',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/simple-example.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
  wp_register_script(
    'vue-components-example',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/components-example.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
} );
