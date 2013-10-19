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

        <?php 


        $event_args = array(
          'post_type'     => 'ffw_events',
          'meta_key'      => 'event_date',
          'orderby'       => 'meta_value_num',
          'order'         => 'ASC',
          'nopaging'      => true
          );

        $events_query = new WP_Query( $event_args );

         ?>
        
        <?php if( $events_query->have_posts() ) : while( $events_query->have_posts() ) : $events_query->the_post(); ?>

          <?php $date = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>

          <article class="post post-events post-<?php echo get_the_ID(); ?>">
            <div class="post-thumb med">
              <?php if( $date ){ ?>
                <?php  
                  $event_month    = $date->format('m');
                  $event_date_num = $date->format('j');
                ?>
            	<div class="circle-date">
            		<div class="circle-date-inner">
            			<i class="icon icon-calendar"></i>
            			<span class="date-month"><?php echo $event_month; ?></span>
            			<b class="date-day"><?php echo $event_date_num; ?></b>
            		</div>
            	</div>
              <?php } ?>
            </div>
            <div class="post-content">
            	<h2 class="post-title">
            	  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
            	</h2>
              <ul class="post-meta">
                 <?php $location = get_field('event_location', get_the_ID()); ?>
                 <?php if( $location ) : ?>
                <li>
                  <i class="icon icon-marker"></i>
                  <?php echo $location['address']; ?>
                </li>
              <?php endif; ?>
              </ul>
            </div>
          </article>


        <?php endwhile; endif; ?>

      </div><!-- .content-inner -->
    </div><!-- #content -->

	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>