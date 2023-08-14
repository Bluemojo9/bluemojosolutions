<?php
namespace Elementor;
class Techlon_Brand_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_brand_section';
    }
    public function get_title()
    {
        return esc_html__('Techlon Brand Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-price-table';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_brand_section',
            [
                'label' => esc_html__('Brand Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_brand_image', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_brand_section_items',
            [
                'label' => esc_html__('Brand Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ "Envanto" }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="client-carousel  tech-carousel">
            <div class="container">
                <div class="owl-carousel thm-owl__carousel thm-owl__carousel1" data-owl-options='{"loop": true,
                "autoplay": true,
                "autoplayTimeout": 5000,
                "autoplayHoverPause": true,
                "nav": true,
                "navText": ["<span class=\" fa fa-chevron-left\"></span>","<span class=\" fa fa-chevron-right\"></span>"],
                "dots": false,
                "margin": 30,
                "items": 2,
                "smartSpeed": 700,
                "responsive": {
                    "0": {
                        "margin": 30,
                        "items": 2
                    },
                    "375": {
                        "margin": 30,
                        "items": 2
                    },
                    "575": {
                        "margin": 30,
                        "items": 3
                    },
                    "767": {
                        "margin": 50,
                        "items": 4
                    },
                    "991": {
                        "margin": 40,
                        "items": 5
                    },
                    "1199": {
                        "margin": 80,
                        "items": 5
                    }
                }}'>
                <?php foreach ($settings['techlon_brand_section_items'] as $brand) {?>
                    <div class="item">
                        <img src="<?php echo esc_url($brand['techlon_brand_image']['url']) ?>" alt="">
                    </div><!-- /.item -->
<?php }?>
                </div><!-- /.thm-owl__carousel -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <?php
self::techlon_brand_section($settings);
    }
    public function techlon_brand_section($settings)
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
    <?php }
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Brand_Section);