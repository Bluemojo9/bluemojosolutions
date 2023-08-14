<?php
namespace Elementor;
class Techlon_About5_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_about5_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon About5 Section', 'techlon-core');
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
            'techlon_about5_section',
            [
                'label' => esc_html__('About5 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about5_section_image1', [
                'label' => esc_html__('Shape1 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about5_section_image2', [
                'label' => esc_html__('Shape2 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about5_section_image3', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about5_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About Company', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about5_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Experts of Sofware and Technology', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about5_section_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__("  There are many variations of passages of Lorem Ipsum available, but the majority have
                                           suffered alteration in some form injected humour, or randomised words which don't look
                                           even.", 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about5_secction_button', [
                'label' => esc_html__('Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about5_secction_button_link', [
                'label' => esc_html__('Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core')]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_about5_section_list',
            [
                'label' => esc_html__('About5 List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_about5_section_list_icon', [
                'label' => esc_html__('List Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_about5_section_list_title', [
                'label' => esc_html__('List Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('   Refresing to get such a personal touch.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about5_section_list_Item',
            [
                'label' => esc_html__('About5 List ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_about5_section_list_title' => esc_html__(' Refresing to get such a personal touch.', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_about5_section_list_title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
                <section class="section-padding--top section-padding--bottom about-one">
            <img src="<?php echo esc_url($settings['techlon_about5_section_image1']['url']) ?>" alt="" class="about-one__shape-1">
            <div class="container">
                <img src="<?php echo esc_url($settings['techlon_about5_section_image2']['url']) ?>" alt="" class="about-one__shape-2">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="about-one__image">
                            <img src="<?php echo esc_url($settings['techlon_about5_section_image3']['url']) ?>" class="wow fadeInUp animated"
                                data-wow-duration="1500ms" alt="">
                        </div><!-- /.about-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="section-title ">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_about5_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_about5_section_title']) ?></h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-one__text">
                               <?php echo techlon_wp_kses($settings['techlon_about5_section_para']) ?>
                            </div><!-- /.about-one__text -->
                            <ul class="about-one__list">
                                <?php foreach ($settings['techlon_about5_section_list_Item'] as $li) {?>
                                <li>
                                    <i class="fa <?php echo esc_attr($li['techlon_about5_section_list_icon']['value']) ?>"></i>
                                    <?php echo techlon_wp_kses($li['techlon_about5_section_list_title']) ?>
                                </li>
                               <?php }?>
                            </ul><!-- /.about-one__list -->
                            <a href="<?php echo esc_url($settings['techlon_about5_secction_button_link']['url']) ?>" class="thm-btn about-one__btn"><span><?php echo techlon_wp_kses($settings['techlon_about5_secction_button']) ?></span></a>
                            <!-- /.thm-btn about-one__btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_About5_Section);