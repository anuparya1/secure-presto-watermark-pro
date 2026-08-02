<?php
/**
 * Watermark Engine
 *
 * @package SecurePrestoWatermarkPro
 */

declare(strict_types=1);

namespace SPWP;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Watermark {

	/**
	 * Constructor
	 */
	public function __construct() {

		add_action(
			'wp_enqueue_scripts',
			array( $this, 'enqueue_assets' )
		);

		add_action(
			'wp_footer',
			array( $this, 'render_watermark' ),
			999
		);

	}

	/**
	 * Load CSS & JS
	 */
	public function enqueue_assets(): void {

		if ( is_admin() ) {
			return;
		}

		wp_enqueue_style(
			'spwp-watermark',
			SPWP_PLUGIN_URL . 'assets/css/watermark.css',
			array(),
			SPWP_VERSION
		);

		wp_enqueue_script(
			'spwp-watermark',
			SPWP_PLUGIN_URL . 'assets/js/watermark.js',
			array(),
			SPWP_VERSION,
			true
		);

	}

	/**
	 * Render Watermark
	 */
	public function render_watermark(): void {

		if ( is_admin() ) {
			return;
		}

		$user = wp_get_current_user();

		$text = 'Guest User';

		if ( $user && $user->exists() ) {
			$text = $user->display_name;
		}

		?>

		<div id="spwp-watermark">
			<?php echo esc_html( $text ); ?>
		</div>

		<?php
	}
}
