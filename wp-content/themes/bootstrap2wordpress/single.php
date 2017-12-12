<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); ?>

	<!-- BLOG CONTENT
	========================================================-->

	<div class="container">
		<div class="row" id="primary">

			<main id="content" class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single'); ?>

			<?php bootstrap2wordpress_post_nav(); ?>

			<?php 
				//If comments are open or we have at least 1 comment, load up the comment template

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php endwhile; // End of the loop. ?>

			</main>

			<!-- SIDEBAR
			========================================================-->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>

		
		</div><!--primary-->
	</div><!--container-->

<?php get_footer();
