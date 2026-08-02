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

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ), 99 );
	}

	/**
	 * Register Admin Menu.
	 */
	public function register_menu(): void {

		// Main Menu.
		add_menu_page(
			'Secure Watermark',
			'Secure Watermark',
			'manage_options',
			'spwp-dashboard',
			array( $this, 'dashboard_page' ),
			'dashicons-shield-alt',
			58
		);

		// Settings Submenu.
		add_submenu_page(
			'spwp-dashboard',
			'Settings',
			'Settings',
			'manage_options',
			'spwp-settings',
			array( $this, 'settings_page' )
		);
	}

	/**
	 * Dashboard Page.
	 */
	public function dashboard_page(): void {
		?>

		<div class="wrap">

			<h1>🔒 Secure Presto Watermark Pro</h1>

			<div class="card" style="max-width:900px;padding:20px;">

				<h2>Welcome 🎉</h2>

				<p>
					<strong>Version:</strong>
					<?php echo esc_html( SPWP_VERSION ); ?>
				</p>

				<p>Plugin framework is working successfully.</p>

				<hr>

				<h3>Status</h3>

				<table class="widefat striped" style="max-width:700px;">
					<tbody>
						<tr>
							<td>Plugin Loaded</td>
							<td>✅ Yes</td>
						</tr>
						<tr>
							<td>Admin Module</td>
							<td>✅ Active</td>
						</tr>
						<tr>
							<td>Settings Module</td>
							<td>✅ Loaded</td>
						</tr>
						<tr>
							<td>Presto Integration</td>
							<td>⏳ Coming Soon</td>
						</tr>
						<tr>
							<td>Watermark Engine</td>
							<td>⏳ Coming Soon</td>
						</tr>
					</tbody>
				</table>

			</div>

		</div>

		<?php
	}

	/**
	 * Settings Page.
	 */
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
