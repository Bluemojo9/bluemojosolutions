<?php

namespace Elementor;

class Techlon_Project3_Section extends Widget_Base

{

    public function get_name()

    {

        return 'techlon_project3_section ';

    }

    public function get_title()

    {

        return esc_html__('Techlon Project3 Section', 'techlon-core');

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

            'techlon_project3_section',

            [

                'label' => esc_html__('Project3 Section', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $this->add_control(

            'techlon_project3_section_text', [

                'label' => esc_html__('Section Text', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Latest Project', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_project3_section_title', [

                'label' => esc_html__('Section Title', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Check We Have Solution Done IT Project', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_project3_section_button', [

                'label' => esc_html__('Section Button ', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Discover more', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_project3_section_button_link', [

                'label' => esc_html__('Button Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->end_controls_section();

        $this->start_controls_section(

            'techlon_project3_card_section',

            [

                'label' => esc_html__('Card Section', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(

            'techlon_project3_image', [

                'label' => esc_html__('Section Image', 'techlon-core'),

                'type' => Controls_Manager::MEDIA,

                'default' => [

                    'url' => \Elementor\Utils::get_placeholder_image_src(),

                ],

            ]

        );

        $repeater->add_control(

            'techlon_project3_text', [

                'label' => esc_html__('Section Text', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('IT Technology Solution', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_project3_title', [

                'label' => esc_html__('Section Title', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Data Recovery', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_project3_title_link', [

                'label' => esc_html__('Section Title Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_project3_icon', [

                'label' => esc_html__('Section Icon', 'techlon-core'),

                'type' => \Elementor\Controls_Manager::ICONS,

            ]

        );

        $repeater->add_control(

            'techlon_project3_icon_link', [

                'label' => esc_html__('Section Icon Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_project3_items',

            [

                'label' => esc_html__('Card Section', 'techlon-core'),

                'type' => \Elementor\Controls_Manager::REPEATER,

                'fields' => $repeater->get_controls(),

                'default' => [

                    [

                        'techlon_project3_title' => esc_html__('Data Recovery', 'techlon-core'),

                    ],

                ],

                'title_field' => '{{{ techlon_project3_title }}}',

            ]

        );

        $this->end_controls_section();

    }

    protected function render()

    {

        $settings = $this->get_settings_for_display();
            $args = array(

            'post_type' => 'techlon_project',

            'posts_per_page'    => $posts_per_page,

            'order' => 'ASC'

        );

        $query = new \WP_Query($args);


        ?>

        <div class=" project-two">

                <div class="owl-carousel thm-owl__carousel" data-owl-options='{"loop": true,

                "autoplay": true,

                "autoplayTimeout": 5000,

                "autoplayHoverPause": true,

                "nav": false,

                "navText": ["<span class=\"fa fa-chevron-left\"></span>","<span class=\"fa fa-chevron-right\"></span>"],

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

                    }

                }}'>
<?php if ($query->have_posts()) {

                    while ($query->have_posts()) {

                        $query->the_post();

                        $category = get_the_terms( get_the_ID(),'techlon-project-category' );

                        $categoryName = $category[0]->name;

                        ?>

              <div class="item">
                        <div class="project-card-one">
                            <div class="project-card-one__image">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            </div><!-- /.project-card-one__image -->
                            <div class="project-card-one__content">
                                <div class="project-card-one__content__inner">
                                   
                                    <p class="project-card-one__text"><?php echo esc_html($categoryName); ?></p>
                                  
                                  
                                    <h3 class="project-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?>
                                        </a></h3><!-- /.project-card-one__title -->
                                   
                                    <a href="<?php echo get_the_permalink() ?>" class="project-card-one__more">
                                        <i class="fa fa-angle-right"></i>
                                    </a><!-- /.project-card-one__more -->
                                </div><!-- /.project-card-one__content__inner -->
                            </div><!-- /.project-card-one__content -->
                        </div><!-- /.project-card-one -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->

    <?php }

                    }

                ?>

                </div><!-- /.owl-carousel -->



            </div>

        <?php

self::techlon_project3_section($settings);

    }

    public function techlon_project3_section($settings)

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

Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Project3_Section);