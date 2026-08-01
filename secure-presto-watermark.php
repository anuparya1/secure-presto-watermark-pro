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
 * Initialize Loader
 */
SPWP\Loader::init();

/**
 * Main Plugin Class
 */
class Secure_Presto_Watermark_Pro {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Register Admin Menu
	 */
	public function admin_menu() {

		add_menu_page(
			'Secure Watermark',
			'Secure Watermark',
			'manage_options',
			'spwp-dashboard',
			array( $this, 'dashboard' ),
			'dashicons-shield-alt',
			58
		);

	}

	/**
	 * Dashboard
	 */
	public function dashboard() {
		?>

		<div class="wrap">

			<h1>🔒 Secure Presto Watermark Pro</h1>

			<div style="background:#fff;padding:25px;border:1px solid #ddd;border-radius:10px;max-width:900px;">

				<h2>Plugin Installed Successfully 🎉</h2>

				<p>
					<strong>Version :</strong>
					<?php echo esc_html( SPWP_VERSION ); ?>
				</p>

				<p>
					The plugin framework has been loaded successfully.
				</p>

				<hr>

				<h3>Upcoming Features</h3>

				<ul>

					<li>✅ WordPress Settings API</li>

					<li>✅ LearnPress Integration</li>

					<li>✅ Presto Player Detection</li>

					<li>✅ Dynamic Watermark</li>

					<li>✅ Student Name</li>

					<li>✅ Email Watermark</li>

					<li>✅ User ID</li>

					<li>✅ Custom Text</li>

					<li>✅ Moving Watermark</li>

					<li>✅ Color Picker</li>

					<li>✅ Background Color</li>

					<li>✅ Live Preview</li>

				</ul>

			</div>

		</div>

		<?php
	}
}

/**
 * Run Plugin
 */
new Secure_Presto_Watermark_Pro();
