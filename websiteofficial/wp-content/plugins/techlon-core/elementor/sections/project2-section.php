<?php
namespace Elementor;
class Techlon_Project2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_project2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Project2 Section', 'techlon-core');
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
            'techlon_project2_section',
            [
                'label' => esc_html__('Project2 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_project2_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Latest Project', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_project2_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Populer Case Studies That Complete Recently', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_project2_section_card',
            [
                'label' => esc_html__('Project2 Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_project2_section_card1_image', [
                'label' => esc_html__('Section Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
         $repeater->add_control(
            'techlon_project2_section_card2_image', [
                'label' => esc_html__('Section Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
          $repeater->add_control(
            'techlon_project2_section_card3_image', [
                'label' => esc_html__('Section Image3', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
           $repeater->add_control(
            'techlon_project2_section_card4_image', [
                'label' => esc_html__('Section Image4', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
      
        $repeater->add_control(
            'techlon_project2_section_card_category', [
                'label' => esc_html__('Section Cateory', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('IT Consulting', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project2_section_card_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Financial Investment', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project2_section_card_title_link', [
                'label' => esc_html__(' Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project2_section_card_icon_link', [
                'label' => esc_html__(' Section icon Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_project2_section_card_items',
            [
                'label' => esc_html__('Card Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_project2_section_card_title' => esc_html__('Financial Investment', 'techlon-core'),
                        'techlon_project2_section_card_category' => esc_html__('IT Consulting', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_project2_section_card_category }}}',
            ]
        );
       
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
 <section class="section-padding--bottom section-padding--top project-three">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_project2_section_text']) ?></p><!-- /.section-title__text -->
                    <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_project2_section_title']) ?></h2>
                    <!-- /.section-title__title -->
                </div><!-- /.section-title -->
                <div class="owl-carousel thm-owl__carousel--range owl-theme" data-owl-options='{"loop": false,
                "nav": false,
                "autoWidth": true,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "margin": 10,
                "items": 1,
                "smartSpeed": 700,
                "responsive": {
                    "0": {
                        "margin": 10,
                        "items": 1,
                        "autoWidth": false
                    },
                    "768": {
                        "margin": 10,
                        "items": 2,
                        "autoWidth": false
                    },
                    "992": {
                        "margin": 10,
                        "items": 3
                    },
                    "1200": {
                        "margin": 10,
                        "items": 4
                    }
                }}'>
<?php foreach ($settings['techlon_project2_section_card_items'] as $card) {?>
                    <div class="item">
                        <div class="project-card-two ">
                            <div class="project-card-two__bg"
                                style="background-image: url(<?php echo esc_url($card['techlon_project2_section_card1_image']['url']) ?>);">
                            </div><!-- /.project-card-two__bg -->
                            <div class="project-card-two__content">
                                <a href="<?php echo esc_url($card['techlon_project2_section_card_icon_link']['url']) ?>" class="project-card-two__link">
                                    <i class="fa far fa-chevron-right"></i>
                                </a><!-- /.project-card-two__link -->
                                <div class="project-card-two__category"><?php echo techlon_wp_kses($card['techlon_project2_section_card_category']) ?></div>
                                <!-- /.project-card-two__category -->
                                <h3 class="project-card-two__title"><a href="<?php echo esc_url($card['techlon_project2_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_project2_section_card_title']) ?></a></h3><!-- /.project-card-two__title -->
                            </div><!-- /.project-card-two__content -->
                        </div><!-- /.project-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-card-two project-card-two--large">
                            <div class="project-card-two__bg"
                                style="background-image: url(<?php echo esc_url($card['techlon_project2_section_card2_image']['url']) ?>);">
                            </div><!-- /.project-card-two__bg -->
                            <div class="project-card-two__content">
                                <a href="<?php echo esc_url($card['techlon_project2_section_card_icon_link']['url']) ?>" class="project-card-two__link">
                                  <i class="fa far fa-chevron-right"></i>
                                </a><!-- /.project-card-two__link -->
                                <div class="project-card-two__category"><?php echo techlon_wp_kses($card['techlon_project2_section_card_category']) ?></div>
                                <!-- /.project-card-two__category -->
                                <h3 class="project-card-two__title"><a href="<?php echo esc_url($card['techlon_project2_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_project2_section_card_title']) ?></a></h3><!-- /.project-card-two__title -->
                            </div><!-- /.project-card-two__content -->
                        </div><!-- /.project-card-two -->
                    </div><!-- /.item -->
                     <div class="item">
                        <div class="project-card-two ">
                            <div class="project-card-two__bg"
                                style="background-image: url(<?php echo esc_url($card['techlon_project2_section_card3_image']['url']) ?>);">
                            </div><!-- /.project-card-two__bg -->
                            <div class="project-card-two__content">
                                <a href="<?php echo esc_url($card['techlon_project2_section_card_icon_link']['url']) ?>" class="project-card-two__link">
                                  <i class="fa far fa-chevron-right"></i>
                                </a><!-- /.project-card-two__link -->
                                <div class="project-card-two__category"><?php echo techlon_wp_kses($card['techlon_project2_section_card_category']) ?></div>
                                <!-- /.project-card-two__category -->
                                <h3 class="project-card-two__title"><a href="<?php echo esc_url($card['techlon_project2_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_project2_section_card_title']) ?></a></h3><!-- /.project-card-two__title -->
                            </div><!-- /.project-card-two__content -->
                        </div><!-- /.project-card-two -->
                    </div><!-- /.item -->
                     <div class="item">
                        <div class="project-card-two ">
                            <div class="project-card-two__bg"
                                style="background-image: url(<?php echo esc_url($card['techlon_project2_section_card4_image']['url']) ?>);">
                            </div><!-- /.project-card-two__bg -->
                            <div class="project-card-two__content">
                                <a href="<?php echo esc_url($card['techlon_project2_section_card_icon_link']['url']) ?>" class="project-card-two__link">
                                    <i class="fa far fa-chevron-right"></i>
                                </a><!-- /.project-card-two__link -->
                                <div class="project-card-two__category"><?php echo techlon_wp_kses($card['techlon_project2_section_card_category']) ?></div>
                                <!-- /.project-card-two__category -->
                                <h3 class="project-card-two__title"><a href="<?php echo esc_url($card['techlon_project2_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_project2_section_card_title']) ?></a></h3><!-- /.project-card-two__title -->
                            </div><!-- /.project-card-two__content -->
                        </div><!-- /.project-card-two -->
                    </div><!-- /.item -->
<?php }?>
                </div><!-- /.owl-carousel -->
                <div class="thm-owl__carousel--range__input"><input type="text" value="" name="range" />
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php
self::techlon_project2_section($settings);
    }
    public function techlon_project2_section($settings)
    {
        ?>
        <script>
            jQuery( function( $ ) {
               let thmOwlRangeCarousels = $(".thm-owl__carousel--range");
        if (thmOwlRangeCarousels.length) {
            thmOwlRangeCarousels.each(function () {
                let elm = $(this);
                let options = elm.data("owl-options");
                let range = elm.parent().find('.thm-owl__carousel--range__input');
                elm.on('initialized.owl.carousel', function (event) {
                    let itemCount = event.item.count;
                    let size = event.page.size;
                    let dragLength = 100 / (itemCount / size);
                    range.find('input').ionRangeSlider({
                        type: "single",
                        min: size,
                        max: itemCount - (size - 1),
                        keyboard: true,
                        step: 1,
                        onChange: function (data) {
                            let owlTo = data.from - 1;
                            elm.trigger('to.owl.carousel', [owlTo, 500, true]);
                        }
                    });
                    range.find('.irs-bar').css('width', dragLength + "%")
                    range.find('.irs-handle.single').css('left', dragLength + "%")
                    range.find('.irs-single').css('left', dragLength + "%")
                    // range.find('.irs-handle.single').css('width', dragLength + "%")
                });
                elm.owlCarousel(
                    "object" === typeof options ? options : JSON.parse(options)
                );
                elm.on('changed.owl.carousel', function (event) {
                    var itemCount = event.item.count;
                    var size = event.page.size;
                    var curItem = event.item.index + 1;
                    var dragLength = 100 / (itemCount / curItem);
                    range.find("input").data("ionRangeSlider").update({
                        from: curItem
                    });
                    range.find('.irs-bar').css('width', dragLength + "%");
                    range.find('.irs-handle.single').css('left', dragLength + "%");
                    range.find('.irs-single').css('left', dragLength + "%");
                    // range.find('.irs-handle.single').css('width', dragLength + "%");
                });
                elm.on('resized.owl.carousel', function (event) {
                    var itemCount = event.item.count;
                    var size = event.page.size;
                    var curItem = event.item.index + 1;
                    var dragLength = 100 / (itemCount / curItem);
                    range.find("input").data("ionRangeSlider").update({
                        max: itemCount - (size - 1),
                        from: curItem
                    });
                    range.find('.irs-bar').css('width', dragLength + "%");
                    range.find('.irs-handle.single').css('left', dragLength + "%");
                    range.find('.irs-single').css('left', dragLength + "%");
                    // range.find('.irs-handle.single').css('width', dragLength + "%");
                });
            });
        }
            })
        </script>
    <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Project2_Section);