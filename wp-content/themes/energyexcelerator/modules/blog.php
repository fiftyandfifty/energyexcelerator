<?php

$blog_args = array(
	'post_type'	=>	'post',
);

$blog_query = new WP_Query( $blog_args ); ?>

<?php if( $blog_query->have_posts() ) : ?>
<div id="main" class="default blog">
	<div class="container">

		<div class="sidebar push-<?php sidebar_position_class(); ?>">
			<?php get_sidebar(); ?>
		</div><!-- #sidebar -->
		<?php while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
		<div id="content" class="push-<?php sidebar_position_class(); ?>">
			<div class="content-inner">
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
		<?php endwhile; ?>
	</div>
</div>
<?php endif; wp_reset_query(); ?>
