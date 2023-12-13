<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// price item
class xolo_Widget_blog extends Widget_Base {
 
   public function get_name() {
      return 'xolo-blog-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Section Blog', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon  eicon-copy';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {
		
		$this->start_controls_section(
            'column_section',
            [
                'label' => esc_html__( 'Blog Column', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
            'column',
            [
                'label' => esc_html__( 'Blog Column', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => __('4','xolo-addon'),
                'options' => [
                    'col-md-6' => esc_html__( '2', 'xolo-addon' ),
                    'col-md-3'  => esc_html__( '4', 'xolo-addon' ),
					'col-md-4'  => esc_html__( '3', 'xolo-addon' ),
                ],
            ]
        );
		$this->end_controls_section();
		
		$this->start_controls_section(
            'Blog_section',
            [
                'label' => esc_html__( 'Blog Categories', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		 
			$this->add_control(
                'blog_categories',
                [
                    'label' => esc_html__( 'Blog Categories', 'xolo-addon' ),
                    'type' => Controls_Manager::SELECT2,
                    'label_block' => true,
                    'multiple' => true,
                    'options' => xolo_get_taxonomies(),
                ]
            );

		$this->end_controls_section();
 
	    }
	    protected function render( $instance = [] ) {?>
        <div class="row">
			<?php
		// get our input from the widget settings.
       
		$settings = $this->get_settings_for_display();
		
        $get_categories = $settings['blog_categories'];
        

        $slider_cats = str_replace(' ', '', $get_categories);
		
		if (  !empty( $get_categories ) ) {
            if( is_array($slider_cats) && count($slider_cats) > 0 ){
                $field_name = is_numeric( $slider_cats[0] ) ? 'term_id' : 'slug';
                $args['tax_query'] = array(
                    array(
						'post_type'             => !empty( $settings['blog_post_type'] ) ? sanitize_key($settings['blog_post_type']) : 'post',
						'post_status'           => 'publish',
						'posts_per_page'        =>  10,
						'order' => 'asc',
                        'taxonomy' => 'category',
                        'terms' => $slider_cats,
                        'field' => $field_name,
                        'include_children' => false
                    )
                );
            }
        }
		
		$blog_post = new \WP_Query( $args );

		if( $blog_post->have_posts() ):
                while( $blog_post->have_posts() ): $blog_post->the_post();
					
		 $xolo_archive_post_layout 		= get_theme_mod( 'archive_post_layout', array( 'feature-image', 'title', 'meta', 'description' )); 
		 $xolo_achive_post_meta_layout  = get_theme_mod( 'achive_post_meta_layout', array( 'author', 'date' )); 
		 $xolo_enable_meta_image 		= get_theme_mod( 'enable_meta_image'); 
		 $xolo_enable_post_excerpt 		= get_theme_mod( 'enable_post_excerpt'); 
		?>
	
	<div id="post-<?php the_ID(); ?>" <?php if($settings['column'] !=''){ post_class($settings['column']);}?> <?php //post_class('mb-4 blog-column'); ?> <?php if (function_exists('xolo_schema_markup')) { xolo_schema_markup( 'article' );} ?>>
	<article class="blog-items">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="blog-wrapup">
		<?php else: ?>	
			<div class="blog-wrapfull">
		<?php endif; ?>
		<?php foreach ( $xolo_archive_post_layout as $data_order ) : ?>
			<?php if ( 'feature-image' === $data_order ) : ?>
				<?php if ( function_exists( 'xolo_sticky_post' ) ) : xolo_sticky_post(); endif; ?>
				<?php if ( has_post_thumbnail() || $xolo_enable_meta_image == 'true' ) : ?>
					<div class="blog-img">
						<?php do_action( 'xolo_blog_date_box');  ?>	
						<?php if ( $xolo_enable_meta_image == 'true' ) : ?>
							<div class="blog-meta">
								<div class="blog-in-meta"> 
									<?php foreach ( $xolo_achive_post_meta_layout as $meta_order ) : ?>
										<?php if ( 'author' === $meta_order ) : ?>
										
											<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><i class="fa fa-user"></i> <?php esc_html(the_author()); ?></a>
											
										<?php elseif ( 'date' === $meta_order ) : ?>
										
											<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><i class="fa fa-calendar"></i><?php echo esc_html(get_the_date('j M Y')); ?></a>
											<?php elseif ( 'comments' === $meta_order ) : ?>	
										
											<a href="<?php echo esc_url(get_comments_link( $blog_post->ID )); ?>"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($blog_post->ID)); ?> <?php esc_html_e('Comments','xolo'); ?></a>
											
										<?php elseif ( 'category' === $meta_order ) : ?>
										
											<a href="<?php esc_url(the_permalink()); ?>"><i class="fa fa-folder-open "></i> <?php the_category(', '); ?></a>
											
										<?php elseif ( 'tags' === $meta_order && has_tag() ) : ?>
										
											<a href="<?php esc_url(the_permalink()); ?>"><i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?></a>		
											
									<?php  endif; endforeach; ?>
								</div>	
							</div>
						<?php endif; ?>	
						<?php 
							if ( function_exists( 'archive_blog_feature_img_size' ) ) : 
								the_post_thumbnail(archive_blog_feature_img_size());
							else:	
								the_post_thumbnail(); 
							endif;	
						?>
					</div>
				<?php endif; ?>	
			<?php elseif ( 'title' === $data_order ) : ?>
				  <?php     
						if ( is_single() ) :
						
						the_title('<h5 class="post-title blog-multi-title">', '</h5>' );
						
						else:
						
						the_title( sprintf( '<h5 class="post-title blog-multi-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
						
						endif; 
					
					?> 
					<?php elseif ( 'meta' === $data_order ) : ?>
						<?php if ( $xolo_enable_meta_image == '' ) : ?>
							  <div class="blog-meta">
									<?php foreach ( $xolo_achive_post_meta_layout as $meta_order ) : ?>
										<?php if ( 'author' === $meta_order ) : ?>
										
											<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><i class="fa fa-user"></i> <?php esc_html(the_author()); ?></a>
											
										<?php elseif ( 'date' === $meta_order ) : ?>
										
											<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><i class="fa fa-calendar"></i><?php echo esc_html(get_the_date('j M Y')); ?></a>				
										<?php elseif ( 'comments' === $meta_order ) : ?>	
										
											<a href="<?php echo esc_url(get_comments_link( $blog_post->ID )); ?>"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($blog_post->ID)); ?> <?php esc_html_e('Comments','xolo'); ?></a>
											
										<?php elseif ( 'category' === $meta_order ) : ?>
										
											<a href="<?php esc_url(the_permalink()); ?>"><i class="fa fa-folder-open "></i> <?php the_category(', '); ?></a>
											
										<?php elseif ( 'tags' === $meta_order && has_tag() ) : ?>
										
											<a href="<?php esc_url(the_permalink()); ?>"><i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?></a>		
											
									<?php  endif; endforeach; ?>		
							  </div>
						<?php endif; ?>	  
					<?php elseif ( 'description' === $data_order ) : ?>
					<div class="site-unit">
						  <?php 
						  if($xolo_enable_post_excerpt == 'true'):
							the_excerpt();
							if ( function_exists( 'xolo_execerpt_link' ) ) : xolo_execerpt_link(); endif; 
							else:
							the_content( 
									sprintf( 
										__( 'Read More', 'xolo' ), 
										'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
									) 
								);
							endif;	
						  ?>
					</div>
		<?php  endif; endforeach; ?>
		</div>  
	</article>
	</div>
		<?php endwhile; wp_reset_postdata(); wp_reset_query(); endif;  ?>
	</div>

		<?php
   }  


    
}
Plugin::instance()->widgets_manager->register( new xolo_Widget_blog );