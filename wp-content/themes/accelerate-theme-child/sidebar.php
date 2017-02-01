<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>


	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <aside class="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>	
        </aside>
	 
    <?php endif; ?>
    

    <?php if (is_active_sidebar ('mc4wp_form_widget-2') ) : ?>
        <aside class="mc4wp-sidebar">
        <?php dynamic_sidebar('mc4wp_form_widget-2'); ?>
        </aside>
    <?php endif; ?>
