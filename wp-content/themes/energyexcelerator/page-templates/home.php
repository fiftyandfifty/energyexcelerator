<?php 
/*
Template Name: Flexible Home
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

<?php if( has_sub_field( 'home_builder', 'option' )) : ?>
	<?php while( has_sub_field('modules', 'option')) : ?>
		
		<?php if( get_row_layout() == 'blog') : ?>
			<?php get_template_part( 'partials/blog', 'index' ); ?>
		<?php endif; ?>

		<?php if( get_row_layout() == "staff") : ?>
			<?php get_template_part( 'partials/staff', 'index' ); ?>
		<?php endif; ?>

		<?php if( get_row_layout() == "portfolio") : ?>
			<?php get_template_part( 'partials/portfolio', 'index' ); ?>
		<?php endif; ?>

		<?php if( get_row_layout() == "page") : ?>
			<?php get_template_part( 'partials/page', 'index' ); ?>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>


<div id="main">
	<div class="container">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</div>


<?php get_footer(); ?>