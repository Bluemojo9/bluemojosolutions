<?php
/**
 * Template part for displaying team
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlon
 */

if(get_post_meta( get_the_ID(), 'techlon_team_metabox', true)) {

	$techlon_team_metabox = get_post_meta( get_the_ID(), 'techlon_team_metabox', true );

} else {

	$techlon_team_metabox = array();

}

$member_name = get_the_title();

$social_links = $techlon_team_metabox['techlon_team_member_socials'];
$techlon_team_member_subtitle = $techlon_team_metabox['techlon_team_member_subtitle'];

$first_name = explode(' ', $member_name)[0];
?>
<div class="col-lg-5">
	<?php if (has_post_thumbnail()): ?>
		<div class="team-details__image">
			<img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="<?php the_title(); ?>">
		</div>      
	<?php endif ?>  
</div>

<div class="col-lg-7">
	<div class="team-details__content">
		<div class="team-card-content">
			<h2 class="team-card-title"><?php echo esc_html($member_name) ?></h2>
			<p class="team-card-designation"><?php echo esc_html($techlon_team_metabox['techlon_team_member_designation']) ?></p>
		</div>

		<div class="team-details__social">
			<ul class="list-none">
			<?php foreach ($social_links as $link): ?>
				<li>
            	<a href="<?php echo esc_url($link['techlon_team_member_social_link']) ?>" title="<?php echo esc_attr($link['techlon_team_member_social_name']) ?>"><i class="<?php echo esc_attr($link['techlon_team_member_social_icon']) ?>"></i></a>
            	</li>
			<?php endforeach ?>
			</ul>
        </div>        
        <?php 
        if(!empty($techlon_team_member_subtitle))
        {
        	echo '<p class="section-title__text">'.$techlon_team_member_subtitle.'</p>';
        }
        
        echo techlon_wp_kses($techlon_team_metabox['techlon_team_member_details']) ?>
	</div>
</div>