<?php
namespace Elementor;
class Techlon_Process_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_pocess_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Process Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-counter-circle';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_process_section',
            [
                'label' => esc_html__('Process Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_process_section_image', [
                'label' => esc_html__(' Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_process_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('OUR WORKING PROCESS', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_process_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Driving Client Results Utilizing New Innovation Points of view', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_process_section_card',
            [
                'label' => esc_html__('Card Process Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_process_section_card_title', [
                'label' => esc_html__(' Card Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('End to End Solutions & ServicesGuaranteed', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_process_section_card_title_link', [
                'label' => esc_html__('Card Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_process_section_card_text', [
                'label' => esc_html__(' Card Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('We help transform the world’s most important businesses into vigorous organizations that ', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_process_section_card_button', [
                'label' => esc_html__(' Card Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Read More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_process_section_card_button_link', [
                'label' => esc_html__('Card Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_process_section_card_items',
            [
                'label' => esc_html__('Card Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_process_section_card_text' => esc_html__('We help transform the world’s most important businesses into vigorous organizations that', 'techlon-core'),
                        'techlon_process_section_card_title' => esc_html__('End to End Solutions & ServicesGuaranteed', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_process_section_card_title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
       <div
            class="section-padding--bottom background-position-center-center section-padding--top background-size-cover gray-bg work-process"
            style="background-image: url(<?php echo esc_url($settings['techlon_process_section_image']['url']) ?>);">
            <div class="container">
                <div class="section-title text-center">
                    <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_process_section_text']) ?></p><!-- /.section-title__text -->
                    <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_process_section_title']) ?>
                    </h2>
                    <!-- /.section-title__title -->
                </div><!-- /.section-title -->
                <div class="row gutter-y-30">
<?php foreach ($settings['techlon_process_section_card_items'] as $card) {?>
                    <div class="col-lg-4 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="work-process-card-one">
                            <div class="work-process-card-one__inner">
                                <div class="work-process-card-one__count"></div><!-- /.work-process-card-one__count -->
                                <h3 class="work-process-card-one__title"><a href="<?php echo esc_url($card['techlon_process_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_process_section_card_title']) ?></a></h3>
                                <div class="work-process-card-one__text"><?php echo techlon_wp_kses($card['techlon_process_section_card_text']) ?></div>
                                <!-- /.work-process-card-one__text -->
                                <a class="work-process-card-one__link" href="<?php echo esc_url($card['techlon_process_section_card_button_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_process_section_card_button']) ?></a>
                            </div><!-- /.work-process-card-one__inner -->
                        </div><!-- /.work-process-card-one -->
                    </div><!-- /.col-lg-4 -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Process_Section);