<?php
namespace Elementor;
class Techlon_Slider3_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_slider3_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Slider3 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-slider-3d';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
      protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_slider3_section',
            [
                'label' => esc_html__('Slider3 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_slider3_bg_image', [
                'label' => esc_html__('Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
          $repeater->add_control(
            'techlon_slider3__text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Welcome to best IT Solutions', 'techlon-core'),
                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_slider3__title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Future Belongs to Technology', 'techlon-core'),
                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_slider3__button', [
                'label' => esc_html__('Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_slider3__button_link', [
                'label' => esc_html__('Section Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_slider3_bg_shape_image1', [
                'label' => esc_html__('Section Shape Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .slider-two__shape-1' => 'background-image: url{{URL}};',
                ],
            ]
        );
        $repeater->add_control(
            'techlon_slider3_bg_shape_image2', [
                'label' => esc_html__('Section Shape Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .slider-two__shape-2' => 'background-image: url{{URL}};',
                ],
            ]
        );
        $this->add_control(
            'techlon_slider3_section_items',
            [
                'label' => esc_html__('Slider Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_slider2__title' => esc_html__('IT Solutions to Grow Your  Business', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_slider3__title }}}',
            ]
        );
        $this->end_controls_section();
    }
     protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="slider-one slider-three">
            <div class="slider-one__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa far fa-chevron-left\"></span>","<span class=\"fa far fa-chevron-right\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
<?php foreach ($settings['techlon_slider3_section_items'] as $slider3) {?>
                <div class="item slider-one__slide-1">
                    <div class="slider-one__bg" style="background-image: url(<?php echo esc_url($slider3['techlon_slider3_bg_image']['url']) ?>);">
                    </div><!-- /.slider-one__bg -->
                    <div class="slider-three__shape-1"></div><!-- /.slider-three__shape-1 -->
                    <div class="slider-three__shape-2"></div><!-- /.slider-three__shape-2 -->
                    <div class="slider-one__floated lettering-text">technology</div>
                    <!-- /.slider-one__floated -->
                    <div class="container">
                        <div class="slider-one__content text-center">
                            <p class="slider-one__text"><?php echo techlon_wp_kses($slider3['techlon_slider3__text']) ?></p><!-- /.slider-one__text -->
                            <div class="slider-one__title-wrapper">
                                <h2 class="slider-one__title"><?php echo techlon_wp_kses($slider3['techlon_slider3__title']) ?></h2>
                                <!-- /.slider-one__title -->
                            </div><!-- /.slider-one__title-wrapper -->
                            <div class="slider-one__btns">
                                <a href="<?php echo esc_url($slider3['techlon_slider3__button_link']['url']) ?>" class="thm-btn slider-one__btn"><span><?php echo techlon_wp_kses($slider3['techlon_slider3__button']) ?></span></a>
                                <!-- /.thm-btn slider-one__btn -->
                            </div><!-- /.slider-one__btns -->
                        </div><!-- /.slider-one__content -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
<?php } ?>
   </div><!-- /.slider-one__carousel -->
 </div><!-- /.slider-one -->
<?php
self::techlon_slider3_section($settings);
    }
    public function techlon_slider3_section($settings)
    {
        ?>
        <script>
  jQuery( function( $ ) {
                let thmOwlCarousels = $(".thm-owl__carousel");
                    if (thmOwlCarousels.length) {
                        thmOwlCarousels.each(function () {
                            let elm = $(this);
                            let options = elm.data("owl-options");
                            let thmOwlCarousel = elm.owlCarousel(
                                "object" === typeof options ? options : JSON.parse(options)
                            );
                        });
    }
            })
        </script>
        <?php
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Slider3_Section);