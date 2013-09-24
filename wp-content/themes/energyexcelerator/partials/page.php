<?php // get the container class (section_width ACF)	
		$section_width = get_sub_field('section_width');
?>
<section>
	<div class="<?php echo $section_width; ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</section>