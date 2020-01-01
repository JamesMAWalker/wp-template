<?php
/**
 * Header file for the Coding Collective WordPress default theme.
 
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Angela Marvin Music</title>
	<?php wp_head(); ?>

</head>	

<?php global $post; ?>

<body>
	<nav class="nav" data-scroll>
		<a href="#" class="nav__item " data-scroll>content</a>
		<a href="#" class="nav__item " data-scroll>blog</a>
		<a href="#">
			<img class="nav__logo" src="<?php echo get_template_directory_uri()?>/assets/images/logo-default.svg" alt="default site logo">
		</a>
		<a href="<?php get_home_url()?>/about" class="nav__item " data-scroll>about</a>
		<a href="#section-contact" class="nav__item " data-scroll>contact</a>
	</nav>
	

	
