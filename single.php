<?php get_header(); ?>
<div class="container">
  	<div class="row">
	   	<div class="col-md-12 main-posts">
			<div class="content">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="post-header">
								<h1>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</h1>
		   						<p class="info-post"><?php the_time( 'j F  Y' ); ?></p>
							</div><!--.post-header-->
							<div class="entry clear">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
								}?>

								<?php the_content(); ?>
								<?php edit_post_link(); ?>
								<?php wp_link_pages(); ?>
							</div><!--. entry-->
							<footer class="post-footer">
								<!--<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div> -->
								<?php comments_template(); ?> 
							</footer><!--.post-footer-->
						</div><!-- .post-->
						
					<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
						<nav class="navigation index">
							<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
							<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
						</nav><!--.navigation-->
					<?php else : ?>
				<?php endif; ?>
			</div><!--.content-->
			<br>
		</div>
		<!--<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>-->
	</div>
</div>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>