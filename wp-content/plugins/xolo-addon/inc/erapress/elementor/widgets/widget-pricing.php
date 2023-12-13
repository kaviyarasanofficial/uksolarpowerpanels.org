<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// pricing2 item
class xolo_Widget_pricing extends Widget_Base {
 
   public function get_name() {
      return 'pricing-item';
   }
 
   public function get_title() {
      return esc_html__( 'Pricing Box', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon   eicon-kit-details';
   }
 
   public function get_categories() {
      return [ 'erapress' ];
   }
   protected function register_controls() {
     $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Pricing', 'xolo-addon' ),
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
                'default' => esc_html__( 'Our Pricing ' , 'xolo-addon' ),
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
       
        $this->end_controls_section();
		
		
		

		
        $this->start_controls_section(
            'pricing_element_title_style',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
				
				 $this->add_control(
                        'xolo_pricing_title_color',
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
            'spricing_element_subtitle_style',
            [
                'label' => esc_html__( 'Sub Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
				
				 $this->add_control(
                        'xolo_pricing_subtitle_color',
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
                        'subtitle_border_radius',
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
                            'name' => 'subtitle_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .header-text .section-heading',
                        ]
                    );      
              

        $this->end_controls_section();


         
      $this->start_controls_section(
            'pricing_section_description',
            [
                'label'     => __( 'Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'pricing_element_description_style_tabs' );

                    $this->add_control(
                        'pricing_description_color',
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
                            'name' => 'pricing_description_background_color',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}  .header-text p',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'pricing_description_padding',
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
                        'pricing_description_margin',
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
                            'name' => 'pricing_description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .header-text p',
                        ]
                    );
                    

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
		
		
		
		
        
		
		$this->start_controls_section(
            'pricing_section_btn',
            [
                'label'     => __( 'Button', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'pricing_element_btn_style_tabs' );

                    $this->add_control(
                        'pricing_btn_color',
                        [
                            'label'     => __( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .pricing-content .read' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'pricing_btn_background_color',
                            'label' => __( ' Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .pricing-content .read',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'pricing_btn_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .pricing-content .read' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'pricing_btn_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .pricing-content .read' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'pricing_btn_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .pricing-content .read',
                        ]
                    );
                    

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
  
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
      if(!empty($this->get_settings_for_display())){ 
		$settings = $this->get_settings_for_display(); 
	  }else{
		  return false;
	  }
	  
      //Inline Editing
      $this->add_inline_editing_attributes( 'icon', 'basic' );
      $this->add_inline_editing_attributes( 'title', 'basic' );
     
      ?>
<!-- Our Pricing & Plan Section  ===============================================================-->
	
		
		<?php $tax = 'pricing_categories'; 
				$tax_terms = get_terms($tax);?>
    
    <section class="pricing-section wow fadeInUp">
        <div class="demo10">
            <div class="container">
                <div class="header-text">
                    <div class="tag"><span><?php echo esc_html($settings['title']); ?></span></div>
                    <h2 class="section-heading"><?php echo wp_kses_post($settings['subtitle']); ?></span></h2>
                    <p>
                        <?php echo esc_html($settings['description']); ?>
                    </p>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <?php if (!empty($tax_terms)) { ?>
							<div class="filter">
								<?php	foreach ($tax_terms as $tax_term) {	
								if($tax_term->name==="month" || $tax_term->name===" "){ $current = "current";}else{$current = " ";}?>
								<span class="pricing-filter-badge"><?php echo esc_html__('SAVE 20%','xolo-addon'); ?></span>
									<a href="javascript:void(0)" class="<?php echo $tax_term->slug.' '.$current; ?>"><?php echo esc_html(ucwords($tax_term->name)); ?></a>
								<?php } ?>
							</div>
						<?php } ?>	
                    </div>
                </div>
                <div class="row boxGroup">
					<?php
					
					$args = array(
						'post_type' => 'erapresss_pricing',
						'posts_per_page' => 10
					);
					$the_query = new \WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
					

		<?php $count=1;
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
					$terms = get_the_terms( $the_query->ID, 'pricing_categories' );
											
						if ( $terms && ! is_wp_error( $terms ) ) : 
							$links = array();

							foreach ( $terms as $term ) 
							{
								$links[] = $term->slug;
							}
							
							$tax = join( ' ', $links );		
						else :	
							$tax = '';	
						endif;
				?>
        
		<?php the_content();
			$plans_subtitle 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_subtitle', true ));
			$plans_currency 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_currency', true ));
			$plans_price 			= sanitize_text_field( get_post_meta( get_the_ID(),'plans_price', true ));
			$plans_duration 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_duration', true ));
			$plans_features_1 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_features_1', true ));			
			$plans_features_2 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_features_2', true ));
			$plans_features_3 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_features_3', true ));
			$plans_features_4 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_features_4', true ));
			$plans_features_5 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_features_5', true ));			
			$plans_features_6 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_features_6', true ));			
			$price_recomended 		= sanitize_text_field( get_post_meta( get_the_ID(),'price_recomended', true ));
			$plans_button_label 	= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_label', true ));
			$plans_button_link 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_link', true ));
			$plans_button_link_target 	= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_link_target', true ));?>
                    <div class="col-lg-4 col-md-6 col-sm-12 box <?php echo $tax; ?>" <?php   if($tax == 'month') { ?> style ="display:block;" <?php } else { ?> style="display:none;" <?php } ?>>                       
						<div class="pricingTable10 wow fadeInUp <?php if($count=='2' || $count=='5'){echo " active";}?>" >
						<div class="pricingTable-header">
							<img src="<?php echo get_template_directory_uri().'/assets/images/elements/element.png';?>" alt="<?php echo esc_attr__('image','xolo-addon') ?>" class="bg-element">
							<h3 class="heading"><?php the_title(); ?></h3>
							<?php if($price_recomended=='recommend'){ ?>
								<div class="tag-img">
									<span><?php echo esc_html__('popular','xolo-addon'); ?></span>
								</div>
							<?php }?>
							<span class="pricing"><sup><?php echo esc_html($plans_currency);?> </sup> <?php echo esc_html($plans_price);?><sup>.00</sup><sub><?php echo esc_html($plans_duration);?></sub></span>
						</div>
						<div class="pricing-content">
							<p>
								<?php echo $plans_subtitle;?>
							</p>
							<ul>
							<?php if(!empty($plans_features_1)) echo '<li>'.esc_html($plans_features_1).'</li>'; ?>
							<?php if(!empty($plans_features_2)) echo '<li>'.esc_html($plans_features_2).'</li>'; ?>
							<?php if(!empty($plans_features_3)) echo '<li>'.esc_html($plans_features_3).'</li>'; ?>
							<?php if(!empty($plans_features_4)) echo '<li>'.esc_html($plans_features_4).'</li>'; ?>
							<?php if(!empty($plans_features_5)) echo '<li>'.esc_html($plans_features_5).'</li>'; ?>
							<?php if(!empty($plans_features_6)) echo '<li>'.esc_html($plans_features_6).'</li>'; ?>
								
							</ul>
							<?php if(!empty($plans_button_label)){ ?>
								<a href="<?php echo esc_url($plans_button_link);?>" class="read"><?php echo esc_html($plans_button_label);?></a>
							<?php } ?>
						</div>
                    </div>
					</div>
                    <?php ++$count; endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Pricing & Plan Section End  ===============================================================-->
      <?php
   }  
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_pricing );