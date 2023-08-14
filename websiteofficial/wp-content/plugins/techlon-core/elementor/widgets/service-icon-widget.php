<?php
namespace Elementor;
class Techlon_Service_Icon_widget extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_service_icon_box';
    }
    public function get_title()
    {
        return esc_html__('Techlon Service Icon Widget', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-icon-box';
    }
    public function get_categories()
    {
        return ['techlon'];
    }
    protected function register_controls()
    {
        $this->start_controls_section('techlon_service_icon_widget_options', [
            'label' => esc_html__('Service Icon Widget', 'techlon-core'),
            'tab' => Controls_Manager::TAB_CONTENT,
        ]);
        $repeater = new \Elementor\Repeater();
        $repeater->add_control('techlon_service_icon_widget_icon', [
            'label' => esc_html__('Icon', 'techlon-core'),
            'type' => Controls_Manager::ICONS,
            // 'default' => [
            //     'value' => 'techlon-icon-consulting',
            // ],
        ]);
        $repeater->add_control('techlon_service_icon_widget_text', [
            'label' => esc_html__('Text', 'techlon-core'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => esc_html__('There are many of of lorem Ipsum, but the majori have suffered.', 'techlon-core'),
        ]);
        $repeater->add_control('techlon_service_icon_widget_title', [
            'label' => esc_html__('Title', 'techlon-core'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => esc_html__('IT Consultant', 'techlon-core'),
        ]);
        $repeater->add_control('techlon_service_icon_widget_title_link', [
            'label' => esc_html__('Link', 'techlon-core'),
            'type' => Controls_Manager::URL,
            'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            'default' => [
                'url' => '#',
            ],
        ]);
        $this->add_control('techlon_service_items', [
            'label' => esc_html__('Service Item', 'techlon-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'title_field' => '{{{techlon_service_icon_widget_title}}}',
            'default' => [
                [
                    'techlon_service_icon_widget_title' => esc_html__('IT Consultant', 'techlon-core'),
                ],
            ],
        ]);
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();?>
<section class="row gutter-y-30 service-details__box-wrapper">
<?php foreach ($settings['techlon_service_items'] as $card) {?>
                            <div class="col-md-6 col-sm-12">
                                <div class="service-details__box">
                                    <i class="service-details__box__icon <?php echo esc_attr($card['techlon_service_icon_widget_icon']['value']) ?>"></i>
                                    <div class="service-details__box__content">
                                        <h3 class="service-details__box__title">
                                            <a href="<?php echo esc_url($card['techlon_service_icon_widget_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_service_icon_widget_title']) ?></a>
                                        </h3>
                                        <p class="service-details__box__text"><?php echo techlon_wp_kses($card['techlon_service_icon_widget_text']) ?></p><!-- /.service-details__box__text -->
                                    </div><!-- /.service-details__box__content -->
                                </div><!-- /.service-details__box -->
                            </div><!-- /.col-md-6 col-sm-12 -->
<?php }?>
    </section><!-- /.row -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Service_Icon_widget);