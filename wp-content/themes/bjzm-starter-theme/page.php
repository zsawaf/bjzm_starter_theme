<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Neat
 */

get_header(); ?>

	<div class="bjzm-wrapper bjzm-wrapper--page">
		<div class="bjzm-wrapper__inner">
			<div class="container">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'views/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
