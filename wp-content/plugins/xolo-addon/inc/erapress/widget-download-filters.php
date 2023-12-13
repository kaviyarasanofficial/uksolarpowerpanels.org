<?php

add_action('widgets_init', 'xolo_addon_pro_download_filters');

function xolo_addon_pro_download_filters()
{
	register_widget('xolo_addon_pro_download_filters');
}

class xolo_addon_pro_download_filters extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'xolo-addon-pro-download-filters', 'description' =>esc_html__('Displays download item filters. Used in Download Category Sidebar','xolo-addon-pro'));
		$control_ops = array('id_base' => 'xolo_addon_pro_download_filters');
		parent::__construct('xolo_addon_pro_download_filters', esc_html__('Xolo Addon Pro : Download Filters','xolo-addon-pro'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		echo $before_widget;
		?>
		<div class="filter-by">
			<?php 
			$activeNewest=null;
			$activeCheapest=null;
			$activeBest=null;
			if(isset($_GET['orderby'])){
				if($_GET['orderby']=="price"){
					$activeCheapest="active";
				}
				else if($_GET['orderby']=="date"){
					$activeNewest="active";
				}
				else if($_GET['orderby']=="sales"){
					$activeBest="active";
				}
			}
			else{
				$activeNewest="active";;
			} ?>
			<a class="<?php echo esc_html($activeNewest); ?>" href="<?php echo esc_url(add_query_arg(array( 'orderby'=>'date'))); ?>"><?php esc_html_e('Newest Items','xolo-addon-pro'); ?> <span></span></a>
			<a class="<?php echo esc_html($activeCheapest); ?>" href="<?php echo esc_url(add_query_arg(array( 'orderby'=>'price'))); ?>"><?php esc_html_e('Cheapest','xolo-addon-pro'); ?> <span></span></a>
			<a class="<?php echo esc_html($activeBest); ?>" href="<?php echo esc_url(add_query_arg(array( 'orderby'=>'sales'))); ?>"><?php esc_html_e('Best Selling','xolo-addon-pro'); ?> <span></span></a>
		</div>
		<?php
		echo $after_widget;
	}
}
