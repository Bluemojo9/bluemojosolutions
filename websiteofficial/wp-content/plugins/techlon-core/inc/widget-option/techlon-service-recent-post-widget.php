<?php
// Service Recent Post
CSF::createWidget('techlon_service_recent_post_widget', array(
    'title' => esc_html__('Techlon Service Recent Post Widget', 'techlon-core'),
    'classname' => 'sidebar__item--category  sidebar__item ',
    'description' => esc_html__('A widget which shows service recent posts', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_service_recent_post_widget_title',
            'title' => esc_html__('Title', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('All Services', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_service_recent_post_widget_count',
            'type' => 'number',
            'title' => esc_html__('Post Count', 'techlon-core'),
            'default' => 3,
        ),
    ),
));
if (!function_exists('techlon_service_recent_post_widget')) {
    function techlon_service_recent_post_widget($args, $instance)
    {
        $posts = $instance['techlon_service_recent_post_widget_count'] ? $instance['techlon_service_recent_post_widget_count'] : '-1';
        query_posts('post_type=techlon_service&posts_per_page=' . $posts);
        echo wp_kses_post($args['before_widget']);
        if (!empty($instance['techlon_service_recent_post_widget_title'])) {
            echo wp_kses_post($args['before_title']) . apply_filters('widget_title  widtet-title', $instance['techlon_service_recent_post_widget_title']) . wp_kses_post($args['after_title']);
        } ?>
        <ul class="sidebar__category">
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
