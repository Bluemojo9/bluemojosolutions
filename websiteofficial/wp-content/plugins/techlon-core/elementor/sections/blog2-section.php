<?php
namespace Elementor;
class Techlon_Blog2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_blog2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Blog2 Section', 'techlon-core');
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
            'techlon_blog2_section',
            [
                'label' => esc_html__('Blog2 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_blog2_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Direct from the Blog Posts', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Checkout Our Latest News & Articles', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Aperiamea queipsa quae abillo inve ntore veritatis et
                                         quasi architecto beatae vitae dicta sunt explicabo.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_blog2_section_card',
            [
                'label' => esc_html__('Blog2 Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card__image', [
                'label' => esc_html__('Blog2 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card__category', [
                'label' => esc_html__(' Blog2 Category', 'techlon-core'),
                'default' => esc_html__('Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card__category_link', [
                'label' => esc_html__(' Blog2 category Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card_date_icon', [
                'label' => esc_html__('Blog2 Date Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card__date', [
                'label' => esc_html__(' Blog Date', 'techlon-core'),
                'default' => esc_html__(' July, 25, 2022', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card__title', [
                'label' => esc_html__(' Blog2 Title', 'techlon-core'),
                'default' => esc_html__('Web design done Delightful Visualization Examples', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card__title_link', [
                'label' => esc_html__(' Blog Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_blog2_section_card2',
            [
                'label' => esc_html__('Blog2 Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_blog2_section_card', [
                'label' => esc_html__('Blog2 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card__image2', [
                'label' => esc_html__(' Blog2 Image Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card_date_icon2', [
                'label' => esc_html__('Blog2 Date Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card__date2', [
                'label' => esc_html__(' Blog2 Date', 'techlon-core'),
                'default' => esc_html__(' July, 25, 2022', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card__category2', [
                'label' => esc_html__(' Blog2 Category', 'techlon-core'),
                'default' => esc_html__('Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card__category_link2', [
                'label' => esc_html__(' Blog2 category Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card__title2', [
                'label' => esc_html__(' Blog2 Title', 'techlon-core'),
                'default' => esc_html__('Technology Support Allows Erie non-profit to Serve', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_blog2_section_card__title_link2', [
                'label' => esc_html__(' Blog2 Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_blog2_section_card2_items',
            [
                'label' => esc_html__('Blog2 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_blog2_section_card__title2' => esc_html__('Technology Support Allows Erie non-profit to Serve', 'techlon-core'),
                        'techlon_blog2_section_card__category2' => esc_html__('Designer', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_blog2_section_card__title2 }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="section-padding--bottom section-padding--top blog-home-two">
            <div class="container">
                <div class="blog-home-two__top">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section-title">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_blog2_section_text']) ?></p>
                                <!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_blog2_section_title']) ?></h2>
                                <!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                        </div><!-- /.col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="blog-home-two__top__text"><?php echo techlon_wp_kses($settings['techlon_blog2_section_para']) ?></div>
                            <!-- /.blog-home-two__top__text -->
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.blog-home-two__top -->
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="blog-card-two">
                            <div class="blog-card-two__bg"
                                style="background-image: url(<?php echo esc_url($settings['techlon_blog2_section_card__image']['url']) ?>);"></div>
                            <!-- /.blog-card-two__bg -->
                            <span class="blog-card-one__category">
                            <a href="<?php echo esc_url($settings['techlon_blog2_section_card__category_link']['url']) ?>" class=" tech-blog-btn"><?php echo techlon_wp_kses($settings['techlon_blog2_section_card__category']) ?></a>
                        </span>
                            <div class="blog-card-two__content">
                                <div class="blog-card-one__date">
                                    <i class="fa <?php echo esc_attr($settings['techlon_blog2_section_card_date_icon']['value']) ?>" aria-hidden="true"></i>
                                         <?php echo techlon_wp_kses($settings['techlon_blog2_section_card__date']) ?>
                                 </div><!-- /.blog-card-one__date -->
                                <h3 class="blog-card-one__title"><a href="<?php echo esc_url($settings['techlon_blog2_section_card__title_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_blog2_section_card__title']) ?></a></h3>
                            </div><!-- /.blog-card-two__content -->
                        </div><!-- /.blog-card-two -->
                    </div><!-- /.col-lg-6 -->
<?php foreach ($settings['techlon_blog2_section_card2_items'] as $card) {?>
                    <div class="col-lg-3">
                        <div class="blog-card-one blog-card-one--home-two">
                            <div class="blog-card-one__image">
                                <img src="<?php echo esc_url($card['techlon_blog2_section_card']['url']) ?>" alt="">
                                <a href="<?php echo esc_url($card['techlon_blog2_section_card__image2']['url']) ?>"></a>
                            </div><!-- /.blog-card-one__image -->
                            <div class="blog-card-one__content">
                                <div class="blog-card-one__meta">
                                    <div class="blog-card-one__date">
                                        <i class="fa <?php echo esc_attr($card['techlon_blog2_section_card_date_icon2']['value']) ?>" aria-hidden="true"></i>
                                     <?php echo techlon_wp_kses($card['techlon_blog2_section_card__date2']) ?>
                                    </div><!-- /.blog-card-one__date -->
                                    <span class="blog-card-one__category">
                                    <a href="<?php echo esc_url($card['techlon_blog2_section_card__category_link2']['url']) ?>" class=""><?php echo techlon_wp_kses($card['techlon_blog2_section_card__category2']) ?></a>
                                </span>
                                    <!-- /.blog-card-one__category -->
                                </div><!-- /.blog-card-one__meta -->
                                <h3 class="blog-card-one__title"><a href="<?php echo esc_url($card['techlon_blog2_section_card__title_link2']['url']) ?>"><?php echo techlon_wp_kses($card['techlon_blog2_section_card__title2']) ?></a></h3>
                            </div><!-- /.blog-card-one__content -->
                        </div><!-- /.blog-card-one -->
                    </div><!-- /.col-lg-3 -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Blog2_Section);