<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// info2 item
class xolo_Widget_infoOne extends Widget_Base {
 
   public function get_name() {
      return 'xolo-infoOne-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Info Box One', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon   eicon-kit-details';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {
    $this->start_controls_section(
         'icon_section',
         [
            'label' => esc_html__( 'Icon Box', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'icon',
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
     $this->end_controls_section();

     $this->start_controls_section(
            'xolo_info2_icon_style_section',
            [
                'label'     => __( 'Icon', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_info2_icon_style_tabs' );

                // Button Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_buttonicon_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info2_icon_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .info-icon' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_info2_icon_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .info-icon',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'xolo_info2_icon_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .info-icon',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info2_icon_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .info-icon' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info2_icon_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .info-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info2_icon_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .info-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );


                    
                    $this->add_responsive_control(
                        'xolo_info2_icon_rotate',
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
                                '{{WRAPPER}} .info-icon' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_info2_icon_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            //'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                            'selector' => '{{WRAPPER}} .info-icon',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'xolo_info2_icon_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .info-icon',
                        ]
                    );
                        
                $this->add_responsive_control(
                    'xolo_info2_icon_text_align',
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
                            '{{WRAPPER}}  .info-icon' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                
                $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'xolo_info2_icon_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info2_icon_hover_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .info-item:hover .info-icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_info2_icon_hover_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .info-item:hover .info-icon',
                            'separator' => 'before',
                        ]
                    );
                $this->end_controls_tab(); // Button Icon style hover tab end

            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end
        
        $this->start_controls_section(
         'title_section',
         [
            'label' => esc_html__( 'Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'title',
         [
             'label'       => __( 'Title', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => __( 'Highly Customizable', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'xolo_info2_title_style_section',
            [
                'label'     => __( 'Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_info2_title_style_tabs' );

                // Button Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_info2_title_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info2_title_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#000000',
                            'selectors' => [
                                '{{WRAPPER}} .info-title a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info2_title_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .info-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info2_title_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .info-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_info2_title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .info-title a',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_info2_title_typography_text_align',
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
                            '{{WRAPPER}}  .info-title' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
                  

                $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'xolo_info2_title_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info2_title_hover_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .info-item:hover .info-title a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // title style hover tab end

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end


         $this->start_controls_section(
         'description_section',
         [
            'label' => esc_html__( 'Description', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'info2_description',
         [
             'label'       => __( 'Description', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXTAREA,
            'default'       => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'xolo_info2_desc_style_section',
            [
                'label'     => __( 'Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
               
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_info2_desc_style_tabs' );
                 $this->start_controls_tab(
                    'xolo_info2_desc_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );
                    $this->add_control(
                        'xolo_info2_desc_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#000000',
                            'selectors' => [
                                '{{WRAPPER}} .info-content p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_info2_desc_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .info-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                     $this->add_responsive_control(
                        'xolo_info2_desc_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .info-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_info2_desc_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .info-content p',
                        ]
                    );
                $this->add_responsive_control(
                    'xolo_info2_desc_typography_text_align',
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
                            '{{WRAPPER}}  .info-content p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

                $this->end_controls_tab();

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'xolo_info2_desc_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'xolo_info2_desc_hover_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .info-item:hover .info-content p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // title style hover tab end     
            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        



    $this->start_controls_section(
         'section_image',
         [
            'label' => esc_html__( 'Image', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
        );
        $this->add_control(
            'image',
            [
                'label' => esc_html__( 'Choose Image', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_image',
            [
                'label' => esc_html__( 'Image', 'xolo-addon' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'image_width',
            [
                'label' => esc_html__( 'Width', 'xolo-addon' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'unit' => '%',
                ],
                'tablet_default' => [
                    'unit' => '%',
                ],
                'mobile_default' => [
                    'unit' => '%',
                ],
                'size_units' => [ '%', 'px', 'vw' ],
                'range' => [
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                    ],
                    'vw' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .info-item-bg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_space',
            [
                'label' => esc_html__( 'Max Width', 'xolo-addon' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'unit' => '%',

                ],
                'tablet_default' => [
                    'unit' => '%',
                ],
                'mobile_default' => [
                    'unit' => '%',
                ],
                'size_units' => [ '%', 'px', 'vw' ],
                'range' => [
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                    ],
                    'vw' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .info-item-bg' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label' => esc_html__( 'Height', 'xolo-addon' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'unit' => 'px',
                ],
                'tablet_default' => [
                    'unit' => 'px',
                ],
                'mobile_default' => [
                    'unit' => 'px',
                ],
                'size_units' => [ 'px', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 500,
                    ],
                    'vh' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .info-item-bg' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_object-fit',
            [
                'label' => esc_html__( 'Object Fit', 'xolo-addon' ),
                'type' => Controls_Manager::SELECT,
                'condition' => [
                    'height[size]!' => '',
                ],
                'options' => [
                    '' => esc_html__( 'Default', 'xolo-addon' ),
                    'fill' => esc_html__( 'Fill', 'xolo-addon' ),
                    'cover' => esc_html__( 'Cover', 'xolo-addon' ),
                    'contain' => esc_html__( 'Contain', 'xolo-addon' ),
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .info-item-bg' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'xolo_info2_separator_panel_style',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( 'xolo_info2_image_effects' );

        $this->start_controls_tab( 'xolo_info2_image_normal',
            [
                'label' => esc_html__( 'Normal', 'xolo-addon' ),
            ]
        );

         $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'image_background_color',
                            'label' => __( 'Back Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .info-item-bg',
                            'separator' => 'after',
                        ]
                    );
        $this->add_control(
            'image_opacity',
            [
                'label' => esc_html__( 'Opacity', 'xolo-addon' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 1,
                        'min' => 0.00,
                        'step' => 0.01,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}:hover .info-item-bg' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_info2_css_filters',
                'selector' => '{{WRAPPER}} .info-item-bg',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab( 'hover',
            [
                'label' => esc_html__( 'Hover', 'xolo-addon' ),
            ]
        );

        $this->add_control(
            'image_opacity_hover',
            [
                'label' => esc_html__( 'Opacity', 'xolo-addon' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 1,
                        'min' => 0.10,
                        'step' => 0.01,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}:hover .info-item-bg' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_info2_css_filters_hover',
                'selector' => '{{WRAPPER}}:hover .info-item-bg',
            ]
        );

        $this->add_control(
            'image_background_hover_transition',
            [
                'label' => esc_html__( 'Transition Duration', 'xolo-addon' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 3,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .info-item-bg' => 'transition-duration: {{SIZE}}s',
                ],
            ]
        );

        $this->add_control(
            'image_hover_animation',
            [
                'label' => esc_html__( 'Hover Animation', 'xolo-addon' ),
                'type' => Controls_Manager::HOVER_ANIMATION,
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'selector' => '{{WRAPPER}} .info-item-bg',
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'image_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'xolo-addon' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .info-item-bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_box_shadow',
                'exclude' => [
                    'box_shadow_position',
                ],
                'selector' => '{{WRAPPER}} .info-item-bg',
            ]
        );

        $this->end_controls_section();
     
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      //Inline Editing
      $this->add_inline_editing_attributes( 'icon', 'basic' );
      $this->add_inline_editing_attributes( 'title', 'basic' );
      $this->add_inline_editing_attributes( 'info2_description', 'basic' );
      $this->add_inline_editing_attributes( 'image', 'basic' );
      $this->add_inline_editing_attributes( 'list', 'basic' );
     
      ?>

	<style>
		:root{
		 --data-gr:  linear-gradient(to right,#FF9300,#FF0056);
		 --data-bg: url('<?php echo esc_url( $settings['image']['url'] )?>');
		}
	</style>
 
	<div class="info-item">
		<div class="info-icon">
		   <?php if(! empty( $settings['icon']['value'] )){?>
				<i class="<?php echo esc_attr($settings['icon']['value']);?>"></i>
				<?php }?>
		</div>
		<div class="info-content">
			<h5 class="info-title"><a href="javascript:void(0)"><span <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo esc_html($settings['title']); ?></span></a></h5>
			<p <?php echo $this->get_render_attribute_string( 'info2_description' ); ?>> <?php echo esc_html($settings['info2_description']); ?></p>
		</div>
		<div class="info-item-bg" style=" background-image: url('<?php echo esc_url( $settings['image']['url'] )?>');"></div>
	</div>

      <?php
   }  

}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_infoOne );