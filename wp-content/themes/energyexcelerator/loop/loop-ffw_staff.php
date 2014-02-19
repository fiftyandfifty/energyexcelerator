<article class="post post-<?php echo get_the_ID(); ?>">
  <header>
    <h1 class="post-title">
      <?php the_title(); ?>
    </h1>
	<h3>	
		<?php

			$mentor_org		  = get_field('mentor_organization');
			$staff_position	  = get_field('staff_position');

			if( $mentor_org ){
				echo $mentor_org;
			}elseif( $staff_position ){
				echo $staff_position;
			}
		?>
	</h3>
  </header>
  <div class="content">
  	<h5><?php the_excerpt(); ?></h5>
    <?php the_content(); ?>
  </div>
  <footer></footer>
</article>

