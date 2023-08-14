<?php
if ( !function_exists( 'techlon_google_fonts_url' ) ) {

	function techlon_google_fonts_url() {

		$techlon_fonts_url = '';
		$techlon_fonts     = array();
		$techlon_subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Inter, translate this to 'off'. Do not translate into your own language. */
		if ('off' !== _x('on', 'Inter font: on or off', 'techlon')) {
			$techlon_fonts[] = 'DM Sans:0,400;0,500;0,700;1,400;1,500;1,700';
		}

		if ($techlon_fonts) {
			$techlon_fonts_url = add_query_arg(
				array(
					'family' => urlencode(implode('|', $techlon_fonts)),
					'subset' => urlencode($techlon_subsets),
				), '//fonts.googleapis.com/css');
		}
		return esc_url_raw($techlon_fonts_url);

	}
}
function techlon_css() {
	wp_enqueue_style('techlon-fonts',techlon_google_fonts_url());
	wp_enqueue_style( 'bootstrap',get_template_directory_uri().'/assets/vendors/bootstrap/css/bootstrap.min.css',array(),'5.2.0');
	wp_enqueue_style( 'animate',get_template_directory_uri().'/assets/vendors/animate/animate.min.css',array(),'6.1.1');
	wp_enqueue_style( 'fontawesome',get_template_directory_uri().'/assets/vendors/fontawesome/css/all.min.css',array(),'6.1.2');
	wp_enqueue_style( 'owl-carousel',get_template_directory_uri().'/assets/vendors/owl-carousel/assets/owl.carousel.min.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'owl-carousel-default',get_template_directory_uri().'/assets/vendors/owl-carousel/assets/owl.theme.default.min.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'ion-rangeSlider',get_template_directory_uri().'/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'youtube-popup',get_template_directory_uri().'/assets/vendors/youtube-popup/youtube-popup.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'nice-select',get_template_directory_uri().'/assets/vendors/jquery-nice-select/css/nice-select.css',array(),TECHLON_VERSION);

	wp_enqueue_style( 'jarallax',get_template_directory_uri().'/assets/vendors/jarallax/jarallax.css',array(),TECHLON_VERSION);	
	wp_enqueue_style( 'techlon-icons',get_template_directory_uri().'/assets/vendors/techlon-icons/style.css',array(),TECHLON_VERSION);	
	wp_enqueue_style( 'it-icons',get_template_directory_uri().'/assets/vendors/it-icon/font/it-icon.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'tech-icons',get_template_directory_uri().'/assets/vendors/tech-icon/font/tech-icon.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'technology-icons',get_template_directory_uri().'/assets/vendors/technology-icon/font/technology-icon.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'essential-icons',get_template_directory_uri().'/assets/vendors/essential-icon-set/font/essential.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'techlon-stretch',get_template_directory_uri().'/assets/css/stretched.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'techlon-default',get_template_directory_uri().'/assets/css/default.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'techlon',get_template_directory_uri().'/assets/css/techlon.css',array(),TECHLON_VERSION);
	wp_enqueue_style( 'techlon-style', get_stylesheet_uri(), array(), TECHLON_VERSION,true);
	wp_style_add_data( 'techlon-style', 'rtl', 'replace' );


}
add_action( 'wp_enqueue_scripts', 'techlon_css' );

function techlon_js() {
	wp_enqueue_script( 'bootstrap',get_template_directory_uri().'/assets/vendors/bootstrap/js/bootstrap.bundle.min.js',array(),'5.2.0');
	wp_enqueue_script( 'techlon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), TECHLON_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'lettering',get_template_directory_uri().'/assets/vendors/lettering-js/jquery.lettering.js',array('jquery'),TECHLON_VERSION);
	wp_enqueue_script( 'owl-carousel',get_template_directory_uri().'/assets/vendors/owl-carousel/owl.carousel.min.js',array(),TECHLON_VERSION);
	wp_enqueue_script( 'circle-progress',get_template_directory_uri().'/assets/vendors/circle-progress/circle-progress.min.js',array(),TECHLON_VERSION);
	wp_enqueue_script( 'ion-rangeSlider',get_template_directory_uri().'/assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js',array(),TECHLON_VERSION);
	wp_enqueue_script( 'youtube-popup',get_template_directory_uri().'/assets/vendors/youtube-popup/youtube-popup.jquery.js',array(),TECHLON_VERSION);
	wp_enqueue_script( 'jquery-appear',get_template_directory_uri().'/assets/vendors/jquery-appear/jquery.appear.min.js',array('jquery'),TECHLON_VERSION);

	wp_enqueue_script( 'jarallax',get_template_directory_uri().'/assets/vendors/jarallax/jarallax.min.js',array(),TECHLON_VERSION);	
	wp_enqueue_script( 'nice-select',get_template_directory_uri().'/assets/vendors/jquery-nice-select/js/jquery.nice-select.min.js',array(),TECHLON_VERSION);
	wp_enqueue_script( 'progressbar',get_template_directory_uri().'/assets/vendors/progressbar/progressbar.min.js',array(),TECHLON_VERSION);
	wp_enqueue_script( 'techlon',get_template_directory_uri().'/assets/js/techlon.js',array('jquery'),TECHLON_VERSION,true);
}
add_action( 'wp_enqueue_scripts', 'techlon_js' );
