<?php 

// Register and Initialize Widget
	function erapress_feature_widget() {
		
	    register_widget( 'erapress_feature' );
	}
	add_action( 'widgets_init', 'erapress_feature_widget');

// Creating the widget
	class erapress_feature extends WP_Widget {
	 
	function __construct() {
		parent::__construct(
			'erapress_feature_widget', // Base ID
			__('EraPress : Features Widget','erapress'), // Widget Name
			array(
				'classname' => 'erapress_feature',
				'description' => __('Features Widget Area','erapress'),
			)
		);
		
	 }
	 public function widget($args,$instance) {
	 echo $args['before_widget']; ?>
		
		
				<div class="widget-text">
				<div class="widget-content">
					
					
						<?php if(!empty($instance['features_widget_image'])) { ?>
						<div class="logo">
							<a href="#" class="custom-logo-link" rel="home">
							<img src="<?php echo esc_attr($instance['features_widget_image']);?>">
							</a>
						</div>
						<?php } ?>	
						<?php if(!empty($instance['features_widget_description'])) { ?>
						<p><?php echo esc_html($instance['features_widget_description']);?></p>
						<?php } ?>
						</div>
						<div class="contact-area">
						<div class="contact-icon">
							<i class="fa fa-lightbulb-o"></i>
						 </div>
						 
				
					<?php if(!empty($instance['features_widget_title'])) { ?>
						<h4><?php //echo esc_html($instance['features_widget_title']);?></h4>
					<?php }  ?>
					
					
					
					<?php if(!empty($instance['features_widget_text1'])) { ?>
						<div class="contact-info">
						<span class="title"><?php echo esc_html($instance['features_widget_text1']);?></span><br>
					<?php } ?>
					<?php if(!empty($instance['features_widget_text2'])) { ?>
						<span class="text"> <a href="<?php echo esc_html($instance['features_widget_link']);?>"><?php echo esc_html($instance['features_widget_text2']);?></a></span>
					<?php } ?>
				</div>
					
				</div>
					<?php $author_social_hs 		= isset($instance['author_social_hs']) ? $instance['author_social_hs'] : 1;?>
					<?php if($author_social_hs == '1'):	 ?>
								<div class="footer-left-content">
								<aside class="widget widget-text">
									<div class="widget-content">
										
										<h3><?php echo esc_html($instance['features_widget_title']);?></h3>
									</div>
								</aside>
                        <?php
									$user = new WP_User( get_current_user_id() );
									
								?>

                        <aside class="widget widget_social_widget">
                            <ul>
                                <?php $instagram_profile = $user->instagram_profile;
										if ( $instagram_profile && $instagram_profile != '' ): ?>
											<li><a href="<?php echo esc_url($instagram_profile); ?>" class="social-icon"><i class="fa fa-instagram"></i></a></li>
										<?php endif; ?>
										
										
										<?php $facebook_profile = $user->facebook_profile;
											if ( $facebook_profile && $facebook_profile != '' ): ?>
											<li><a href="<?php echo esc_url($facebook_profile); ?>" class="social-icon"><i class="fa fa-facebook"></i></a></li>
										<?php endif; ?>
											
										<?php $pinterest_profile = $user->pinterest_profile;
										if ( $pinterest_profile && $pinterest_profile != '' ): ?>
											<li><a href="<?php echo esc_url($pinterest_profile); ?>" class="social-icon"><i class="fa fa-pinterest"></i></a></li>
										<?php endif; ?>
											
										<?php $twitter_profile = $user->twitter_profile;
										if ( $twitter_profile && $twitter_profile != '' ): ?>
											<li><a href="<?php echo esc_url($twitter_profile); ?>" class="social-icon"><i class="fa fa-twitter"></i></a></li>
										<?php endif; ?>
										
										<?php $linkedin_profile = $user->linkedin_profile;
										if ( $linkedin_profile && $linkedin_profile != '' ): ?>
											<li><a href="<?php echo esc_url($linkedin_profile); ?>" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
										<?php endif; ?>
										
										<?php $skype_profile = $user->skype_profile;
										if ( $skype_profile && $skype_profile != '' ): ?>
											<li><a href="<?php echo esc_url($skype_profile); ?>" class="social-icon"><i class="fa fa-skype"></i></a></li>
										<?php endif; ?>
                            </ul>
                        </aside>
                    </div>
					<?php endif;?>
			
	<?php
	echo $args['after_widget'];
	}
	// Widget Backend
	public function form( $instance ) {
	if ( isset( $instance[ 'features_widget_title' ])){
	$features_widget_title = $instance[ 'features_widget_title' ];
	}
	else {
	$features_widget_title = '';
	}
	
	
	if ( isset( $instance[ 'features_widget_image' ])){
	$features_widget_image = $instance[ 'features_widget_image' ];
	}
	else {
	$features_widget_image = '';
	}
	
	if ( isset( $instance[ 'features_widget_description' ])){
	$features_widget_description = $instance[ 'features_widget_description' ];
	}
	else {
	$features_widget_description = '';
	}
	
	if ( isset( $instance[ 'features_widget_text1' ])){
	$features_widget_text1 = $instance[ 'features_widget_text1' ];
	}
	else {
	$features_widget_text1 = '';
	}
	if ( isset( $instance[ 'features_widget_text2' ])){
	$features_widget_text2 = $instance[ 'features_widget_text2' ];
	}
	else {
	$features_widget_text2 = '';
	}
	if ( isset( $instance[ 'features_widget_link' ])){
	$features_widget_link = $instance[ 'features_widget_link' ];
	}
	else {
	$features_widget_link = '';
	}
	$instance['author_social_hs'] = isset($instance['author_social_hs']) ? $instance['author_social_hs'] : '1';
	?>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_title' ); ?>"><?php _e( 'Title','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_title' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_title' ); ?>" type="text" value="<?php if($features_widget_title) echo esc_html( $features_widget_title ); ?>" />
		</p>

		
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_image' ); ?>"><?php _e( 'Image','erapress' ); ?></label>
			
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_image' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_image' ); ?>" type="text" value="<?php if($features_widget_image) echo esc_html( $features_widget_image ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_description' ); ?>"><?php _e( 'Description','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_description' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_description' ); ?>" type="text" value="<?php if($features_widget_description) echo esc_html( $features_widget_description ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_text1' ); ?>"><?php _e( 'Text1','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_text1' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_text1' ); ?>" type="text" value="<?php if($features_widget_text1) echo esc_html( $features_widget_text1 ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_text2' ); ?>"><?php _e( 'Text2','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_text2' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_text2' ); ?>" type="text" value="<?php if($features_widget_text2) echo esc_html( $features_widget_text2 ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_link' ); ?>"><?php _e( 'Link','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_link' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_link' ); ?>" type="text" value="<?php if($features_widget_link) echo esc_html( $features_widget_link ); ?>" />
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_social_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_social_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_social_hs' ); ?>" value="<?php if($instance[ 'author_social_hs' ]) echo esc_html( $instance[ 'author_social_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_social_hs' ); ?>"><?php _e( 'Hide/show Social Icon ?','erapress' ); ?></label>
		</p>
	
	<?php
    }
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	
	$instance = array();
		$instance['features_widget_title'] = ( ! empty( $new_instance['features_widget_title'] ) ) ? sanitize_text_field( $new_instance['features_widget_title'] ) : '';
		
		$instance['features_widget_image'] = ( ! empty( $new_instance['features_widget_image'] ) ) ? sanitize_text_field( $new_instance['features_widget_image'] ) : '';
		
		$instance['features_widget_description'] = ( ! empty( $new_instance['features_widget_description'] ) ) ? sanitize_text_field( $new_instance['features_widget_description'] ) : '';
		
		$instance['features_widget_text1'] = ( ! empty( $new_instance['features_widget_text1'] ) ) ? sanitize_text_field( $new_instance['features_widget_text1'] ) : '';
		
		$instance['features_widget_text2'] = ( ! empty( $new_instance['features_widget_text2'] ) ) ? sanitize_text_field( $new_instance['features_widget_text2'] ) : '';
		
		$instance['features_widget_link'] = ( ! empty( $new_instance['features_widget_link'] ) ) ? sanitize_text_field( $new_instance['features_widget_link'] ) : '';
		
		$instance['author_social_hs'] 		= isset( $new_instance['author_social_hs'] ) ? 1 : false;
		return $instance;
	}
	}


