<?php
namespace Elementor;
class Techlon_Project1_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_project1_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Project1 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-code';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_project1_section',
            [
                'label' => esc_html__('Project1 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_project1_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Latest Project', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_project1_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Check We Have Solution Done IT Project', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_project1_section_card',
            [
                'label' => esc_html__('Project Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_project1_image', [
                'label' => esc_html__('Card Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_project__text', [
                'label' => esc_html__('Card Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('IT Technology Solution', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project__title', [
                'label' => esc_html__('Card Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Data Recovery', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project__title_link', [
                'label' => esc_html__('Card Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project__section_icon', [
                'label' => esc_html__('Card Icon ', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_project__section_icon_link', [
                'label' => esc_html__('Card Icon Link ', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_project1_section_items',
            [
                'label' => esc_html__('Project1 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_project__title' => esc_html__('Data Recovery', 'techlon-core'),
                        'techlon_project__text' => esc_html__('IT Technology Solution', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_project__title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <div class="section-padding--bottom section-padding--top project-one">
            <div class="container-fluid">
                <div class="project-one__top">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_project1_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_project1_section_title']) ?></h2>
                                <!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                </div><!-- /.project-one__top -->
                <div class="owl-carousel  thm-owl__carousel project-one__carousel thm-owl__carousel--with-shadow"
                    data-owl-options='{"loop": true,
                        "autoplay": true,
                        "autoplayTimeout": 5000,
                        "autoplayHoverPause": true,
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
                            "768": {
                                "margin": 30,
                                "items": 2
                            },
                            "992": {
                                "margin": 30,
                                "items": 3
                            },
                            "1200": {
                                "margin": 30,
                                "items": 4
                            }
                }}'>
            <?php foreach ($settings['techlon_project1_section_items'] as $card) {?>
                    <div class="item">
                        <div class="project-card-one">
                            <div class="project-card-one__image">
                                <img src="<?php echo esc_url($card['techlon_project1_image']['url']) ?>" alt="">
                            </div><!-- /.project-card-one__image -->
                            <div class="project-card-one__content">
                                <div class="project-card-one__content__inner">
                                    <p class="project-card-one__text"><?php echo techlon_wp_kses($card['techlon_project__text']) ?></p>
                                    <h3 class="project-card-one__title"><a href="<?php echo esc_url($card['techlon_project__title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_project__title']) ?></a>
                                    </h3><!-- /.project-card-one__title -->
                                    <a href="<?php echo esc_url($card['techlon_project__section_icon_link']['url']) ?>" class="project-card-one__more">
                                       <i class="far fa fa-chevron-right"></i>
                                    </a><!-- /.project-card-one__more -->
                                </div><!-- /.project-card-one__content__inner -->
                            </div><!-- /.project-card-one__content -->
                        </div><!-- /.project-card-one -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            <?php }?>
                </div><!-- /.owl-carousel -->
            </div><!-- /.container -->
            </div>
       <?php
self::techlon_project_section($settings);
    }
    public function techlon_project_section($settings)
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
    <?php }
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Project1_Section);