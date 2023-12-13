<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// feature2 item
class xolo_Widget_feature extends Widget_Base {
 
   public function get_name() {
      return 'feature-item';
   }
 
   public function get_title() {
      return esc_html__( 'Feature Box', 'xolo-addon' );
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
                'label' => esc_html__( 'Feature', 'xolo-addon' ),
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
                'default' => esc_html__( 'Greatest Feature' , 'xolo-addon' ),
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
        $repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
         'feature_element_icon',
         [
             'label'       => __( 'Icon', 'xolo-addon' ),
             'default' => [
                'value' => 'fa fa-address-card',
                'library' => 'regular',
            ],
            'type'        => Controls_Manager::ICONS,
             'label_block' => true,
         ]     
      );
	  
        $repeater->add_control(
            'feature_element_title',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Employee Relation' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );

        
          $repeater->add_control(
             'feature_element_description',
             [
                 'label'       => __( 'Description', 'xolo-addon' ),
                'type'        => Controls_Manager::TEXT,
                'default'       => __( ' Lorem ipsum dolor consectetur adipisicing elit.', 'xolo-addon' ),
                 'label_block' => true,
             ]     
          );

         

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Feature List', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
					[
                        'feature_element_title' => esc_html__( 'Multilanguange Theme', 'xolo-addon' ),
                         'feature_element_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.', 'xolo-addon' ),
                    ],
                    [
                        'feature_element_title' => esc_html__( 'Perfect Code like A Niche', 'xolo-addon' ),
                          'feature_element_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.', 'xolo-addon' ),
                    ],
                    [
                        'feature_element_title' => esc_html__( 'Woocommerce Compatible', 'xolo-addon' ),
                          'feature_element_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.', 'xolo-addon' ),
                    ],
                    [
                        'feature_element_title' => esc_html__( 'One Click Demo Data', 'xolo-addon' ),
                         'feature_element_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.', 'xolo-addon' ),
                    ],
                    [
                        'feature_element_title' => esc_html__( 'Extra Side Navigation', 'xolo-addon' ),
                          'feature_element_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.', 'xolo-addon' ),
                    ],
                    [
                        'feature_element_title' => esc_html__( 'Video Backgrounds', 'xolo-addon' ),
                          'feature_element_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.', 'xolo-addon' ),
                    ],
                    
                ],
                'title_field' => '{{{ feature_element_title }}}',
            ]
        );

        $this->end_controls_section();
		
		
		

		$this->start_controls_section(
            'xolo_feature_icon_style_section',
            [
                'label'     => __( 'Icon', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_feature_icon_style_tabs' );

                // Button Icon style normal tab start
                
					$this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_feature_icon_background_color',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}  .card .icon-wrapper i',
                            'separator' => 'before',
                        ]
                    );
                    
					
					$this->add_control(
                        'xolo_feature_icon_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#fff',
                            'selectors' => [
                                '{{WRAPPER}} .card:hover .icon-wrapper i' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .card:hover .icon-wrapper  i' => '-webkit-text-fill-color: unset;',
                            ],
                        ]
                    );

                    

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'xolo_feature_icon_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .icon-wrapper i',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_feature_icon_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .icon-wrapper i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_feature_icon_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .icon-wrapper i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_feature_icon_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .icon-wrapper i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );


                    
                    $this->add_responsive_control(
                        'xolo_feature_icon_rotate',
                        array(
                            'label'      => __( 'Rotate', 'xolo-addon' ),
                            'type'       => Controls_Manager::SLIDER,
                            'default' => [
                                'size' => 0,
                                'unit' => 'deg',
                            ],
                            'range'      => array(
                                'px' => array(
                                    'min' => 1,
                                    'max' => 360,
                                ),
                            ),
                            'selectors'  => array(
                                '{{WRAPPER}} .icon-wrapper i' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_feature_icon_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .icon-wrapper i',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'xolo_feature_icon_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .icon-wrapper i',
                        ]
                    );
                        
                $this->add_responsive_control(
                    'xolo_feature_icon_text_align',
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
                            '{{WRAPPER}}  .icon-wrapper i' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
              

            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end
        $this->start_controls_section(
            'feature_element_title_style',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
				
				 $this->add_control(
                        'xolo_feature_title_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => 'var(--sc)',
                            'selectors' => [
                                '{{WRAPPER}} .card h3' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
					$this->add_control(
                        'xolo_feature_title_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .card:hover h3' => 'color: {{VALUE}};',
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
                                '{{WRAPPER}} .card h3'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
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
                                '{{WRAPPER}} .card h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .card h3',
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
                            '{{WRAPPER}} .card h3' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

               $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'title_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .card h3',
                        ]
                    );

                 $this->add_responsive_control(
                        'title_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .card h3' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'title_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .card h3',
                        ]
                    );      
              

        $this->end_controls_section();




         
      $this->start_controls_section(
            'feature_section_description',
            [
                'label'     => __( 'Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'feature_element_description_style_tabs' );

                    $this->add_control(
                        'feature_description_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => 'var(--sc)',
                            'selectors' => [
                                '{{WRAPPER}}  .card p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'feature_description_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}  .card:hover p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    
                    $this->add_responsive_control(
                        'feature_description_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .card p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'feature_description_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .card p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'feature_description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .card p',
                        ]
                    );
                    

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
		
        
  
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      //Inline Editing
      $this->add_inline_editing_attributes( 'icon', 'basic' );
      $this->add_inline_editing_attributes( 'title', 'basic' );
     
      ?>


    <!-- Greatest Feature  Section  ===============================================================-->
    <section class="feature-section wow fadeInUp ">
        <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/elements.png');?>" alt="<?php echo esc_attr__('image','xolo-addon') ?>" class="bg-element ">
        <div class="container ">
            <div class="header-text ">
				<?php if(!empty($settings['title'])){ ?>
					<div class="tag "><span><?php echo esc_html($settings['title']); ?></span></div>
				<?php } ?>
				
				<?php if(!empty($settings['subtitle'])){ ?>
					<h2 class="section-heading "><?php echo wp_kses_post($settings['subtitle']); ?></span></h2>
				<?php } ?>				
				
				<?php if(!empty($settings['description'])){ ?>
					<p>
						<?php echo esc_html($settings['description']); ?>
					</p>
				<?php } ?>				
            </div>			
			
			<?php if(!empty($settings['list'])){ ?>
				<div class="row justify-content-center">
					<?php $count=1;
					foreach ( $settings['list'] as $features ) :?>				
					<div class="col-lg-4 col-md-6 col-sm-12 mt-4 ">
						<div class="card-wrapper ">
							<div class="card wow fadeInUp ">
							<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/element.png');?>" alt="<?php echo esc_attr__('image','xolo-addon') ?>" class="bg-element">
							
								<span class="card-span "><?php echo sprintf('%02d', $count); ?></span>
								
								<?php if(!empty($features['feature_element_icon']['value'])){ ?>
									<div class="icon-wrapper ">
										<i class="<?php echo esc_attr($features['feature_element_icon']['value']);?>"></i>
									</div>
								<?php } ?>			
									
								<?php if(!empty($features['feature_element_title'])){ ?>
									<a href="#">
										<h3><?php echo wp_kses_post($features['feature_element_title']); ?></h3>
									</a>
								<?php } ?>		
								
								<?php if(!empty($features['feature_element_description'])){ ?>
									<p>
									   <?php echo wp_kses_post($features['feature_element_description']); ?>
									</p>
								<?php } ?>		
							</div>
						</div>
					</div>				
					<?php $count++; endforeach;?>                
				</div>
			<?php } ?>				
        </div>
    </section>
    <!-- Greatest Feature  Section end ===============================================================-->

      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_feature );