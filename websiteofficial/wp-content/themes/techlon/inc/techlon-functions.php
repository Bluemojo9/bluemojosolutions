<?php
if ( !function_exists( 'techlon_options' ) ) {
	function techlon_options( $option = '', $default = null ) {
		$defaults = techlon_default_theme_options();
		$options = get_option( 'techlon_theme_options' );
		$default = ( !isset( $default ) && isset( $defaults[$option] ) ) ? $defaults[$option] : $default;
		return ( isset( $options[$option] ) ) ? $options[$option] : $default;
	}
}
function techlon_default_theme_options() {
	return array(
		'techlon_bottom_footer_text'	=> esc_html__('© All Copyright 2023 by Techlon','techlon'),
		'techlon_blog_sidebar'			=> 'right',
		'techlon_service_sidebar'		=> 'left',
		'techlon_search_banner_text'	=> esc_html__('Search Results for: ','techlon'),
		'techlon_error_banner_title'	=> esc_html__('Page not Found','techlon'),
		'techlon_error_not_found_text'	=> techlon_wp_kses('<h2>404 Error</h2> The Page you are looking for is renamed or deleted or not existed.'),
		'techlon_error_home_button_text'=> esc_html__('Back to Home','techlon')		
	);
}
if( !function_exists('techlon_wp_kses') ){
function techlon_wp_kses( $string, $allowed_html_type='' ){
	// default allowed html list
	$allowed_html = array(
		'aside' => array(
			'class' => array(),
			'id'    => array(),
			'role'  => array(),
		),
		'div' => array(
			'class'        => array(),
			'style'        => array(),
			'id'           => array(),
			'data-iconset' => array(),
			'data-icon'    => array(),
			'role'         => array(),
		),
		'span'   => array(
			'class'  => array(),
			'style'  => array(),
			'id'     => array(),
		),
		'i'   => array(
			'class'  => array(),
		),
		'h1'   => array(
			'class'  => array(),
		),
		'h2'   => array(
			'class'  => array(),
		),
		'h3'   => array(
			'class'  => array(),
		),
		'h4'   => array(
			'class'  => array(),
		),
		'h5'   => array(
			'class'  => array(),
		),
		'h6'   => array(
			'class'  => array(),
		),
		'input'   => array(
			'type'  		=> array(),
			'name'  		=> array(),
			'value' 		=> array(),
			'class' 		=> array(),
			'placeholder'	=> array(),
		),
		'a' => array(
			'href'  => array(),
			'title' => array(),
			'class' => array(),
			'target' => array(),
			'data-tooltip' => array(),
		),
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'ol'     => array(),
		'ul'     => array(
			'class'  => array(),
		),
		'li'     => array(
			'class'  => array(),
		),
		'p'    => array(
			'class' => array(),
		),
		'img' => array(
			'class'  => array(),
			'src'    => array(),
			'alt'    => array(),
			'title'  => array(),
			'width'  => array(),
			'height' => array(),
		),
		'sup'    => array(
			'class' => array(),
		),
		'sub'    => array(
			'class' => array(),
		),
		'iframe' => array(
			'src'         => array(),
			'width'       => array(),
			'height'      => array(),
			'scrolling'   => array(),
		),
		'time'    => array(
			'class'		=> array(),
			'datetime'	=> array(),
		),
		'form' => array(
			'class'			=> array(),
			'type'			=> array(),
			'method'		=> array(),
			'name'			=> array(),
			'action'		=> array(),
		),
		'button'	=> array(
			'class'		=> array(),
			'type'		=> array(),
		),
		'footer' => array(
			'class' => array(),
			'id'    => array(),
		),		
	);
	// Optional - Change the allowed tag array.
	if( !empty($allowed_html_type) ){
		switch($allowed_html_type){
			case 'fid_icon': // Facts In Digits icon
				$allowed_html = array(
					'div' => array(
						'class' => array(),
						'id'    => array(),
					),
					'i'   => array(
						'class'  => array(),
					),
				);
			break;
		}
	}
	// final filter
	return wp_kses( $string, $allowed_html );
	}
}
if (!function_exists('techlon_get_the_sidebar')) {
	function techlon_get_the_sidebar($post)
	{
		$sidebar_side = 'sidebar-'.$post;
		$sidebar_side_class = '';
		if (techlon_options('techlon_service_sidebar') == 'left' && $post == 'service') {
			$sidebar_side_class .= ' sidebar-column';
		}
		if (is_active_sidebar($sidebar_side)) { ?>
			<div id="techlon-left-sidebar" class="widget-sidebar col-lg-4 sidebar <?php echo esc_attr($sidebar_side) ?><?php echo esc_attr($sidebar_side_class) ?>">
				<?php dynamic_sidebar($sidebar_side); ?>
			</div>
		<?php
		}
	}
}
add_action('techlon_get_sidebar','techlon_get_the_sidebar');

