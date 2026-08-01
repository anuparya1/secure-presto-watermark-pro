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

define( 'SPWP_VERSION', '1.0.0' );
define( 'SPWP_PLUGIN_FILE', __FILE__ );
define( 'SPWP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPWP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

class Secure_Presto_Watermark_Pro {

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
    }

    public function admin_menu() {
        add_menu_page(
            'Secure Watermark',
            'Secure Watermark',
            'manage_options',
            'spwp-dashboard',
            [ $this, 'dashboard' ],
            'dashicons-shield-alt',
            58
        );
    }

    public function dashboard() {
        ?>
        <div class="wrap">
            <h1>Secure Presto Watermark Pro</h1>

            <div style="background:#fff;padding:20px;border:1px solid #ddd;border-radius:8px;margin-top:20px;">
                <h2>Plugin Installed Successfully 🎉</h2>

                <p><strong>Version:</strong> 1.0.0</p>

                <p>Framework loaded successfully.</p>

                <p>Next version will include:</p>

                <ul>
                    <li>✅ Settings API</li>
                    <li>✅ Dynamic Watermark</li>
                    <li>✅ Presto Player Detection</li>
                    <li>✅ LearnPress Integration</li>
                    <li>✅ Admin Settings</li>
                </ul>
            </div>
        </div>
        <?php
    }
}

new Secure_Presto_Watermark_Pro();
