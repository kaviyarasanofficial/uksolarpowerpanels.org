<?php
/**
 * Admin class.
 *
 * This class ties together all admin classes.
 *
 * @package     Erapress
 * @author      Erapress Software
 * @since       1.0.0
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Erapress_Admin' ) ) :

	/**
	 * Admin Class
	 */
	class Erapress_Admin {

		/**
		 * Primary class constructor.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			/**
			 * Include admin files.
			 */
			$this->includes();

			/**
			 * Load admin assets.
			 */
			add_action( 'admin_enqueue_scripts', array( $this, 'load_assets' ) );

			/**
			 * Add filters for WordPress header and footer text.
			 */
			add_filter( 'admin_footer_text', array( $this, 'filter_admin_footer_text' ), 50 );

			/**
			 * Admin page header.
			 */
			add_action( 'in_admin_header', array( $this, 'admin_header' ), 100 );

			/**
			 * Admin page footer.
			 */
			add_action( 'in_admin_footer', array( $this, 'admin_footer' ), 100 );

			/**
			 * Add notices.
			 */
			add_action( 'admin_notices', array( $this, 'admin_notices' ) );

		}

		/**
		 * Includes files.
		 *
		 * @since 1.0.0
		 */
		private function includes() {

			/**
			 * Include helper functions.
			 */
			require_once get_template_directory() . '/inc/admin/helpers.php'; // phpcs:ignore

			/**
			 * Include Erapress welcome page.
			 */
			require_once get_template_directory() . '/inc/admin/class-erapress-dashboard.php'; // phpcs:ignore
			
			/**
			 * Include Erapress meta boxes.
			 */
			require_once get_template_directory() . '/inc/admin/metabox/erapress-meta-boxes.php'; // phpcs:ignore
		}

		/**
		 * Load our required assets on admin pages.
		 *
		 * @since 1.0.0
		 * @param string $hook it holds the information about the current page.
		 */
		public function load_assets( $hook ) {

			/**
			 * Do not enqueue if we are not on one of our pages.
			 */

			// Script debug.
			$prefix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? 'dev/' : '';
			$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

			/**
			 * Enqueue admin pages stylesheet.
			 */
			wp_enqueue_style(
				'erapress-admin-styles',
				ERAPRESS_PARENT_INC_URI . '/admin/assets/css/erapress-admin' . $suffix . '.css',
				false,
				ERAPRESS_THEME_VERSION
			);

			/**
			 * Enqueue admin pages script.
			 */
			wp_enqueue_script(
				'erapress-admin-script',
				ERAPRESS_PARENT_INC_URI . '/admin/assets/js/' . $prefix . 'erapress-admin' . $suffix . '.js',
				array( 'jquery', 'wp-util', 'updates' ),
				ERAPRESS_THEME_VERSION,
				true
			);

			/**
			 * Localize admin strings.
			 */
			$texts = array(
				'install'               => esc_html__( 'Install', 'erapress' ),
				'install-inprogress'    => esc_html__( 'Installing...', 'erapress' ),
				'activate-inprogress'   => esc_html__( 'Activating...', 'erapress' ),
				'deactivate-inprogress' => esc_html__( 'Deactivating...', 'erapress' ),
				'active'                => esc_html__( 'Active', 'erapress' ),
				'retry'                 => esc_html__( 'Retry', 'erapress' ),
				'please_wait'           => esc_html__( 'Please Wait...', 'erapress' ),
				'importing'             => esc_html__( 'Importing... Please Wait...', 'erapress' ),
				'currently_processing'  => esc_html__( 'Currently processing: ', 'erapress' ),
				'import'                => esc_html__( 'Import', 'erapress' ),
				'import_demo'           => esc_html__( 'Import Demo', 'erapress' ),
				'importing_notice'      => esc_html__( 'The demo importer is still working. Closing this window may result in failed import.', 'erapress' ),
				'import_complete'       => esc_html__( 'Import Complete!', 'erapress' ),
				'import_complete_desc'  => esc_html__( 'The demo has been imported.', 'erapress' ) . ' <a href="' . esc_url( get_home_url() ) . '">' . esc_html__( 'Visit site.', 'erapress' ) . '</a>',
			);

			$strings = array(
				'ajaxurl'       => admin_url( 'admin-ajax.php' ),
				'wpnonce'       => wp_create_nonce( 'erapress_nonce' ),
				'texts'         => $texts,
				'color_pallete' => array( '#3857f1', '#06cca6', '#2c2e3a', '#e4e7ec', '#f0b849', '#ffffff', '#000000' ),
			);

			$strings = apply_filters( 'erapress_admin_strings', $strings );

			wp_localize_script( 'erapress-admin-script', 'erapress_strings', $strings );
		}

		/**
		 * Filter WordPress footer left text to display our text.
		 *
		 * @since 1.0.0
		 * @param string $text Text that we're going to replace.
		 */
		public function filter_admin_footer_text( $text ) {

			if ( erapress_admin_page() ) {
				return;
			}

			return $text;
		}

		/**
		 * Outputs the page admin header.
		 *
		 * @since 1.0.0
		 */
		public function admin_header() {

			$base = get_current_screen()->base;

			if ( ! erapress_admin_page( $base ) ) {
				return;
			}
			?>
			<div class="xl-websites">
				<div class="xl-theme-header xl-header-fixed">
					<div class="xl-theme-title">
						<a href="<?php echo esc_url( admin_url( 'themes.php?page=erapress-dashboard' ) ); ?>" class="xl-logo">
							<span class="xl-logo-icon"><i class="dashicons-before dashicons-dashboard"></i> <span class="xl-version xl-cusror-off"><?php echo ERAPRESS_THEME_VERSION; ?></span></span>
							<img src="<?php echo esc_url( ERAPRESS_PARENT_URI . '/assets/images/logo-dark.png' ); ?>" class="xl-title">
						</a>
					</div>
					<div class="xl-top-links">
						<ul>
							<li class="xl-most-links">
								<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="xl-btn xl-btn-fill"><?php esc_html_e( 'Customize', 'erapress' ); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php
		}

		/**
		 * Outputs the page admin footer.
		 *
		 * @since 1.0.0
		 */
		public function admin_footer() {

			$base = get_current_screen()->base;

			if ( ! erapress_admin_page( $base ) || erapress_admin_page( $base, 'erapress_wizard' ) ) {
				return;
			}
			?>
			<div class="xl-websites">
				<div class="xl-wpfooter">
					<div class="xl-wpfooter-wrap">
						<ul class="xl-footer">
							<li><p id="footer-ver" class="footer-ver text-left"><?php esc_html_e( 'Erapress Theme v', 'erapress' ); ?><?php echo esc_html(ERAPRESS_THEME_VERSION); ?></p></li>
							<li>
								<span class="heart-icon dashicons dashicons-heart"></span>
								<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/erapress/reviews/#new-post' ); ?>" target="_blank" class="xl-review"><?php esc_html_e( 'Leave a Review', 'erapress' ); ?></a></li>
							<li>
								<p id="footer-right" class="footer-social text-right">
									<a href="#" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
									<a href="#" target="_blank"><span class="dashicons dashicons-facebook"></span></a>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php
		}

		/**
		 * Admin Notices
		 *
		 * @since 1.0.0
		 */
		public function admin_notices() {

			$screen = get_current_screen();

			// Display on Dashboard, Themes and Erapress admin pages.
			if ( ! in_array( $screen->base, array( 'dashboard', 'themes' ), true ) && ! erapress_admin_page() ) {
				return;
			}
			
			// Display if not dismissed and not on Erapress plugins page.
			if ( ! erapress_is_notice_dismissed( 'erapress_notice_recommended-plugins' ) && ! erapress_admin_page( false, 'erapress-plugins' ) ) {

				$plugins = erapress_plugin_utilities()->get_recommended_plugins();
				$plugins = erapress_plugin_utilities()->get_deactivated_plugins( $plugins );

				$plugin_list = '';

				if ( is_array( $plugins ) && ! empty( $plugins ) ) {

					foreach ( $plugins as $slug => $plugin ) {

						$url = admin_url( 'plugin-install.php?tab=plugin-information&plugin=' . esc_attr( $slug ) . '&TB_iframe=true&width=990&height=500' );

						$plugin_list .= '<a href="' . esc_url( $url ) . '" class="thickbox xl-btn-active">' . esc_html( $plugin['name'] ) . '</a> ';
					}

					wp_enqueue_script( 'plugin-install' );
					add_thickbox();

					$plugin_list = trim( $plugin_list, ' ' );
					
					$message = sprintf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                           wp_kses_post(__( 'Welcome! Thank you for choosing Erapress! Want to import demo? Click the below button.<br><br> %2$sGo to Recommended Plugin%3$s', 'erapress' ) ), '<strong>'. wp_get_theme()->get('Name'). '</strong>','<a class="erapress-btn-get-started button button-primary button-hero erapress-button-padding" href="' . esc_url( home_url().'/wp-admin/themes.php?page=erapress-dashboard' ) . '">','</a>' );

					$navigation_items = erapress_options()->get_navigation_items();

					erapress_print_notice(
						array(
							'type'        => 'info',
							'message'     => $message,
							'message_id'  => 'recommended-plugins',
							'expires'     => 7 * 24 * 60 * 60,
							'action_link' => $navigation_items['plugins']['url'],
							'action_text' => esc_html__( 'Install Now', 'erapress' ),
						)
					);
				}
			}
		}
	}
endif;
new Erapress_Admin();