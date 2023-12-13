<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// price item
class xolo_Widget_blog extends Widget_Base {
 
   public function get_name() {
      return 'xolo-addon-pro-blog-item';
   }
 
   public function get_title() {
      return esc_html__( 'Blog Box', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon  eicon-copy';
   }
 
   public function get_categories() {
      return [ 'erapress' ];
   }
   protected function register_controls() {
		$this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Blog', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		$this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'The Best' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );
		$this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Our Latest Blog ' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );
		$this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );
		$this->add_control(
            'blog_style',
            [
                'label' => esc_html__( 'Blog simple or masonary', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => __('simple','xolo-addon'),
                'options' => [
                    'simple' => esc_html__( 'simple', 'xolo-addon' ),
                    'masonary'  => esc_html__( 'masonary', 'xolo-addon' ),
                ],
            ]
        );
        $this->end_controls_section();
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
                'default' => __('col-lg-3 col-md-4 col-sm-6 col-12','xolo-addon'),
                'options' => [
                    'col-lg-6 col-md-6 col-sm-6 col-12' => esc_html__( '2', 'xolo-addon' ),
                    'col-lg-3 col-md-4 col-sm-6 col-12'  => esc_html__( '4', 'xolo-addon' ),
					'col-lg-4 col-md-6 col-sm-12'  => esc_html__( '3', 'xolo-addon' ),
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
		
		$this->add_control(
		'button_title',
			[
				'label' => esc_html__( 'Button Title', 'xolo-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Read More' , 'xolo-addon' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();
		
		
		$this->start_controls_section(
            'blog_element_title_style',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
				
		$this->add_control(
			'xolo_blog_title_color',
			[
				'label'     => __( 'Text Color', 'xolo-addon' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .header-text .tag span' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'title_padding',
			[
				'label' => __( 'Padding', 'xolo-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .header-text .tag span'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				   
					
				],
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'title_margin',
			[
				'label' => __( 'Margin', 'xolo-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .header-text .tag span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'xolo-addon' ),
				'selector' => '{{WRAPPER}}  .header-text .tag span',
			]
		);
		
		$this->add_responsive_control(
		'title_align',
			[
				'label' => __( 'Alignment', 'xolo-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'xolo-addon' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'xolo-addon' ),
						'icon' => 'eicon-h-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'xolo-addon' ),
						'icon' => 'eicon-h-align-right',
					],
					
				],
				'selectors' => [
					'{{WRAPPER}} .header-text .tag span' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'separator' =>'before',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'title_border',
				'label' => __( 'Border', 'xolo-addon' ),
				'selector' => '{{WRAPPER}} .header-text .tag span',
			]
		);

		$this->add_responsive_control(
			'title_border_radius',
			[
				'label' => __( 'Border Radius', 'xolo-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .header-text .tag span' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
				],
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'title_box_shadow',
				'label' => __( 'Box Shadow', 'xolo-addon' ),
				'selector' => '{{WRAPPER}}  .header-text .tag span',
			]
		);      
              

        $this->end_controls_section();

		
		
        $this->start_controls_section(
            'blog_element_subtitle_style',
            [
                'label' => esc_html__( 'Sub Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
				
			$this->add_control(
				'xolo_blog_subtitle_color',
				[
					'label'     => __( 'Text Color', 'xolo-addon' ),
					'type'      => Controls_Manager::COLOR,
					'default'   => 'var(--sc)',
					'selectors' => [
						'{{WRAPPER}} .header-text .section-heading' => 'color: {{VALUE}};',
					],
				]
			);
	
			$this->add_responsive_control(
				'subtitle_padding',
				[
					'label' => __( 'Padding', 'xolo-addon' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .header-text .section-heading'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					   
						
					],
					'separator' => 'before',
				]
			);

			$this->add_responsive_control(
				'subtitle_margin',
				[
					'label' => __( 'Margin', 'xolo-addon' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .header-text .section-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'subtitle_typography',
					'label' => __( 'Typography', 'xolo-addon' ),
					'selector' => '{{WRAPPER}}  .header-text .section-heading',
				]
			);
			
		   $this->add_responsive_control(
			'subtitle_align',
			[
				'label' => __( 'Alignment', 'xolo-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'xolo-addon' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'xolo-addon' ),
						'icon' => 'eicon-h-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'xolo-addon' ),
						'icon' => 'eicon-h-align-right',
					],
					
				],
				'selectors' => [
					'{{WRAPPER}} .header-text .section-heading' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'separator' =>'before',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'subtitle_border',
				'label' => __( 'Border', 'xolo-addon' ),
				'selector' => '{{WRAPPER}} .header-text .section-heading',
			]
		);

		$this->add_responsive_control(
			'blog_subtitle_border_radius',
			[
				'label' => __( 'Border Radius', 'xolo-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .header-text .section-heading' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'blog_subtitle_box_shadow',
				'label' => __( 'Box Shadow', 'xolo-addon' ),
				'selector' => '{{WRAPPER}}  .header-text .section-heading',
			]
		);      
              

        $this->end_controls_section();
         
		$this->start_controls_section(
            'blog_section_description',
            [
                'label'     => __( 'Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
		$this->start_controls_tabs( 'blog_element_description_style_tabs' );

		$this->add_control(
			'blog_description_color',
			[
				'label'     => __( 'Color', 'xolo-addon' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => 'var(--sc)',
				'selectors' => [
					'{{WRAPPER}}  .header-text p' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'blog_description_background_color',
				'label' => __( 'Icon Background', 'xolo-addon' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}}  .header-text p',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'blog_description_padding',
			[
				'label' => __( 'Padding', 'xolo-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  .header-text p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'blog_description_margin',
			[
				'label' => __( 'Margin', 'xolo-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  .header-text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'blog_description_typography',
				'label' => __( 'Typography', 'xolo-addon' ),
				'selector' => '{{WRAPPER}}  .header-text p',
			]
		);
		

	   $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
	    }
	    protected function render( $instance = [] ) {
			 $settings = $this->get_settings_for_display();
		?>
			 
			 
        <section class="Blog-section wow fadeInUp">
			<div class="container text-center">
				<div class="header-text">
					<?php if(!empty($settings['title'])){ ?>
						<div class="tag">
							<span>
								<?php echo esc_html($settings['title']); ?>
							</span>
						</div>
					<?php } ?>
						
					<?php if(!empty($settings['subtitle'])){ ?>
						<h2 class="section-heading">
							<span>
								<?php echo esc_html($settings['subtitle']); ?>
							</span>
						</h2>
					<?php } ?>
					
					<?php if(!empty($settings['description'])){ ?>
						<p>
							<?php echo $settings['description']; ?>
						</p>
					<?php } ?>
				</div>
				
				<?php $blog_style = $settings['blog_style'];
					if($blog_style === "masonary"){ 
						$masonary		=		"js-masonry"; 
						$masonary_col	=		"js-masonry-item";
					}else {
						$masonary		=		""; 
						$masonary_col	=		"";
					}
				?>
				
				<div class="row align-items-center <?php echo $masonary;?>">
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
									'post_type'             => !empty( $settings['blog_post_type'] ) ? $settings['blog_post_type'] : 'post',
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
					
					$blog_post = new \WP_Query( $args );
					
					if( $blog_post->have_posts() ):
							while( $blog_post->have_posts() ): $blog_post->the_post();
								
					 $xolo_archive_post_layout 		= get_theme_mod( 'archive_post_layout', array( 'feature-image', 'title', 'meta', 'description' )); 
					 $xolo_achive_post_meta_layout  = get_theme_mod( 'achive_post_meta_layout', array( 'author', 'date' )); 
					 $xolo_enable_meta_image 		= get_theme_mod( 'enable_meta_image'); 
					 $xolo_enable_post_excerpt 		= get_theme_mod( 'enable_post_excerpt'); 
					?>
	
					<div id="post-<?php the_ID(); ?>" <?php if($settings['column'] !=''){  $settings['column']; }?> class="<?php echo $masonary_col.' '.$settings['column'];?>" <?php if (function_exists('xolo_schema_markup')) { xolo_schema_markup( 'article' );} ?>>
					
						<article class="post-items wow fadeInUp">
							<figure class="post-image">
								<a href="#" class="post-hover">
									<?php the_post_thumbnail();?>
								</a>
							</figure>

							<div class="post-meta imu">
								<div class="post-list">
									<ul class="post-categories">
										<li>
											<?php the_category(' '); ?>
										</li>
									</ul>
								</div>
							</div>

							<div class="post-content">
								<div class="post-meta up">
									<span class="posted-on"><i class="fa fa-calendar"></i>
										<a href="#"><?php echo esc_html(get_the_date());?></a>
									</span>
								</div>
								<h5 class="post-title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h5>

								<a href="<?php the_permalink();?>" class="more-link"><?php echo esc_html($settings['button_title']);?></a>
								<div class="post-meta down">
									<span class="author-name">								
										<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="<?php echo esc_attr__('image','xolo-addon') ?>">
										<span>
											<?php echo esc_html__('post by','xolo-addon'); ?>
										</span> 
										<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"> <?php esc_html(the_author()); ?></a>
									</span>
									<span class="comments-link">
										<a href="<?php echo esc_url(get_comments_link( $blog_post->ID )); ?>"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($blog_post->ID)); ?> <?php esc_html_e('Comments','xolo-addon'); ?></a>
									</span>

								</div>
							</div>
						</article>
					</div>
					<?php endwhile;	wp_reset_postdata(); wp_reset_query();endif; 
					} else{
						echo '<h6 style="font-weight: bold; text-align: center;">Please Select Categories For Posts</h6>'; }?>
				</div>
			</div>
		</section>
		<?php
   }      
}
Plugin::instance()->widgets_manager->register( new xolo_Widget_blog );