<?php
/**
* Plugin Name: Hide Wordpress Bar
* Description: Do you know that admin bar of wordpress admin you always wanted to hide? You can leave ... I'll hide it for you.
* Version:     1.0.0
* Author:      Digo Ribeiro
* License:     GPLv2 or later
* Text Domain: hide-wordpress-bar
* Author URI:  https://digoribeiro.com/
*/
define( 'hwpb_HIDEBAR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( hwpb_HIDEBAR_PLUGIN_DIR . 'class.hide-bar.php' );