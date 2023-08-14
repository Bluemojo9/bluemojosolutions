<?php
namespace Elementor;
class Techlon_About6_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_about6_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon About6 Section', 'techlon-core');
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
                'label' => esc_html__('About6 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about2_section_Floting_image', [
                'label' => esc_html__('Floting Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about6_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('HOW CAN HELP YOU', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Business Solutions to  Growth Business', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('System is a term used to refer to an organized collection
                                         symbols and processes that may be used to operate on such symbols. Perspiciatis unde
                                         omnis natus error voluptatems accusa.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_li1_text', [
                'label' => esc_html__('list1 Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' Going Above and Beyond', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_li2_text', [
                'label' => esc_html__('list2 Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Committed to People First', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_button', [
                'label' => esc_html__('Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_button_link', [
                'label' => esc_html__('Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_image', [
                'label' => esc_html__(' Section Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about6_section_caption_box_text', [
                'label' => esc_html__(' Caption Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('  Years Experience', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about6_section_caption_box_data', [
                'label' => esc_html__('Count Data', 'techlon-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => esc_html__('26', 'techlon-core'),
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
    <div class="section-padding--top section-padding--bottom about-two">
            <div class="container">
                <img src="<?php echo esc_url($settings['techlon_about2_section_Floting_image']['url']) ?>" alt="" class="about-two__shape-1">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="section-title ">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_about6_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_about6_section_title']) ?></h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-two__text"><?php echo techlon_wp_kses($settings['techlon_about6_section_para']) ?></div><!-- /.about-two__text -->
                            <ul class="about-two__list">
                                <li>
                                    <?php echo techlon_wp_kses($settings['techlon_about6_section_li1_text']) ?>
                                </li>
                                <li>
                                         <?php echo techlon_wp_kses($settings['techlon_about6_section_li2_text']) ?>
                                </li>
                            </ul><!-- /.about-two__list -->
                            <a href="<?php echo esc_url($settings['techlon_about6_section_button_link']['url']) ?>" class="thm-btn about-two__btn"><span> <?php echo techlon_wp_kses($settings['techlon_about6_section_button']) ?></span></a>
                            <!-- /.thm-btn about-two__btn -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-two__image">
                            <img src="<?php echo esc_url($settings['techlon_about6_section_image']['url']) ?>" alt="" class="wow fadeInUp animated"
                                data-wow-duration="1500ms">
                            <div class="about-six__images__caption count-box">
                                <p><b class="count-text" data-stop="<?php echo esc_attr($settings['techlon_about6_section_caption_box_data']) ?>" data-speed="3000">00</b>
                                  <?php echo techlon_wp_kses($settings['techlon_about6_section_caption_box_text']) ?>
                            </p>
                            </div><!-- /.about-six__images__caption -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_About6_Section);