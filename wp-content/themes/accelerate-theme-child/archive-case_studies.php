<?php
/**
 * The template for displaying the archive page for case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');  
				$size = "full"; 
				$image_1 = get_field('image_1'); 

			?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2>
							<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<h6><?php echo $services; ?></h6>
						

						<?php the_excerpt(); ?>

					</aside>

					<div class="archived-case-study-images">
					<a href="<?php echo the_permalink(); ?>">
						<?php if (image_1) { 
							echo wp_get_attachment_image( $image_1, $size);
						} ?>
						</a>

					</div>

				</article>

<div class=clearfix></div>
				
			<?php endwhile; // end of the loop. ?>

			<div class="return-link">
				<a href=""><--- BACK TO WORK</a>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>