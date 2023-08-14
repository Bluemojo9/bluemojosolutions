<?php
namespace Elementor;
class Techlon_Benefits2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_benefits2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Benefits2 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-posts-grid';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_benefits2_section_card',
            [
                'label' => esc_html__('Benefits2 Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_benefits2_section_card_bg_image', [
                'label' => esc_html__('Card Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-card-two::before' => 'background-image: url({{URL}});',
                ],
            ]
        );
        $repeater->add_control(
            'techlon_benefits2_section_card_title', [
                'label' => esc_html__(' Card Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Quality Service', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_benefits2_section_card_title_link', [
                'label' => esc_html__('Card Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_benefits2_section_card_text', [
                'label' => esc_html__(' Card Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sed perspe unde omnis natus sit voluptatem acc doloremue', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_benefits2_section_card_icon', [
                'label' => esc_html__(' Card Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_benefits2_section_card_items',
            [
                'label' => esc_html__('Benefits2 Card ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_benefits2_section_card_text' => esc_html__('Sed perspe unde omnis natus sit voluptatem acc doloremue', 'techlon-core'),
                        'techlon_benefits2_section_card_title' => esc_html__('Quality Service', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_benefits2_section_card_title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <section class="section-padding--bottom section-padding--top">
            <div class="container">
                <div class="row gutter-y-30">
<?php foreach ($settings['techlon_benefits2_section_card_items'] as $card) {?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="service-card-two gray-bg">
                            <h3 class="service-card-two__title"><a href="<?php echo esc_url($card['techlon_benefits2_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_benefits2_section_card_title']) ?></a></h3>
                            <!-- /.service-card-two__title -->
                            <p class="service-card-two__text"><?php echo techlon_wp_kses($card['techlon_benefits2_section_card_text']) ?>
                            </p><!-- /.service-card-two__text -->
                            <div class="service-card-two__icon">
                                <i class="<?php echo esc_attr($card['techlon_benefits2_section_card_icon']['value']) ?>"></i>
                            </div><!-- /.service-card-two__icon -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.col-lg-3 -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Benefits2_Section);