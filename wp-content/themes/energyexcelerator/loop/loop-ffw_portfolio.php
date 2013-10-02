<article class="post post-<?php echo get_the_ID(); ?>">
  <header>
    <h1 class="post-title">
      <?php the_title(); ?>
    </h1>
  </header>
  <div class="content">
    <?php the_content(); ?>

    <?php $company_url = get_field('company_url'); ?>
    <?php if( $company_url ) : ?>
    <a href="<?php echo $company_url; ?>" class="btn btn-tab icon-globe">Visit Website</a>
	<?php endif; ?>
  </div>
  <footer></footer>
</article>