if (!function_exists('techlon_get_main_content_class')) {
	function techlon_get_main_content_class($post){
		if($post=='none')
		{
			$classes = 'col-lg-12 main-content';
		}
		else{	
			$sidebar_side = 'sidebar-'.$post;
			$sidebar_widgets = wp_get_sidebars_widgets();

			$classes = 'col-lg-12 main-content';

			if(is_active_sidebar($sidebar_side) && count($sidebar_widgets[$sidebar_side])!=0 && (techlon_options('techlon_'.$post.'_sidebar') == 'left' || techlon_options('techlon_'.$post.'_sidebar') == 'right'))
			{
				$classes = 'col-lg-8 main-content '.$sidebar_side;
			}
		}
		return $classes;
	}
}

if (!function_exists('techlon_single_post_nav')) {
	function techlon_single_post_nav(){
		$p = get_adjacent_post(false, '', true); 
		$n = get_adjacent_post(false, '', false);
		if (!empty($n) && empty($p)){
			$justify_content = ' justify-content-end';
		}
		else{
			$justify_content = '';	
		}
		if(!empty($p) || !empty($n)){
			echo '<div class="blog-next-prev-main"><div class="blog-next-prev-box"><div class="row'.$justify_content.'">';
			
			// previous post title with link 
			if(!empty($p))
			echo '<div class="col-md-6 next-post"><div class="single-next-pre-box"><div class="single-next-pre-inner"><a href="'.get_permalink($p->ID).'" class="next-link single-post-pre-next-link"><span>'.esc_html__('Previous','techlon').'</span></a></div><a href="'.get_permalink($p->ID).'" title="'.$p->post_title.'" class="post-title"><span class="single-post-link-title">'.$p->post_title.'</span></a></div></div>';
						
			// next post title with link 
			if(!empty($n))
			echo '<div class="col-md-6 prev-post"><div class="single-next-pre-box"><div class="single-next-pre-inner"><a href="'.get_permalink($n->ID).'" class="prev-link single-post-pre-next-link"><span>'.esc_html__('Next','techlon').'</span></a></div><a href="'.get_permalink($n->ID).'" title="'.$n->post_title.'" class="post-title"><span class="single-post-link-title">'.$n->post_title.'</span></a></div></div>';
			echo '</div></div></div>';
		}
	}
}

