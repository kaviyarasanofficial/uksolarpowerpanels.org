<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// get posts dropdown
function xolo_get_portfolio_dropdown_array($args = [], $key = 'ID', $value = 'post_title') {
  $options = [];
  $posts = get_posts($args);
  foreach ((array) $posts as $term) {
    $options[$term->{$key}] = $term->{$value};
  }
  return $options;
}

function xolo_add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'erapress',
		[
			'title' => esc_html__( 'EraPress', 'xolo-addon' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'xolo_add_elementor_widget_categories' );

//Elementor init

class Xolo_Addon_Pro_ElementorCustomElement {
 
   private static $instance = null;
 
   public static function get_instance() {
      if ( ! self::$instance )
         self::$instance = new self;
      return self::$instance;
   }
 
   public function init(){
      add_action( 'elementor/widgets/widgets_registered', array( $this, 'widgets_registered' ) );
   }


   public function widgets_registered() {
 
    // We check if the Elementor plugin has been installed / activated.
    if(defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')){
	
			include_once(plugin_dir_path( __FILE__ ).'class.xolo-icon-manager.php');
			include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-slider.php');
			include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-info.php');
			include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-feature.php');
			include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-pricing.php');
			include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-blog.php');
      }
	}
}
Xolo_Addon_Pro_ElementorCustomElement::get_instance()->init();

