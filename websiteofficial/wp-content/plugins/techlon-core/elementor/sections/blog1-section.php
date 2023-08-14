<?php
namespace Elementor;
class Techlon_Blog1_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_blog1_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Blog1 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-posts-grid';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_blog1_section',
            [
                'label' => esc_html__('Blog1 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_blog_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_blog_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Direct from the Blog Posts', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Checkout Our Latest  News & Articles', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_blog1_section_card',
            [
                'label' => esc_html__('Blog1 Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_blog1_section_card__image', [
                'label' => esc_html__('Blog Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__image_link', [
                'label' => esc_html__(' Blog Image Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__date', [
                'label' => esc_html__(' Blog Date', 'techlon-core'),
                'default' => esc_html__(' July, 25, 2022', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__date_icon', [
                'label' => esc_html__('Blog Date Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__category', [
                'label' => esc_html__(' Blog Category', 'techlon-core'),
                'default' => esc_html__('Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__category_link', [
                'label' => esc_html__(' Blog category Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__title', [
                'label' => esc_html__(' Blog Title', 'techlon-core'),
                'default' => esc_html__('Web design done Delightful Visualization Examples', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__title_link', [
                'label' => esc_html__(' Blog Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__button', [
                'label' => esc_html__(' Blog Button', 'techlon-core'),
                'default' => esc_html__('Read More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__button_link', [
                'label' => esc_html__(' Blog Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog1_section_card__button_icon', [
                'label' => esc_html__('Blog Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_blog1_section_card_items',
            [
                'label' => esc_html__('Blog1 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_blog1_section_card__title' => esc_html__('Web design done Delightful Visualization Examples', 'techlon-core'),
                        'techlon_blog1_section_card__category' => esc_html__('Designer', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_blog1_section_card__category }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
    <section
        class="section-padding--top section-padding--bottom background-repeat-no background-position-bottom-right"
            style="background-image: url(<?php echo esc_url($settings['techlon_blog_section_bg_image']['url']) ?>);">
            <div class="container">
                <div class="section-title text-center">
                    <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_blog_section_text']) ?></p><!-- /.section-title__text -->
                    <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_blog_section_title']) ?></h2><!-- /.section-title__title -->
                </div><!-- /.section-title -->
                <div class="row gutter-y-30">
<?php foreach ($settings['techlon_blog1_section_card_items'] as $blog1) {?>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-duration="1500ms"
                        data-wow-delay="000ms">
                        <div class="blog-card-one">
                            <div class="blog-card-one__image">
                                <img src="<?php echo esc_url($blog1['techlon_blog1_section_card__image']['url']) ?>" alt="">
                                <a href="<?php echo esc_url($blog1['techlon_blog1_section_card__image_link']['url']) ?>"></a>
                            </div><!-- /.blog-card-one__image -->
                            <div class="blog-card-one__content">
                                <div class="blog-card-one__meta">
                                    <div class="blog-card-one__date">
                                        <i class="fa <?php echo esc_attr($blog1['techlon_blog1_section_card__date_icon']['value']) ?>" aria-hidden="true"></i>
                                     <?php echo techlon_wp_kses($blog1['techlon_blog1_section_card__date']) ?>
                                    </div><!-- /.blog-card-one__date -->
                                   <span class="blog-card-one__category">
                                    <a href="<?php echo esc_url($blog1['techlon_blog1_section_card__category_link']['url']) ?>" class=" tech-blog-btn"> <?php echo techlon_wp_kses($blog1['techlon_blog1_section_card__category']) ?></a>
                                </span>
                                    <!-- /.blog-card-one__category -->
                                </div><!-- /.blog-card-one__meta -->
                                <h3 class="blog-card-one__title"><a href="<?php echo esc_url($blog1['techlon_blog1_section_card__title_link']['url']) ?>"><?php echo techlon_wp_kses($blog1['techlon_blog1_section_card__title']) ?></a></h3>
                                <a href="<?php echo esc_url($blog1['techlon_blog1_section_card__button_link']['url']) ?>" class="blog-card-one__more ">
                                  <?php echo techlon_wp_kses($blog1['techlon_blog1_section_card__button']) ?>
                                    <i class="fa <?php echo esc_attr($blog1['techlon_blog1_section_card__button_icon']['value']) ?> "></i>
                                </a><!-- /.blog-card-one__more -->
                            </div><!-- /.blog-card-one__content -->
                        </div><!-- /.blog-card-one -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
<?php }?>
                </div><!-- /.row gutter-y-30 -->
            </div><!-- /.container -->
    </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Blog1_Section);