<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// get posts dropdown
function xolo_addon_get_portfolio_dropdown_array($args = [], $key = 'ID', $value = 'post_title') {
  $options = [];
  $posts = get_posts($args);
  foreach ((array) $posts as $term) {
    $options[$term->{$key}] = $term->{$value};
  }
  return $options;
}

function xolo_addon_add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'xolo-elements',
		[
			'title' => esc_html__( 'Xolo Elements', 'xolo-addon' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'xolo_addon_add_elementor_widget_categories' );

//Elementor init

class Xolo_ElementorCustomElement {
 
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
	$theme = wp_get_theme();
	print_r($theme->name);
    // We check if the Elementor plugin has been installed / activated.
    if(defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')){
		include_once(plugin_dir_path( __FILE__ ).'class.xolo-icon-manager.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-service/widget-service.php');
        include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-info-one/widget-info-one.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-funfact/widget-funfact.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-slider/widget-slider.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-title/widget-title.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-about/widget-about.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-ceo-two/widget-ceo-two.php');
		include_once(plugin_dir_path( __FILE__ ).'/widgets/widget-blog/widget-blog.php');
      }
	}
}
Xolo_ElementorCustomElement::get_instance()->init();

