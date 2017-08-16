<?php

/* 
 *  Plugin Name: Facebook footer links
 *  Description: Adds facebook links to the footer of every post
 *  Version: 1.0.0
 *  Author: Jeril Sebastian
 * 
 */

if (!defined('ABSPATH')) {
    exit;
}

$ffl_options = get_option('ffl_settings');

//Loads scripts
require(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

require(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-content.php');

if(is_admin()) {
    require(plugin_dir_path(__FILE__) . '/includes/facebook-footer-links-settings.php');
}