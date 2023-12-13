<?php 
namespace Elementor;
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// funfact item
class xolo_Widget_funfact extends Widget_Base {
 
   public function get_name() {
      return 'xolo-funfact-item';
   }
 
   public function get_title() {
      return esc_html__( 'XL Funfact Box', 'xolo-addon' );
   }
 
   public function get_icon() { 
       return 'xolo-icon eicon-number-field';
   }
 
   public function get_categories() {
      return [ 'xolo-elements' ];
   }
   protected function register_controls() {


        
        $this->start_controls_section(
         'counter_section',
         [
            'label' => esc_html__( 'Counter', 'xolo-addon' ),
            'type' => Controls_Manager::SECTION,
         ]
      );
     $this->add_control(
         'counter',
         [
             'label'       => __( 'Counter', 'xolo-addon' ),
            'type'        => Controls_Manager::TEXT,
            'default'       => __( '500', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_counter',
            [
                'label'     => __( 'Counter', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'xolo_funfact_counter_style_tabs' );

               
                    
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'funfact_counter_background_color',
                            'label' => __( ' Background', 'xolo-addon' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .funfact-wapper h2',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'xolo_funfact_counter_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .funfact-wapper h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_funfact_counter_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .funfact-wapper h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_funfact_counter_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .funfact-wapper h2',
                        ]
                    );
                    $this->add_responsive_control(
                    'counter_text_align',
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
                            '{{WRAPPER}}  .funfact-wapper h2' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
                  

                

            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end


        $this->start_controls_section(
         'section_title_funfact',
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
            'default'       => __( 'Project Complete', 'xolo-addon' ),
             'label_block' => true,
         ]     
      );
     $this->end_controls_section();

      $this->start_controls_section(
            'content_section_title',
            [
                'label'     => __( 'Title', 'xolo-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        // Button Icon style tabs start
            $this->start_controls_tabs( 'funfact_title_style' );

               
                    $this->add_control(
                        'funfact_title_color',
                        [
                            'label'     => __( 'Text Color', 'xolo-addon' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}}  .funfact-wapper .title' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_funfact_title_padding',
                        [
                            'label' => __( 'Padding', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .funfact-wapper .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'xolo_funfact_title_margin',
                        [
                            'label' => __( 'Margin', 'xolo-addon' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .funfact-wapper .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'xolo_funfact_title_typography',
                            'label' => __( 'Typography', 'xolo-addon' ),
                            'selector' => '{{WRAPPER}} .funfact-wapper .title',
                        ]
                    );
                    $this->add_responsive_control(
                    'xolo_funfact_title_typography_text_align',
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
                            '{{WRAPPER}}  .funfact-wapper' => 'text-align: {{VALUE}};',
                        ],
                        'default' => 'left',
                        'separator' =>'before',
                    ]
                );
                    
            $this->end_controls_tabs(); // title style tabs end

        $this->end_controls_section(); // title style tab end        
   }
   protected function render( $instance = [] ) {
 
      // get our input from the widget settings.
       
      $settings = $this->get_settings_for_display(); 
      //Inline Editing
     
      $this->add_inline_editing_attributes( 'title', 'none' );
      $this->add_inline_editing_attributes( 'counter', 'basic' );
     
      ?>
        <div class="funfact-wapper">
            <h2><span class="counter"> <?php echo esc_html($settings['counter']); ?></span>+</h2>
            <span class="title"> <?php echo esc_html($settings['title']); ?></span>                 
        </div>
             
   
      <?php
   }  


    
}
Plugin::instance()->widgets_manager->register_widget_type( new xolo_Widget_funfact );
