<?php


$section_title    	= get_sub_field('section_title'); 
$section_subtitle 	= get_sub_field('section_subtitle');
$show_full_content	= get_sub_field('show_full_content');
$show_link_to_blog	= get_sub_field('show_link_to_blog');
$blog_link_text		= get_sub_field('blog_link_text');


$ppp = get_sub_field('number_posts');

$blog_args = array(
	'post_type'			=>	'post',
	'posts_per_page'	=>	isset( $ppp ) ? $ppp : 2
);

$blog_query = new WP_Query( $blog_args ); ?>

<?php if( $blog_query->have_posts() ) : ?>
<div id="main" class="page page-default default">
	<div class="container">

		<div class="row">
			<?php if( $section_title ) : ?>
				<h1 class="section-title"><?php the_sub_field('section_title'); ?></h1>
			<?php else : ?>
				<h1 class="section-title">From our Blog</h1>
			<?php endif; ?>
			
			<?php if( $section_subtitle ) : ?>
				<p><?php the_sub_field('section_subtitle'); ?></p>
			<?php endif; ?>


			<div class="sidebar collapsable collapsed push-<?php sidebar_position_class(); ?>">
				<div id="sidebar-toggle"></div>
				<?php get_sidebar(); ?>
			</div><!-- #sidebar -->
			
			
			<div id="content" class="push-<?php sidebar_position_class(); ?>">
				<div class="content-inner">
					<?php while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
					<article class="post post-<?php echo get_the_ID(); ?>">
					  <header>
					    <h1 class="post-title">
					      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    </h1>
					  </header>
					  <div class="content">
					  	<?php if( $show_full_content ) : ?>
					    <?php the_content(); ?>
						<?php else : ?>
						<?php the_excerpt(); ?>
						<?php endif; ?>
					  </div>
					  <footer>
					    <?php do_action('FFW_post_details'); ?>
					  </footer>
					</article>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php if( $show_link_to_blog ) : ?>
		<div class="row centered">
			<a href="<?php if( get_option( 'show_on_front' ) == 'page' ) { echo get_permalink( get_option('page_for_posts' ) ); } ?>" class="btn">
				<?php if( $blog_link_text ) : ?>
				<?php echo $blog_link_text; ?>
				<?php else : ?>
				Read More on Blog
			<?php endif; ?>
			</a>
		</div>
		<?php endif; ?>

	</div>
</div>
<?php endif; wp_reset_query(); ?>