if (!function_exists('techlon_project_post_nav')) {
	function techlon_project_post_nav() {
		$p = get_adjacent_post(false, '', true); 
		$n = get_adjacent_post(false, '', false);
		if (!empty($n) && empty($p)){
			$justify_content = ' justify-content-end';
		}
		else{
			$justify_content = '';	
		}

		if (!empty($p) || !empty($n)) {
			echo '<div class="project-nav section-padding--bottom"><div class="container"><div class="project-nav__inner'.$justify_content.'">';
			if (!empty($p)) {
				echo '<a href="'.get_permalink($p->ID).'"><i class="icon-techlon-left-arrow"></i>'.esc_html__('Previous','techlon').'</a>';
			}
			if (!empty($n)) {
				echo '<a href="'.get_permalink($n->ID).'">'.esc_html__('Next','techlon').'<i class="icon-techlon-right-arrow"></i></a>';
			}
			echo '</div></div></div>';
		}
	}
}
if (!function_exists('techlon_get_the_mobile_nav_function')) {
	function techlon_get_the_mobile_nav_function() {
		$mobileLogo = techlon_options('techlon_mobile_menu_logo');
		$mobileLogoWidth = techlon_options('techlon_mobile_menu_logo_size');
		$mobileMenuContact = techlon_options('techlon_mobile_menu_contact');
		$mobileMenuSocials = techlon_options('techlon_mobile_menu_socials'); ?>
		<div class="mobile-nav__wrapper">
			<div class="mobile-nav__overlay mobile-nav__toggler"></div>
			<!-- /.mobile-nav__overlay -->
			<div class="mobile-nav__content">
				<a href="#" class="mobile-nav__close mobile-nav__toggler">
					<span></span>
					<span></span>
				</a>
				<div class="logo-box">
					<a href="<?php echo site_url('/'); ?>" aria-label="logo image">
					<?php if (!empty($mobileLogo['url'])): ?>
						<img src="<?php echo esc_url($mobileLogo['url']) ?>" width="<?php echo esc_attr($mobileLogoWidth) ?>" alt="<?php echo get_bloginfo('name');?>">
					<?php else: ?>
						<h3><?php echo get_bloginfo('name') ?></h3>
					<?php endif ?>
					</a>
				</div>
				<!-- /.logo-box -->
				<div class="mobile-nav__container"></div>
				<!-- /.mobile-nav__container -->

				<?php if (!empty($mobileMenuContact)): ?>
					<ul class="mobile-nav__contact list-unstyled">
						<?php foreach ($mobileMenuContact as $contact): ?>
							<li>
								<i class="<?php echo esc_attr($contact['techlon_mobile_menu_contact_icon']) ?>"></i>
								<?php if (!empty($contact['techlon_mobile_menu_contact_link'])): ?>
									<a href="<?php echo esc_url($contact['techlon_mobile_menu_contact_link']) ?>">
								<?php endif ?>
									<?php echo techlon_wp_kses($contact['techlon_mobile_menu_contact_text']) ?>
								<?php if (!empty($contact['techlon_mobile_menu_contact_link'])): ?>
									</a>
								<?php endif ?>
							</li>
						<?php endforeach ?>
					</ul><!-- /.mobile-nav__contact -->
				<?php endif ?>
				<?php if (!empty($mobileMenuSocials)): ?>			
					<ul class="mobile-nav__social">
						<?php foreach ($mobileMenuSocials as $social): ?>
							<li><a href="<?php echo esc_url($social['techlon_mobile_menu_social_link']) ?>"><i class="<?php echo esc_attr($social['techlon_mobile_menu_social_icon']) ?>"></i></a></li>
						<?php endforeach ?>
					</ul><!-- /.mobile-nav__social -->
				<?php endif ?>
			</div>
			<!-- /.mobile-nav__content -->
		</div>
		<!-- /.mobile-nav__wrapper -->
	<?php }
}
add_action('techlon_get_the_mobile_nav','techlon_get_the_mobile_nav_function');

if (!function_exists('techlon_get_the_search_popup_function')) {
	function techlon_get_the_search_popup_function() {
		$searchEnable = techlon_options('techlon_header_search_enable');
		$searchPlaceholder = techlon_options('techlon_search_input_placeholder');
		$searchIcon = techlon_options('techlon_header_search_icon'); ?>
		<?php if ($searchEnable): ?>
			<div class="search-popup">
				<div class="search-popup__overlay search-toggler"></div>
				<!-- /.search-popup__overlay -->
				<div class="search-popup__content">
					<form action="<?php echo esc_url(home_url( '/' )); ?>">
						<label for="search" class="sr-only"><?php echo esc_attr($searchPlaceholder) ?></label><!-- /.sr-only -->
						<input type="text" value="<?php the_search_query(); ?>" id="search" placeholder="<?php echo esc_attr($searchPlaceholder) ?>" name="s">
						<button type="submit" aria-label="search submit" class="thm-btn">
							<span><i class="<?php echo esc_attr($searchIcon) ?>"></i></span>
						</button>
					</form>
				</div>
				<!-- /.search-popup__content -->
			</div>
		<?php endif ?>
	<?php }
}
add_action("techlon_get_the_search_popup","techlon_get_the_search_popup_function");

