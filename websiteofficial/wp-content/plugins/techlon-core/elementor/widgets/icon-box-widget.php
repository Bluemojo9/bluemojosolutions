<?php
namespace Elementor;

class Techlon_Icon_Box_Widget extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_icon_box';
    }
    public function get_title()
    {
        return esc_html__('Techlon Icon Box', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-icon-box';
    }
    public function get_categories()
    {
        return ['techlon'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_icon_box_options', [
                'label' => esc_html__('Techlon Icon Box', 'techlon-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_icon_box_choose', [
                'label' => esc_html__('Choose Icon Box Style', 'techlon-core'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'one' => esc_html__('Style One', 'techlon-core'),
                    'two' => esc_html__('Style Two', 'techlon-core'),
                    'three' => esc_html__('Style Three', 'techlon-core'),
                ],
                'default' => 'one',
            ]
        );
        $this->add_control(
            'techlon_icon_box_title', [
                'label' => esc_html__('Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('IT Consultant', 'techlon-core'),
                'condition' => [
                    'techlon_icon_box_choose' => ['one', 'two'],
                ],
            ]
        );
        $this->add_control(
            'techlon_icon_box_text', [
                'label' => esc_html__('Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Smarter Solutions', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_icon_box_icon', [
                'label' => esc_html__('Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'techlon-icon-consulting',
                ],
            ]
        );
        $this->add_control(
            'techlon_icon_box_link_enable', [
                'label' => esc_html__('Enable link', 'techlon-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'condition' => [
                    'techlon_icon_box_choose' => ['one', 'two'],
                ],
            ]
        );
        $this->add_control(
            'techlon_icon_box_link_url', [
                'label' => esc_html__('Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
                'condition' => [
                    'techlon_icon_box_link_enable' => 'yes',
                    'techlon_icon_box_choose' => ['one', 'two'],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'techlon_icon_box_style', [
                'label' => esc_html__('Icon Box', 'techlon-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_padding', [
                'label' => esc_html__('Padding', 'techlon-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__item, {{WRAPPER}} .about-three__list__item, {{WRAPPER}} .about-one__list-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_margin', [
                'label' => esc_html__('Margin', 'techlon-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__item, {{WRAPPER}} .about-three__list__item, {{WRAPPER}} .about-one__list-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name' => 'techlon_icon_box_bg',
                'label' => esc_html__('Background', 'techlon-core'),
                'selector' => '{{WRAPPER}} .about-five__box__item, {{WRAPPER}} .about-three__list__item',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'techlon_icon_box_icon_style', [
                'label' => esc_html__('Icon', 'techlon-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_icon_padding', [
                'label' => esc_html__('Padding', 'techlon-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__icon, {{WRAPPER}} .about-three__list__icon, {{WRAPPER}} .about-one__list-item i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_icon_margin', [
                'label' => esc_html__('Margin', 'techlon-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__icon, {{WRAPPER}} .about-three__list__icon, {{WRAPPER}} .about-one__list-item i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_control(
            'techlon_icon_box_icon_color', [
                'label' => esc_html__('Color', 'techlon-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__icon, {{WRAPPER}} .about-three__list__icon, {{WRAPPER}} .about-one__list-item i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'techlon_icon_box_icon_color_bg', [
                'label' => esc_html__('Background Color', 'techlon-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__icon, {{WRAPPER}} .about-three__list__icon, {{WRAPPER}} .about-one__list-item i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_icon_size', [
                'label' => esc_html__('Icon Size', 'techlon-core'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__icon, {{WRAPPER}} .about-three__list__icon, {{WRAPPER}} .about-one__list-item i' => 'font-size: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        $this->add_control('techlon_icon_box_icon_position', [
            'label' => esc_html__('Position', 'techlon-core'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'start' => [
                    'title' => esc_html__('Top', 'techlon-core'),
                    'icon' => 'eicon-v-align-top',
                ],
                'center' => [
                    'title' => esc_html__('Center', 'techlon-core'),
                    'icon' => 'eicon-v-align-middle',
                ],
                'end' => [
                    'title' => esc_html__('Bottom', 'techlon-core'),
                    'icon' => 'eicon-v-align-bottom',
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .about-five__box__item' => 'align-items: {{VALUE}}',
            ],
            'condition' => [
                'techlon_icon_box_choose' => 'one',
            ],
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'techlon_icon_box_title_style', [
                'label' => esc_html__('Title', 'techlon-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_title_padding', [
                'label' => esc_html__('Padding', 'techlon-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__title, {{WRAPPER}} .about-one__list-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_icon_box_title_margin', [
                'label' => esc_html__('Margin', 'techlon-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__title, {{WRAPPER}} .about-one__list-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), [
                'name' => 'techlon_icon_box_title_typo',
                'label' => esc_html__('Typography', 'techlon-core'),
                'selector' => '{{WRAPPER}} .about-five__box__title, {{WRAPPER}} .about-one__list-item',
            ]
        );
        $this->add_control(
            'techlon_icon_box_title_color', [
                'label' => esc_html__('Color', 'techlon-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__title, {{WRAPPER}} .about-one__list-item' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'techlon_icon_box_title_color_hover', [
                'label' => esc_html__('Hover Color', 'techlon-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-five__box__title a:hover, {{WRAPPER}} .about-three__list__title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        if ($settings['techlon_icon_box_choose'] == 'one') {?>
            <div class="about-five__box__item">
                <?php 
                    Icons_Manager::render_icon( $settings['techlon_icon_box_icon'], [ 'aria-hidden' => 'true' ] );
                ?>               
                <div class="about-five__box__content">
                    <h3 class="about-five__box__title">
                        <?php if ($settings['techlon_icon_box_link_enable']):
                $target = $settings['techlon_icon_box_link_url']['is_external'] ? 'target=_blank' : '';
                $nofollow = $settings['techlon_icon_box_link_url']['nofollow'] ? 'rel=nofollow' : '';?>
                                <a href="<?php echo esc_url($settings['techlon_icon_box_link_url']['url']) ?>" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?>>
                            <?php endif?>
                            <?php echo esc_html($settings['techlon_icon_box_title']) ?>
                        <?php if ($settings['techlon_icon_box_link_enable']): ?>
                            </a>
                        <?php endif?>
                    </h3>
                    <?php if ($settings['techlon_icon_box_text']): ?>
                        <p class="about-five__box__text"><?php echo esc_html($settings['techlon_icon_box_text']) ?></p><!-- /.about-five__box__text -->
                    <?php endif?>
                </div><!-- /.about-five__box__content -->
            </div><!-- /.about-five__box__item -->
        <?php } elseif ($settings['techlon_icon_box_choose'] == 'two') {?>
            <div class="about-three__list__item">
                <div class="about-three__list__icon">
                <?php 
                    Icons_Manager::render_icon( $settings['techlon_icon_box_icon'], [ 'aria-hidden' => 'true' ] );
                ?>               
                </div><!-- /.about-three__list__icon -->
                <div class="about-three__list__content">
                    <h3 class="about-three__list__title">
                        <?php if ($settings['techlon_icon_box_link_enable']):
                $target = $settings['techlon_icon_box_link_url']['is_external'] ? 'target=_blank' : '';
                $nofollow = $settings['techlon_icon_box_link_url']['nofollow'] ? 'rel=nofollow' : '';?>
                                <a href="<?php echo esc_url($settings['techlon_icon_box_link_url']['url']) ?>" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?>>
                            <?php endif?>
                            <?php echo esc_html($settings['techlon_icon_box_title']) ?>
                        <?php if ($settings['techlon_icon_box_link_enable']): ?>
                            </a>
                        <?php endif?>
                    </h3><!-- /.about-three__list__title -->
                    <?php if ($settings['techlon_icon_box_text']): ?>
                        <p class="about-three__list__text"><?php echo esc_html($settings['techlon_icon_box_text']) ?></p><!-- /.about-three__list__text -->
                    <?php endif?>
                </div><!-- /.about-three__list__content -->
            </div>
        <?php } elseif ($settings['techlon_icon_box_choose'] == 'three') {?>
            <div class="about-one__list-item">
                <?php 
                    Icons_Manager::render_icon( $settings['techlon_icon_box_icon'], [ 'aria-hidden' => 'true' ] );
                ?>               
            </div>
        <?php }?>
    <?php }
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Icon_Box_Widget);
