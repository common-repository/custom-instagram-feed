<?php
/*
Plugin Name: Custom Instagram Feed
Plugin URI: #
Description: Just enter username to add Responsive Instagram Feed into your Posts, Pages and Widgets.
Version: 1.0.0
Author: ClickitPlugins
Author URI: https://clickitplugins.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: clktusg_txt_dm
*/



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include_once('includes/clickitinsta_enqueue_scripts.php');
include_once('includes/clickitinsta_custom_post.php');
include_once('includes/clickitinsta_save_meta.php');
include_once('includes/clickitinsta_shortcode.php');
include_once('includes/clickitinsta-custom-columns.php');
?>