<?php
/**
 * The template for the about page
 *
 * Please note that this is for the about page only
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
		<div class="about-page-header center">
		<h1><span class="brand-color">Accelerate</span> is a strategy and marketing agency, and it's pretty awesome at doing all sorts of stuff. Check out some of the great things we do.</h1>
			
		</div>
	<div id="primary" class="site-content">

		<div id="content" role="main">
			<div class="center">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile ?>
			</div>
			
			<article>
				<div class="services">
				<?php query_posts('post_type=services&order=ASC'); ?>
					<?php while ( have_posts () ):

						the_post();
						$service = get_field('text_1'); 
						$size = "medium"; 
						$image = get_field('image_1');  
					?>
					
						<div class="row">

							<div class="icon">
								<?php echo wp_get_attachment_image($image, $size); ?>
							</div>
							
							<div class="text">		
								<h2><?php the_title(); ?></h2>
								<p><?php echo $service; ?></p>
							</div>
						</div>

						<!-- <div class="clearfix"></div> -->
					
					<?php endwhile; ?>

					<!-- end services div -->
					</div>
					<?php wp_reset_query(); ?>
					
			</article>	

			
			<div class="contact center">
				<h3>Interested in working with us?</h3>
				<a href="<?php echo home_url(); ?>/contact-us/"><button>Contact Us</button></a>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>