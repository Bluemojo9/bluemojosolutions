<?php
namespace Elementor;
class Techlon_About2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_about2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon About2 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-t-letter-bold';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_about2_section_image',
            [
                'label' => esc_html__('Section  Image', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about2_section_image1', [
                'label' => esc_html__(' Section Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about2_section_image2', [
                'label' => esc_html__(' Section Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about2_section_text', [
                'label' => esc_html__(' Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' Welcome to tech', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about2_section_title', [
                'label' => esc_html__('Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Incredible IT Service Infrastructure', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about2_section_para', [
                'label' => esc_html__('Paragraph', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Choose our services to have custom software solutions for
                                          your business with the most reasonable price.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about2_section_tagline', [
                'label' => esc_html__('Tagline', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' Get Your IT Technology Solutions  in Few Easy Clicks', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about2_section_tagline_icon', [
                'label' => esc_html__(' List Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_about2_section_list',
            [
                'label' => esc_html__('About2 List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_about2_section_list_icon1', [
                'label' => esc_html__(' Section Icon1', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_about2_section_list_title1', [
                'label' => esc_html__(' Section Title1', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' The business applications', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_about2_section_list_icon2', [
                'label' => esc_html__(' Section Icon2', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_about2_section_list_title2', [
                'label' => esc_html__(' Section Title2', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Revolutionary catalysts chang', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_about2_section_list_icon3', [
                'label' => esc_html__(' Section Icon3', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_about2_section_list_title3', [
                'label' => esc_html__(' Section Title3', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Catalysts for chang seamlessly', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about2_section_list_Item',
            [
                'label' => esc_html__('About2 List ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_about2_section_list_title1' => esc_html__('The business applications', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_about2_section_list_title1 }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="section-padding--bottom about-eight">
            <img src="<?php echo esc_url($settings['techlon_about2_section_image1']['url']) ?>" class="about-eight__shape" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-eight__image">
                            <img src="<?php echo esc_url($settings['techlon_about2_section_image2']['url']) ?>" alt="">
                        </div><!-- /.about-eight__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-eight__content">
                            <div class="section-title text-start">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_about2_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_about2_section_title']) ?></h2>
                                <!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-eight__text"><?php echo techlon_wp_kses($settings['techlon_about2_section_para']) ?></div><!-- /.about-eight__text -->
                           <div class="about-eight__box">
                                <div class="about-eight__box__icon">
                                    <i class="<?php echo esc_attr($settings['techlon_about2_section_tagline_icon']['value']) ?>"></i>
                                </div><!-- /.about-eight__box__icon -->
                                <div class="about-eight__box__text">
                                  <?php echo techlon_wp_kses($settings['techlon_about2_section_tagline']) ?>
                                </div><!-- /.about-eight__box__text -->
                            </div><!-- /.about-eight__box -->
                            <div class="row">
<?php foreach ($settings['techlon_about2_section_list_Item'] as $list) {?>
                                <div class="col-xl-6">
                                    <ul class="about-eight__list list-unstyled tech-about-eight-list">
                                        <li>
                                            <i class="fa <?php echo esc_attr($list['techlon_about2_section_list_icon1']['value']) ?>"></i>
                                         <?php echo techlon_wp_kses($list['techlon_about2_section_list_title1']) ?>
                                        </li>
                                        <li>
                                            <i class="fa <?php echo esc_attr($list['techlon_about2_section_list_icon2']['value']) ?>"></i>
                                             <?php echo techlon_wp_kses($list['techlon_about2_section_list_title2']) ?>
                                        </li>
                                        <li>
                                            <i class="fa <?php echo esc_attr($list['techlon_about2_section_list_icon3']['value']) ?>"></i>
                                             <?php echo techlon_wp_kses($list['techlon_about2_section_list_title3']) ?>
                                        </li>
                                    </ul><!-- /.about-eight__list list-unstyled -->
                                </div><!-- /.col-xl-6 -->
<?php }?>
                            </div><!-- /.row -->
                        </div><!-- /.about-eight__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.section-padding--top -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_About2_Section);