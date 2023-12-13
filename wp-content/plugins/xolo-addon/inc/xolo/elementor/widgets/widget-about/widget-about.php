<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// portfolio item
class xolo_Widget_about extends Widget_Base {
 
   public function get_name() {
      return 'xolo-about-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL About Box', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon eicon-single-page';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {



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
            ],
            
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
                    '{{WRAPPER}} .img-box img' => 'width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .img-box img' => 'max-width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .img-box img' => 'height: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .img-box img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'xolo_about_separator_panel_style',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( 'xolo_about_image_effects' );

        $this->start_controls_tab( 'xolo_about_normal',
            [
                'label' => esc_html__( 'Normal', 'xolo-addon' ),
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
                    '{{WRAPPER}} .img-box img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_about_css_filters',
                'selector' => '{{WRAPPER}} .portfolio-img img',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab( 'hover',
            [
                'label' => esc_html__( 'Hover', 'xolo-addon' ),
            ]
        );
		$this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'image_background_color',
                            'label' => esc_html__( 'Back Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}:hover .img-box img',
                            'separator' => 'after',
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
                        'min' => 0.00,
                        'step' => 0.01,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}:hover .img-box img' => 'opacity: {{SIZE}};',
                ],
            ]
        );
        

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_about_css_filters_hover',
                'selector' => '{{WRAPPER}}:hover .img-box img',
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
                    '{{WRAPPER}} .img-box img' => 'transition-duration: {{SIZE}}s',
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
                'selector' => '{{WRAPPER}} .img-box img',
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
                    '{{WRAPPER}} .img-box img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .img-box img',
            ]
        );

        $this->end_controls_section();

        
        $this->start_controls_section(
         'section_about_counter',
         [
            'label' => esc_html__( 'Counter', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
		  );
		 $this->add_control(
			 'about_counter',
			 [
				 'label'       => esc_html__( 'Counter', 'xolo-addon' ),
				'type'        => Controls_Manager::TEXT,
				'default'       => esc_html__( '80', 'xolo-addon' ),
				 'label_block' => true,
			 ]     
		  );
		 $this->end_controls_section();

		$this->start_controls_section(
            'style_about_counter',
            [
                'label'     => esc_html__( 'Counter', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'portfolio_title_style' );

               
                    $this->add_control(
                        'about_counter_color',
                        [
                            'label'     => esc_html__( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .countervalue' => 'fill: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_about_counter_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .countervalue' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_about_counter_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .countervalue' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_about_counter_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .countervalue',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_about_counter_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .countervalue' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        
       
        $this->start_controls_section(
         'section_left_title',
         [
            'label' => esc_html__( 'Left Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'left_title',
         [
             'label'       => esc_html__( 'Left Title', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => esc_html__( 'Experience', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'section_style_left_title',
            [
                'label'     => esc_html__( 'Left Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'left_title_style' );

               
                    
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'left_title_background',
                            'label' => esc_html__( 'Title Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .section-about .skill-progress-content h2',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'xolo_left_title_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .section-about .skill-progress-content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_left_title_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .section-about .skill-progress-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_left_title_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .section-about .skill-progress-content h2',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_left_title_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .section-about .skill-progress-content h2' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        



        $this->start_controls_section(
         'section_right_title',
         [
            'label' => esc_html__( 'Right Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'right_title',
         [
            'type'        => Controls_Manager::TEXT,
             'label'       => esc_html__( 'Right Title', 'xolo-addon' ),
            'default'       => esc_html__( 'About Us', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_right_title',
            [
                'label'     => esc_html__( 'Right Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'right_title_style' );

               
                    
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'right_title_background',
                            'label' => esc_html__( 'Title Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .head-title span',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'xolo_right_title_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .head-title span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_right_title_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .head-title span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_right_title_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .head-title span',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_right_title_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .head-title span' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        
        
    

        $this->start_controls_section(
         'section_subtitle_clone',
         [
            'label' => esc_html__( 'SubTitle', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'right_subtitle',
         [
             'label'       => esc_html__( 'Right SubTitle', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => esc_html__( 'We Are Business Consulting Agency', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_right_subtitle',
            [
                'label'     => esc_html__( 'Right SubTitle', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'right_subtitle_style' );

               
                    $this->add_control(
                        'right_subtitle_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .right-content h1' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_right_subtitle_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_right_subtitle_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_right_subtitle_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .right-content h1',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_right_subtitle_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .right-content h1' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

         $this->start_controls_section(
         'section_right_description',
         [
            'label' => esc_html__( 'Right Description', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'right_description',
         [
             'label'       => esc_html__( 'Right Description', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXTAREA,
            'default'       => esc_html__( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni a ipsum, commodi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni a ipsum, commodi quo nihil quas eveniet voluptatum molestiae possimus ad.', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_right_description',
            [
                'label'     => esc_html__( 'Right Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'right_description_style' );

               
                    $this->add_control(
                        'right_description_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .right-content p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_right_description_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_right_description_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_right_description_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .right-content p',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_right_description_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .right-content p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

        $this->start_controls_section(
         'box_icon1_section',
         [
            'label' => esc_html__( 'Icon Box One', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'box_icon1',
         [
             'label'       => esc_html__( 'Icon One', 'xolo-addon' ),
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
            'xolo_box_icon1_style_section',
            [
                'label'     => esc_html__( 'Icon One', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
               
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_box_icon1_style_tabs' );

                    $this->add_control(
                        'box_icon1_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .box1 .icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_box_icon1_background',
                            'label' => esc_html__( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .box1 .icon i',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'xolo_box_icon1_border',
                            'label' => esc_html__( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box1 .icon i',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_icon1_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .box1 .icon i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_icon1_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box1 .icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_icon1_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box1 .icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );


                    
                    $this->add_responsive_control(
                        'xolo_box_icon1_rotate',
                        array(
                            'label'      => esc_html__( 'Rotate', 'xolo-addon' ),
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
                                '{{WRAPPER}} .box1 .icon i' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_box_icon1_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            //'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                            'selector' => '{{WRAPPER}} .box1 .icon i',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'xolo_box_icon1_box_shadow',
                            'label' => esc_html__( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box1 .icon i',
                        ]
                    );
                    
            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end



        $this->start_controls_section(
         'box_icon2_section',
         [
            'label' => esc_html__( 'Icon Box Two', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'box_icon2',
         [
             'label'       => esc_html__( 'Icon Two', 'xolo-addon' ),
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
            'xolo_box_icon2_style_section',
            [
                'label'     => esc_html__( 'Icon Two', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_box_icon2_style_tabs' );

                    $this->add_control(
                        'box_icon2_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} .box2 .icon i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'xolo_box_icon2_background',
                            'label' => esc_html__( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .box2 .icon i',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'xolo_box_icon2_border',
                            'label' => esc_html__( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box2 .icon i',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_icon2_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .box2 .icon i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_icon2_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box2 .icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_icon2_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box2 .icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );


                    
                    $this->add_responsive_control(
                        'xolo_box_icon2_rotate',
                        array(
                            'label'      => esc_html__( 'Rotate', 'xolo-addon' ),
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
                                '{{WRAPPER}} .box2 .icon i' => 'transform: rotate({{SIZE}}deg);',
                            ),
                        )
                    );
                    
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_box_icon2_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            //'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                            'selector' => '{{WRAPPER}} .box2 .icon i',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'xolo_box_icon2_box_shadow',
                            'label' => esc_html__( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box2 .icon i',
                        ]
                    );
                    
            $this->end_controls_tabs(); // Button Icon style tabs end

        $this->end_controls_section(); // Button Icon style tab end


         $this->start_controls_section(
         'section_box_title1',
         [
            'label' => esc_html__( 'Box Title One', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'box_title1',
         [
             'label'       => esc_html__( 'Box Title One', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => esc_html__( 'Consulting', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'section_style_box_title1',
            [
                'label'     => esc_html__( 'Box Title One', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'box_title1_style' );

               
                    $this->add_control(
                        'box_title1_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .box1 .text  h4' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_title1_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box1 .text  h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_title1_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box1 .text  h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_box_title1_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box1 .text  h4',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_box_title1_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .box1 .text  h4' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

          $this->start_controls_section(
         'section_box_title2',
         [
            'label' => esc_html__( 'Box Title Two', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'box_title2',
         [
             'label'       => esc_html__( 'Box Title Two', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => esc_html__( 'Marketing', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'section_style_box_title2',
            [
                'label'     => esc_html__( 'Box Title Two', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'box_title2_style' );

               
                    $this->add_control(
                        'box_title2_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .box2 .text  h4' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_title2_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box2 .text  h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_title2_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box2 .text  h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_box_title2_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box2 .text  h4',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_box_title2_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .box2 .text  h4' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        
        
         $this->start_controls_section(
         'section_box_description1',
         [
            'label' => esc_html__( 'Box Description One', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'box_description1',
         [
             'label'       => esc_html__( 'Box Description One', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXTAREA,
            'default'       => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_box_description1',
            [
                'label'     => esc_html__( 'Box Description One', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'box_description1_style' );

               
                    $this->add_control(
                        'box_description1_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .box1 .text p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_description1_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box1 .text p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_description1_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box1 .text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_box_description1_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box1 .text p',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_box_description1_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .box1 .text p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end


        
         $this->start_controls_section(
         'section_box_description2',
         [
            'label' => esc_html__( 'Box Description Two', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'box_description2',
         [
             'label'       => esc_html__( 'Box Description Two', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXTAREA,
            'default'       => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_box_description2',
            [
                'label'     => esc_html__( 'Box Description Two', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'box_description2_style' );

               
                    $this->add_control(
                        'box_description2_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .box2 .text p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_description2_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box2 .text p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_box_description2_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .box2 .text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_box_description2_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .box2 .text p',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_box_description2_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .box2 .text p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

         $this->start_controls_section(
         'button_box_title_section',
         [
            'label' => esc_html__( 'Button Box Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'button_box_title',
         [
             'label'       => esc_html__( 'Button Box Title', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => esc_html__( 'Want to work with us?', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_button_box_title',
            [
                'label'     => esc_html__( 'Button Box Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_button_box_title_style_tabs' );

               
                    $this->add_control(
                        'button_box_title_background_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .btn-box h3' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                   
                    $this->add_responsive_control(
                        'button_box_title_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .btn-box h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_box_title_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .btn-box h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'button_box_title_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .btn-box h3',
                        ]
                    );
                    $this->add_responsive_control(
                    'button_box_title_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .btn-box h3' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end



         $this->start_controls_section(
         'button_title_section',
         [
            'label' => esc_html__( 'Button Title', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'button_title',
         [
             'label'       => esc_html__( 'Button Title', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => esc_html__( 'Read More', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_button_title',
            [
                'label'     => esc_html__( 'Button', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_button_title_style_tabs' );

               
                    $this->add_control(
                        'button_box_title_color',
                        [
                            'label'     => esc_html__( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .btn-box .hover-button' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'button_title_background_color',
                            'label' => esc_html__( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .btn-box .hover-button',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'button_title_padding',
                        [
                            'label' => esc_html__( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .btn-box .hover-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_title_margin',
                        [
                            'label' => esc_html__( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .btn-box .hover-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'button_title_typography',
                            'label' => esc_html__( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .btn-box .hover-button',
                        ]
                    );
                    $this->add_responsive_control(
                    'button_title_text_align',
                    [
                        'label' => esc_html__( 'Alignment', 'xolo-addon' ),
                        'type' => Controls_Manager::CHOOSE,
                        'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'xolo-addon' ),
                                'icon' => 'eicon-h-align-right',
                            ],
                            
                        ],
                        'selectors' => [
                            '{{WRAPPER}}  .btn-box .hover-button' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

        
        



        
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      $this->add_inline_editing_attributes( 'left_title', 'basic' );
      $this->add_inline_editing_attributes( 'right_description', 'basic' );
      $this->add_inline_editing_attributes( 'button', 'basic' );
      ?>



     <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="left-content your-element " data-tilt data-tilt-reverse="true">
                        <div class="img-box">
                            <img src="<?php echo esc_url( $settings['image']['url'] )?>" alt="">
                        </div>
                        <div class="process-bar-round">
                            <div class="skill-progress-content">
                                <i class="fa fa-star"></i>
                                <svg class="radial-progress" data-countervalue="<?php echo esc_html($settings['about_counter']); ?>" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="57%"
                                        transform="matrix(0, 1, -1, 0, 68, 0)"><?php echo esc_html($settings['about_counter']); ?></text>
                                </svg>
                                <h2><?php echo esc_html($settings['left_title']); ?></h2>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="right-content">
                        <div class="head-title">
                            <span>_ <?php echo esc_html($settings['right_title']); ?> _</span>
                        </div>
                        <h1><?php echo esc_html($settings['right_subtitle']); ?></h1>
                        <p><?php echo esc_html($settings['right_description']); ?></p>
                        <div class="about-box">
                            <div class="box box1">
                                <div class="icon">
                                    <?php if(! empty( $settings['box_icon1']['value'] )){?>
									<i class="<?php echo esc_attr($settings['box_icon1']['value']);?>"></i>
									<?php }?>
                                </div>
                                <div class="text">
                                    <h4><?php echo esc_html($settings['box_title1']); ?></h4>
                                    <p><?php echo esc_html($settings['box_description1']); ?></p>
                                </div>
                            </div>
                            <div class="box box2">
                                <div class="icon">
                                    <?php if(! empty( $settings['box_icon2']['value'] )){?>
									<i class="<?php echo esc_attr($settings['box_icon2']['value']);?>"></i>
									<?php }?>
                                </div>
                                <div class="text">
                                    <h4><?php echo esc_html($settings['box_title2']); ?></h4>
                                    <p><?php echo esc_html($settings['box_description2']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            <h3><?php echo esc_html($settings['button_box_title']);?></h3>
                            <button class="hover-button"><?php echo esc_html($settings['button_title']);?> <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_about );