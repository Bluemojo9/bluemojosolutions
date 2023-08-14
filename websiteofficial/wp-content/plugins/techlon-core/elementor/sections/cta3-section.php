<?php
namespace Elementor;
class Techlon_Cta3_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_cta3_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Cta3 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-call-to-action';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_cta3_section',
            [
                'label' => esc_html__('Cta3 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_cta3_section_image', [
                'label' => esc_html__(' Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_cta3_section_icon', [
                'label' => esc_html__('Section Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_cta3_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('End to End Development', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_cta3_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('There are many variations of available', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta3_section_item',
            [
                'label' => esc_html__('Cta3 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_cta3_section_text' => esc_html__('There are many variations of available', 'techlon-core'),
                        'techlon_cta3_section_title' => esc_html__('End to End Development', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_cta3_section_title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="cta-four">
            <div class="container">
                <div class="row">
<?php foreach ($settings['techlon_cta3_section_item'] as $box) {?>
                    <div class="col-lg-6">
                        <div class="cta-four__box">
                            <div class="cta-four__box__image"
                                style="background-image: url(<?php echo esc_url($box['techlon_cta3_section_image']['url']) ?>);">
                            </div>
                            <!-- /.cta-four__box__image -->
                            <div class="cta-four__box__icon">
                                <i class="<?php echo esc_attr($box['techlon_cta3_section_icon']['value']) ?>"></i>
                            </div><!-- /.cta-four__box__icon -->
                            <div class="cta-four__box__content">
                                <h3 class="cta-four__box__title"><?php echo techlon_wp_kses($box['techlon_cta3_section_title']) ?></h3>
                                <!-- /.cta-four__box__title -->
                                <p class="cta-four__box__text"><?php echo techlon_wp_kses($box['techlon_cta3_section_text']) ?>
</p>
                                <!-- /.cta-four__box__text -->
                            </div><!-- /.cta-four__box__content -->
                        </div><!-- /.cta-four__box -->
                    </div><!-- /.col-lg-6 -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.cta-four -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Cta3_Section);