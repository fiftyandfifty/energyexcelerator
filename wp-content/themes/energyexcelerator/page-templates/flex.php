<?php 
/*
Template Name: Flexible Template
*/
get_header(); ?>

<?php do_action('FFW_slider_full', array(
	'id'       => 'slider_full_header',
	'class'    => 'slider-full',
	'category' => 'home'
)); ?>

<style>
.span4 img {
	padding-right: 3px;
}
</style>
	<?php $page_content_location = get_field('') ?>

	<?php while( has_sub_field( 'sections', $post->ID ) ) : ?>
		
		<?php if( get_row_layout() == 'blog_layout') : ?>
			<?php get_template_part( 'partials/blog', 'index' ); ?>
		<?php endif; ?>

		<?php if( get_row_layout() == "staff_layout") : ?>
			<?php get_template_part( 'partials/staff', 'index' ); ?>
		<?php endif; ?>

		<?php if( get_row_layout() == "portfolio_layout") : ?>
			<?php get_template_part( 'partials/portfolio', 'index' ); ?>
		<?php endif; ?>

		<?php if( get_row_layout() == "page_layout") : ?>
			<?php get_template_part( 'partials/page', 'index' ); ?>
		<?php endif; ?>

	<?php endwhile; ?>


<?php get_footer(); ?>