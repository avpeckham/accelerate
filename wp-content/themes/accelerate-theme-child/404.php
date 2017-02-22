<?php
/**
 * The template for displaying 404 - page not found
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="all">
				<div class="image">
					<img src="http://cdn-3.about-bees.com/images/bumble-bee.jpg" alt="bumble bee">
				</div>

				<div class="text">
					<h3 class="brand-color">Whoops, took a wrong turn ... </h3>
					<p>Sorry, this page doesn't exist! We feel like complete jerks for misleading you. </p>
					<p>Feel free to look around, though - visit our <a href="<?php echo home_url(); ?>"><span class="brand-color">home page</span></a>, or our <a href="<?php echo home_url(); ?>/blog" class="brand-color">blog</a>. </p>
				
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>