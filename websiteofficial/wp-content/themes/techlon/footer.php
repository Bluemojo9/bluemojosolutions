<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techlon
 */

get_sidebar('footer');

if (techlon_options('techlon_scroll_top_enable',true)) { 
?>
	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-chevron-up"></i></a>
<?php 
}
// Mobile Nav
do_action('techlon_get_the_mobile_nav' );
//Search Popup
do_action('techlon_get_the_search_popup' );
?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>