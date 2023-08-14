<?php
namespace Elementor;
class Techlon_Service_category_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_service_category_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Service Category Section', 'techlon-core');
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
            'techlon_service_category_section',
            [
                'label' => esc_html__('Service Category Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_service_category_section_image', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_service_category_section_logo_text', [
                'label' => esc_html__(' Section Logo Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('G', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_service_category_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Gaming and Entertainment', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );

        $repeater->add_control(
            'techlon_service_category_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Lorem Ipsum is dummy text of the new design printng
                                    and type setting Ipsum has been the is industrys.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_service_category_section_item',
            [
                'label' => esc_html__('Service Category ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_service_category_section_text' => esc_html__('Lorem Ipsum is dummy text of the new design printng
                                                                                and type setting Ipsum has been the is industrys.', 'techlon-core'),
                        'techlon_service_category_section_title' => esc_html__('Gaming and Entertainment', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_service_category_section_title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="section-padding--bottom section-padding--top service-one">
            <div class="container-fluid">
                <div class="owl-carousel thm-owl__carousel service-one__carousel" data-owl-options='{
                    "loop": false,
                    "nav": true,
                    "dots": false,
                    "items": 1,
                    "navText": ["<span class=\" fa fa-sm fa-chevron-left\"></span>","<span class=\" fa fa-sm fa-chevron-right\"></span>"],
                    "margin": 0,
                    "responsive": {
                        "0": {
                            "items": 1,
                            "margin": 0
                        },
                        "768": {
                            "items": 1,
                            "margin": 30
                        },
                        "1200": {
                            "items": 2,
                            "margin": 30
                        },
                        "1700": {
                            "items": 3,
                            "margin": 30
                        }
                    }
                }'>
            <?php foreach ($settings['techlon_service_category_section_item'] as $category) {?>
                    <div class="item">
                        <div class="service-card-one gray-bg">
                            <div class="service-card-one__image">
                                <img src="<?php echo esc_url($category['techlon_service_category_section_image']['url']) ?>" alt="">
                                <div class="service-card-one__logo"><?php echo techlon_wp_kses($category['techlon_service_category_section_logo_text']) ?></div><!-- /.service-card-one__logo -->
                            </div><!-- /.service-card-one__image -->
                            <div class="service-card-one__content">
                                <h3 class="service-card-one__title"><?php echo techlon_wp_kses($category['techlon_service_category_section_title']) ?></h3><!-- /.service-card-one__title -->
                                <p class="service-card-one__text"><?php echo techlon_wp_kses($category['techlon_service_category_section_text']) ?></p>
                                <!-- /.service-card-one__text -->
                            </div><!-- /.service-card-one__content -->
                        </div><!-- /.service-card-one -->
                    </div><!-- /.item -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <?php
self::techlon_service_category_section($settings);
    }
    public function techlon_service_category_section($settings)
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
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Service_category_Section);