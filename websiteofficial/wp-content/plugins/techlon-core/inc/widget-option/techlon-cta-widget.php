<?php
CSF::createWidget('techlon_cta_widget', array(
    'title' => esc_html__('Techlon CTA Widget', 'techlon-core'),
    'classname' => 'sidebar__item--cta sidebar__item tech-sidebar',
    'description' => esc_html__('A widget for call to action contact', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_cta_icon',
            'title' => esc_html__('Icon', 'techlon-core'),
            'type' => 'icon',
            'default' => 'fas fa fa-phone-alt',
        ),
        array(
            'id' => 'techlon_cta_title',
            'title' => esc_html__('Title', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('Have Tech Problems Contact Now', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_cta_text',
            'title' => esc_html__('Text', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('Call Anytime', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_cta_phone',
            'title' => esc_html__('Phone No', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('+1-(246)333-0088', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_cta_bg_image',
            'title' => esc_html__('Background Image', 'techlon-core'),
            'type' => 'media',
            'preview' => true,
            'preview_size' => 'full',
            'default' => array('url' => get_theme_file_uri('assets/images/services/services-s-cta-1-1.jpg')),
        ),
    ),
));
if (!function_exists('techlon_cta_widget')) {
    function techlon_cta_widget($args, $instance)
    {
        echo wp_kses_post($args['before_widget']);
        $phoneNumber = $instance['techlon_cta_phone'];
        ?>
        <div class="sidebar__cta" style="background-image: url(<?php echo esc_url($instance['techlon_cta_bg_image']['url']) ?>);">
            <i class="sidebar__cta__icon <?php echo esc_attr($instance['techlon_cta_icon']) ?>"></i>
            <h3 class="sidebar__cta__title"><?php echo esc_html($instance['techlon_cta_title']) ?></h3>
            <p class="sidebar__cta__text"><?php echo esc_html($instance['techlon_cta_text']) ?> <br>
                <a href="tel:<?php echo esc_attr($phoneNumber) ?>"><?php echo esc_html($instance['techlon_cta_phone']) ?></a></p>
        </div>
        <?php echo wp_kses_post($args['after_widget']);
    }
}