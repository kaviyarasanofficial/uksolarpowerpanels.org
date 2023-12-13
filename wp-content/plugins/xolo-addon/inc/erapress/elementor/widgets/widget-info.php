<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// info item
class xolo_Widget_info extends Widget_Base {
 
   public function get_name() {
      return 'info-item';
   }
 
   public function get_title() {
      return esc_html__( 'Info Box', 'xolo-addon' );
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
                'label' => esc_html__( 'Info', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
         'info_element_icon',
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
            'info_element_title',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'List Title' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );

        
          $repeater->add_control(
             'info_element_button_text',
             [
                 'label'       => __( 'Button Label', 'xolo-addon' ),
                'type'        => Controls_Manager::TEXT,
                'default'       => __( 'Read More', 'xolo-addon' ),
                 'label_block' => true,
             ]     
          );

         $repeater->add_control(
                'info_element_button_link',
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
                'label' => esc_html__( 'Info List', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'info_element_title' => esc_html__( ' Best Finacial Advice', 'xolo-addon' ),
                         'info_element_button_text' => esc_html__( 'read more', 'xolo-addon' ),
                    ],
                    [
                        'info_element_title' => esc_html__( 'Authorised Finance Brand', 'xolo-addon' ),
                          'info_element_button_text' => esc_html__( 'read more', 'xolo-addon' ),
                    ],
                    [
                        'info_element_title' => esc_html__( 'Compehensive Advices', 'xolo-addon' ),
                          'info_element_button_text' => esc_html__( 'read more', 'xolo-addon' ),
                    ],
                    
                ],
                'title_field' => '{{{ info_element_title }}}',
            ]
        );

        $this->end_controls_section();

		$this->start_controls_section(
            'xolo_info_icon_style_section',
            [
                'label'     => __( 'Icon', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_info_icon_style_tabs' );

                // Button Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_buttonicon_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info_icon_color',
                        [
                            'label'     => __( 'Icon Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => 'var(--sc)',
                            'selectors' => [
                                '{{WRAPPER}} .box-icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
					

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_info_icon_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .box-icon i',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'xolo_info_icon_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box-icon i',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info_icon_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .box-icon i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info_icon_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info_icon_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );


                    
                    $this->add_responsive_control(
                        'xolo_info_icon_rotate',
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
                                '{{WRAPPER}} .box-icon i' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_info_icon_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            //'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                            'selector' => '{{WRAPPER}} .box-icon i',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'xolo_info_icon_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box-icon i',
                        ]
                    );
                        
                $this->add_responsive_control(
                    'xolo_info_icon_text_align',
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
                            '{{WRAPPER}}  .box-icon i' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'xolo_info_icon_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info_icon_hover_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .box-icon i:hover .box-icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_info_icon_hover_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .box-icon i:hover .box-icon i',
                            'separator' => 'before',
                        ]
                    );
                $this->end_controls_tab(); // Button Icon style hover tab end

            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end
        $this->start_controls_section(
            'slider_element_title_style',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

                $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'title_background',
                            'label' => __( 'Title Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .text h4',
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
                                '{{WRAPPER}} .text h4'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
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
                                '{{WRAPPER}} .text h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .text h4',
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
                            '{{WRAPPER}}  .text h4' => 'text-align: {{VALUE}};',
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
                            'selector' => '{{WRAPPER}} .text h4',
                        ]
                    );

                 $this->add_responsive_control(
                        'title_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .text h4' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'title_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .text h4',
                        ]
                    );      
              

        $this->end_controls_section();




         
      $this->start_controls_section(
            'section_button',
            [
                'label'     => __( 'Button', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'slider_element_button1_text_style_tabs' );

                    $this->add_control(
                        'slider_button_color',
                        [
                            'label'     => __( 'Button Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}  .link a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'slider_button_background_color',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}  .link a',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'xolo_slider_button_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .link a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_slider_button_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .link a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_slider_button_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .link a',
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
		if(!empty($settings['list'])){ 
      ?>


 <!-- Info  Section  ===============================================================-->
    <section class="card-section wow fadeInUp animate__delay-2s">
        <div class="container text-center">
            <div class="info-box">
                <div class="info-carousel owl-carousel justify-content-center">
					 <?php foreach ( $settings['list'] as $features ) :?>
                    <div class="info-inner ">
                        <div class="box-item">

                            <div class="box-icon">
                                <i class="<?php echo esc_attr($features['info_element_icon']['value']);?>" style="-webkit-text-fill-color: unset;"></i>
                                <i class="<?php echo esc_attr($features['info_element_icon']['value']);?> white-hover-img" style="-webkit-text-fill-color: unset;"></i>
                            </div>
                            <div class="text">
                                <h4>
                                    <?php echo wp_kses_post($features['info_element_title']); ?>
                                </h4>
                            </div>

                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="box-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/elements/element.png " alt=" <?php esc_attr__('image','erapress-pro');?>" class="bg-element">
                                    <div class="box-icon">
                                        <i class="<?php echo esc_attr($features['info_element_icon']['value']);?> "></i>
                                    </div>
                                    <div class="text">
                                        <h4>
                                            <?php echo wp_kses_post($features['info_element_title']); ?>
                                        </h4>
                                    </div>
                                    <div class="link">
                                        <a href="<?php echo esc_url($features['info_element_button_link']['url']); ?> "><?php echo esc_html($features['info_element_button_text']); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
					<?php endforeach;?>
                   
                </div>

            </div>
        </div>
    </section>
	<?php } if ( Plugin::$instance->editor->is_edit_mode() ) : ?>
    <script>
		jQuery(document).ready(function($) {
			$('.info-carousel').owlCarousel({
			loop: true,
			autoplay: true,
			margin: 24,
			nav: false,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				450: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 4
				},
				1199: {
					items: 5
            }
        }
    });
		});
	</script>
 <?php 
	endif;?>

    <!-- Info Section end ===============================================================-->

      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_info );