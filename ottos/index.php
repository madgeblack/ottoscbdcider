<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ottos
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/hero', get_post_type() );

				get_template_part( 'template-parts/intro', get_post_type() );

				get_template_part( 'template-parts/flavors', get_post_type() );

				get_template_part( 'template-parts/locator', get_post_type() );

				get_template_part( 'template-parts/contact', get_post_type() );

		?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
