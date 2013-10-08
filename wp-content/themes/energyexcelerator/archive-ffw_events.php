<?php get_header(); ?>

<?php do_action('FFW_hero_before'); ?>
<?php do_action('FFW_hero'); ?>
<?php do_action('FFW_hero_after'); ?>

<div id="main" class="page page-default default">
	<div class="container">

		<div id="sidebar-default" class="sidebar collapsable collapsed push-<?php sidebar_position_class(); ?>">
		  <div id="sidebar-toggle"></div> 
		  <?php get_sidebar( get_post_type() ); ?>
		</div><!-- #sidebar -->
    
    <div id="content" class="page push-<?php sidebar_position_class(); ?>">
      <div class="content-inner">
        
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <h1><?php 
          	if ( function_exists( 'ffw_events_get_label_plural' ) ) : 
          		echo ffw_events_get_label_plural(); 
          	else :  
          		echo 'Events';
          	endif;  ?></h1>
          <article class="post post-<?php echo get_the_ID(); ?>">
            <header>
              <h1 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
              </h1>
            </header>
            <div class="content">
              <?php the_content(); ?>
            </div>
            <footer>
              <?php do_action('FFW_post_details'); ?>
            </footer>
          </article>
        <?php endwhile; endif; ?>

      </div><!-- .content-inner -->
    </div><!-- #content -->

	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>