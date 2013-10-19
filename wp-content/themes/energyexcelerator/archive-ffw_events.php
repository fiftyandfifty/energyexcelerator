<?php get_header(); ?>

<?php do_action('FFW_hero_before'); ?>
<?php do_action('FFW_hero'); ?>
<?php do_action('FFW_hero_after'); ?>

<div id="main" class="page page-default default">
	<div class="container">
    <div class="row">
      <header class="section-header">
      	<h2 class="section-title">
	        <?php 
	          if ( function_exists( 'ffw_events_get_label_plural' ) ) : 
	            echo ffw_events_get_label_plural(); 
	          else : 
	            echo 'Events';
	          endif;  ?>
	      </h2>
      </header>
    </div>

		<div id="sidebar-default" class="sidebar collapsable collapsed push-<?php sidebar_position_class(); ?>">
		  <div id="sidebar-toggle"></div> 
		  <?php get_sidebar( get_post_type() ); ?>
		</div><!-- #sidebar -->
    
    <div id="content" class="page push-<?php sidebar_position_class(); ?>">
      <div class="content-inner">
        
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

          <article class="post post-events post-<?php echo get_the_ID(); ?>">
            <div class="post-thumb med">
            	<div class="circle-date">
            		<div class="circle-date-inner">
            			<i class="icon icon-calendar"></i>
            			<span class="date-month"><?php the_time('M'); ?></span>
            			<b class="date-day"><?php the_time('j'); ?></b>
            		</div>
            	</div>
            </div>
            <div class="post-content">
            	<h2 class="post-title">
            	  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
            	</h2>
            	<?php do_action('FFW_post_details'); ?>
            </div>
          </article>


        <?php endwhile; endif; ?>

      </div><!-- .content-inner -->
    </div><!-- #content -->

	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>