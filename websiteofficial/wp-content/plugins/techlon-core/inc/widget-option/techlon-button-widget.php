<?php
CSF::createWidget('techlon_download_button_widget', array(
    'title' => esc_html__('Techlon Downalod Button', 'techlon-core'),
    'classname' => 'sidebar__item--btn sidebar__item tech-custom-btn',
    'description' => esc_html__('A widget to put a download button for a file', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_download_button_text',
            'title' => esc_html__('Text', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('Download our flyers', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_download_button_link',
            'title' => esc_html__('Link', 'techlon-core'),
            'type' => 'text',
            'default' => esc_html__('#', 'techlon-core'),
        ),
    ),
));
if (!function_exists('techlon_download_button_widget')) {
    function techlon_download_button_widget($args, $instance)
    {
        echo $args['before_widget']; ?>
            <a href="<?php echo esc_url($instance['techlon_download_button_link']); ?>" class="thm-btn sidebar__btn"><span><?php echo esc_html($instance['techlon_download_button_text']); ?></span></a>
        <?php echo $args['after_widget'];
    }
}