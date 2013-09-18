<?php 

$ppp = get_sub_field('number_staff', $post->ID);

if( $ppp == '1'){
	$span = '12';
}elseif( $ppp == '2'){
	$span = '6';
}elseif( $ppp == '3'){
	$span = '4';
}elseif( $ppp == '4'){
	$span = '3';
}


$staff_args = array(
	'post_type'			=> 'ee_staff',
	'posts_per_page'	=> isset( $ppp ) ? $ppp : 3
	);
$staff_query = new WP_Query( $staff_args ); ?>

<?php if( $staff_query->have_posts() ) : ?>

	<section class="<?php echo get_post_type(); ?>">
		<div class="container">
			<h1>Our Team</h1>
		<?php while( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
			<div class="span<?php echo $span;  ?>">
				<img src="http://placehold.it/304x200&text=<?php the_title(); ?>" />
				<h3><?php the_title(); ?></h3>
			</div>
		<?php endwhile; ?>
		</div>
	</section>
<?php endif; wp_reset_query(); ?>