// Register and Initialize Widget
	function erapress_footer_right_widget() {
		
	    register_widget( 'erapress_footer_right' );
	}
	add_action( 'widgets_init', 'erapress_footer_right_widget');

// Creating the widget
	class erapress_footer_right extends WP_Widget {
	 
	function __construct() {
		parent::__construct(
			'erapress_footer_right_widget', // Base ID
			__('EraPress : Contact Widget','erapress'), // Widget Name
			array(
				'classname' => 'erapress_footer_right',
				'description' => __('Contact Widget Area','erapress'),
			)
		);
		
	 }
	 public function widget($args,$instance) {
	 echo $args['before_widget']; ?>
							<div class="widget-contact">
							<?php if(!empty($instance['footer_right_title'])) { ?>
							<h2 class="widget-title"><?php echo esc_html($instance['footer_right_title']);?></h2>
							<?php }?>
                            <div class="contact-area">
							
                                <?php if(!empty($instance['footer_right_icon1'])) { ?>
								<div class="contact-icon">
									<i class="fa <?php echo esc_attr($instance['footer_right_icon1']);?>"></i> 
									</div>
								<?php } ?>
									
									
                                <?php if(!empty($instance['footer_right_text1'])) { ?>
								<div class="contact-info">
									<p class="text"><a href="#"><?php echo esc_html($instance['footer_right_text1']);?></a></p>
								</div>	
								<?php } ?>
                            </div>
                            <div class="contact-area">
                                <?php if(!empty($instance['footer_right_icon2'])) { ?>
								<div class="contact-icon">
									<i class="fa <?php echo esc_attr($instance['footer_right_icon2']);?>"></i>
								</div>		
								<?php } ?>
                                <?php if(!empty($instance['footer_right_text2'])) { ?>
								<div class="contact-info">
									<p class="text"><a href="#"><?php echo esc_html($instance['footer_right_text2']);?></a></p>
								</div>	
								<?php } ?>
                            </div>
                            <div class="contact-area">
                                <?php if(!empty($instance['footer_right_icon3'])) { ?>
								<div class="contact-icon">
									<i class="fa <?php echo esc_attr($instance['footer_right_icon3']);?>"></i> 
								</div>	
								<?php } ?>
                               <?php if(!empty($instance['footer_right_text3'])) { ?>
							   <div class="contact-info">
									<p class="text"><a href="#"><?php echo esc_html($instance['footer_right_text3']);?></a></p>
								</div>	
								<?php } ?>
                            </div>
                            <div class="contact-area">
                                <?php if(!empty($instance['footer_right_icon4'])) { ?>
								<div class="contact-icon">
									<i class="fa <?php echo esc_attr($instance['footer_right_icon4']);?>"></i> 
								</div>	
								<?php } ?>	
                                <?php if(!empty($instance['footer_right_text4'])) { ?>
								<div class="contact-info">
									<p class="text"><a href="#"><?php echo esc_html($instance['footer_right_text4']);?></a></p>
								</div>	
								<?php } ?>
                            </div>
                            <div class="contact-area">
								<?php if(!empty($instance['footer_right_icon5'])) { ?>
								<div class="contact-icon">
										<i class="fa <?php echo esc_attr($instance['footer_right_icon5']);?>"></i>
								</div>			
								<?php } ?>	
                                <?php if(!empty($instance['footer_right_text5'])) { ?>
								<div class="contact-info">
									<p class="text"><a href="#"><?php echo esc_html($instance['footer_right_text5']);?></a></p>
								</div>	
								<?php } ?>
                            </div>
							</div>
		
	<?php
	echo $args['after_widget'];
	}
	// Widget Backend
	public function form( $instance ) {
	if ( isset( $instance[ 'footer_right_title' ])){
	$footer_right_title = $instance[ 'footer_right_title' ];
	}
	else {
	$footer_right_title = '';
	}
	
	if ( isset( $instance[ 'footer_right_icon1' ])){
	$footer_right_icon1 = $instance[ 'footer_right_icon1' ];
	}
	else {
	$footer_right_icon1 = '';
	}
	
	if ( isset( $instance[ 'footer_right_text1' ])){
	$footer_right_text1 = $instance[ 'footer_right_text1' ];
	}
	else {
	$footer_right_text1 = '';
	}
	if ( isset( $instance[ 'footer_right_icon2' ])){
	$footer_right_icon2 = $instance[ 'footer_right_icon2' ];
	}
	else {
	$footer_right_icon2 = '';
	}
	
	if ( isset( $instance[ 'footer_right_text2' ])){
	$footer_right_text2 = $instance[ 'footer_right_text2' ];
	}
	else {
	$footer_right_text2 = '';
	}
	if ( isset( $instance[ 'footer_right_icon3' ])){
	$footer_right_icon3 = $instance[ 'footer_right_icon3' ];
	}
	else {
	$footer_right_icon3 = '';
	}
	if ( isset( $instance[ 'footer_right_text3' ])){
	$footer_right_text3 = $instance[ 'footer_right_text3' ];
	}
	else {
	$footer_right_text3 = '';
	}
	
	if ( isset( $instance[ 'footer_right_icon4' ])){
	$footer_right_icon4 = $instance[ 'footer_right_icon4' ];
	}
	else {
	$footer_right_icon4 = '';
	}
	if ( isset( $instance[ 'footer_right_text4' ])){
	$footer_right_text4 = $instance[ 'footer_right_text4' ];
	}
	else {
	$footer_right_text4 = '';
	}
	
	if ( isset( $instance[ 'footer_right_icon5' ])){
	$footer_right_icon5 = $instance[ 'footer_right_icon5' ];
	}
	else {
	$footer_right_icon5 = '';
	}
	if ( isset( $instance[ 'footer_right_text5' ])){
	$footer_right_text5 = $instance[ 'footer_right_text5' ];
	}
	else {
	$footer_right_text5 = '';
	}
	?>
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_title' ); ?>"><?php _e( 'Title','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_title' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_title' ); ?>" type="text" value="<?php if($footer_right_title) echo esc_html( $footer_right_title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_icon1' ); ?>"><?php _e( 'Icon1','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_icon1' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_icon1' ); ?>" type="text" value="<?php if($footer_right_icon1) echo esc_html( $footer_right_icon1 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_text1' ); ?>"><?php _e( 'Text1','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_text1' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_text1' ); ?>" type="text" value="<?php if($footer_right_text1) echo esc_html( $footer_right_text1 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_icon2' ); ?>"><?php _e( 'Icon2','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_icon2' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_icon2' ); ?>" type="text" value="<?php if($footer_right_icon2) echo esc_html( $footer_right_icon2 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_text2' ); ?>"><?php _e( 'Text2','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_text2' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_text2' ); ?>" type="text" value="<?php if($footer_right_text2) echo esc_html( $footer_right_text2 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_icon3' ); ?>"><?php _e( 'Icon3','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_icon3' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_icon3' ); ?>" type="text" value="<?php if($footer_right_icon3) echo esc_html( $footer_right_icon3 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_text3' ); ?>"><?php _e( 'Text3','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_text3' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_text3' ); ?>" type="text" value="<?php if($footer_right_text3) echo esc_html( $footer_right_text3 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_icon4' ); ?>"><?php _e( 'Icon4','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_icon4' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_icon4' ); ?>" type="text" value="<?php if($footer_right_icon4) echo esc_html( $footer_right_icon4 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_text4' ); ?>"><?php _e( 'Text4','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_text4' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_text4' ); ?>" type="text" value="<?php if($footer_right_text4) echo esc_html( $footer_right_text4 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_icon5' ); ?>"><?php _e( 'Icon5','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_icon5' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_icon5' ); ?>" type="text" value="<?php if($footer_right_icon5) echo esc_html( $footer_right_icon5 ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_right_text5' ); ?>"><?php _e( 'Text5','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'footer_right_text5' ); ?>" name="<?php echo $this->get_field_name( 'footer_right_text5' ); ?>" type="text" value="<?php if($footer_right_text5) echo esc_html( $footer_right_text5 ); ?>" />
		</p>

		
		
	
	<?php
    }
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	
	$instance = array();
		$instance['footer_right_title'] = ( ! empty( $new_instance['footer_right_title'] ) ) ? sanitize_text_field( $new_instance['footer_right_title'] ) : '';
		
		$instance['footer_right_icon1'] = ( ! empty( $new_instance['footer_right_icon1'] ) ) ? sanitize_text_field( $new_instance['footer_right_icon1'] ) : '';
		
		$instance['footer_right_text1'] = ( ! empty( $new_instance['footer_right_text1'] ) ) ? sanitize_text_field( $new_instance['footer_right_text1'] ) : '';
		
		$instance['footer_right_icon2'] = ( ! empty( $new_instance['footer_right_icon2'] ) ) ? sanitize_text_field( $new_instance['footer_right_icon2'] ) : '';
		
		$instance['footer_right_text2'] = ( ! empty( $new_instance['footer_right_text2'] ) ) ? sanitize_text_field( $new_instance['footer_right_text2'] ) : '';
		
		$instance['footer_right_icon3'] = ( ! empty( $new_instance['footer_right_icon3'] ) ) ? sanitize_text_field( $new_instance['footer_right_icon3'] ) : '';
		
		$instance['footer_right_text3'] = ( ! empty( $new_instance['footer_right_text3'] ) ) ? sanitize_text_field( $new_instance['footer_right_text3'] ) : '';
		
		$instance['footer_right_icon4'] = ( ! empty( $new_instance['footer_right_icon4'] ) ) ? sanitize_text_field( $new_instance['footer_right_icon4'] ) : '';
		
		$instance['footer_right_text4'] = ( ! empty( $new_instance['footer_right_text4'] ) ) ? sanitize_text_field( $new_instance['footer_right_text4'] ) : '';
		
		$instance['footer_right_icon5'] = ( ! empty( $new_instance['footer_right_icon5'] ) ) ? sanitize_text_field( $new_instance['footer_right_icon5'] ) : '';
		
		$instance['footer_right_text5'] = ( ! empty( $new_instance['footer_right_text5'] ) ) ? sanitize_text_field( $new_instance['footer_right_text5'] ) : '';
		return $instance;
	}
	}
							
