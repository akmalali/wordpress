<?php
/*
Template Name: Wide Page
*/
?>
<?php get_header(); ?>
<div class="grid">
	<div class="c12 end">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry clear">
							<?php the_content(); ?>
							<?php edit_post_link(); ?>
							<?php wp_link_pages(); ?>
						</div><!--. entry-->
					</div><!-- .post-->
				<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
				<?php else : ?>
			<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>