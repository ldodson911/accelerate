<?php
/**
 * The template for displaying the homepage
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

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	
	<div class="site-content"><!-- insert site-content div to put work all in the middle of the page -->
		<h4 class="h4-featured-work">Featured Work</h4>
			
			<ul class="homepage-featured-work"><!--wrapping the post in an unordered list in order to style them -->
			<?php query_posts('posts_per_page=3&post_type=case_studies') ?><!--grabs 3 posts and only those that are the custom post type of case_studies -->
				<?php while (have_posts() ) : the_post(); 
						$image_1 = get_field("image_1");
						$size = "medium";
				?>
						<li class="individual-featured-work">
						<figure>
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
						</figure>
							<h3 class="homepage-featured-work"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>	
					
				<?php endwhile; ?> <!--end of loop -->
			<?php wp_reset_query(); ?> <!-- resets the altered query back to the original -->

	</div>
</section>

<section class="recent posts">
	<div class="site-content">
		<div class="blog-post">
		<h4>FROM THE BLOG</h4>
		<?php query_posts('posts_per_page=1') ?>
			<?php while (have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt() ?>
				<a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		</div>
		<div class="sidebar-2">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>