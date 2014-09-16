<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Orangey
 * @since 2014
 */

get_header(); ?>
<div class="grid">
	<div class="c3">
		<?php get_sidebar(); ?>
	</div>
	<div class="c9 end">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'Uh oh. It looks like nothing was found at this location.'); ?></p>
	</div>

</div>
<?php get_footer(); ?>