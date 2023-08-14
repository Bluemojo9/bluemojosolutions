<?php
namespace Elementor;
class Techlon_Whychoose_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_whychoose_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Whychoose Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-form-vertical';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_whychoose_section',
            [
                'label' => esc_html__('Whychoose Section ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_floting_image1', [
                'label' => esc_html__(' Section floting Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_floting_image2', [
                'label' => esc_html__(' Section floting Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-three .container::before' => 'background-image: url({{URL}});',
                ],
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_image1', [
                'label' => esc_html__(' Section Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_image2', [
                'label' => esc_html__(' Section Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Company Benefits', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Why You Should Choose Our Services', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_para', [
                'label' => esc_html__(' Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Choose Infetech to have custom software solutions for your
                                business with the most reasonable price.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_whychoose_section_check_list',
            [
                'label' => esc_html__('Whychoose Section Check List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_whychoose_section_check_list_title', [
                'label' => esc_html__(' Check List Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Integer et massa sit', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_whychoose_section_check_list_icon', [
                'label' => esc_html__(' Check List Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_check_list_items',
            [
                'label' => esc_html__('Check List ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_whychoose_section_check_list_title' => esc_html__('Integer et massa sit', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_whychoose_section_check_list_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_whychoose_section_item_list',
            [
                'label' => esc_html__('Whychoose Section Item List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_whychoose_section_item_list_icon', [
                'label' => esc_html__(' Section Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_whychoose_section_item_list_title', [
                'label' => esc_html__(' Item List Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Cloud Based Services', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_whychoose_section_item_list_title_link', [
                'label' => esc_html__(' Item List Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_whychoose_section_item_list_text', [
                'label' => esc_html__(' Item List Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Services address a range of simply free text application and infrastructure needs.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_whychoose_section_item_list_items',
            [
                'label' => esc_html__('Item List ', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_whychoose_section_item_list_text' => esc_html__('Services address a range of simply free text application and infrastructure needs.', 'techlon-core'),
                        'techlon_whychoose_section_item_list_title' => esc_html__('Cloud Based Services', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_whychoose_section_item_list_title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class=" section-padding--top about-three about-three--home-one">
            <div class="about-three__shape wow fadeInRight" data-wow-duration="1500ms"
                style="background-image: url(<?php echo esc_url($settings['techlon_whychoose_section_floting_image1']['url']) ?>);">
            </div><!-- /.about-three__shape -->
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <img src="<?php echo esc_url($settings['techlon_whychoose_section_image1']['url']) ?>" class="wow fadeInUp animated"
                                data-wow-duration="1500ms" alt="">
                            <img src="<?php echo esc_url($settings['techlon_whychoose_section_image2']['url']) ?>"
                                class="wow fadeInDown animated" data-wow-duration="1500ms" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="section-title ">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_whychoose_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_whychoose_section_title']) ?></h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-three__text"><?php echo techlon_wp_kses($settings['techlon_whychoose_section_para']) ?></div><!-- /.about-three__text -->
                            <ul class="list-unstyled about-three__check">
<?php foreach ($settings['techlon_whychoose_section_check_list_items'] as $check) {?>
                                <li>
                                    <i class="fa <?php echo esc_attr($check['techlon_whychoose_section_check_list_icon']['value']) ?>"></i>
                                  <?php echo techlon_wp_kses($check['techlon_whychoose_section_check_list_title']) ?>
                                </li>
<?php }?>
                            </ul><!-- /.list-unstyled about-three__check -->
                            <ul class="about-three__list">
<?php foreach ($settings['techlon_whychoose_section_item_list_items'] as $item) {?>
                                <li class="about-three__list__item">
                                    <div class="about-three__list__icon">
                                        <i class="<?php echo esc_attr($item['techlon_whychoose_section_item_list_icon']['value']) ?>"></i>
                                    </div><!-- /.about-three__list__icon -->
                                    <div class="about-three__list__content">
                                        <h3 class="about-three__list__title"><a href="<?php echo esc_url($item['techlon_whychoose_section_item_list_title_link']['url']) ?>"><?php echo techlon_wp_kses($item['techlon_whychoose_section_item_list_title']) ?></a></h3><!-- /.about-three__list__title -->
                                        <p class="about-three__list__text"><?php echo techlon_wp_kses($item['techlon_whychoose_section_item_list_text']) ?></p><!-- /.about-three__list__text -->
                                    </div><!-- /.about-three__list__content -->
                                </li>
<?php }?>
                            </ul><!-- /.about-three__list -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Whychoose_Section);