<article <?php post_class('w-full prose') ?>>
  <header>
    <h3 class="entry-title"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h3>

  </header>
  <div class="entry-summary">
    <?php the_excerpt() ?>
  </div>
</article>