if (!function_exists('techlon_get_similar_projects')) {
	function techlon_get_similar_projects($techlon_project_meta) {
		$query = new WP_Query( array(
		    'post_type'    => 'techlon_project',
		    'post_status '        => 'publish',
            'posts_per_page' => '3',
		    'post__not_in' =>  array(get_the_id()),
		) );

		$sectionTitle = $techlon_project_meta['techlon_project_similar_post_title'];
		$sectionSubTitle = $techlon_project_meta['techlon_project_similar_post_subtitle'];

		?>
		<section class="section-padding--bottom">
			<div class="container">
				<div class="section-title text-center">
					<?php if (!empty($sectionSubTitle)): ?>
						<p class="section-title__text"><?php echo esc_html($sectionSubTitle) ?></p><!-- /.section-title__text -->
					<?php endif ?>
					<?php if (!empty($sectionTitle)): ?>
						<h2 class="section-title__title"><?php echo techlon_wp_kses($sectionTitle) ?></h2><!-- /.section-title__title -->
					<?php endif ?>
				</div><!-- /.section-title -->
				<div class="owl-carousel thm-owl__carousel similar-project-carousel"  data-owl-options='{
					"loop": true,
					"autoplay": true,
					"autoplayTimeout": 5000,
					"autoplayHoverPause": true,
					"smartSpeed": 700,
					"items": 1,
					"margin": 0,
					"nav": false,
					"dots": false,
					"responsive": {
						"0": {
							"items": 1,
							"margin": 0
						},
						"576": {
							"items": 2,
							"margin": 30
						},
						"992": {
							"items": 3,
							"margin": 30
						}
					}
				}'>
					<?php
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						    $query->the_post();
							$category = get_the_terms( get_the_ID(),'techlon-project-category' );
							$categoryName = $category[0]->name;
							?>
							<div class="item">
								<div class="project-card-one">
									<div class="project-card-one__image">
										<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_bloginfo('name');?>">
									</div><!-- /.project-card-one__image -->
									<div class="project-card-one__content">
										<div class="project-card-one__content__inner">
											<?php if (!empty($categoryName)): ?>
												<p class="project-card-one__text"><?php echo esc_html($categoryName); ?></p>
											<?php endif ?>
											<h3 class="project-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3><!-- /.project-card-one__title -->
											<a href="<?php echo get_the_permalink() ?>" class="project-card-one__more">
												<i class="fa-light fa fa-chevron-right"></i>
											</a><!-- /.project-card-one__more -->
										</div><!-- /.project-card-one__content__inner -->
									</div><!-- /.project-card-one__content -->
								</div>
							</div><!-- /.item -->
						<?php }
					}
					wp_reset_query();
					?>
				</div>
			</div>
		</section>
		<?php // wp_reset_query();
	}
}

if (!function_exists('techlon_post_categories')) {
	function techlon_post_categories() {
		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list( esc_html__( ' ', 'techlon' ) );
			if ( $categories_list ) {
				printf( '<span class="blog-card-one__category">%1$s</span>', $categories_list );
			}
		}
	}
}

