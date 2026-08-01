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

/**
 * Handles the WordPress admin area.
 */
final class Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
	}

	/**
	 * Register admin menu.
	 *
	 * @return void
	 */
	public function register_menu(): void {

		add_menu_page(
			__( 'Secure Watermark', 'secure-presto-watermark-pro' ),
			__( 'Secure Watermark', 'secure-presto-watermark-pro' ),
			'manage_options',
			'spwp-dashboard',
			array( $this, 'dashboard_page' ),
			'dashicons-shield-alt',
			58
		);
	}

	/**
	 * Dashboard page.
	 *
	 * @return void
	 */
	public function dashboard_page(): void {
		?>

		<div class="wrap">

			<h1>🔒 Secure Presto Watermark Pro</h1>

			<div style="background:#fff;padding:25px;border:1px solid #ddd;border-radius:10px;max-width:900px;">

				<h2>Welcome 🎉</h2>

				<p>
					Version:
					<strong><?php echo esc_html( SPWP_VERSION ); ?></strong>
				</p>

				<p>
					The Admin module is working successfully.
				</p>

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
}
