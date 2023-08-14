<?php
CSF::createWidget('techlon_about_widget', array(
    'title' => esc_html__('Techlon About Widget', 'techlon-core'),
    'classname' => 'footer-widget--about',
    'description' => esc_html__('A Widget which shows info about site', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_about_widget_title',
            'title' => esc_html__('Title', 'techlon-core'),
            'type' => 'text',
        ),
        array(
            'id' => 'techlon_about_widget_logo_enable',
            'title' => esc_html__('Enable Logo', 'techlon-core'),
            'type' => 'switcher',
            'default' => 'true',
        ),
        array(
            'id' => 'techlon_about_widget_logo_image',
            'title' => esc_html__('Upload Logo', 'techlon-core', 'techlon-core'),
            'type' => 'media',
            'preview' => true,
            'preview_size' => 'full',
            'dependency' => array('techlon_about_widget_logo_enable', '==', 'true'),
        ),
        array(
            'id' => 'techlon_about_widget_content',
            'title' => esc_html__('Content', 'techlon-core'),
            'type' => 'textarea',
            'default' => esc_html__('We work with a passion of taking challenges and creating new ones in advertising sector.', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_about_widget_social_enable',
            'title' => esc_html__('Enable Social Links?', 'techlon-core'),
            'type' => 'switcher',
            'default' => true,
            'label' => esc_html__('Manage your Social Links in Theme Options > Footer Options > General Footer Options', 'techlon-core'),
        ),
    ),
));
if (!function_exists('techlon_about_widget')) {
    function techlon_about_widget($args, $instance)
    {
        echo wp_kses_post($args['before_widget']);?>
        <?php if ($instance['techlon_about_widget_logo_enable']) {?>
            <a href="<?php echo home_url('/') ?>" class="footer-widget__logo">
                <img src="<?php echo esc_url($instance['techlon_about_widget_logo_image']['url']) ?>" width="134" height="40" alt="<?php echo get_bloginfo('name') ?>">
            </a>
        <?php } else {
            if (!empty($instance['techlon_about_widget_title'])) {
                echo wp_kses_post($args['before_title']) . apply_filters('widget_title  widtet-title', $instance['techlon_about_widget_title']) . wp_kses_post($args['after_title']);
            }
        }?>
        <?php if (!empty($instance['techlon_about_widget_content'])): ?>
            <p class="footer-widget__text"><?php echo esc_html($instance['techlon_about_widget_content']) ?></p><!-- /.footer-widget__text -->
        <?php endif?>
        <?php
$social_links = techlon_options('techlon_footer_social_links_group');
        if (!empty($social_links) && $instance['techlon_about_widget_social_enable']) {?>
        <ul class="footer-widget__social">
            <?php foreach ($social_links as $social) {?>
                <li><a href="<?php echo esc_url($social['techlon_footer_social_link']) ?>"><i class="<?php echo esc_attr($social['techlon_footer_social_icon']) ?>"></i></a></li>
            <?php }?>
        </ul><!-- /.footer-widget__social -->
        <?php }
        echo wp_kses_post($args['after_widget']);
    }
}