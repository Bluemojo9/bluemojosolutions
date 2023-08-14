<?php
CSF::createWidget('techlon_recent_post_widget', array(
    'title' => esc_html__('Techlon Recent Post Widget', 'techlon-core'),
    'classname' => 'sidebar__item--posts',
    'description' => esc_html__('A widget which shows recent posts', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_recent_post_widget_title',
            'title' => esc_html__('Title', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('Latest Post', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_recent_post_widget_count',
            'type' => 'number',
            'title' => esc_html__('Post Count', 'techlon-core'),
            'default' => 3,
        ),
        array(
            'id' => 'techlon_recent_post_widget_image',
            'type' => 'switcher',
            'title' => esc_html__('Show Thumbnail Image?', 'techlon-core'),
            'default' => true,
        ),
        array(
            'id' => 'techlon_recent_post_widget_comment',
            'type' => 'switcher',
            'title' => esc_html__('Show Comment Count?', 'techlon-core'),
            'default' => true,
        ),
    ),
));
if (!function_exists('techlon_recent_post_widget')) {
    function techlon_recent_post_widget($args, $instance)
    {
        $posts = $instance['techlon_recent_post_widget_count'] ? $instance['techlon_recent_post_widget_count'] : '-1';
        query_posts('posts_per_page=' . $posts);
        ?>
        <?php
        echo wp_kses_post($args['before_widget']);
        if (!empty($instance['techlon_recent_post_widget_title'])) {
            echo wp_kses_post($args['before_title']) . apply_filters('widget_title  widtet-title', $instance['techlon_recent_post_widget_title']) . wp_kses_post($args['after_title']);
        } ?>
<div>
        <ul class="sidebar__posts tech-sidebar__posts">
            <?php
if (have_posts()) {
            while (have_posts()) {
                the_post();?>
                <li>
                    <?php if (has_post_thumbnail() && $instance['techlon_recent_post_widget_image']): ?>
                        <div class="sidebar__posts__image">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div><!-- /.sidebar__posts__image -->
                    <?php endif?>
                    <div class="sidebar__posts__content">
                        <?php if ($instance['techlon_recent_post_widget_comment']): ?>
                            <div class="sidebar__posts__comment">
                                <div class="sidebar__posts__date">
                                <i class="fa fa-comments"></i>
                            </div>
                                <?php printf(esc_html__('%s Comments'), get_comments_number());?>
                            </div><!-- /.sidebar__posts__comment -->
                        <?php endif?>
                        <h3 class="sidebar__posts__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3><!-- /.sidebar__posts__title -->
                    </div><!-- /.sidebar__posts__content -->
                </li>
        <?php }
            wp_reset_query();
        }?>
        </ul>
    </div>
    <?php echo wp_kses_post($args['after_widget']);
    }
}
?>