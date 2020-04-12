<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Shortcode: [shortcode-example attr="sample"]


add_shortcode( 'shortcode-example', function($args=[]) {
  $atts = esc_attr(isset($args['attr']) ? $args['attr'] : '');
  wp_enqueue_script( 'shortcode-example' );
  $str= "<div class='shortcode-example' data-atts='{$atts}'></div>";
  return $str;
} );

/* function my_js_variables(){ ?>
//   <script type="text/javascript">
//     var networks = <?php echo json_encode(CFS()->get( 'locations' )); ?>;
//   </script> <?php
// };
// add_action ( 'wp_head', 'my_js_variables' );
*/
