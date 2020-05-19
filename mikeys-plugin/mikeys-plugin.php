<?php 
/** 
 * @package Mikeysplugin
*/
/*
Plugin Name: Mikey's Plugin
Plugin URI: http://github.com/meppps
Description: This is my plugin
Version: 1.0.0
Author: Mikey Epps
Author URI: http://github.com/meppps
License: GPLv2 or later
Text Domain: mikeys-plugin
*/

// security precaution
if(!defined('ABSPATH')){
    exit;
}

// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/mikeys-plugin-scripts.php');

// Load class
require_once(plugin_dir_path(__FILE__).'/includes/mikeys-plugin-class.php');

// register widget
function register_mikeysplugin(){
    register_widget('Mikeys_Plugin_Widget');
}

// Hook in function
add_action('widgets_init','register_mikeysplugin');