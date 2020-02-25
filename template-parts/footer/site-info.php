<?php
/**
 * Originally displays footer site info
 * Changed to show the Meta-Menu instead of "proudly powered by" site-info.
 *
 * @package WordPress
 * @subpackage Twenty Seventeen Child for homepage-abc.ch
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
</div><!-- .site-info -->