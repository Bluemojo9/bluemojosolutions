<?php
namespace Elementor;
class Techlon_About4_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_about4_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon About4 Section', 'techlon-core');
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
            'techlon_about4_section',
            [
                'label' => esc_html__('About4 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about4_section_image1', [
                'label' => esc_html__('Shape1 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about4_section_image2', [
                'label' => esc_html__('Shape2 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about4_section_image3', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about4_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About Company', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about4_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('The World’s Networking Company', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about4_section_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Since from 2000 Building Your Better IT Solution The
                                definition of business is an occupation or trade & the purchase and sale of products Our
                                Mission & Vision Voice and Data System are crucial to the success.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about4_section_author_image', [
                'label' => esc_html__('Author Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about4_secction_author_title', [
                'label' => esc_html__('Author Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Michele Morrone', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about4_secction_author_designation', [
                'label' => esc_html__('Author Designation', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Founder CEO', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about4_secction_button', [
                'label' => esc_html__('Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about4_secction_button_link', [
                'label' => esc_html__('Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core')]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="about-four section-padding--top">
            <img src="<?php echo esc_url($settings['techlon_about4_section_image1']['url']) ?>" alt="" class="about-four__shape-1">
            <div class="container">
                <img src="<?php echo esc_url($settings['techlon_about4_section_image2']['url']) ?>" alt="" class="about-four__shape-2">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="about-four__image">
                            <img src="<?php echo esc_url($settings['techlon_about4_section_image3']['url']) ?>" class="wow fadeInUp"
                                data-wow-duration="1500ms" alt="">
                        </div><!-- /.about-four__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-four__content">
                            <div class="section-title ">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_about4_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_about4_section_title']) ?></h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-four__text"><?php echo techlon_wp_kses($settings['techlon_about4_section_para']) ?></div>
                            <!-- /.about-four__text -->
                            <div class="about-four__meta">
                                <div class="about-four__author">
                                    <img src="<?php echo esc_url($settings['techlon_about4_section_author_image']['url']) ?>" alt="">
                                    <div class="about-four__author__content">
                                        <h3 class="about-four__author__title"><?php echo techlon_wp_kses($settings['techlon_about4_secction_author_title']) ?></h3>
                                        <!-- /.about-four__author__title -->
                                        <div class="about-four__author__designation"><?php echo techlon_wp_kses($settings['techlon_about4_secction_author_designation']) ?></div>
                                        <!-- /.about-four__author__designation -->
                                    </div><!-- /.about-four__author__content -->
                                </div><!-- /.about-four__author -->
                                <a href="<?php echo esc_url($settings['techlon_about4_secction_button_link']['url']) ?>" class="thm-btn about-four__btn"><span><?php echo techlon_wp_kses($settings['techlon_about4_secction_button']) ?></span></a>
                                <!-- /.thm-btn about-four__btn -->
                            </div><!-- /.about-four__meta -->
                        </div><!-- /.about-four__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_About4_Section);