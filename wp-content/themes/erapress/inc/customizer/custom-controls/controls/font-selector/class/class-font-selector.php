<?php
/**
 * Class Erapress_Font_Selector
 */
class Erapress_Font_Selector extends Erapress_Customize_Base_Control {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'selector-font';

	/**
	 * Render the control's content.
	 * Allows the content to be overriden without having to rewrite the wrapper in $this->render().
	 *
	 * @access protected
	 */
	protected function render_content() {
		$this_val = $this->value(); ?>
		<label>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
			<?php endif; ?>

			<select class="typography-select" <?php $this->link(); ?>>
				<option value=""
				<?php
				if ( ! $this_val ) {
					echo 'selected="selected"';}
?>
><?php esc_html_e( 'Default', 'erapress' ); ?></option>
				<?php
				// Get Standard font options
				$std_fonts = erapress_font_selector_get_standard_fonts();
				if ( ! empty( $std_fonts ) ) {
				?>
					<optgroup label="<?php esc_attr_e( 'Standard Fonts', 'erapress' ); ?>">
						<?php
						// Loop through font options and add to select
						foreach ( $std_fonts as $font ) {
						?>
							<option value="<?php echo esc_html( $font ); ?>" <?php selected( $font, $this_val ); ?>><?php echo esc_html( $font ); ?></option>
						<?php } ?>
					</optgroup>
				<?php
				}

				// Google font options
				$google_fonts = erapress_font_selector_get_google_fonts_array();
				if ( ! empty( $google_fonts ) ) {
				?>
					<optgroup label="<?php esc_attr_e( 'Google Fonts', 'erapress' ); ?>">
						<?php
						// Loop through font options and add to select
						foreach ( $google_fonts as $font ) {
						?>
							<option value="<?php echo esc_html( $font ); ?>" <?php selected( $font, $this_val ); ?>><?php echo esc_html( $font ); ?></option>
						<?php } ?>
					</optgroup>
				<?php } ?>
			</select>

		</label>

		<?php
	}
}
