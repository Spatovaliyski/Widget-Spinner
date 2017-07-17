<?php
/**
 * @package Widget-Spinner
 */
/*
Plugin Name: Widget Spinner
Plugin URI: #
Description: Obviously the best plugin ever created.
Version: 0.0.1
Author: Martin Spatovaliyski
Author URI: https://#
License: GPLv2 or later
Text Domain: Widget Spinner
*/


add_action('wp_enqueue_scripts', 'scripts');
add_action('wp_enqueue_scripts', 'styles');

function scripts() {
  wp_enqueue_script('jquery');
  wp_register_script( 'spinner-script', plugin_dir_url(__FILE__).'assets/scripts/spinner.js');
  wp_enqueue_script( 'spinner-script' );
}

function styles() {
  wp_register_style( 'spinner-style', plugin_dir_url(__FILE__).'assets/css/spinner.css');
  wp_enqueue_style( 'spinner-style');
}

?>
