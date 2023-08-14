<?php
namespace Elementor;
class Techlon_Counter_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_counter_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Counter Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-counter';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_counter_section_card',
            [
                'label' => esc_html__('Counter Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_counter_section_icon', [
                'label' => esc_html__('Section Icon ', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_counter_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('  All Businesses Interogations', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_counter_section_number', [
                'label' => esc_html__('Section Number', 'techlon-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => esc_html__(' 225', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_counter_section_items',
            [
                'label' => esc_html__('Counter Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_counter__title' => esc_html__(' All Businesses Interogations', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_counter__title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="funfact-two">
            <div class="container">
                <div class="row">
            <?php foreach ($settings['techlon_counter_section_items'] as $counter) {?>
                    <div class=" col-md-12 col-lg-4 wow fadeInUp animated" data-wow-duration="1500ms">
                        <div class="funfact-two__card">
                            <div class="funfact-two__card__icon">
                                <?php 
                                Icons_Manager::render_icon( $counter['techlon_counter_section_icon'], [ 'aria-hidden' => 'true' ] );
                                ?>    
                            </div><!-- /.funfact-two__card__icon -->
                            <div class="funfact-two__card__content">
                                <h3 class="count-box funfact-two__card__title"><span class="count-text" data-stop="<?php echo esc_attr($counter['techlon_counter_section_number']) ?>"
                                        data-speed="1500"></span><!-- /.count-text -->
                                </h3><!-- /.count-box -->
                                <p class="funfact-two__card__text">
                                  <?php echo techlon_wp_kses($counter['techlon_counter_section_text']) ?>
                                </p><!-- /.funfact-two__card__text -->
                            </div><!-- /.funfact-two__card__content -->
                        </div><!-- /.funfact-two__card -->
                    </div><!-- /.col-lg-4 -->
<?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section><!-- /.funfact-two -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Counter_Section);