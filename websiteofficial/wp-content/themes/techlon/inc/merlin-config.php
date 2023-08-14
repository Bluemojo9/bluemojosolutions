<?php
function techlon_merlin_local_import_files() {
	return array(
		array(
			'import_file_name'         => esc_html__( 'Main Demo','techlon' ),
			'import_preview_url'       => 'https://thegenius.co/wp/techlon/live/',
			// XML data
			'local_import_file'        => get_parent_theme_file_path( 'inc/merlin/demodata/demo.xml' ),
			// Widget data
			'local_import_widget_file' => get_parent_theme_file_path( 'inc/merlin/demodata/widgets.wie' ),
			'local_import_customizer_file' => get_parent_theme_file_path( 'inc/merlin/demodata/customizer.dat' ),
		),
	);
}
add_filter( 'merlin_import_files', 'techlon_merlin_local_import_files' );
function techlon_merlin_after_import_setup() {
	global $wp_filesystem;
	require_once ( ABSPATH . '/wp-admin/includes/file.php' );
	WP_Filesystem();
	//theme-options
	$theme_options = get_parent_theme_file_path( '/inc/merlin/demodata/theme-options.json' );
	$theme_options_raw_data = $wp_filesystem->get_contents( $theme_options ) ;
	$theme_options_data = maybe_unserialize(json_decode( $theme_options_raw_data, true ));
	update_option( 'techlon_theme_options', $theme_options_data);
	$primary = get_term_by( 'name', 'hedare menu', 'nav_menu' );
	$footer = get_term_by( 'name', 'footer menu', 'nav_menu' );
	set_theme_mod(
		'nav_menu_locations', array(
			'techlon-main-menu' => $primary->term_id,
			'techlon-footer-menu' => $footer->term_id,
		)
	);
	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
	if ( did_action( 'elementor/loaded' ) ) {
		// update some default elementor global settings after setup theme
		update_option( 'elementor_active_kit', '21' );
		update_option( 'elementor_disable_color_schemes', 'yes' );
		update_option( 'elementor_disable_typography_schemes', 'yes' );
		update_option( 'elementor_global_image_lightbox', 'yes' );
		update_option( 'elementor_experiment-e_swiper_latest', 'inactive' );
		update_option( 'elementor_cpt_support', ['post','page','techlon_service','techlon_project','techlon_team'] );
	}
}
add_action( 'merlin_after_all_import', 'techlon_merlin_after_import_setup' );