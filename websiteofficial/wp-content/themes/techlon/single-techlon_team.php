<?php
/**
 * The template for displaying all single posts for team
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package finlon
 */
get_header();
do_action('techlon_get_banner');
?>
<section class="section-padding--bottom-md section-padding--top team-details--page">
	<div class="container">
		<div class="row"> 
			<?php
			while(have_posts()) {
				the_post();
				get_template_part('template-parts/content','team');
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			} ?>
		</div>
	</div>
</section>
<?php 
while(have_posts()) {
the_post();
echo '<div class="section-padding--bottom-md">';

	the_content();

echo '</div>';	
}
?>

<?php 
get_footer();