<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// price item
class xolo_Widget_price extends Widget_Base {
 
   public function get_name() {
      return 'xolo-title-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Section Title', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon  eicon-copy';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {
     

   $this->start_controls_section(
            'title_section',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'default' => __('Pricing Plan','xolo-addon'),
                'placeholder' => esc_html__( 'Enter your title', 'xolo-addon' ),
				'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'title_section_style',
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
                            'selector' => '{{WRAPPER}} .section-title1 h4',
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
                                '{{WRAPPER}} .section-title1 h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                                '{{WRAPPER}} .section-title1 h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .section-title1 h4',
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
                            '{{WRAPPER}}  .section-title1 h4' => 'text-align: {{VALUE}};',
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
                            'selector' => '{{WRAPPER}}  .section-title1 h4',
                        ]
                    );

                 $this->add_responsive_control(
                        'title_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .section-title1 h4' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'title_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .section-title1 h4',
                        ]
                    );
              

        $this->end_controls_section();

          $this->start_controls_section(
            'description_section',
            [
                'label' => esc_html__( 'Description', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'description',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__( 'Description', 'xolo-addon' ),
                'default' => __('Choose Your Pricing Policy','xolo-addon'),
                'placeholder' => esc_html__( 'Enter your description', 'xolo-addon' ),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'description_section_style',
            [
                'label' => esc_html__( 'Description', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__( 'Color', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000',
                'selectors' => [
                    '{{WRAPPER}} .section-title1 h2' => 'color: {{VALUE}}',
                ],
            ]
        );

                $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_description_background',
                            'label' => __( 'Description Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .section-title1 h2',
                            'separator' => 'before',
                        ]
                    );

         $this->add_control(
                        'description_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}:hover  .section-title1 h2' => 'color: {{VALUE}};',
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
                                '{{WRAPPER}} .section-title1 h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                                '{{WRAPPER}} .section-title1 h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .section-title1 h2',
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
                            '{{WRAPPER}}  .section-title1 h2' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );

               $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'description_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .section-title1 h2',
                        ]
                    );

                 $this->add_responsive_control(
                        'description_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .section-title1 h2' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'description_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .section-title1 h2',
                        ]
                    );      
              

        $this->end_controls_section();
       
        
        
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      //Inline Editing
      
      $this->add_inline_editing_attributes( 'title', 'basic' );
      $this->add_inline_editing_attributes( 'description', 'basic' );
     
     
      ?>
        <div class="section-title1">
           <h4 <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo esc_html( $settings['title'] ); ?> </h4>
            <div class="line-div">
                <div class="line">
                    <div class="crical"></div>
                </div>
            </div>
           <h2 <?php echo $this->get_render_attribute_string( 'description' ); ?>><?php echo esc_html( $settings['description'] ); ?></h2>
        </div>

      <?php
   }   
}
Plugin::instance()->widgets_manager->register( new xolo_Widget_price );