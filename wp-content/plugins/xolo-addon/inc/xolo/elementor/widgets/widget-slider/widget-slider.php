<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// slider item
class xolo_Widget_slider extends Widget_Base {
 
   public function get_name() {
      return 'xolo-slider-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Slider Box', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon eicon-slider-device';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {



        $this->start_controls_section(
            'slider_axis_section',
            [
                'label' => esc_html__( 'Slider Animate Direction', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        
        $this->add_control(
            'slider_axis',
            [
                'label' => esc_html__( 'Slider', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => __('horizontal','xolo-addon'),
                'options' => [
                    'horizontal' => esc_html__( 'Horizontal', 'xolo-addon' ),
                    'vertical'  => esc_html__( 'Vertical', 'xolo-addon' ),
                ],
            ]
        );

        $this->end_controls_section();


         $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Slider', 'xolo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__( 'Title', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'List Title' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_subtitle',
            [
                'label' => esc_html__( 'Sub Title', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'List Sub Title' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_description',
            [
                'label' => esc_html__( 'Description', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Description' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_feature',
            [
                'label' => esc_html__( 'Feature', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( ' Lorem ipsum dolor sit amet' , 'xolo-addon' ),
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'list_image',
            [
                'label' => esc_html__( 'Choose Image', 'xolo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                
            ]
        );

        
         $repeater->add_control(
             'list_icon',
             [
                 'label'       => __( 'Icon', 'xolo-addon' ),
                'type'        => Controls_Manager::ICONS,
                 'label_block' => true,
                 'default' => [
                    'value' => 'fa fa-check',
                    'library' => 'solid',
                 ],
             ]     
          );

         $repeater->add_control(
             'button_one',
             [
                 'label'       => __( 'Button One', 'xolo-addon' ),
                'type'        => Controls_Manager::TEXT,
                'default'       => __( 'Read More', 'xolo-addon' ),
                 'label_block' => true,
             ]     
          );
          $repeater->add_control(
                'button_one_link',
                [
                    'label'       => __( 'Button One Link', 'xolo-addon' ),
                    'type'        => Controls_Manager::URL,
                    'placeholder' => 'http://your-link.com',
                    'default'     => [
                        'url' => '#',
                    ],
                ]
            );

         $repeater->add_control(
             'button_second',
             [
                 'label'       => __( 'Button Second', 'xolo-addon' ),
                'type'        => Controls_Manager::TEXT,
                'default'       => __( 'Buy Now', 'xolo-addon' ),
                 'label_block' => true,
             ]     
          );

         $repeater->add_control(
                'button_second_link',
                [
                    'label'       => __( 'Button Second Link', 'xolo-addon' ),
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
                        'list_title' => esc_html__( 'We Want You To Succed', 'xolo-addon' ),
                         'list_subtitle' => esc_html__( 'Grow Your Business', 'xolo-addon' ),
                         'list_description' => esc_html__( 'Making Your Business Successful is not easy. advantage is here to help you with, to make it grow and attract Client and make it bold.', 'xolo-addon' ),
                         'list_feature' => esc_html__( 'We Can Help You To Grow Your Business','xolo-addon'),
                    ],
                    [
                        'list_title' => esc_html__( 'ART & SCIENCE TECHNOLOGY', 'xolo-addon' ),
                         'list_subtitle' => esc_html__( 'Contemprorary minimal Design', 'xolo-addon' ),
                         'list_description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'xolo-addon' ),
                         'list_feature' => esc_html__( 'Lorem ipsum dolor sit amet','xolo-addon'),
                    ],
                    [
                        'list_title' => esc_html__( 'ART & BRAND DIRECTION', 'xolo-addon' ),
                         'list_subtitle' => esc_html__( 'Perfect and intuitive Design', 'xolo-addon' ),
                         'list_description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'xolo-addon' ),
                         'list_feature' => esc_html__( 'Lorem ipsum dolor sit amet','xolo-addon'),
                    ],
                    
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'list_title_style',
            [
                'label' => esc_html__( 'Title', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

                $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'title_background',
                            'label' => __( 'Title Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .slide-text h4',
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
                                '{{WRAPPER}} .slide-text h4'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
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
                                '{{WRAPPER}} .slide-text h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text h4',
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
                            '{{WRAPPER}}  .slide-text h4' => 'text-align: {{VALUE}};',
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
                            'selector' => '{{WRAPPER}} .slide-text h4',
                        ]
                    );

                 $this->add_responsive_control(
                        'title_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .slide-text h4' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'title_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text h4',
                        ]
                    );      
              

        $this->end_controls_section();



        $this->start_controls_section(
            'list_subtitle_style',
            [
                'label' => esc_html__( 'Subtitle', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

       
            $this->add_control(
                        'subtitle_color',
                        [
                            'label'     => __( 'Subtitle Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .slide-text h1' => 'color: {{VALUE}};',
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
                                '{{WRAPPER}} .slide-text h1'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
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
                                '{{WRAPPER}} .slide-text h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'subtitle_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text h1',
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
                            '{{WRAPPER}}  .slide-text h1' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

               $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'subtitle_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .slide-text h1',
                        ]
                    );

                 $this->add_responsive_control(
                        'subtitle_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .slide-text h1' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'subtitle_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text h1',
                        ]
                    );      
              

        $this->end_controls_section();

         $this->start_controls_section(
            'list_description_style',
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
                                '{{WRAPPER}}  .slide-text p' => 'color: {{VALUE}};',
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
                                '{{WRAPPER}} .slide-text p'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
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
                                '{{WRAPPER}} .slide-text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'description_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text p',
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
                            '{{WRAPPER}}  .slide-text p' => 'text-align: {{VALUE}};',
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
                            'selector' => '{{WRAPPER}} .slide-text p',
                        ]
                    );

                 $this->add_responsive_control(
                        'description_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .slide-text p' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'description_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text p',
                        ]
                    );      
              

        $this->end_controls_section();


         $this->start_controls_section(
            'list_feature_style',
            [
                'label' => esc_html__( 'Feature', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

       
            $this->add_control(
                        'feature_color',
                        [
                            'label'     => __( 'Feature Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .slide-text ul li' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

            
                $this->add_responsive_control(
                        'feature_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .slide-text ul li'=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                                
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'feature_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .slide-text ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'feature_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text ul li',
                        ]
                    );
                    
                   $this->add_responsive_control(
                    'feature_align',
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
                            '{{WRAPPER}}  .slide-text ul li' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );

               $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'feature_border',
                            'label' => __( 'Border', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .slide-text ul li',
                        ]
                    );

                 $this->add_responsive_control(
                        'feature_border_radius',
                        [
                            'label' => __( 'Border Radius', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}}  .slide-text ul li' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'before',
                        ]
                    );

        $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'feature_box_shadow',
                            'label' => __( 'Box Shadow', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}}  .slide-text ul li',
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
            $this->start_controls_tabs( 'xolo_slider_button_style_tabs' );

                    $this->add_control(
                        'slider_button_color',
                        [
                            'label'     => __( 'Button Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '#ffffff',
                            'selectors' => [
                                '{{WRAPPER}}  .hover-button a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'slider_button_background_color',
                            'label' => __( 'Icon Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .hover-button',
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
                                '{{WRAPPER}} .hover-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                                '{{WRAPPER}} .hover-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_slider_button_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .hover-button',
                        ]
                    );
                    

           $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end


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
                    '{{WRAPPER}} .slide-img img' => 'width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .slide-img img' => 'max-width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .slide-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_object-fit',
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
                    '{{WRAPPER}} .slide-img img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'xolo_slider_separator_panel_style',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( 'xolo_slider_image_effects' );

        $this->start_controls_tab( 'xolo_slider_image_normal',
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
                    '{{WRAPPER}} .slide-img img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_slider_css_filters',
                'selector' => '{{WRAPPER}} .slide-img img',
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
                    '{{WRAPPER}}:hover .slide-img img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'xolo_slider_css_filters_hover',
                'selector' => '{{WRAPPER}}:hover .slide-img img',
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
                    '{{WRAPPER}} .slide-img img' => 'transition-duration: {{SIZE}}s',
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
                'selector' => '{{WRAPPER}} .portfolio-section-1',
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
                    '{{WRAPPER}} .slide-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .slide-img img',
            ]
        );

        $this->end_controls_section();
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display();
      $slider_axis = $settings['slider_axis']; 
     
      ?>
<section class="section-slider">
    <div class="container">
  <div class="under-section">     
    <div id="customize_wrapper"> 
      <div class="customize" id="customize2">
		<?php foreach ( $settings['list'] as $features ) :?>
		<div class="slide-page">
		  <div class="slide-img">
			<dt class=" elementor-repeater-item-<?php echo esc_attr($features['_id']); ?>" > 
			<img src="<?php echo esc_html__( $features['list_image']['url'], 'xolo-addon' ); ?>" alt="Image" class="under-images">
			</dt>
		  </div>
		</div>
		<?php endforeach; ?>
		</div>   
	</div>
   </div>  
  </div>
  
  <div id="customize_wrapper" class="main-slider">
    <div class="customize" id="customize">
         <?php foreach ( $settings['list'] as $features ) :?>
      <div class="slide-page">
        <div class=" elementor-repeater-item-<?php echo esc_attr($features['_id']); ?>" > 
        <div class="slide-img">

          <img src="<?php echo esc_url( $features['list_image']['url'], 'xolo-addon' ); ?>" alt="" >
        </div>
        <div class="container">
        <div class="slide-text animate__fadeInLeft">                                       
          <h4><?php echo esc_html__( $features['list_title'] ); ?></h4>
          <h1><?php echo esc_html__( $features['list_subtitle'], 'xolo-addon' ); ?></h1>  
          <p><?php echo esc_html__( $features['list_description'], 'xolo-addon' ); ?></p> 
          <ul class="slide-detail">
            <li><?php echo Xolo_Icon_manager::render_icon( $features['list_icon'], [ 'aria-hidden' => 'true' ] );?> <?php echo esc_html__( $features['list_feature'], 'xolo-addon' ); ?></li>
            
          </ul>
          <button class="hover-button"><a href="<?php echo esc_url( $features['button_one_link']['url'], 'xolo-addon' ); ?>"><?php echo esc_html__( $features['button_one'], 'xolo-addon' ); ?> </a><i class="fa fa-arrow-right"></i></button>
          <button class="hover-button"><a href="<?php echo esc_url( $features['button_second_link']['url'], 'xolo-addon' ); ?>"><?php echo esc_html__( $features['button_second'], 'xolo-addon' ); ?></a><i class="fa fa-arrow-right"></i></button>
        </div>
    </div>
        </div>
      </div>
        <?php endforeach; ?>      
    </div>
 
    <div class="tiny-inner">
      <div class="customize-tools">
        <ul class="thumbnails" id="customize-thumbnails">
        <?php foreach ( $settings['list'] as $features ) :?>
          <li>
            <div class="owl"></div>
          </li>
           <?php endforeach; ?> 
        </ul>

        <ul class="controls" id="customize-controls">
          <li class="prev">
            <i class="fa fa-arrow-left"></i>
          </li>
          <li class="next">
            <i class="fa fa-arrow-right"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>
    

</section>
                

<script>
        jQuery(document).ready(function($){
            var slider1 = tns({
         "container": "#customize",
          "items": 1,
           "edgePadding": 0,
            "loop": true,
          "controlsContainer": "#customize-controls",
          "navContainer": "#customize-thumbnails",
          "navAsThumbnails": true,
          "autoplay": false,
          "autoplayTimeout": 3500,
           "autoplayDirection": 'forward', // or 'backward'
          "autoplayButton": "#customize-toggle",
          "swipeAngle": false,
          "speed": 1200,
          "mode": "gallery"
          // "mouseDrag": false
          });


          var slider2 = tns({
         "container": "#customize2",
          "items": 1,
           "edgePadding": 0,
           "loop": true,
          "controlsContainer": "#customize-controls",
          "navContainer": "#customize-thumbnails",
          "navAsThumbnails": true,
          "autoplay": false,
          "autoplayTimeout": 3500,
          "autoplayDirection": 'backward', // or 'backward'
          "autoplayButton": "#customize-toggle",
          "swipeAngle": false,
          "speed": 1200,
          "axis": "<?php echo $slider_axis; ?>"
          // "mouseDrag": false
          });

      });

  </script>
  
      <?php
   }  
  
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_slider );