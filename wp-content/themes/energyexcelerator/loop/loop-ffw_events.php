<?php
  if ( is_single() || is_singular() ) {
    $post_class = 'single';
  } elseif ( is_archive() || is_home() || is_front_page() ) {
    $post_class = 'archive';
  } elseif ( is_page() ) {
    $post_class = 'page';
  }
?>

<article class="post <?php echo $post_class; ?> post-<?php echo get_the_ID(); ?>">
  <header>
    <?php if (is_singular() || is_single()) : ?>
      <h2 class="post-title">
        <?php the_title(); ?>
      </h1>
    <?php else: ?>
      <h2 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
    <?php endif; ?>
  </header>
  <div class="content">
    <?php the_content(); ?>

  </div>
  <footer>
      <ul class="post-meta">
         <?php $location = get_field('event_location'); 
         echo $location['coordinates'];
         //$coord = array_reverse( $location['coordinates'] );
          ?>
        <li>
          <i class="icon icon-marker"></i>
          <?php if( $location ) : ?>
            <?php echo $location['address']; ?>
          <?php else : ?>
          No location entered
          <?php endif; ?>
        </li>
      </ul>
  </footer>
</article>