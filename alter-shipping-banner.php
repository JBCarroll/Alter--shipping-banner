<?php
/**
 * Plugin Name: Alter Shipping Banner
 * Description: Custom form designed with ACF | Use shortcode: [alter_shipping]
 * Plugin URI: https://jbcarroll.com/
 * Author: jbcarroll.com
 * Version: 1.0
 * Author URI: https://jbcarroll.com/
 *
 * Text Domain: jonathan
 **/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require("plugin.php");

function alter_shipping_function() {
    require(dirname( __FILE__ ). "/classes/class-alter-shipping-banner.php");
}

function alter_shipping_banner_custom() {
    ob_start();
    alter_shipping_function();
    return ob_get_clean();
}

add_shortcode('alter_shipping', 'alter_shipping_banner_custom');
?>