<?php $select_page = get_sub_field('select_page', 'option'); ?>
<?php $sel_page_id = $select_page->ID; ?>
<?php $section_width = get_sub_field('section_width'); // get the container class (section_width ACF) ?>

<?php 
$page_args = array(
	'post_type'		=>	'page',
	'page_id'		=>	$sel_page_id
);
$page_query = new WP_query( $page_args);
if( $page_query->have_posts() ) : while( $page_query->have_posts() ) : $page_query->the_post(); ?>

<section>
	<div class="<?php echo $section_width; ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_excerpt(); ?>
	</div>
</section>

<?php endwhile; endif; wp_reset_query(); ?>