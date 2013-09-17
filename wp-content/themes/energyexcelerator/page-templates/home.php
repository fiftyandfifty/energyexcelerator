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

<?php get_template_part( 'modules/blog', 'index' ); ?>


<?php  get_template_part( 'modules/staff', 'index'); ?>

<div id="main">
	<div class="container">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</div>


<?php get_footer(); ?>