<?php
/**
 * The template for displaying an archive page of all case_studies entries
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<div id="primary" class="site-content">
	<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); 
		    $services = get_field ('services');
            $image_1 = get_field('image_1');
            $size = "full"?>
            	
        <article class="case-study">
            <aside class="case-study-sidebar">
                <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h5><?php echo $services; ?></h5>
                <?php the_excerpt(); ?>
                <p><strong><a href="<?php echo the_permalink(); ?>">View Project</a></strong></p>
            </aside>
            <div class="case-study-images">
                <a href="<?php echo the_permalink(); ?>"> 
                <?php if('$image_1')  {
                     echo wp_get_attachment_image ($image_1, $size); 
                        } ?>
                </a>
            </div>
        </article>
	<?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>