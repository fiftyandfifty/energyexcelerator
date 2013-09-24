<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<div style="border-bottom:1px solid #efefef; margin-bottom:30px; padding-bottom:10px;">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
<?php endwhile; else : ?>
	<h1>No nstaff yet</h1>


<?php endif; ?>

<?php get_footer(); ?>