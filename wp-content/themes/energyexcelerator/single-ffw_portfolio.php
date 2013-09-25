

<?php get_header(); ?>

<?php do_action('FFW_hero_before'); ?>
<?php do_action('FFW_hero'); ?>
<?php do_action('FFW_hero_after'); ?>

<div id="main" class="page page-default default">
  <div class="container">  
    <div id="content" class="full-width">
      <div class="content-inner">
        
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'loop/loop', get_post_format() ); ?>
        <?php endwhile; endif; ?>

      </div><!-- .content-inner -->
    </div><!-- #content -->
  </div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>