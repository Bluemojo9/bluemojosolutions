<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
function techlon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'techlon' ),
			'id'            => 'footer-1-widget',
			'description'   => esc_html__( 'Add widgets here.', 'techlon' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title footer-widget__title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'techlon' ),
			'id'            => 'footer-2-widget',
			'description'   => esc_html__( 'Add widgets here.', 'techlon' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title footer-widget__title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'techlon' ),
			'id'            => 'footer-3-widget',
			'description'   => esc_html__( 'Add widgets here.', 'techlon' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title footer-widget__title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'techlon' ),
			'id'            => 'footer-4-widget',
			'description'   => esc_html__( 'Add widgets here.', 'techlon' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title footer-widget__title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'techlon' ),
			'id'            => 'sidebar-service',
			'description'   => esc_html__( 'Add widgets here.', 'techlon' ),
			'before_widget' => '<div id="%1$s" class="widgets %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title sidebar__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init','techlon_widgets_init');
if (!function_exists('techlon_social_share_link')) {
	function techlon_social_share_link() {
		global $post;
		$crunchifyURL = esc_url( get_permalink() );
		$crunchifyTitle = str_replace( ' ', '%20', esc_url( get_the_title() ) );
		$twitterURL = 'https://twitter.com/intent/tweet?text=' . $crunchifyTitle . '&amp;url=' . $crunchifyURL . '&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $crunchifyURL;
		$linkedinURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $crunchifyURL;
		$pinterestURL = 'https://pinterest.com/pin/create/bookmarklet/?&url='.$crunchifyURL.'&description='.$crunchifyTitle;
		?>  
		<ul class="blog-details__share">
			<li>
				<a data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Twitter', 'techlon-core' )?>" data-original-title="<?php esc_attr_e( 'Twitter', 'techlon-core' )?>" class="techlon-stwitter" href="<?php echo esc_url( $twitterURL ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
			</li>
			<li>
				<a data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Facebook', 'techlon-core' )?>" data-original-title="<?php esc_attr_e( 'Facebook', 'techlon-core' )?>" class="techlon-sfacebook" href="<?php echo esc_url( $facebookURL ); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
			</li>
			<li>
				<a data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Pinterest', 'techlon-core' )?>" data-original-title="<?php esc_attr_e( 'Pinterest', 'techlon-core' )?>" class="techlon-spinterest" href="<?php echo esc_url( $pinterestURL ); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
			</li>
			<li>
				<a data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Linkedin', 'techlon-core' )?>" data-original-title="<?php esc_attr_e( 'Linkedin', 'techlon-core' )?>" class="techlon-slinkedin" href="<?php echo esc_url( $linkedinURL ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			</li>
		</ul><!-- /.blog-details__share -->
		<?php
	}
}