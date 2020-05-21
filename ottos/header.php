<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ottos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/deb6bva.css">
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/favicon.ico' ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/favicon.ico' ?>" type="image/x-icon" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ottos' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">

			<a href="/">
				<img class="logo" srcset="
				<?php echo get_template_directory_uri() . '/assets/ottos-logo-2x.png' ?> 2x,
				<?php echo get_template_directory_uri() . '/assets/ottos-logo.png' ?> 1x"
				src="<?php echo get_template_directory_uri() . '/assets/ottos-logo-2x.png' ?>">
			</a>

		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
