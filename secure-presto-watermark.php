<?php
/**
 * Plugin Name: Secure Presto Watermark Pro
 * Plugin URI: https://github.com/anuparya1/secure-presto-watermark-pro
 * Description: Dynamic watermark protection for Presto Player with LearnPress and Eduma support.
 * Version: 1.0.0
 * Author: Anup Kumar
 * Author URI: https://github.com/anuparya1
 * License: MIT
 * Text Domain: secure-presto-watermark-pro
 * Requires at least: 6.5
 * Requires PHP: 8.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Constants
 */
define( 'SPWP_VERSION', '1.0.0' );
define( 'SPWP_PLUGIN_FILE', __FILE__ );
define( 'SPWP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPWP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Load Plugin Loader
 */
require_once SPWP_PLUGIN_DIR . 'includes/class-loader.php';

/**
 * Boot Plugin
 */
SPWP\Loader::init();
