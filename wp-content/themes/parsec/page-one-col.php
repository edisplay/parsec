<?php
/**
 * Template Name: One Column
 *
 * @package Parsec
 */

get_header(); ?>

	<div id="primary" class="content-area one-col">
		<div class="featured-image alignceter">
			<?php the_post_thumbnail(); ?>
		</div>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
