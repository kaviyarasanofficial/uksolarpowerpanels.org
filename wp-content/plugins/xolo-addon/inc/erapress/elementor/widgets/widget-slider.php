<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// slider item
class xolo_Widget_slider_one extends Widget_Base {
 
   public function get_name() {
      return 'xolo-addon-pro-slider-item';
   }
 
   public function get_title() {
      return esc_html__( 'Slider One', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon eicon-slider-device';
   }
 
   public function get_categories() {
      return [ 'erapress' ];
   }
   protected function register_controls() {


         $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Slider', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'slider_element_title',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'List Title' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );

        

        $repeater->add_control(
            'slider_element_description',
            [
                'label' => esc_html__( 'Description', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Description' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'slider_element_image',
            [
                'label' => esc_html__( 'Choose Image', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

         $repeater->add_control(
             'slider_element_button1_text',
             [
                 'label'       => __( 'Button Label', 'xolo-addon' ),
                'type'        => Controls_Manager::TEXT,
                'default'       => __( 'Read More', 'xolo-addon' ),
                 'label_block' => true,
             ]     
          );
          $repeater->add_control(
                'slider_element_button1_link',
                [
                    'label'       => __( 'Button Link', 'xolo-addon' ),
                    'type'        => Controls_Manager::URL,
                    'placeholder' => 'http://your-link.com',
                    'default'     => [
                        'url' => '#',
                    ],
                ]
            );


        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Slider List', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_element_title' => esc_html__( 'The Best Business  Solution!', 'xolo-addon' ),
                         'slider_element_description' => esc_html__( 'There are many variations of passages of lorem lqsum available but the majority have suffered alteration in some from bywhich donot look even slightly believable.', 'xolo-addon' ),
                    ],
                    [
                        'slider_element_title' => esc_html__( 'We Take Care Your Business  Growth', 'xolo-addon' ),
                         'slider_element_description' => esc_html__( ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus modi voluptatem aperiam amet officia blanditiis nesciunt itaque? Quae, eum.!', 'xolo-addon' ),
                    ],
                    [
                        'slider_element_title' => esc_html__( 'We Provide Premium Consulting Service', 'xolo-addon' ),
                         'slider_element_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus modi voluptatem aperiam amet officia blanditiis nesciunt itaque? Quae, eum.!', 'xolo-addon' ),
                    ],
                    
                ],
                'title_field' => '{{{ slider_element_title }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'slider_element_title_style',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
			
			$this->add_control(
                        'slider_title_color',
                        [
                            'label'     => __( 'Title Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .slider-text-content h1' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'title_background',
                            'label' => __( 'Title Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .slider-text-content h1',
                            'separator' => 'before',
                        ]
                    );

            
        $this->add_responsive_control(
                        'title_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .slider-text-content h1'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
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
                                '{{WRAPPER}} .slider-text-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slider-text-content h1',
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
                            '{{WRAPPER}}  .slider-text-content h1' => 'text-align: {{VALUE}};',
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
                            'selector' => '{{WRAPPER}} .slider-text-content h1',
                        ]
                    );

                 $this->add_responsive_control(
                        'title_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .slider-text-content h1' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'title_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slider-text-content h1',
                        ]
                    );      
              

        $this->end_controls_section();



         $this->start_controls_section(
            'slider_element_description_style',
            [
                'label' => esc_html__( 'Description', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

       
            $this->add_control(
                        'description_color',
                        [
                            'label'     => __( 'Description Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .slider-text-content p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

            
        $this->add_responsive_control(
                        'description_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .slider-text-content p'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'description_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .slider-text-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slider-text-content p',
                        ]
                    );
                    
                   $this->add_responsive_control(
                    'description_align',
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
                            '{{WRAPPER}}  .slider-text-content p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

               $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'description_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .slider-text-content p',
                        ]
                    );

                 $this->add_responsive_control(
                        'description_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .slider-text-content p' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'description_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slider-text-content p',
                        ]
                    );      
              

        $this->end_controls_section();

         
      $this->start_controls_section(
            'section_button1',
            [
                'label'     => __( 'Button1', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'slider_element_button1_text_style_tabs' );

                    $this->add_control(
                        'slider_button1_color',
                        [
                            'label'     => __( 'Button1 Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}  .active.hover-btn a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    // $this->add_group_control(
                        // Group_Control_Background::get_type(),
                        // [
                            // 'name' => 'slider_button1_background_color',
                            // 'label' => __( 'Icon Background', 'xolo-addon' ),
                            // 'types' => [ 'classic', 'gradient' ],
                            // 'selector' => '{{WRAPPER}} .active.hover-btn a',
                            // 'separator' => 'before',
                        // ]
                    // );
                    $this->add_responsive_control(
                        'xolo_slider_button1_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .active.hover-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_slider_button1_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .active.hover-btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_slider_button1_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .active.hover-btn a',
                        ]
                    );
                    

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

		$this->start_controls_section(
            'section_button2',
            [
                'label'     => __( 'Button2', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'slider_element_button2_text_style_tabs' );

                    $this->add_control(
                        'slider_button_color',
                        [
                            'label'     => __( 'Button2 Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#000000',
                            'selectors' => [
                                '{{WRAPPER}}  .hover-btn a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    // $this->add_group_control(
                        // Group_Control_Background::get_type(),
                        // [
                            // 'name' => 'slider_button2_background_color',
                            // 'label' => __( 'Icon Background', 'xolo-addon' ),
                            // 'types' => [ 'classic', 'gradient' ],
                            // 'selector' => '{{WRAPPER}} .hover-btn a',
                            // 'separator' => 'before',
                        // ]
                    // );
                    $this->add_responsive_control(
                        'xolo_slider_button2_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .hover-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_slider_button2_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .hover-btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_slider_button2_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .hover-btn a',
                        ]
                    );
                    

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
  
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display();
       
     
      if(!empty($settings['list'])){ 
	  
	  
		$erapress_pro_header_type	=	get_theme_mod('erapress_pro_header_type','header-default');
		if($erapress_pro_header_type == 'header-default'){
				$class	= 'main-slider-one';
		}else if($erapress_pro_header_type == 'header-transparent'){
			$class	= 'main-slider-two';
		}
	?>
	
	 <!-- Slider  Section  ===============================================================-->
	
    <div class="section-slider <?php echo esc_attr($class); ?>">
        <div class="main-slider owl-carousel owl-theme">
		 <?php $count=1;
			foreach ( $settings['list'] as $features ) :?>
            <div class="slide">
				<?php if(!empty($features['slider_element_image']['id'])){ ?>
					<?php $alt_text = get_post_meta($features['slider_element_image']['id'] , '_wp_attachment_image_alt', true);?>
					<img src="<?php echo esc_url( $features['slider_element_image']['url'] ); ?>" alt=" <?php echo esc_attr($alt_text);?>">
				<?php } ?>
				
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-text-content text-start ">
                               
                                <h1><?php echo wp_kses_post($features['slider_element_title']); ?></h1>
                                <p class="text-break">
                                    <?php echo esc_html($features['slider_element_description']); ?>
                                </p>
                                <p>
                                    <button class="btn active hover-btn"><a href="<?php echo esc_url($features['slider_element_button1_link']['url']); ?>"><?php echo esc_html($features['slider_element_button1_text']); ?></a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-right-content">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/slider.png');?>" alt="<?php echo esc_attr__('image','xolo-addon') ?>" class="slider-element">
                                <h1><?php echo '0'.$count; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php $count++; endforeach; ?>
        </div>
    </div>
	<?php } if ( Plugin::$instance->editor->is_edit_mode() ) : ?>
    <script>
		jQuery(document).ready(function($) {
			$('.main-slider').owlCarousel({
			loop: true,
			margin: 10,
			items: 1,
			nav: true,
			autoplay: true,
			dots: true,
			animateOut: 'fadeOut'
    });
		});
	</script>
 <?php 
	endif;?>
	
 
    <!-- Slider  Section end ===============================================================-->
      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_slider_one );