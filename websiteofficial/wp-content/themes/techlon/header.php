<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techlon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php
$custom_curson = '';
if (techlon_options('techlon_custom_cursor_enable',true)){
	$custom_curson = 'custom-cursor';
} 
?>
<body <?php body_class($custom_curson); ?>>
	<?php if (techlon_options('techlon_custom_cursor_enable',true)): ?>
		<div class="custom-cursor__cursor"></div>
		<div class="custom-cursor__cursor-two"></div>
	<?php endif ?>
	<?php if (techlon_options('techlon_preloader_enable')): ?>
		<div class="preloader">
			<div class="preloader__circle"></div>
		</div>
	<?php endif ?>
<?php if (class_exists('wp_body_open')) {
	wp_body_open();
} else {
	do_action('wp_body_open');
}
?>
<div id="page" class="site page-wrapper">
<?php 
$techlonHeaderStyle = techlon_get_header();
get_template_part( 'template-parts/header/header', $techlonHeaderStyle );