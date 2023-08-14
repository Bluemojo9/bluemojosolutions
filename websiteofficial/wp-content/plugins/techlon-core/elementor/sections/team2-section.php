<?php
namespace Elementor;

class Techlon_Team2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_team2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Team2 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-person';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_team2_section',
            [
                'label' => esc_html__('Team Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]

        );
      
        $this->add_control(
            'techlon_team2_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Team members', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_team2_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Expert Person to Provide  IT Solution Services', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_team2_section_card',
            [
                'label' => esc_html__('Team Section Card', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_team2_section_card__image', [
                'label' => esc_html__('Card Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],

            ]
        );
        $repeater->add_control(
            'techlon_team2_section_card_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Michelle Monaghan', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_team2_section_card_title_link', [
                'label' => esc_html__(' Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_team2_section_card_designation', [
                'label' => esc_html__(' Section Designation', 'techlon-core'),
                'default' => esc_html__('Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_team2_section_card_icon1', [
                'label' => esc_html__('Icon1', 'techlon-core'),
                'type' => Controls_Manager::ICONS,

            ]
        );
        $repeater->add_control(
            'teachlon_team2_section_card_icon1_link', [
                'label' => esc_html__('Icon1 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );

        $repeater->add_control(
            'techlon_team2_section_card_icon2', [
                'label' => esc_html__('Icon2', 'techlon-core'),
                'type' => Controls_Manager::ICONS,

            ]
        );
        $repeater->add_control(
            'teachlon_team2_section_card_icon2_link', [
                'label' => esc_html__('Icon2 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );

        $repeater->add_control(
            'techlon_team2_section_card_icon3', [
                'label' => esc_html__('Icon3', 'techlon-core'),
                'type' => Controls_Manager::ICONS,

            ]
        );
        $repeater->add_control(
            'teachlon_team2_section_card_icon3_link', [
                'label' => esc_html__('Icon3 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );

        $repeater->add_control(
            'techlon_team_section_card_icon4', [
                'label' => esc_html__('Icon4', 'techlon-core'),
                'type' => Controls_Manager::ICONS,

            ]
        );
        $repeater->add_control(
            'techlon_team2_section_card_icon4_link', [
                'label' => esc_html__('Icon4 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );

        $this->add_control(
            'techlon_team2_section_card_items',
            [
                'label' => esc_html__('Team Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_team2_section_title_card_designation' => esc_html__('Designer', 'techlon-core'),
                        'techlon_team2_section_card_title' => esc_html__('Michelle Monaghan', 'techlon-core'),

                    ],

                ],
                'title_field' => '{{{ techlon_team2_section_card_title }}}',
            ]
        );

    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
                   <section
            class="section-padding--bottom section-padding--top background-repeat-no background-position-top-left team-home">
            <div class="container">
                <div class="section-title text-center">
                    <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_team2_section_text']) ?></p><!-- /.section-title__text -->
                    <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_team2_section_title']) ?></h2>
                    <!-- /.section-title__title -->
                </div><!-- /.section-title -->
                <div class="row gutter-y-30">
				<?php foreach ($settings['techlon_team2_section_card_items'] as $team) {?>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="team-card-one wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="000ms">
                            <div class="team-card-one__image">
                                <img src="<?php echo esc_url($team['techlon_team2_section_card__image']['url']) ?>" alt="">
                                <div class="team-card-one__social">
                                    <ul class="team-card-one__social__links">
                                        <li><a href="<?php echo esc_url($team['teachlon_team2_section_card_icon1_link']['url']) ?>"><i class="fab <?php echo esc_attr($team['techlon_team2_section_card_icon1']['value']) ?>"></i></a></li>
                                        <li><a href="<?php echo esc_url($team['teachlon_team2_section_card_icon2_link']['url']) ?>"><i class="fab <?php echo esc_attr($team['techlon_team2_section_card_icon2']['value']) ?>"></i></a></li>
                                        <li><a href="<?php echo esc_url($team['teachlon_team2_section_card_icon3_link']['url']) ?>"><i class="fab <?php echo esc_attr($team['techlon_team2_section_card_icon3']['value']) ?>"></i></a></li>
                                        <li><a href="<?php echo esc_url($team['techlon_team2_section_card_icon4_link']['url']) ?>"><i class="fab <?php echo esc_attr($team['techlon_team_section_card_icon4']['value']) ?>"></i></a></li>
                                    </ul><!-- /.team-card-one__social__links -->
                                    <div class="team-card-one__social__icon">
                                        <!-- <i class="fa fa-share-alt"></i> -->
                                        <i class="fa fa-share-alt"></i>
                                        

                                    </div><!-- /.team-card-one__social__icon -->
                                </div><!-- /.team-card-one__social -->
                            </div><!-- /.team-card-one__image -->
                            <div class="team-card-one__content">
                                <h3 class="team-card-one__title"><a href="<?php echo esc_url($team['techlon_team2_section_card_title_link']['url']) ?>"><?php echo techlon_wp_kses($team['techlon_team2_section_card_title']) ?></a></h3>
                                <!-- /.team-card-one__title -->
                                <p class="team-card-one__designation"><?php echo techlon_wp_kses($team['techlon_team2_section_card_designation']) ?></p><!-- /.team-card-one__designation -->
                            </div><!-- /.team-card-one__content -->
                        </div><!-- /.team-card-one -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<?php }?>
                 </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Team2_Section);
