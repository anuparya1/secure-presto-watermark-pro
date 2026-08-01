<?php
/**
 * Settings Class
 *
 * @package SecurePrestoWatermarkPro
 */

declare(strict_types=1);

namespace SPWP;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Settings {

	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'admin_init', array( $this, 'register_settings' ) );

	}

	/**
	 * Register plugin settings
	 */
	public function register_settings(): void {

		register_setting(
			'spwp_settings_group',
			'spwp_settings'
		);

		add_settings_section(
			'spwp_general_section',
			'General Settings',
			'__return_false',
			'spwp-settings'
		);

		$this->add_checkbox(
			'enable_watermark',
			'Enable Watermark'
		);

		$this->add_checkbox(
			'show_name',
			'Show Student Name'
		);

		$this->add_checkbox(
			'show_email',
			'Show Email'
		);

		$this->add_checkbox(
			'show_user_id',
			'Show User ID'
		);

	}

	/**
	 * Add checkbox field
	 */
	private function add_checkbox(
		string $id,
		string $label
	): void {

		add_settings_field(
			$id,
			$label,
			array( $this, 'checkbox_callback' ),
			'spwp-settings',
			'spwp_general_section',
			array(
				'id' => $id,
			)
		);

	}

	/**
	 * Checkbox callback
	 */
	public function checkbox_callback(
		array $args
	): void {

		$options = get_option(
			'spwp_settings',
			array()
		);

		$id = $args['id'];

		$value = $options[ $id ] ?? 0;

		?>

		<input
			type="checkbox"
			name="spwp_settings[<?php echo esc_attr( $id ); ?>]"
			value="1"
			<?php checked( 1, $value ); ?>
		/>

		<?php
	}

}