if (!function_exists('techlon_comment_template')) {
	function techlon_comment_template($comment, $args, $depth){
		if ('div' === $args['style']) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
		?>
		<<?php echo esc_attr($tag); ?> <?php comment_class(empty($args['has_children'] ? '' : 'parent')) ?> id="comment-<?php esc_attr(comment_ID()); ?>">
		<?php if ('div' != $args['style']): ?>
			<div id="div-comment-<?php esc_attr(comment_ID()); ?>" class="comment-body">
		<?php endif ?>
			<div class="comments-one__item vcard">
					<?php if (!empty(get_avatar($comment,$args['avatar_size']))){ ?>
					<div class="comments-one__item__image">
						<?php if ($args['avatar_size']!=0){ echo get_avatar($comment,$args['avatar_size']); } ?>
					</div>
					<?php } ?>
				<div class="comments-one__item__content commentmetadata">
					<div class="comments-one__item__title">
						<?php printf( '<h3 class="techlon-owner-box fn">%s</h3>', get_comment_author_link() ); ?>
					</div>
					<!-- <div class="comment-box"> -->
						<?php if ($comment->comment_approved == '0'): ?>
							<em class="comment-awaiting-moderation"><?php echo esc_html_e('Your comment is awaiting moderation','techlon') ?></em>
						<?php endif ?>
						<!-- <div class="techlon-author-content"> -->
							<div class="comments-one__item__text">
								<?php comment_text(); ?>
							</div>
						<!-- </div> -->
						<?php edit_comment_link(esc_attr__('(Edit)','techlon'),'<div class="comment-edit">','</div>') ?>
						<?php comment_reply_link(array_merge($args,array('reply_text'=> techlon_wp_kses('<span>Reply</span>'), 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					<!-- </div> -->
				</div>
			</div>
		<?php if ('div' != $args['style']): ?>
			</div>
		<?php endif ?>
	</<?php echo esc_attr($tag); ?>>
	<?php }
}

if (!function_exists('techlon_pagination')) {
	function techlon_pagination(){
		global $wp_query, $wp_rewrite;
		//Don't Print Pagination if there is only 1 page
		if ($wp_query->max_num_pages < 2) {
			return;
		}
		$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );
		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}
		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
		$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';
		// Set up paginated links.
		if ( $wp_query->max_num_pages>1 ) :
		?>
			<div class="list-unstyled post-pagination d-flex justify-content-center align-items-center ">
				<?php 	echo  paginate_links( array(
							'base'     => $pagenum_link,
							'format'   => $format,
							'total'    => $wp_query->max_num_pages,
							'current'  => $paged,
							'mid_size' => 1,
							'add_args' => array_map( 'urlencode', $query_args ),
							'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
							'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
						) );; ?>
			</div>
		<?php
		endif;
	}
}

if (!function_exists('techlon_get_header')) {
function techlon_get_header() {

	$header = 'default';
	$techlon_header=techlon_options('techlon_header_style_choose');
	if(!empty($techlon_header))
	{
		$header=$techlon_header;
	}

	return $header;
}
}
if (!function_exists('techlon_get_logo')) {
function techlon_get_logo() {
?>
	<div class="main-menu__logo">
		<h2 class="site-title">
			<a href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name') ?></a>
		</h2>
	</div><!-- /.main-menu__logo -->
<?php }
}
if (!function_exists('techlon_get_logo1')) {
function techlon_get_logo1($img_width=100,$img_height=33) {
$logoEnable = techlon_options('techlon_header_1_logo_enable',false);
$logoImage = techlon_options('techlon_header_1_logo_image');
?>
	<div class="main-menu__logo">
		<?php if ($logoEnable && !empty($logoImage)) { ?>
			<a href="<?php echo site_url('/') ?>">
				<img src="<?php echo esc_url($logoImage['url']) ?>" width="<?php echo esc_attr($img_width) ?>" height="<?php echo esc_attr($img_height) ?>" alt="<?php echo get_bloginfo('name');?>">
			</a>
		<?php } else { ?>
		<h2 class="site-title">
			<a href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name') ?></a>
		</h2>
		<?php } ?>
	</div><!-- /.main-menu__logo -->
<?php }
}

if (!function_exists('techlon_get_logo2')) {
function techlon_get_logo2($img_width=100,$img_height=33) {
$logoEnable = techlon_options('techlon_header_2_logo_enable',false);
$logoImage = techlon_options('techlon_header_2_logo_image_2');
?>
	<div class="main-menu__logo">
		<?php if ($logoEnable && !empty($logoImage)) { ?>
			<a href="<?php echo site_url('/') ?>">
				<img src="<?php echo esc_url($logoImage['url']) ?>" width="<?php echo esc_attr($img_width) ?>" style="height: <?php echo esc_attr($img_height) ?>px" alt="<?php echo get_bloginfo('name');?>">
			</a>
		<?php } else { ?>
		<h2 class="site-title">
			<a href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name') ?></a>
		</h2>
		<?php } ?>
	</div><!-- /.main-menu__logo -->
<?php }
}

if (!function_exists('techlon_get_topbar_logo2')) {
function techlon_get_topbar_logo2($img_width=100,$img_height=33) {
$logoEnable = techlon_options('techlon_header_2_logo_enable',false);
$logoImage = techlon_options('techlon_header_2_logo_image');
?>
	<div class="topbar-two__logo">
		<?php if ($logoEnable && !empty($logoImage)) { ?>
			<a href="<?php echo site_url('/') ?>">
				<img src="<?php echo esc_url($logoImage['url']) ?>" width="<?php echo esc_attr($img_width) ?>" style="height: <?php echo esc_attr($img_height) ?>px" alt="<?php echo get_bloginfo('name');?>">
			</a>
		<?php } else { ?>
		<h2 class="site-title">
			<a href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name') ?></a>
		</h2>
		<?php } ?>
	</div><!-- /.main-menu__logo -->
<?php }
}

if (!function_exists('techlon_get_logo3')) {
function techlon_get_logo3($img_width=100,$img_height=33) {
$logoEnable = techlon_options('techlon_header_3_logo_enable',false);
$logoImage = techlon_options('techlon_header_3_logo_image');
?>
	<div class="main-menu__logo">
		<?php if ($logoEnable && !empty($logoImage)) { ?>
			<a href="<?php echo site_url('/') ?>">
				<img src="<?php echo esc_url($logoImage['url']) ?>" width="<?php echo esc_attr($img_width) ?>" style="height: <?php echo esc_attr($img_height) ?>px" alt="<?php echo get_bloginfo('name');?>">
			</a>
		<?php } else { ?>
		<h2 class="site-title">
			<a href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name') ?></a>
		</h2>
		<?php } ?>
	</div><!-- /.main-menu__logo -->
<?php }
}

add_action('techlon_blog_list','techlon_blog_list_function');
function techlon_blog_list_function() { ?>
	<div class="container">
		<div class="row gutter-y-60">
		<?php if (techlon_options('techlon_blog_sidebar') == 'left') {
			do_action('techlon_get_sidebar','blog');
		}?>
			<div class="<?php echo techlon_get_main_content_class('blog'); ?>">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					if (is_search()) {
						get_template_part( 'template-parts/content', 'search' );
						// code...
					}
					else{
						get_template_part( 'template-parts/content', get_post_type() );
					}
				endwhile;
				techlon_pagination();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>

			</div><!-- /.col -->
			<?php if (techlon_options('techlon_blog_sidebar') == 'right') {
				do_action('techlon_get_sidebar','blog');
			}?>
		</div><!-- /.row -->
	</div><!-- /.container -->
<?php }

function comment_reply_link_class( $class ) {
	$class = str_replace( "class='comment-reply-link", "class='comment-reply-link thm-btn gradient-hover comments-one__item__btn", $class );
	return $class;
}

add_filter( 'comment_reply_link', 'comment_reply_link_class' );

if (!function_exists('techlon_get_title_banner')) {
	function techlon_get_title_banner() {
		$post_id = get_queried_object_id();
		$customTitle = '';
		if (get_post_meta($post_id,'techlon_metabox',true)) {
			$techlon_meta = get_post_meta($post_id,'techlon_metabox',true);
		}
		else {
			$techlon_meta = array();
		}

		// Banner enable
		if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_enable', $techlon_meta)) {
			$bannerEnable = $techlon_meta['techlon_meta_banner_enable'];
		}
		else {
			$bannerEnable = true;
		}

		//title
		if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_custom_title', $techlon_meta) && !empty($techlon_meta['techlon_meta_banner_custom_title'])) {
			$customTitle = $techlon_meta['techlon_meta_banner_custom_title'];
		}
		elseif (techlon_options('techlon_blog_banner_title')) {
			$customTitle = techlon_options('techlon_blog_banner_title');
		}
		else {
			$customTitle = get_the_title($post_id);
		}
		?>
		<?php if ($bannerEnable): ?>
			<div class="page-header">
				<div class="page-header__bg"></div>
				<!-- /.page-header__bg -->
				<div class="container">
					<?php if(function_exists('bcn_display')) : ?>
					<div class="thm-breadcrumb list-unstyled">
						<?php bcn_display();?>
					</div>
					<?php endif; ?>
					<h2 class="page-header__title"><?php echo techlon_wp_kses($customTitle) ?></h2><!-- /.page-header__title -->
				</div><!-- /.container -->
			</div>
		<?php endif ?>
	<?php }
}

