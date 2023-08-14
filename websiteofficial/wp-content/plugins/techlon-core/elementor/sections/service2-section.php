<?php
namespace Elementor;
class Techlon_Service2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_service2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Service2 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-tools';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_service2_section',
            [
                'label' => esc_html__('Service2 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_service2_image', [
                'label' => esc_html__('Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_service2_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('HOW CAN HELP YOU', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service2_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Business Solutions to Growth Business', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service2_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('System is a term used to refer to an organized collection
                                         symbols and processes that may be used to operate on such symbols. Perspiciatis unde
                                          omnis natus error voluptatems accusa.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service2_button', [
                'label' => esc_html__('Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service2_button_link', [
                'label' => esc_html__('Section Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_service2_section_list',
            [
                'label' => esc_html__('Service2 Section List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_service2_section_list_icon', [
                'label' => esc_html__(' Section Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_service2_section_list_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Automated Software', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_service2_section_list_title_link', [
                'label' => esc_html__('Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service2_section_list_Item',
            [
                'label' => esc_html__('Service2 List ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_service2_section_list_title' => esc_html__('Automated Software', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_service2_section_list_title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
               <section
            class="section-padding--top section-padding--bottom background-repeat-no background-size-cover  about-seven dark-bg"
            style="background-image: url(<?php echo esc_url($settings['techlon_service2_image']['url']) ?>);">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-5">
                        <div class="about-seven__content">
                            <div class="section-title">
                                <p class="section-title__text section-title__text--gray"><?php echo techlon_wp_kses($settings['techlon_service2_text']) ?></p>
                                <!-- /.section-title__text -->
                                <h2 class="section-title__title  section-title__title--light"><?php echo techlon_wp_kses($settings['techlon_service2_title']) ?></h2>
                                <!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-seven__text"><?php echo techlon_wp_kses($settings['techlon_service2_para']) ?></div><!-- /.about-seven__text -->
                            <div class="about-seven__btns">
                                <a href="<?php echo esc_url($settings['techlon_service2_button_link']['url']) ?>" class="thm-btn about-seven__btn tech-contact-btn"><span><?php echo techlon_wp_kses($settings['techlon_service2_button']) ?></span></a>
                                <!-- /.thm-btn about-seven__btn -->
                            </div><!-- /.about-seven__btns -->
                        </div><!-- /.about-seven__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <ul class="about-seven__list">
<?php foreach ($settings['techlon_service2_section_list_Item'] as $list) {?>
                            <li class="about-seven__list__item text-center">
                                <i class="about-seven__list__icon <?php echo esc_attr($list['techlon_service2_section_list_icon']['value']) ?>"></i>
                                <h3 class="about-seven__list__title">
                                    <a href="<?php echo esc_url($list['techlon_service2_section_list_title_link']['url']) ?>"><?php echo techlon_wp_kses($list['techlon_service2_section_list_title']) ?></a>
                                </h3>
                            </li>
<?php }?>
                        </ul><!-- /.about-seven__list -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Service2_Section);