<?php
/**
 * Admin Class
 *
 * @package SecurePrestoWatermarkPro
 */

declare(strict_types=1);

namespace SPWP;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Admin {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
	}

	public function register_menu(): void {

		// Main Menu
		add_menu_page(
			'Secure Watermark',
			'Secure Watermark',
			'manage_options',
			'spwp-dashboard',
			array( $this, 'dashboard_page' ),
			'dashicons-shield-alt',
			58
		);

		// Dashboard Submenu
		add_submenu_page(
			'spwp-dashboard',
			'Dashboard',
			'Dashboard',
			'manage_options',
			'spwp-dashboard',
			array( $this, 'dashboard_page' )
		);

		// Settings Submenu
		add_submenu_page(
			'spwp-dashboard',
			'Settings',
			'Settings',
			'manage_options',
			'spwp-settings',
			array( $this, 'settings_page' )
		);

	}

	public function dashboard_page(): void {
		?>

		<div class="wrap">

			<h1>🔒 Secure Presto Watermark Pro</h1>

			<div class="card" style="max-width:900px;padding:20px;">

				<h2>Welcome 🎉</h2>

				<p><strong>Version:</strong> <?php echo esc_html( SPWP_VERSION ); ?></p>

				<p>The Admin module is working successfully.</p>

				<hr>

				<h3>Upcoming Modules</h3>

				<ul>
					<li>✅ Settings API</li>
					<li>✅ Dynamic Watermark</li>
					<li>✅ LearnPress Integration</li>
					<li>✅ Presto Player Detection</li>
					<li>✅ Live Preview</li>
				</ul>

			</div>

		</div>

		<?php
	}

	public function settings_page(): void {
		?>

		<div class="wrap">

			<h1>⚙ Secure Watermark Settings</h1>

			<form method="post" action="options.php">

				<?php

				settings_fields( 'spwp_settings_group' );

				do_settings_sections( 'spwp-settings' );

				submit_button( 'Save Settings' );

				?>

			</form>

		</div>

		<?php
	}

}
