<?php 

$posts            = get_sub_field('staff_members');
$section_title    = get_sub_field('section_title'); 
$section_subtitle = get_sub_field('section_subtitle');
$background_color = get_sub_field('background_color'); 
$text_color       = get_sub_field('text_color');
$background_image = get_sub_field('background_image');
$repeat_image     = get_sub_field('repeat_image');
$archive_link     = get_sub_field('archive_link');


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
	
	<?php setup_postdata($post); ?>

	<?php $section_width = get_sub_field('section_width'); // get the container class (section_width ACF) ?>
	<?php $staff_column_class = get_column_count_class(); // get the column box class by counting post objects ?>
	
	<section class="staff" style="<?php echo $background_color. $text_color . $background_image; ?>">
		<div class="<?php echo $section_width; ?>">
			
			<?php if( $section_title ) : ?>
				<h1><?php the_sub_field('section_title'); ?></h1>
			<?php else : ?>
				<h1>Our Staff</h1>
			<?php endif; ?>
			<?php if( $section_subtitle ) : ?>
				<p><?php the_sub_field('section_subtitle'); ?></p>
			<?php endif; ?>

				
			<?php foreach( $posts as $post ) : // variable must be called $post (IMPORTANT) ?>
					
					<?php setup_postdata($post); ?>
				
					<?php

					// get featured image url if it exists, fallback to placeholder
					if ( has_post_thumbnail() ) {
					  	
					  	$staff_photo_thumb_url = get_featured_image_url( array(
					  			'post_id'		=> $post->ID,
					  			'image_size'	=> 'ffw-grid	'
					  		)
					  	);

					} else {
						
						//@TODO: Replace with a designed placeholder.
						$staff_photo_thumb_url = 'http://placehold.it/304x200';

					}

				 	?>

				<div class="staff-photo <?php echo $staff_column_class; ?>">
					<div class="staff-photo-overlay">
						<div class="staff-photo-overlay-inner">
							<a href="<?php the_permalink(); ?>" style="display:block;">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</a>
						</div>
					</div>
					<div class="staff-photo-thumb bg-cover" style="background-image:url(<?php echo $staff_photo_thumb_url; ?>)">
						<div class="staff-photo-content">
						</div>
					</div>
				</div>

			<?php endforeach; wp_reset_postdata(); ?>
			<?php if( $archive_link ) : ?><a href="/staff" class="button"><?php the_sub_field('archive_text'); ?></a><?php endif; ?>
		</div>
	</section>
<?php else :  ?>

	<section class="staff" style="width:100%; background:#333; color:#fff; background-image: url(/wp-content/uploads/2013/09/reagan_work_marcus_price.jpeg);">
		<div class="container">
			<h1>Our Team</h1>
			<div class="span4">
				<p>No staff members added yet.</p>
			</div>
		</div>
	</section>
	
<?php endif; ?>