add_action('techlon_get_banner','techlon_get_title_banner');

if (!function_exists('techlon_bottom_footer')) {
	function techlon_bottom_footer() { ?>
		<div class="footer-bottom">
			<div class="container">				
				<?php echo nl2br(techlon_options('techlon_bottom_footer_text')); ?>
			</div><!-- /.container -->
		</div>
	<?php }
}

if (!function_exists('techlon_comment_row_open')) {
	function techlon_comment_row_open(){
		echo '<div class="row">';
	}
}
add_action('comment_form_before_fields','techlon_comment_row_open');

if (!function_exists('techlon_comment_row_close')) {
	function techlon_comment_row_close(){
		echo '</div><!--/.row-->';
	}
}
add_action('comment_form_after_fields','techlon_comment_row_close');

if( !function_exists('techlon_hexcode_to_rgb') ){
function techlon_hexcode_to_rgb($hex) {
	$hex = str_replace("#", "", $hex);

	if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
	}
	$rgb = array($r, $g, $b);
	return implode(",", $rgb); // returns the rgb values separated by commas
}
}

if (!function_exists('techlon_project_details_function')) {
	function techlon_project_details_function($techlon_project_meta) { ?>
	<div class="project-details__info">
		<?php if (!empty($techlon_project_meta['techlon_project_client_name'])): ?>
			<div class="project-details__info__item">
				<h4 class="project-details__info__title"><?php echo esc_html__('Clients:','techlon') ?></h4>
				<p class="project-details__info__text"><?php echo esc_html($techlon_project_meta['techlon_project_client_name']) ?></p><!-- /.project-details__info__text -->
			</div><!-- /.project-details__info__item -->	
		<?php endif ?>
		<?php if (get_the_term_list( get_the_ID(), 'techlon-project-category', ' ', ', ' )): ?>
			<div class="project-details__info__item">
				<h4 class="project-details__info__title"><?php echo esc_html__('Category:','techlon') ?></h4>
				<p class="project-details__info__text"><?php echo get_the_term_list( get_the_ID(), 'techlon-project-category', ' ', ', ' ); ?></p><!-- /.project-details__info__text -->
			</div><!-- /.project-details__info__item -->	
		<?php endif ?>
		<div class="project-details__info__item">
			<h4 class="project-details__info__title"><?php echo esc_html__('Date:','techlon') ?></h4>
			<p class="project-details__info__text"><?php echo get_the_date('d F, Y') ?></p><!-- /.project-details__info__text -->
		</div><!-- /.project-details__info__item -->


		<?php if (!empty($techlon_project_meta['techlon_project_value'])): ?>
			<div class="project-details__info__item">
				<h4 class="project-details__info__title"><?php echo esc_html__('Value:','techlon') ?></h4>
				<p class="project-details__info__text"><?php echo esc_html($techlon_project_meta['techlon_project_value']) ?> <?php echo esc_html($techlon_project_meta['techlon_project_value_currency']) ?></p><!-- /.project-details__info__text -->
			</div><!-- /.project-details__info__item -->	
		<?php endif ?>
		<?php if (!empty($techlon_project_meta['techlon_project_socials'])):
			$socials = $techlon_project_meta['techlon_project_socials']; ?>
			<div class="project-details__info__item">
				<div class="project-details__info__social">
			<?php foreach ($socials as $social) { ?>
				<a href="<?php echo esc_url($social['techlon_project_social_link']) ?>"><i class="<?php echo esc_attr($social['techlon_project_social_icon']) ?>"></i></a>
			<?php } ?>
				</div>
			</div>
		<?php endif ?>
	</div>
	<?php }
}
add_action('techlon_project_details','techlon_project_details_function');