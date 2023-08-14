<?php
namespace Elementor;
class Techlon_Project4_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_project4_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Project4 Section', 'techlon-core');
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
            'techlon_project4_section',
            [
                'label' => esc_html__('Project4 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_project4_section_image', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_project4_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('IT Technology Solution', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project4_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Data Recovery', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_project4_section_title_link', [
                'label' => esc_html__(' Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
       
        $repeater->add_control(
            'techlon_project4_section_icon_link', [
                'label' => esc_html__(' Section Icon Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_project4_section_items',
            [
                'label' => esc_html__('Project4 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_project4_section_title' => esc_html__('Data Recovery', 'techlon-core'),
                        'techlon_project4_section_text' => esc_html__('IT Technology Solution', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_project4_section_text }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="section-padding--bottom section-padding--top">
            <div class="container">
                <div class="row gutter-y-30">
<?php foreach ($settings['techlon_project4_section_items'] as $project) {?>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-duration="1500ms"
                        data-wow-delay="000ms">
                        <div class="project-card-one">
                            <div class="project-card-one__image">
                                <img src="<?php echo esc_url($project['techlon_project4_section_image']['url']) ?>" alt="">
                            </div><!-- /.project-card-one__image -->
                            <div class="project-card-one__content">
                                <div class="project-card-one__content__inner">
                                    <p class="project-card-one__text"><?php echo techlon_wp_kses($project['techlon_project4_section_text']) ?></p>
                                    <h3 class="project-card-one__title"><a href="<?php echo esc_url($project['techlon_project4_section_title_link']['url']) ?> "><?php echo techlon_wp_kses($project['techlon_project4_section_title']) ?>
                                        </a></h3><!-- /.project-card-one__title -->
                                    <a href="<?php echo esc_url($project['techlon_project4_section_icon_link']['url']) ?>" class="project-card-one__more">
                                        
                                        <i class="fas fa-chevron-right"></i>
                                    </a><!-- /.project-card-one__more -->
                                </div><!-- /.project-card-one__content__inner -->
                            </div><!-- /.project-card-one__content -->
                        </div><!-- /.project-card-one -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
<?php }?>
                </div><!-- /.row gutter-y-30 -->
            </div><!-- /.container -->
        </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Project4_Section);