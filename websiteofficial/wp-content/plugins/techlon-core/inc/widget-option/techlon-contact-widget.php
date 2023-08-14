<?php
CSF::createWidget('techlon_contact_widget', array(
    'title' => esc_html__('Techlon Contact Widget', 'techlon-core'),
    'classname' => 'footer-widget--contact',
    'description' => esc_html__('A widget which shows contact details', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_contact_title',
            'type' => 'text',
            'title' => esc_html__('Title', 'techlon-core'),
            'default' => esc_html__('Contact', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_contact_number_enable',
            'type' => 'switcher',
            'title' => esc_html__('Enable Phone No.', 'techlon-core'),
            'default' => true,
        ),
        array(
            'id' => 'techlon_contact_number_text',
            'title' => esc_html__('Text', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('+ 88 ( 9800 ) 6802', 'techlon-core'),
            'dependency' => array('techlon_contact_number_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_number_icon',
            'title' => esc_html__('Icon', 'techlon-core'),
            'type' => 'icon',
            'default' => 'fa fa-phone-alt',
            'dependency' => array('techlon_contact_number_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_number_link',
            'title' => esc_html__('Link', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('tel:88-9800-6802', 'techlon-core'),
            'dependency' => array('techlon_contact_number_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_email_enable',
            'type' => 'switcher',
            'title' => esc_html__('Enable Email', 'techlon-core'),
            'default' => true,
        ),
        array(
            'id' => 'techlon_contact_email_text',
            'title' => esc_html__('Text', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('needhelp@company.com', 'techlon-core'),
            'dependency' => array('techlon_contact_email_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_email_icon',
            'title' => esc_html__('Icon', 'techlon-core'),
            'type' => 'icon',
            'default' => 'fa fa-envelope',
            'dependency' => array('techlon_contact_email_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_email_link',
            'title' => esc_html__('Link', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('mailto:needhelp@company.com', 'techlon-core'),
            'dependency' => array('techlon_contact_email_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_address_enable',
            'type' => 'switcher',
            'title' => esc_html__('Enable Address', 'techlon-core'),
            'default' => true,
        ),
        array(
            'id' => 'techlon_contact_address_text',
            'title' => esc_html__('Text', 'techlon-core'),
            'type' => 'textarea',
            'default' => esc_html__('88 Broklyn Golden Road Street New York. USA', 'techlon-core'),
            'dependency' => array('techlon_contact_address_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_contact_address_icon',
            'title' => esc_html__('Icon', 'techlon-core'),
            'type' => 'icon',
            'default' => 'fa fa-map-marker-alt',
            'dependency' => array('techlon_contact_address_enable', '==', 'true'),
        ),
    ),
));
if (!function_exists('techlon_contact_widget')) {
    function techlon_contact_widget($args, $instance)
    {
        echo wp_kses_post($args['before_widget']);
        if (!empty($instance['techlon_contact_title'])) {
            echo wp_kses_post($args['before_title']) . apply_filters('widget_title  widtet-title', $instance['techlon_contact_title']) . wp_kses_post($args['after_title']);
        }?>
        <?php if ($instance['techlon_contact_number_enable'] || $instance['techlon_contact_email_enable'] || $instance['techlon_contact_address_enable']): ?>
            <ul class="footer-widget__contact">
                <?php if ($instance['techlon_contact_number_enable']): ?>
                    <li>
                        <i class="fa <?php echo esc_attr($instance['techlon_contact_number_icon']) ?>"></i>
                        <a href="<?php echo esc_url($instance['techlon_contact_number_link']) ?>"><?php echo esc_html($instance['techlon_contact_number_text']) ?></a>
                    </li>
                <?php endif?>
                <?php if ($instance['techlon_contact_email_enable']): ?>
                    <li>
                        <i class="fa <?php echo esc_attr($instance['techlon_contact_email_icon']) ?>"></i>
                        <a href="<?php echo esc_url($instance['techlon_contact_email_link']) ?>"><?php echo esc_html($instance['techlon_contact_email_text']) ?></a>
                    </li>
                <?php endif?>
                <?php if ($instance['techlon_contact_address_enable']): ?>
                    <li>
                        <i class="fa <?php echo esc_attr($instance['techlon_contact_address_icon']) ?>"></i>
                        <?php echo esc_html($instance['techlon_contact_address_text']) ?>
                    </li>
                <?php endif?>
            </ul>
        <?php endif?>
        <?php echo wp_kses_post($args['after_widget']);
    }
}