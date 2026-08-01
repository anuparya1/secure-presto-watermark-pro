<?php
/**
 * Plugin Loader
 *
 * @package SecurePrestoWatermarkPro
 */

declare(strict_types=1);

namespace SPWP;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Loader {

	/**
	 * Initialize plugin modules.
	 *
	 * @return void
	 */
	public static function init(): void {

		require_once SPWP_PLUGIN_DIR . 'includes/class-admin.php';

		new Admin();

	}
}
