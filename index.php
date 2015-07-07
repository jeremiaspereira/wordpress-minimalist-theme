<?php get_header(); ?>
<div class="container">
  	<div class="row">
	   	<div class="col-md-12 main-posts">
				<div class="content">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="post"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="post-header">
									<h1>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</h1>
		   						<p class="info-post"><?php the_time( 'j F  Y' ); ?></p>
								</div><!--.post-header-->
								<div class="entry clear">
									<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ));?>
										</a>
									<?php } ?>
									<?php the_excerpt(); ?>
									<br>
								</div><!--. entry-->
								<footer class="post-footer">
								</footer><!--.post-footer-->
							</div><!-- .post-->
						<?php endwhile; ?>
						<nav class="navigation index">
							<?php if(function_exists('wp_paginate')) {
							    wp_paginate();
							} else {?>
								<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
								<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
							<?php } ?>
						</nav><!--.navigation-->
					<?php endif; ?>
				</div><!--.content-->
			</div>
		</div>
</div>
<?php wp_footer(); ?>
<?php get_footer(); ?>


