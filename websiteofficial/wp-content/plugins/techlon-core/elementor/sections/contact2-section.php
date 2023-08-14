<?php
namespace Elementor;
class Techlon_Contact2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_contact2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Contact2 Section', 'techlon-core');
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
            'techlon_contact2_contact_item1_section',
            [
                'label' => esc_html__('Contact Item1', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item1_title', [
                'label' => esc_html__(' Item1 Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Address', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item1_text', [
                'label' => esc_html__(' Item1 Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('88 New Street, Washington DC  United States, America', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_contact2_contact_item2_section',
            [
                'label' => esc_html__('Contact Item2', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item2_title', [
                'label' => esc_html__(' Item2 Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Phone', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item_text1', [
                'label' => esc_html__(' Item2 Text1', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Local:', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item_text2', [
                'label' => esc_html__(' Item2 Text2', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Mobile:', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item_number1', [
                'label' => esc_html__(' Item2 Number1', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('222 999 888', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item_nuber1_link', [
                'label' => esc_html__(' Item2 Number1 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item_number2', [
                'label' => esc_html__(' Item2 Number2', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('000 8888 999', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item_nuber2_link', [
                'label' => esc_html__(' Item2 Number2 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_contact2_contact_item3_section',
            [
                'label' => esc_html__('Contact Item3', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item3_title', [
                'label' => esc_html__(' Item3 Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Email', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item3_email1', [
                'label' => esc_html__(' Item3 Email1', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('needhelp@company.com', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item3_email1_link', [
                'label' => esc_html__(' Email1 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item3_email2', [
                'label' => esc_html__(' Item3 Email2', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('inquiry@company.com', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_contact_item3_email2_link', [
                'label' => esc_html__(' Email2 Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_contact2_section_social_icon',
            [
                'label' => esc_html__('Contact Icon', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_contact2_section_icon', [
                'label' => esc_html__('Social Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_contact2_section_icon_link', [
                'label' => esc_html__('Icon Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact2_section_icon_items',
            [
                'label' => esc_html__('Social Icon', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ "Social Icon" }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <div class="contact-one__info ">
                                <div class="contact-one__item">
                                    <h3 class="contact-one__item__title"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item1_title']) ?></h3><!-- /.contact-one__item__title -->
                                    <p class="contact-one__item__text"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item1_text']) ?></p><!-- /.contact-one__item__text -->
                                </div><!-- /.contact-one__item -->
                                <div class="contact-one__item">
                                    <h3 class="contact-one__item__title"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item2_title']) ?></h3><!-- /.contact-one__item__title -->
                                    <p class="contact-one__item__text"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item_text1']) ?> <a href="<?php echo esc_url($settings['techlon_contact2_section_contact_item_nuber1_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item_number1']) ?></a><br>
                                    <?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item_text2']) ?> <a href="<?php echo esc_url($settings['techlon_contact2_section_contact_item_nuber2_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item_number2']) ?></a></p>
                                    <!-- /.contact-one__item__text -->
                                </div><!-- /.contact-one__item -->
                                <div class="contact-one__item">
                                    <h3 class="contact-one__item__title"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item3_title']) ?></h3><!-- /.contact-one__item__title -->
                                    <p class="contact-one__item__text"><a
                                            href="<?php echo esc_url($settings['techlon_contact2_section_contact_item3_email1_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item3_email1']) ?></a><br><a
                                            href="<?php echo esc_url($settings['techlon_contact2_section_contact_item3_email2_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_contact2_section_contact_item3_email2']) ?></a></p>
                                    <!-- /.contact-one__item__text -->
                                </div><!-- /.contact-one__item -->
                                <div class="contact-one__item">
                                    <ul class="contact-one__social">
                                        <?php foreach ($settings['techlon_contact2_section_icon_items'] as $icon) {?>
                                        <li><a href="<?php echo esc_url($icon['techlon_contact2_section_icon_link']['url']) ?>"><i class="fab <?php echo esc_attr($icon['techlon_contact2_section_icon']['value']) ?>"></i></a></li>
                                       <?php }?>
                                    </ul><!-- /.contact-one__social -->
                                </div><!-- /.contact-one__item -->
                            </div><!-- /.contact-one__info -->
                       
                  
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Contact2_Section);