// Register and Initialize Widget
	function erapress_author_widget() {
		
	    register_widget( 'erapress_author_widget' );
	}
	add_action( 'widgets_init', 'erapress_author_widget');
	
class erapress_author_widget extends WP_Widget{
	
	function __construct() {
		parent::__construct(
			'erapress_author_widget', // Base ID
			__('EraPress : Author Widget','erapress'), // Name
			array( 'description' => __('Author widget', 'erapress' ), ) // Args
		);
	}
	
	public function widget( $args , $instance ) {
		
			echo $args['before_widget'];
			
			$author_widget_title 	= isset($instance['author_widget_title']) ? $instance['author_widget_title'] : esc_html__('About Me','erapress');
			$selected_author_id 	= isset($instance['selected_author_id']) ? $instance['selected_author_id'] : 0;
			$author_image_hs 		= isset($instance['author_image_hs']) ? $instance['author_image_hs'] : 1;
			$author_nickname_hs 	= isset($instance['author_nickname_hs']) ? $instance['author_nickname_hs'] : 1;
			$author_first_name_hs 	= isset($instance['author_first_name_hs']) ? $instance['author_first_name_hs'] : 1;
			$author_last_name_hs 	= isset($instance['author_last_name_hs']) ? $instance['author_last_name_hs'] : 1;
			$author_designation_hs 	= isset($instance['author_designation_hs']) ? $instance['author_designation_hs'] : 1;
			$author_description_hs 	= isset($instance['author_description_hs']) ? $instance['author_description_hs'] : 1;
			$author_social_hs 		= isset($instance['author_social_hs']) ? $instance['author_social_hs'] : 1;
			
			
			if(($instance['selected_author_id']) !=null) {
			?>
			<?php
				$user = (isset($_GET['author_name'])) ? get_user_by('id', $selected_author_id) : get_userdata(intval($selected_author_id));
			?>
			<aside class="widget widget-latest-posts mt-4">
				<div class="post-author"> <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/cta/cta_bg2.png');?>" alt="" class="bg-element1">
                         <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/cta/cta_bg1.png');?>" alt="" class="bg-element2">
					<?php if(!empty($instance['author_widget_title'])){ ?>
						<h5 class="widget-title">
							<?php echo esc_html($instance['author_widget_title']); ?>
						</h5>
					<?php } ?>
					<div class="post-contents">
                        <div class="post-middle">
                        <div class="author_name">
						<div class="author-img">
							<?php if($author_image_hs == '1'): echo get_avatar( $user->ID, 200); endif; ?>
							
						</div>
						<span><?php 				
								if($author_first_name_hs == '1'): echo $user->first_name; endif;
								if($author_last_name_hs == '1'): echo ' '.$user->last_name; endif;
							?></span>
							
						</div>
						<p><?php if($author_designation_hs == '1'): echo $user->designation; endif;?></p>
						<p>	<?php if($author_description_hs == '1'): echo $user->description; endif;?></p>
						<p>	<?php if($author_nickname_hs == '1'): echo $user->nickname; endif;?></p>
						</div>
						
						<div class="post-meta-down">
                            <?php if($author_social_hs == '1'):	 ?>
								<aside class="widget widget-social-widget">
								<?php
									$user = new WP_User( get_current_user_id() );
									if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
										foreach ( $user->roles as $role )
											echo ucfirst($role);
									}else{
										echo esc_html__('Author','erapress');
									}
								?>
									<ul><?php $instagram_profile = $user->instagram_profile;
										if ( $instagram_profile && $instagram_profile != '' ): ?>
											<li><a href="<?php echo esc_url($instagram_profile); ?>" class="social-icon"><i class="fa fa-instagram"></i></a></li>
										<?php endif; ?>
										
										
										<?php $facebook_profile = $user->facebook_profile;
											if ( $facebook_profile && $facebook_profile != '' ): ?>
											<li><a href="<?php echo esc_url($facebook_profile); ?>" class="social-icon"><i class="fa fa-facebook"></i></a></li>
										<?php endif; ?>
											
										<?php $pinterest_profile = $user->pinterest_profile;
										if ( $pinterest_profile && $pinterest_profile != '' ): ?>
											<li><a href="<?php echo esc_url($pinterest_profile); ?>" class="social-icon"><i class="fa fa-pinterest"></i></a></li>
										<?php endif; ?>
											
										<?php $twitter_profile = $user->twitter_profile;
										if ( $twitter_profile && $twitter_profile != '' ): ?>
											<li><a href="<?php echo esc_url($twitter_profile); ?>" class="social-icon"><i class="fa fa-twitter"></i></a></li>
										<?php endif; ?>
										
										<?php $linkedin_profile = $user->linkedin_profile;
										if ( $linkedin_profile && $linkedin_profile != '' ): ?>
											<li><a href="<?php echo esc_url($linkedin_profile); ?>" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
										<?php endif; ?>
										
										<?php $skype_profile = $user->skype_profile;
										if ( $skype_profile && $skype_profile != '' ): ?>
											<li><a href="<?php echo esc_url($skype_profile); ?>" class="social-icon"><i class="fa fa-skype"></i></a></li>
										<?php endif; ?>
									</ul>
								</aside>
							<?php endif; ?>
						
							<!--</div>
						</div>-->
						</div>
					</div>
				</aside>
			<?php
			}			
		echo $args['after_widget'];
	}
	
		public function form( $instance ) {
			$instance['author_widget_title'] = isset($instance['author_widget_title']) ? $instance['author_widget_title'] : '';
			$instance['selected_author_id'] = isset($instance['selected_author_id']) ? $instance['selected_author_id'] : '';
			$instance['author_nickname_hs'] = isset($instance['author_nickname_hs']) ? $instance['author_nickname_hs'] : '1';
			$instance['author_image_hs'] = isset($instance['author_image_hs']) ? $instance['author_image_hs'] : '1';
			$instance['author_first_name_hs'] = isset($instance['author_first_name_hs']) ? $instance['author_first_name_hs'] : '1';
			$instance['author_last_name_hs'] = isset($instance['author_last_name_hs']) ? $instance['author_last_name_hs'] : '1';
			$instance['author_designation_hs'] = isset($instance['author_designation_hs']) ? $instance['author_designation_hs'] : '1';
			$instance['author_description_hs'] = isset($instance['author_description_hs']) ? $instance['author_description_hs'] : '1';
			$instance['author_social_hs'] = isset($instance['author_social_hs']) ? $instance['author_social_hs'] : '1';
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'author_widget_title' ); ?>"><?php _e( 'Title','erapress' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'author_widget_title' ); ?>" name="<?php echo $this->get_field_name( 'author_widget_title' ); ?>" type="text" value="<?php if($instance[ 'author_widget_title' ]) echo esc_html( $instance[ 'author_widget_title' ] ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'selected_author_id' ); ?>"><?php _e('Select Author','erapress'); ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id( 'selected_author_id' ); ?>" name="<?php echo $this->get_field_name( 'selected_author_id' ); ?>">
				<option value>--<?php echo __('Select','erapress'); ?>--</option>
				<?php
					$selected_author_id = $instance['selected_author_id'];
					$users = get_users();
					foreach ($users as $user) {
						$option = '<option value="' . $user->ID . '" ';
						$option .= ( $user->ID == $selected_author_id  ) ? 'selected="selected"' : '';
						$option .= '>';
						$option .= $user->nickname;
						$option .= '</option>';
						echo $option;
					}
				?>	
			</select>
			<br/>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_image_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_image_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_image_hs' ); ?>" value="<?php if($instance[ 'author_image_hs' ]) echo esc_html( $instance[ 'author_image_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_image_hs' ); ?>"><?php _e( 'Hide/show Image ?','erapress' ); ?></label>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_nickname_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_nickname_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_nickname_hs' ); ?>" value="<?php if($instance[ 'author_nickname_hs' ]) echo esc_html( $instance[ 'author_nickname_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_nickname_hs' ); ?>"><?php _e( 'Hide/show Nickname ?','erapress' ); ?></label>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_first_name_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_first_name_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_first_name_hs' ); ?>" value="<?php if($instance[ 'author_first_name_hs' ]) echo esc_html( $instance[ 'author_first_name_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_first_name_hs' ); ?>"><?php _e( 'Hide/show First Name ?','erapress' ); ?></label>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_last_name_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_last_name_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_last_name_hs' ); ?>" value="<?php if($instance[ 'author_last_name_hs' ]) echo esc_html( $instance[ 'author_last_name_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_last_name_hs' ); ?>"><?php _e( 'Hide/show Last Name ?','erapress' ); ?></label>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_designation_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_designation_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_designation_hs' ); ?>" value="<?php if($instance[ 'author_designation_hs' ]) echo esc_html( $instance[ 'author_designation_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_designation_hs' ); ?>"><?php _e( 'Hide/show Designation ?','erapress' ); ?></label>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_description_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_description_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_description_hs' ); ?>" value="<?php if($instance[ 'author_description_hs' ]) echo esc_html( $instance[ 'author_description_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_description_hs' ); ?>"><?php _e( 'Hide/show Description ?','erapress' ); ?></label>
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance[ 'author_social_hs' ], '1' ); ?> id="<?php echo $this->get_field_id( 'author_social_hs' ); ?>" name="<?php echo $this->get_field_name( 'author_social_hs' ); ?>" value="<?php if($instance[ 'author_social_hs' ]) echo esc_html( $instance[ 'author_social_hs' ] ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'author_social_hs' ); ?>"><?php _e( 'Hide/show Social Icon ?','erapress' ); ?></label>
		</p>
		<?php  ?>
        </select>
	<?php
	}
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance['author_widget_title'] 	= ( ! empty( $new_instance['author_widget_title'] ) ) ? $new_instance['author_widget_title'] : esc_html__('About Me','erapress');
		$instance['selected_author_id'] 	= ( ! empty( $new_instance['selected_author_id'] ) ) ? $new_instance['selected_author_id'] : '';
		$instance['author_image_hs'] 		= isset( $new_instance['author_image_hs'] ) ? 1 : false;
		$instance['author_nickname_hs'] 	= isset( $new_instance['author_nickname_hs'] ) ? 1 : false;
		$instance['author_first_name_hs'] 	= isset( $new_instance['author_first_name_hs'] ) ? 1 : false;
		$instance['author_last_name_hs'] 	= isset( $new_instance['author_last_name_hs'] ) ? 1 : false;
		$instance['author_designation_hs'] 	= isset( $new_instance['author_designation_hs'] ) ? 1 : false;
		$instance['author_description_hs'] 	= isset( $new_instance['author_description_hs'] ) ? 1 : false;
		$instance['author_social_hs'] 		= isset( $new_instance['author_social_hs'] ) ? 1 : false;
		
		return $instance;
	}
}