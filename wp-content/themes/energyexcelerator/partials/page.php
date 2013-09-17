<?php $select_page = get_sub_field('select_page', 'option'); ?>
<?php $sel_page_id = $select_page->ID; ?>

<?php 
$page_args = array(
	'post_type'		=>	'page',
	'page_id'		=>	$sel_page_id
);
$page_query = new WP_query( $page_args);
if( $page_query->have_posts() ) : while( $page_query->have_posts() ) : $page_query->the_post(); ?>

<div class="container">
	<h1><?php the_title(); ?></h1>
	<?php the_excerpt(); ?>
</div>

<?php endwhile; endif; ?>