<?php
namespace Elementor;
class Techlon_Testimonial3_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_testimonial3_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Testimonial3 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-testimonial-carousel';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_testimonial3_section',
            [
                'label' => esc_html__('Testimonial3 Section ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_testimonial3_section_bg_image', [
                'label' => esc_html__('Testimonial3 Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_testimonial3_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our clients', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonial3_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Trusted Worldwide Peoples', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial3_section_card',
            [
                'label' => esc_html__('Tetimonial3 Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_testimonial3_card_bg_image', [
                'label' => esc_html__('Card Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_testimonial3_section_card_text', [
                'label' => esc_html__('Card Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('On the other hand denounc with ghteoindignation and dislike men who so beguiled and demoralized the charms of pleasure
                                         the momen blinded by desire cannot foresee the pain and trouble.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial3_section_card_title', [
                'label' => esc_html__('Card Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Michal Rahul', 'techlon-core'),
                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial3_section_card_designation', [
                'label' => esc_html__('Card Designation', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Ul - UX Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial3_section_card_icon', [
                'label' => esc_html__('Card Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_testimonial3_card_items',
            [
                'label' => esc_html__('Testimonial3 Card', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_testimonial3_section_card_title' => esc_html__('Michal Rahul', 'techlon-core'),
                        'techlon_testimonial3_section_card_text' => esc_html__('On the other hand denounc with
                              ghteoindignation and dislike men who so beguiled and demoralized the charms of pleasure
                              the momen blinded by desire cannot foresee the pain and trouble.', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_testimonial3_section_card_title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
    <section class="section-padding--bottom section-padding--top gray-bg testimonials-one  testimonials-one--service-two background-repeat-no background-position-top-center"
            style="background-image: url(<?php echo esc_url($settings['techlon_testimonial3_section_bg_image']['url']) ?>);">
            <div class="container">
                <div class="section-title text-center">
                    <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_testimonial3_section_text']) ?></p><!-- /.section-title__text -->
                    <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_testimonial3_section_title']) ?></h2><!-- /.section-title__title -->
                </div><!-- /.section-title -->
                <div class="row gutter-y-30">
<?php foreach ($settings['techlon_testimonial3_card_items'] as $testi) {?>
                    <div class="col-lg-6">
                        <div class="testimonials-one-card">
                            <div class="testimonials-one-card__image tech-testi-img">
                                <img src="<?php echo esc_url($testi['techlon_testimonial3_card_bg_image']['url']) ?>" alt="">
                            </div><!-- /.testimonials-one-card__image -->
                            <div class="testimonials-one-card__content">
                                <div class="testimonials-one-card__text"><?php echo techlon_wp_kses($testi['techlon_testimonial3_section_card_text']) ?></div>
                                <!-- /.testimonials-one-card__text -->
                                <h3 class="testimonials-one-card__title"><?php echo techlon_wp_kses($testi['techlon_testimonial3_section_card_title']) ?></h3>
                                <!-- /.testimonials-one-card__title -->
                                <p class="testimonials-one-card__designation"><?php echo techlon_wp_kses($testi['techlon_testimonial3_section_card_designation']) ?></p>
                                <!-- /.testimonials-one-card__designation -->
                                <i class="<?php echo esc_attr($testi['techlon_testimonial3_section_card_icon']['value']) ?> testimonials-one-card__icon"></i>
                            </div><!-- /.testimonials-one-card__content -->
                        </div><!-- /.testimonials-one-card -->
                    </div><!-- /.col-lg-6 -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Testimonial3_Section);