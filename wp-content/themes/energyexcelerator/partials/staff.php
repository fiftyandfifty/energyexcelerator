<style>
	.staff h3{
		text-align: center;
	}
</style>
<?php 

$posts 				= get_sub_field('staff_members');
$section_title	 	= get_sub_field('section_title'); 
$background_color 	= get_sub_field('background_color'); 
$text_color 		= get_sub_field('text_color');
$background_image 	= get_sub_field('background_image');
$repeat_image		= get_sub_field('repeat_image');
$archive_link		= get_sub_field('archive_link');


//Set background Color
if( $background_color ){
	$background_color = "background-color:" . $background_color . "; ";
}

//Set Text Color
if( $text_color ){
	$text_color = "color:" . $text_color . "; ";
}

//Check if $repeat_image is a 
if(  !empty( $repeat_image ) ){

	//Check if both Horizonatl and Vertical boxes are checked
	if( in_array( array('Horizontally', 'Vertically') , $repeat_image)){
		
		//Set to repeat
		$repeat = "background-repeat:repeat;";

	//Check if just vertical is checked
	}elseif( in_array( 'Vertically', $repeat_image ) && !in_array( 'Horizontally', $repeat_image )  ){
		
		$repeat = "background-repeat:repeat-y; ";

	//Check if just horizontal is checked
	}elseif( in_array( 'Horizontally', $repeat_image ) && !in_array( 'Vertically', $repeat_image ) ){
		
		$repeat = "background-repeat:repeat-x; ";
	}

//If $repeat_image is not set, then set to no-repeat and add background-size:cover
}else{
		$repeat = "background-repeat:no-repeat; background-size:cover;";
}

//If $background_image exists, then set the background style.
if( $background_image ){

	$background_image = "background-image:url(" . $background_image . "); " . $repeat;

}


 
if( $posts ): ?>
	
	<section class="staff" style="<?php echo $background_color. $text_color . $background_image; ?>">
		<div class="container">
			
			<?php if( $section_title ) : ?>
				<h1><?php the_sub_field('section_title'); ?></h1>
			<?php else : ?>
				<h1>Our Staff</h1>
			<?php endif; ?>
			
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="span4">
					<img src="http://placehold.it/304x200&text=<?php the_title(); ?>" />
					<h3><?php the_title(); ?></h3>
				</div>
		<?php  endforeach; wp_reset_postdata(); ?>
		<?php if( $archive_link) : ?><a href="/staff" class="button"><?php the_sub_field('archive_text'); ?></a><?php endif; ?>
		</div>
	</section>
<?php else :  ?>

	<section class="staff" style="width:100%; background:#333; color:#fff; background-image: url(http://energy.dev/wp-content/uploads/2013/09/reagan_work_marcus_price.jpeg);">
		<div class="container">
			<h1>Our Team</h1>
			<div class="span4">
				<p>No staff members added yet.</p>
			</div>
		</div>
	</section>
	
<?php endif; ?>