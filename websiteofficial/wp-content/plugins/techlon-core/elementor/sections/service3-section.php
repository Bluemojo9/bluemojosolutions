<?php
namespace Elementor;
class Techlon_Service3_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_service3_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Service3 Section', 'techlon-core');
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
            'techlon_service3_section',
            [
                'label' => esc_html__('Service3 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_service3_image', [
                'label' => esc_html__('Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_service3_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('What We offier', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service3_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Help you Overcome your  Technology Challenges', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service3_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Accusa ntium doloremque laudantium totam rem
                                         aperiamea queipsa quae abillo inventore veritatis.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_service3_section_list',
            [
                'label' => esc_html__('Service3 List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_service3_section_list_icon', [
                'label' => esc_html__(' List Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_service3_section_list_title', [
                'label' => esc_html__('List Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Website', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_service3_section_list_title_link', [
                'label' => esc_html__('List Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service3_section_list_item',
            [
                'label' => esc_html__('List Items ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_service3_section_list_title' => esc_html__('Website', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_service3_section_list_title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
    <div class="section-padding--top section-padding--bottom service-three black-bg"
            style="background-image: url(<?php echo esc_url($settings['techlon_service3_image']['url']) ?>);">
            <div class="container">
                <div class="service-three__block">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section-title">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_service3_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title section-title__title--light"><?php echo techlon_wp_kses($settings['techlon_service3_title']) ?></h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                        </div><!-- /.col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="service-three__block__text"><?php echo techlon_wp_kses($settings['techlon_service3_para']) ?></div><!-- /.service-three__block__text -->
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.service-three__block -->
                <ul class="service-three__list">
<?php foreach ($settings['techlon_service3_section_list_item'] as $list) {?>
                    <li class="service-three__list__item wow fadeInUp animated" data-wow-duration="1500ms"
                        data-wow-delay="000ms">
                        <i class="<?php echo esc_attr($list['techlon_service3_section_list_icon']['value']) ?> service-three__list__icon"></i>
                        <h3 class="service-three__list__title"><a href="<?php echo esc_url($list['techlon_service3_section_list_title_link']['url']) ?>"><?php echo techlon_wp_kses($list['techlon_service3_section_list_title']) ?></a></h3>
                    </li>
<?php }?>
                </ul><!-- /.service-three__list -->
            </div><!-- /.container -->
    </div>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Service3_Section);