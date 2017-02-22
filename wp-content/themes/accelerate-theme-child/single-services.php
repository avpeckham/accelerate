<?php
/**
 * The template for displaying services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$service = get_field('text_1'); 
				$size = "full"; 
				$image = get_field('image_1'); 
			?>
				<h2><?php the_title() ?></h2>
				
				<h6><?php echo $service; ?></h6>
				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>