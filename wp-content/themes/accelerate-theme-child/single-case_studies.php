<?php
/**
 * The template for displaying case studies
 *
 
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
            //creating variables to display the custom fields
                $services = get_field ('services');
                $client = get_field ('client');
                $link = get_field('site_link');
                $image_1 = get_field('image_1');
                $image_2 = get_field('image_2');
                $image_3 = get_field('image_3');
                $size = "full";?>

          <!-- Insert my variables created above to display on my page -->
                <article class="case-study">
                    <aside class="case-study-sidebar">
                        <h2><?php the_title(); ?></h2>
                        <h5><?php echo $services; ?></h5>
                        <h6>Client: <?php echo $client; ?></h6>

                        <?php the_content(); ?>

                        <p><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>

                    </aside>
                    <div class="case-study-images">
                    <!-- per Ada there can be a problem when using the 'image url' from WP admin.  Sometimes they do not print the image 
                        to the screen, so we wrap it in an if statement that if it finds the image then print it out else do not do
                        anything.  This should prevent any whitespace on the screen due to missing image url  -->
                       <?php if('$image_1')  { ?>
                            <img src="<?php echo wp_get_attachment_image ($image_1, $size); ?>
                       <?php } ?>
                       <?php if('$image_2') { ?>
                            <img src="<?php echo wp_get_attachment_image ($image_2, $size); ?>
                       <?php } ?> 
                      <?php if('$image_3') { ?>
                            <img src="<?php echo wp_get_attachment_image ($image_3, $size); ?>
                       <?php } ?>
                    </div>
            	
                </article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>