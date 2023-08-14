<?php
// Service Recent Post
CSF::createWidget('techlon_footer_service_widget', array(
    'title' => esc_html__('Techlon Footer Service Widget', 'techlon-core'),
    'classname' => 'footer-widget--links',
    'description' => esc_html__('A widget which shows Footer service ', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_footer_service_widget_title',
            'title' => esc_html__('Title', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('Services', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_footer_service_widget_count',
            'type' => 'number',
            'title' => esc_html__('Post Count', 'techlon-core'),
            'default' => 3,
        ),
    ),
));
if (!function_exists('techlon_footer_service_widget')) {
    function techlon_footer_service_widget($args, $instance)
    {
        $posts = $instance['techlon_footer_service_widget_count'] ? $instance['techlon_footer_service_widget_count'] : '-1';
        query_posts('post_type=techlon_service&posts_per_page=' . $posts);
        echo wp_kses_post($args['before_widget']);
        if (!empty($instance['techlon_footer_service_widget_title'])) {
            echo wp_kses_post($args['before_title']) . apply_filters('widget_title  widtet-title', $instance['techlon_footer_service_widget_title']) . wp_kses_post($args['after_title']);
        } ?>
        <ul class="footer-widget__links">
            <?php
if (have_posts()) {
            while (have_posts()) {
                the_post();?>
                    <li><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></li>
        <?php }
            wp_reset_query();
        }?>
        </ul>
        <?php echo wp_kses_post($args['after_widget']);
    }
}
