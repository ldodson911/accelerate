<?php
/**
 * Template Name: Custom About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page about-page "><!--top page image and text -->
   <div class="site-content-about">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- end of top page image -->
<section class="featured-work"><!--start of Our Services section -->
	<?php while ( have_posts() ) : the_post(); 
            //creating variables to display the custom fields
                $content_a = get_field('deliverable_a');
                $descrip_a = get_field('description_a');
                $icon_a = get_field('icon_a');
                $content_b = get_field('deliverable_b');
                $descrip_b = get_field('description_b');
                $icon_b = get_field('icon_b');
                $content_c = get_field('deliverable_c');
                $descrip_c = get_field('description_c');
                $icon_c = get_field('icon_c');
                $content_d = get_field('deliverable_d');
                $descrip_d = get_field('description_d');
                $icon_d = get_field('icon_d');
                $accelerate = get_field('general_about');
                $size = "medium";?>
	<div class="site-content"><!-- insert site-content div to put work all in the middle of the page -->
	   
    <h4 class="h4-featured-work">Our Services</h4>
         	<p><center>We take pride in our clients and the content we create for them.</br>
            Here's a brief overview of our offered services. </center></p>
    </div>  
  
    <div id="content" role="main"> 
   
    	<!--Content Strategy -->	
        <div class="about-image-left">
        <?php if('$icon_a')  {
                     echo wp_get_attachment_image ($icon_a, $size); 
                        } ?>
        </div> 
        <div class="about-content-right">
           <h2> <?php echo $content_a; ?> </h2>
           <p>
                <h5> <?php echo $descrip_a; ?></h5>
           </p>
        </div>
        <!--End Content Strategy -->
  
        <!--Influencer Mapping -->
        <div class="about-content-left">
           <h2> <?php echo $content_b; ?> </h2>
           <p>
               <h5> <?php echo $descrip_b; ?> </h5> 
        </div>
        <div class="about-image-right">
            <?php if('icon_b') {
            echo wp_get_attachment_image ($icon_b, $size);
                 } ?>
        </div>
        <!--End Influencer Mapping -->
  
        <!--Social Media Strategy -->
        <div class="about-image-left">
        <?php if ('$icon_c') {
            echo wp_get_attachment_image ($icon_c, $size);
                } ?>
        </div>
        <div class="about-content-right">
            <h2> <?php echo $content_c; ?> </h2>
            <p>
                <h5> <?php echo $descrip_c; ?> </h5>
        </div>
        <!--End Social Media Strategy -->


        <!--Design & Development -->
        <div class="about-content-left-d">
            <h2> <?php echo $content_d; ?> </h2>
            <p>
                <h5> <?php echo $descrip_d; ?> </h5>
        </div>
        <div class="about-image-right">
        <?php if ($icon_d) {
            echo wp_get_attachment_image ($icon_d, $size);
            } ?>
        </div>
        <!--End Design & Development -->
    
    <?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>