<?php get_header(); ?>
<div id="main" class="default blog">
	<div class="container">
		<div class="sidebar push-<?php sidebar_position_class(); ?>">
			<?php get_sidebar(); ?>
		</div><!-- #sidebar -->
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<div id="content" class="push-<?php sidebar_position_class(); ?>">
			<div class="content-inner">
				<h1><?php 
					if ( function_exists( 'ffw_events_get_label_plural' ) ) : 
						echo ffw_events_get_label_plural(); 
					else : 
						echo 'Events';
					endif;  ?></h1>
				<article class="post post-<?php echo get_the_ID(); ?>">
				  <header>
				    <h1 class="post-title">
				      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    </h1>
				  </header>
				  <div class="content">
				    <?php the_content(); ?>
				  </div>
				  <footer>
				    <?php do_action('FFW_post_details'); ?>
				  </footer>
				</article>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>