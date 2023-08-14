<?php
namespace Elementor;
class Techlon_Service1_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_service1_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Service1 Section', 'techlon-core');
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
            'techlon_service1_section',
            [
                'label' => esc_html__('Service1 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_service1_image', [
                'label' => esc_html__('Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_service1_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Popular Services', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service1_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('We Provide Our Client Best IT Solution Services', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service1_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('System is a term used to refer to an organized collection
                                        symbols and processes that may be used to operate on such symbols.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_service1_section_card',
            [
                'label' => esc_html__('Service1 Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_service1_section_card__icon', [
                'label' => esc_html__('Card Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_service1_section_card__title', [
                'label' => esc_html__('Card Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Product Development', 'techlon-core'),
                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_service1_section_card__title_link', [
                'label' => esc_html__('Card Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_service1_section_card__text', [
                'label' => esc_html__('Card Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Providing the solutions for non-IT businesses.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service1_section_items',
            [
                'label' => esc_html__('Service Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_service1_section_card__text' => esc_html__('Providing the solutions for non-IT businesses.', 'techlon-core'),
                        'techlon_service1_section_card__title' => esc_html__('Product Development', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_service1_section_card__title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div
            class=" section-padding--top service-four black-bg section-padding--bottom background-repeat-no background-position-top-right"
            style="background-image: url(<?php echo esc_url($settings['techlon_service1_image']['url']) ?>);">
            <div class="container">
                <div class="service-four__top">
                    <div class="section-title text-start">
                        <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_service1_text']) ?></p><!-- /.section-title__text -->
                        <h2 class="section-title__title section-title__title--light"><?php echo techlon_wp_kses($settings['techlon_service1_title']) ?></h2>
                        <!-- /.section-title__title -->
                    </div><!-- /.section-title -->
                    <div class="service-four__top__text"><?php echo techlon_wp_kses($settings['techlon_service1_para']) ?></div>
                    <!-- /.service-four__top__text -->
                </div><!-- /.service-four__top -->
                <div class="owl-carousel thm-owl__carousel thm-owl__carousel1 thm-owl__carousel--with-shadow service-four__carousel"
                    data-owl-options='{"loop": false,
                "autoplay": false,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "margin": 0,
                "items": 1,
                "smartSpeed": 700,
                "responsive": {
                    "0": {
                        "margin": 0,
                        "items": 1
                    },
                    "576": {
                        "margin": 30,
                        "items": 2
                    },
                    "768": {
                        "margin": 30,
                        "items": 3
                    },
                    "992": {
                        "margin": 30,
                        "items": 4
                    },
                    "1200": {
                        "margin": 30,
                        "items": 5
                    }
                }}'>
                <?php foreach ($settings['techlon_service1_section_items'] as $card) {?>
 <div class="item">
                        <div class="service-card-three">
                            <div class="service-card-three__icon">
                                <i class=" <?php echo esc_attr($card['techlon_service1_section_card__icon']['value']) ?> "></i>
                            </div><!-- /.service-card-three__icon -->
                            <div class="service-card-three__content">
                                <h3 class="service-card-three__title"><a href="<?php echo esc_url($card['techlon_service1_section_card__title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_service1_section_card__title']) ?></a></h3><!-- /.service-card-three__title -->
                                <div class="service-card-three__text"><?php echo techlon_wp_kses($card['techlon_service1_section_card__text']) ?>
                                </div><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.item -->
<?php }?>
                </div><!-- /.owl-carousel -->
            </div><!-- /.container -->
            </div>
        <?php
self::techlon_service1_section($settings);
    }
    public function techlon_service1_section($settings)
    {
        ?>
        <script>
  jQuery( function( $ ) {
                let thmOwlCarousels = $(".thm-owl__carousel1");
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
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Service1_Section);