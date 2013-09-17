<?php 

$ppp = get_sub_field('number_portfolio');

$staff_args = array(
	'post_type'			=> 'ee_portfolio',
	'posts_per_page'	=> isset( $ppp ) ? $ppp : 3
	);
$staff_query = new WP_Query( $staff_args ); ?>

<?php if( $staff_query->have_posts() ) : ?>
	<section class="<?php echo get_post_type(); ?>">
		<div class="container">
			<h1>Our Portfolio</h1>
		<?php while( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
			<div class="span4">
				<img src="http://placehold.it/304x200&text=<?php the_title(); ?>" />
				<h3><?php the_title(); ?></h3>
			</div>
		<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>