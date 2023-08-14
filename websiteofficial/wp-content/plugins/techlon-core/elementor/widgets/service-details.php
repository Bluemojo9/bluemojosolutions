<?php
namespace Elementor;
class Techlon_Service_Details_Widget extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_service_details';
    }
    public function get_title()
    {
        return esc_html__('Techlon Service Details', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-tools';
    }
    public function get_categories()
    {
        return ['techlon'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_service_details', [
                'label' => esc_html__('Service Details', 'techlon-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control('techlon_service_details_icon', [
            'label' => esc_html__('Icon', 'techlon-core'),
            'type' => Controls_Manager::ICONS,
        ]);
        $repeater->add_control(
            'techlon_service_details_title', [
                'label' => esc_html__('Title', 'techlon-core'),
                'default' => esc_html__('Praesent efficitur quam sit amet', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service_details_section_items',
            [
                'label' => esc_html__('Service Details Items', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_service_details_title' => esc_html__('Praesent efficitur quam sit amet', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_service_details_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section('techlon_cta_box_style', [

            'label'     => esc_html__('Service Details','techlon-core'),

            'tab'       => Controls_Manager::TAB_STYLE,

        ]);
        $this->add_control(

            'techlon_service_details_title_color', [

                'label'     => esc_html__('Color','techlon-core'),

                'type'      => Controls_Manager::COLOR,

                'selectors' => [

                    '{{WRAPPER}} .service-details__caption__list li'    => 'color: {{VALUE}}'

                ]

            ]

        );
        $this->add_group_control(

            \Elementor\Group_Control_Typography::get_type(), [

                'name'      => 'techlon_service_details_typo',

                'label'     => esc_html__('Typography','techlon-core'),

                'selector'  => '{{WRAPPER}} .service-details__caption__list li'   

            ]

        );

        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
                                    <ul class="service-details__caption__list">
                                        <?php foreach ($settings['techlon_service_details_section_items'] as $li) {?>
                                        <li>
                                        <?php 
                                            Icons_Manager::render_icon( $li['techlon_service_details_icon'], [ 'aria-hidden' => 'true' ] );
                                        ?>                                          
                         
                                            <?php echo techlon_wp_kses($li['techlon_service_details_title']) ?>
                                        </li>
                                        <?php }?>
                                    </ul><!-- /.service-details__caption__list -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Service_Details_Widget);
