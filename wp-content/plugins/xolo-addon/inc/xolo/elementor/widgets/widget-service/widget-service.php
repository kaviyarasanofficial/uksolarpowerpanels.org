<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// service item
class xolo_Widget_service extends Widget_Base {
	
   public function get_name() {
      return 'xolo-service-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Service Box', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon  eicon-tv';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {
     
        $this->start_controls_section(
         'section',
         [
            'label' => esc_html__( 'Front Icon', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
      $this->add_control(
         'front_icon',
         [
             'label'       => __( 'Front Icon', 'xolo-addon' ),
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
            'content_section_front_icon',
            [
                'label'     => __( 'Front Icon', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
          //  Icon style tabs start
            $this->start_controls_tabs( 'xolo_style_tabs' );

                //  Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_front_icon_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .service-front .service-content .service-icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .service-front .service-content .service-icon i',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'front_icon_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .service-front .service-content .service-icon i',
                        ]
                    );

                    $this->add_responsive_control(
                        'front_icon_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .service-front .service-content .service-icon i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'front_icon_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .service-front .service-content .service-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'front_icon_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .service-front .service-content .service-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    
                    
                    $this->add_responsive_control(
                        'front_icon_rotate',
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
                                '{{WRAPPER}} .service-front .service-content .service-icon i' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'front_icon_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            //'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                            'selector' => '{{WRAPPER}} .service-front .service-content .service-icon i',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'front_icon_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .service-front .service-content .service-icon i',
                        ]
                    );
                    
                    $this->add_responsive_control(
                    'front_icon_text_align',
                    [
                        'label' => __( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => __( 'Left', 'xolo-addon' ),
                                'icon' => 'fa fa-align-left',
                            ],
                            'center' => [
                                'title' => __( 'Center', 'xolo-addon' ),
                                'icon' => 'fa fa-align-center',
                            ],
                            'right' => [
                                'title' => __( 'Right', 'xolo-addon' ),
                                'icon' => 'fa fa-align-right',
                            ],
                            'justify' => [
                                'title' => __( 'Justified', 'xolo-addon' ),
                                'icon' => 'fa fa-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-front .service-content .service-icon i' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                
                $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'front_icon_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'front_icon_hover_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}:hover .service-front .service-content .service-icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => '
							_hover_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}:hover  .service-front .service-content .service-icon i',
                            'separator' => 'before',
                        ]
                    );
                $this->end_controls_tab(); // Button Icon style hover tab end

            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end

        $this->start_controls_section(
         'section_front_title',
         [
            'label' => esc_html__( 'Front Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
      $this->add_control(
         'front_title',
         [
            'label' => __( 'Front Title', 'xolo-addon' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('Content Marketing','xolo-addon'),
         ]
      );
       $this->end_controls_section();


        $this->start_controls_section(
            'style_front_title',
            [
                'label'     => __( 'Front Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
            );
          // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_front_title_style_tabs' );

                // Button Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_front_title_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'front_title_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#000000',
                            'selectors' => [
                                '{{WRAPPER}}  .service-front h3' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'front_title_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .service-front h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'front_title_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .service-front h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'front_title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .service-front h3',
                        ]
                    );
                    
                    $this->add_responsive_control(
                    'front_title_typography_text_align',
                    [
                        'label' => __( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => __( 'Left', 'xolo-addon' ),
                                'icon' => 'fa fa-align-left',
                            ],
                            'center' => [
                                'title' => __( 'Center', 'xolo-addon' ),
                                'icon' => 'fa fa-align-center',
                            ],
                            'right' => [
                                'title' => __( 'Right', 'xolo-addon' ),
                                'icon' => 'fa fa-align-right',
                            ],
                            'justify' => [
                                'title' => __( 'Justified', 'xolo-addon' ),
                                'icon' => 'fa fa-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .service-front h3' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

                $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'front_title_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'front_title_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}:hover   .service-front h3' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // title style hover tab end

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
		
		$this->start_controls_section(
         'section_front_image',
         [
            'label' => esc_html__( 'Front Image', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
        );
        $this->add_control(
            'front_image',
            [
                'label' => esc_html__( 'Choose Front Image', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_front_image',
            [
                'label' => esc_html__( 'Front Image', 'xolo-addon' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'front_width',
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
                    '{{WRAPPER}} .f-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'front_space',
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
                    '{{WRAPPER}} .f-image img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'front_height',
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
                'size_units' => [ '%','px', 'vh' ],
                'range' => [
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
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
                    '{{WRAPPER}} .f-image img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'front_object-fit',
            [
                'label' => esc_html__( 'Object Fit', 'xolo-addon' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__( 'Default', 'xolo-addon' ),
                    'fill' => esc_html__( 'Fill', 'xolo-addon' ),
                    'cover' => esc_html__( 'Cover', 'xolo-addon' ),
                    'contain' => esc_html__( 'Contain', 'xolo-addon' ),
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .f-image img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'xolo_separator_panel_style',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( 'xolo_service1_image_effects' );

        $this->start_controls_tab( 'xolo_service1_image_normal',
            [
                'label' => esc_html__( 'Normal', 'xolo-addon' ),
            ]
        );

        $this->add_control(
            'front_opacity',
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
                    '{{WRAPPER}} .f-image img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_service1_css_filters',
                'selector' => '{{WRAPPER}} .f-image img',
            ]
        );

        $this->end_controls_tab();
        
        $this->start_controls_tab( 'style_hover',
            [
                'label' => esc_html__( 'Hover', 'xolo-addon' ),
            ]
        );

        $this->add_control(
            'front_opacity_hover',
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
                    '{{WRAPPER}}:hover .f-image img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_service1_css_filters_hover',
                'selector' => '{{WRAPPER}}:hover .f-image img',
            ]
        );

        $this->add_control(
            'front_background_hover_transition',
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
                    '{{WRAPPER}} .f-image img' => 'transition-duration: {{SIZE}}s',
                ],
            ]
        );

        $this->add_control(
            'front_hover_animation',
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
                'name' => 'front_image_border',
                'selector' => '{{WRAPPER}} .f-image img',
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'front_image_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'xolo-addon' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .f-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'front_image_box_shadow',
                'exclude' => [
                    'box_shadow_position',
                ],
                'selector' => '{{WRAPPER}} .f-image img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
         'section_back_title',
         [
            'label' => esc_html__( 'Back Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
      $this->add_control(
         'back_title',
         [
            'label' => __( 'Back Title', 'xolo-addon' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('Strategy & Planning','xolo-addon'),
         ]
      );
       $this->end_controls_section();


        $this->start_controls_section(
            'style_back_title',
            [
                'label'     => __( 'Back Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
            );
          // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_back_title_style_tabs' );

                // Button Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_back_title_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'back_title_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}   .service-back h3' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'back_title_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .service-back h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'back_title_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .name h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'back_title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}   .service-back h3',
                        ]
                    );
                    
                    $this->add_responsive_control(
                    'back_title_text_align',
                    [
                        'label' => __( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => __( 'Left', 'xolo-addon' ),
                                'icon' => 'fa fa-align-left',
                            ],
                            'center' => [
                                'title' => __( 'Center', 'xolo-addon' ),
                                'icon' => 'fa fa-align-center',
                            ],
                            'right' => [
                                'title' => __( 'Right', 'xolo-addon' ),
                                'icon' => 'fa fa-align-right',
                            ],
                            'justify' => [
                                'title' => __( 'Justified', 'xolo-addon' ),
                                'icon' => 'fa fa-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}}   .service-back h3' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

                $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'back_title_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'back_title_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}  .service-back h3:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // title style hover tab end

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end


        

         $this->start_controls_section(
         'section_back_icon',
         [
            'label' => esc_html__( 'Back Icon', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
      $this->add_control(
         'back_icon',
         [
             'label'       => __( 'Back Icon', 'xolo-addon' ),
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
            'content_section_back_icon',
            [
                'label'     => __( 'Back Icon', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
          //  Icon style tabs start
            $this->start_controls_tabs( 'xolo_back_icon_style_tabs' );

                //  Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_style_back_icon_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'back_icon_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .service-content .service-icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'back_icon_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .service-content .service-icon i',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'back_icon_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .service-content .service-icon i',
                        ]
                    );

                    $this->add_responsive_control(
                        'back_icon_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .service-content .service-icon i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'back_icon_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .service-content .service-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'back_icon_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .service-content .service-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    
                    
                    $this->add_responsive_control(
                        'back_icon_rotate',
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
                                '{{WRAPPER}} .service-back .service-content .service-icon i' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'back_icon_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            //'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                            'selector' => '{{WRAPPER}} .service-back .service-content .service-icon i',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'back_icon_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .service-back .service-content .service-icon i',
                        ]
                    );
                    
                    $this->add_responsive_control(
                    'back_icon_text_align',
                    [
                        'label' => __( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => __( 'Left', 'xolo-addon' ),
                                'icon' => 'fa fa-align-left',
                            ],
                            'center' => [
                                'title' => __( 'Center', 'xolo-addon' ),
                                'icon' => 'fa fa-align-center',
                            ],
                            'right' => [
                                'title' => __( 'Right', 'xolo-addon' ),
                                'icon' => 'fa fa-align-right',
                            ],
                            'justify' => [
                                'title' => __( 'Justified', 'xolo-addon' ),
                                'icon' => 'fa fa-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-back .service-content .service-icon i' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                
               $this->end_controls_tab(); // Button Icon style normal tab end

                // Button Icon style Hover tab start
                $this->start_controls_tab(
                    'style_hover_tab_back_icon',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'back_icon_hover_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .service-back .service-content .service-icon i:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'back_icon_hover_background',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}:hover  .service-back .service-content .service-icon i',
                            'separator' => 'before',
                        ]
                    );
                $this->end_controls_tab(); // Button Icon style hover tab end

            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end
    


    



         $this->start_controls_section(
         'section_back_image',
         [
            'label' => esc_html__( 'Back Image', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
        );
        $this->add_control(
            'back_image',
            [
                'label' => esc_html__( 'Choose back Image', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_back_image',
            [
                'label' => esc_html__( 'Back Image', 'xolo-addon' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'back_width',
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
                    '{{WRAPPER}} .service-back' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'back_space',
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
                    '{{WRAPPER}} .service-back' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'back_height',
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
                'size_units' => [ '%','px', 'vh' ],
                'range' => [
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
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
                    '{{WRAPPER}} .service-back' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'back_object-fit',
            [
                'label' => esc_html__( 'Object Fit', 'xolo-addon' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__( 'Default', 'xolo-addon' ),
                    'fill' => esc_html__( 'Fill', 'xolo-addon' ),
                    'cover' => esc_html__( 'Cover', 'xolo-addon' ),
                    'contain' => esc_html__( 'Contain', 'xolo-addon' ),
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .service-back' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

       

        $this->add_control(
            'xolo_service1_separator_panel_style',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( 'xolo_servicess1_image_effects' );

        $this->start_controls_tab( 'xolo_servicess1_image_normal',
            [
                'label' => esc_html__( 'Normal', 'xolo-addon' ),
            ]
        );

        
        $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'back_image_background_color',
                            'label' => __( 'Back Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .overlay',
                            'separator' => 'before',
                        ]
                    );
        
        $this->add_control(
            'back_opacity',
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
                //'condition' => ['back_image_background_color_background' => 'gradient'],
                'selectors' => [
                    '{{WRAPPER}} .overlay' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_servicess1_css_filters',
                'selector' => '{{WRAPPER}} .service-back',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab( 'hover',
            [
                'label' => esc_html__( 'Hover', 'xolo-addon' ),
            ]
        );

        

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_servicess1_css_filters_hover',
                'selector' => '{{WRAPPER}}:hover .service-back',
            ]
        );

        $this->add_control(
            'back_background_hover_transition',
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
                    '{{WRAPPER}} .service-back' => 'transition-duration: {{SIZE}}s',
                ],
            ]
        );

        $this->add_control(
            'back_hover_animation',
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
                'name' => 'back_image_border',
                'selector' => '{{WRAPPER}} .service-back',
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'back_image_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'xolo-addon' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-back' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'back_image_box_shadow',
                'exclude' => [
                    'box_shadow_position',
                ],
                'selector' => '{{WRAPPER}} .service-back',
            ]
        );

        $this->end_controls_section();
		
		
		$this->start_controls_section(
         'section_description',
         [
            'label' => esc_html__( 'Description', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
      $this->add_control(
         'description',
         [
            'label' => __( 'Back Description', 'xolo-addon' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('Lorem ipsum dummy text in print and website industry are usually use in these section','xolo-addon'),
         ]
      );
      $this->end_controls_section();

       $this->start_controls_section(
            'style_description',
            [
                'label'     => __( 'Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_description_style_tabs' );

                    $this->add_control(
                        'description_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .service-back p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );


                    

                    $this->add_control(
                        'description_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .service-back p:hover' => 'color: {{VALUE}};',
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
                                '{{WRAPPER}} .service-back p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                                '{{WRAPPER}} .service-back p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .service-back p',
                        ]
                    );
                
                    $this->add_responsive_control(
                    'description_text_align',
                    [
                        'label' => __( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => __( 'Left', 'xolo-addon' ),
                                'icon' => 'fa fa-align-left',
                            ],
                            'center' => [
                                'title' => __( 'Center', 'xolo-addon' ),
                                'icon' => 'fa fa-align-center',
                            ],
                            'right' => [
                                'title' => __( 'Right', 'xolo-addon' ),
                                'icon' => 'fa fa-align-right',
                            ],
                            'justify' => [
                                'title' => __( 'Justified', 'xolo-addon' ),
                                'icon' => 'fa fa-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-back p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        

        $this->start_controls_section(
         'section_button_text',
         [
            'label' => esc_html__( 'Button', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
      $this->add_control(
         'button_text',
         [
            'label' => __( 'Button Label', 'xolo-addon' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('Read More','xolo-addon'),
         ]
      );
	  $this->add_control(
                'button_link',
                [
                    'label'       => __( 'Button Link', 'xolo-addon' ),
                    'type'        => Controls_Manager::URL,
                    'placeholder' => 'http://your-link.com',
                    'default'     => [
                        'url' => '#',
                    ],
                ]
            );

      $this->end_controls_section();  
		
		
      $this->start_controls_section(
            'style_button_text',
            [
                'label'     => __( 'Button', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
            );
          // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_button_text_style_tabs' );

                // Button Icon style normal tab start
                $this->start_controls_tab(
                    'xolo_button_text_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'button_text_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .service-back .hover-button span a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'button_text_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .hover-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_text_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .hover-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'button_text_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .hover-button',
                        ]
                    );
                    
                    $this->add_responsive_control(
                    'button_text_align',
                    [
                        'label' => __( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => __( 'Left', 'xolo-addon' ),
                                'icon' => 'fa fa-align-left',
                            ],
                            'center' => [
                                'title' => __( 'Center', 'xolo-addon' ),
                                'icon' => 'fa fa-align-center',
                            ],
                            'right' => [
                                'title' => __( 'Right', 'xolo-addon' ),
                                'icon' => 'fa fa-align-right',
                            ],
                            'justify' => [
                                'title' => __( 'Justified', 'xolo-addon' ),
                                'icon' => 'fa fa-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .service-back  .button' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

                $this->end_controls_tab(); // Button Icon style normal tab end

                //Button Icon style Hover tab start
                $this->start_controls_tab(
                    'button_text_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'xolo-addon' ),
                    ]
                );

                    $this->add_control(
                        'button_hover_color',
                        [
                            'label'     => __( 'Hover Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#000000',
                            'selectors' => [
                                '{{WRAPPER}} .service-back .hover-button span a:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // title style hover tab end

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

        



        
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      //Inline Editing
      $this->add_inline_editing_attributes( 'button_text', 'basic' );
      $this->add_inline_editing_attributes( 'front_title', 'basic' );
       $this->add_inline_editing_attributes( 'back_title', 'basic' );
      $this->add_inline_editing_attributes( 'text', 'basic' );
      $this->add_inline_editing_attributes( 'description', 'basic' );

      ?>
                    <div class="service1">
                        <div class="service-card-inner">
                            <div class="service-front">
                                <div class="f-image">
                                     
									 <img src="<?php echo esc_url( $settings['front_image']['url'] )?>" alt="Image">
                                  
                                </div>
                                <div class="service-content"> 
                                    <div class="service-icon">
									<?php if(! empty( $settings['front_icon']['value'] )){?>
									<i class="<?php echo esc_attr($settings['front_icon']['value']);?>"></i>
									<?php }?>
                                    </div>
                                    <h3><?php echo esc_html( $settings['front_title'] ); ?></h3> 
                                </div>
                            </div>
                            <div class="service-back" style="background-image:url('<?php echo esc_url( $settings['back_image']['url'] )?>');">
                                <div class="overlay"></div>
                                <div class="service-content"> 
                                    <div class="service-icon">
                                        <?php if(! empty( $settings['back_icon']['value'] )){?>
									<i class="<?php echo esc_attr($settings['back_icon']['value']);?>"></i>
									<?php }?>
                                    </div>
                                    <h3 <?php echo $this->get_render_attribute_string( 'back_title' ); ?>><?php echo esc_html( $settings['back_title'] ); ?></h3> 
                                </div>
                                <p <?php echo $this->get_render_attribute_string( 'description' ); ?>> <?php echo esc_html( $settings['description'] ); ?></p> 
                                <div class="button">
                                    <button class="hover-button"><span>
									<a href="<?php echo esc_url($settings['button_link']['url']);?>"><?php echo esc_html( $settings['button_text'] ); ?></a></span><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                
      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_service );