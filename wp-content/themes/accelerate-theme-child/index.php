<?php
/**
 * The child for the blog home page
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
	<!-- BLOG PAGE -->
	<section class="blog-page">
		<div class="site-content">
			<div class="main-content">

			<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
				
					<article class="post-entry">
						<div class="entry-wrap">
							<header class="entry-header">
								<div class="entry-meta">
									<time class="entry-time"><?php the_date();?></time>
								</div>
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</header>
						<div class="entry-summary">
								<?php the_excerpt(); ?>
						</div>
							<footer class="entry-footer">
								<div class="entry-meta">
									<span class="entry-terms author">Written by <?php the_author_posts_link(); ?></span>
									<span class="entry-terms category">Posted in <?php the_category(', '); ?></span>
									<span class="entry-terms comments"><?php comments_number( 'No comments yet!', '1 comment', '% comments' ); ?></span>
								</div>
							</footer>
						</div>
					
					</article>

					
			<?php endwhile; endif; ?>
			</div>

			<?php get_sidebar(); ?>
		
				<div class="clearfix"></div>
					
			<div id="navigation" class="navigation"> 
				<div class="left"><?php next_posts_link('&larr; <span>Older Posts</span>'); ?></div>
				<div class="right"><?php previous_posts_link('<span>Newer Posts</span> &rarr;'); ?></div>
			</div>

						
		</div>

	</section>
	<!-- END blog page -->
<?php get_footer();
