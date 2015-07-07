<?php
/*
Template Name: Template para sobre
*/
?>
<?php get_header(); ?>
<div class="container">
  	<div class="row">
	   	<div class="col-md-12 main-posts">
			<div class="content">
				<div class="pg-sobre">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
							</div><!-- .post-->
						<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
						<?php else : ?>
					<?php endif; ?>
				</div>
			</div><!--.content-->
		</div>
	</div>
</div>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>

