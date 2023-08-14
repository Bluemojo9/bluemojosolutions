<?php
namespace Elementor;
class Techlon_About3_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_about3_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon About3 Section', 'techlon-core');
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
            'techlon_about3_section',
            [
                'label' => esc_html__('About3  Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about3_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Welcome to tech', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Best Talent, Competitive Cast, Incredible IT Service Infrastructure', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('System is a term used to refer to an organized collection
                                         symbols and processes that may be used to operate on such symbols. Perspiciatis unde
                                         omnis natus error voluptatems accusa.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_about3_section_list',
            [
                'label' => esc_html__(' List Item', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_about3_section_list_icon', [
                'label' => esc_html__('Section Icon', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_about3_section_list_number', [
                'label' => esc_html__('Section Number', 'techlon-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => esc_html__(' 769', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_about3_section_list_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Satisfied Clients', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_list_items',
            [
                'label' => esc_html__('List Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_about3_section_list_text' => esc_html__(' Satisfied Clients', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_about3_section_list_text }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_about3_section_btn',
            [
                'label' => esc_html__(' Section Button', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about3_section_button', [
                'label' => esc_html__(' Button Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('learn more', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_button_link', [
                'label' => esc_html__('Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_button2', [
                'label' => esc_html__(' Button2 Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('How it Work', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_button_link2', [
                'label' => esc_html__('Button2 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_button_icon', [
                'label' => esc_html__('Button2 Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_about3_section_image',
            [
                'label' => esc_html__('About3 Image', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about3_section_image1', [
                'label' => esc_html__(' Section Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about3_section_image2', [
                'label' => esc_html__(' Section Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_about3_section_floting_image1', [
                'label' => esc_html__(' Floting Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-six__images::before' => 'background-image:url({{URL}})',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_about3_section_caption_box',
            [
                'label' => esc_html__('About3 Caption Box', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_about3_section_caption_box_text', [
                'label' => esc_html__('Caption Box Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Years Experience', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_about3_section_caption_box_number', [
                'label' => esc_html__('Caption Box  Number', 'techlon-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => esc_html__(' 26', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
 <section class="section-padding--bottom about-six">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="about-six__content">
                            <div class="section-title">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_about3_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_about3_section_title']) ?>
                                  </h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-six__text"><?php echo techlon_wp_kses($settings['techlon_about3_section_para']) ?></div><!-- /.about-six__text -->
                            <ul class="about-six__list">
                                <?php foreach ($settings['techlon_about3_section_list_items'] as $li) {?>
                                <li class="about-six__list__item">
                                    <i class="far about-six__list__icon <?php echo esc_attr($li['techlon_about3_section_list_icon']['value']) ?>"></i>
                                    <h3 class="about-six__list__title count-box"><span class="count-text"
                                            data-stop="<?php echo esc_attr($li['techlon_about3_section_list_number']) ?>" data-speed="1500"></span><!-- /.count-text -->
                                    </h3>
                                    <div class="about-six__list__text"><?php echo techlon_wp_kses($li['techlon_about3_section_list_text']) ?></div>
                                    <!-- /.about-six__list__text -->
                                </li><!-- /.about-six__list__item -->
                                <?php }?>
                            </ul><!-- /.about-six__list -->
                            <div class="about-six__btns">
                                <a href="<?php echo esc_url($settings['techlon_about3_section_button_link']['url']) ?>" class="thm-btn"><span><?php echo techlon_wp_kses($settings['techlon_about3_section_button']) ?></span></a><!-- /.thm-btn -->
                                <a href="<?php echo esc_url($settings['techlon_about3_section_button_link2']['url']) ?>" class="about-six__link">
                                 <?php echo techlon_wp_kses($settings['techlon_about3_section_button2']) ?>
                                    <i class="fa fa-lg <?php echo esc_attr($settings['techlon_about3_section_button_icon']['value']) ?>"></i>
                                </a><!-- /.about-six__link -->
                            </div><!-- /.about-six__btns -->
                        </div><!-- /.about-six__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-six__images wow fadeInUp animated" data-wow-duration="1500ms">
                            <img src="<?php echo esc_url($settings['techlon_about3_section_image1']['url']) ?>" alt="">
                            <img src="<?php echo esc_url($settings['techlon_about3_section_image2']['url']) ?>" alt="">
                            <div class="about-six__images__caption count-box">
                                <p><b class="count-text" data-stop="  <?php echo esc_attr($settings['techlon_about3_section_caption_box_number']) ?>" data-speed="3000"></b>
                                     <?php echo techlon_wp_kses($settings['techlon_about3_section_caption_box_text']) ?></p>
                            </div><!-- /.about-six__images__caption -->
                            <div class="about-six__images__shape"></div><!-- /.about-six__images__shape -->
                        </div><!-- /.about-six__images -->
                 
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
</section>
        <?php
self::techlon_about3_section($settings);
    }
    public function techlon_about3_section($settings)
    {?>
        <script>
            jQuery( function( $ ) {
                if ($(".count-box").length) {
                    $(".count-box").appear(
                        function () {
                            var $t = $(this),
                                n = $t.find(".count-text").attr("data-stop"),
                                r = parseInt($t.find(".count-text").attr("data-speed"), 10);
                            if (!$t.hasClass("counted")) {
                                $t.addClass("counted");
                                $({
                                    countNum: $t.find(".count-text").text()
                                }).animate({
                                    countNum: n
                                }, {
                                    duration: r,
                                    easing: "linear",
                                    step: function () {
                                        $t.find(".count-text").text(Math.floor(this.countNum));
                                    },
                                    complete: function () {
                                        $t.find(".count-text").text(this.countNum);
                                    }
                                });
                            }
                        }, {
                            accY: 0
                        }
                    );
                }
            })
        </script>
    <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_About3_Section);