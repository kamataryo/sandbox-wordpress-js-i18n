<?php
/**
 * Plugin Name: I18n Alert
 * Text Domain: i18n-alert
 * Version:     0.1.0
 */

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script(
    'my-script-handle',
    plugins_url( '/main.js', __FILE__ ),
    [ 'wp-i18n' ]
  );

  wp_set_script_translations(
    'my-script-handle',
    'i18n-alert',
    dirname( __FILE__ ) . '/languages'
  );
} );
