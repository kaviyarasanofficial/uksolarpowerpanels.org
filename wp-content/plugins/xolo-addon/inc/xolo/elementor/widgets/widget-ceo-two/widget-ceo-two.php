<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// portfolio item
class xolo_Widget_ceo_two extends Widget_Base {
 
   public function get_name() {
      return 'xolo-ceo2-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Ceo Box Two', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon eicon-site-identity';
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
         'section_number_experience',
         [
            'label' => esc_html__( 'Number Of Experience', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'number_experience',
         [
             'label'       => __( 'Number Of Experience', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => __( '80', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'style_number_experience',
            [
                'label'     => __( 'Number Of Experience', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'number_experience_style' );

               $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'number_experience_color',
                            'label' => __( ' Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}  .right-content h3',
                            'separator' => 'before',
                        ]
                    );
                    

                    $this->add_responsive_control(
                        'number_experience_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'number_experience_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'number_experience_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .right-content h3',
                        ]
                    );
                    $this->add_responsive_control(
                    'number_experience_text_align',
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
                            '{{WRAPPER}}  .right-content h3' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        
       
        $this->start_controls_section(
         'section_experience',
         [
            'label' => esc_html__( 'Experience', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'experience',
         [
             'label'       => __( 'Experience', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => __( 'Year of Experience', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'section_style_experience',
            [
                'label'     => __( 'Experience', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'experience_style' );

               
                     $this->add_control(
                        'experience_color',
                        [
                            'label'     => __( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .right-content span' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    $this->add_responsive_control(
                        'experience_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'experience_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .right-content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'experience_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .right-content span',
                        ]
                    );
                    $this->add_responsive_control(
                    'experience_text_align',
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
                            '{{WRAPPER}}  .right-content span' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end
        
        $this->start_controls_section(
         'button_section',
         [
            'label' => esc_html__( 'Button', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'button',
         [
             'label'       => __( 'Button', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => __( 'More Services', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_button',
            [
                'label'     => __( 'Button', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_button_style_tabs' );

               
                    $this->add_control(
                        'button_color',
                        [
                            'label'     => __( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .right-content .hover-button' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'button_background_color',
                            'label' => __( ' Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}}  .right-content .hover-button',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'button_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .right-content .hover-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}}  .right-content .hover-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'button_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .right-content .hover-button',
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
                            '{{WRAPPER}}   .right-content .hover-button' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'center',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

        


       
        $this->start_controls_section(
         'section_title',
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
            'default'       => __( 'Welcome To The Business Consulting Agency!', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'section_style_title',
            [
                'label'     => __( 'title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'title_style' );

               
                    $this->add_control(
                        'title_color',
                        [
                            'label'     => __( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .left-content .text h3' => 'color: {{VALUE}};',
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
                                '{{WRAPPER}} .left-content .text h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                                '{{WRAPPER}} .left-content .text h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .left-content .text h3',
                        ]
                    );
                    $this->add_responsive_control(
                    'title_text_align',
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
                            '{{WRAPPER}}  .left-content .text h3' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

        

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
             'label'       => __( 'Description', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXTAREA,
            'default'       => __( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et facilis modi ut nesciunt harum minima?', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_description',
            [
                'label'     => __( 'Description', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'description_style' );

               
                    $this->add_control(
                        'description_color',
                        [
                            'label'     => __( 'Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .left-content .text  p' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_description_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .left-content .text  p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_description_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .left-content .text  p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .left-content .text  p',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_description_text_align',
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
                            '{{WRAPPER}}  .left-content .text  p' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end

       $this->start_controls_section(
         'section_background_image',
         [
            'label' => esc_html__( 'Background Image', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
        );
        $this->add_control(
            'background_image',
            [
                'label' => esc_html__( 'Choose Background Image', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();
		
		$this->start_controls_section(
            'background_style_image',
            [
                'label' => esc_html__( 'Background Image', 'xolo-addon' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ],
            
        );

        $this->add_responsive_control(
            'background_image_width',
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
                    '{{WRAPPER}} .ceo-section2' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'background_image_space',
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
                    '{{WRAPPER}} .ceo-section2' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'background_image_height',
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
                    '{{WRAPPER}} .ceo-section2' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'background_image_object-fit',
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
                    '{{WRAPPER}} .ceo-section2' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'xolo_ceo2_background_separator_panel_style',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( 'xolo_ceo2_background_image_effects' );

        $this->start_controls_tab( 'xolo_ceo2_normal',
            [
                'label' => esc_html__( 'Normal', 'xolo-addon' ),
            ]
        );
		
		$this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'background_image_background_color',
                            'label' => __( 'Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .ceo-section2',
                            'separator' => 'after',
                        ]
                    );
					
        $this->add_control(
            'background_image_opacity',
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
                    '{{WRAPPER}} .ceo-section2' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_ceo2_background_css_filters',
                'selector' => '{{WRAPPER}} .ceo-section2',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab( 'background_hover',
            [
                'label' => esc_html__( 'Hover', 'xolo-addon' ),
            ]
        );
		
        $this->add_control(
            'background_image_opacity_hover',
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
                    '{{WRAPPER}}:hover .ceo-section2' => 'opacity: {{SIZE}};',
                ],
            ]
        );
        

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_ceo2_background_css_filters_hover',
                'selector' => '{{WRAPPER}}:hover .ceo-section2',
            ]
        );

        $this->add_control(
            'background_image_hover_transition',
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
                    '{{WRAPPER}} .ceo-section2' => 'transition-duration: {{SIZE}}s',
                ],
            ]
        );

        $this->add_control(
            'background_image_hover_animation',
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
                'name' => 'background_image_border',
                'selector' => '{{WRAPPER}} .ceo-section2',
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'background_image_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'xolo-addon' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ceo-section2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'background_image_box_shadow',
                'exclude' => [
                    'box_shadow_position',
                ],
                'selector' => '{{WRAPPER}} .ceo-section2',
            ]
        );

        $this->end_controls_section();

        
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      $this->add_inline_editing_attributes( 'number_experience', 'basic' );
      $this->add_inline_editing_attributes( 'experience', 'basic' );
     
      ?>

<!-- ================ CEO Section 2 ================== -->
    <section class="ceo-section2" style="background-image: url('<?php echo esc_url( $settings['background_image']['url'] )?>');  background-blend-mode: overlay;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="left-content">
                        <div class="img-box">
                            <img src="<?php echo esc_url( $settings['image']['url'] )?>" alt="">
                        </div>
                        <div class="text">
                            <h3><?php echo esc_html($settings['title']);?>
                            </h3>
                            <p><?php echo esc_html($settings['description']);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h3><?php echo esc_html($settings['number_experience']);?>+</h3>
                        <span><?php echo esc_html($settings['experience']);?></span>
                        <button class="hover-button"><?php echo esc_html($settings['button']); ?><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ CEO Section 2 ================== -->

    
    
    
      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_ceo_two );