<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <main class="site-content bg-basecolor8 text-grey text-base parallax-window" data-parallax="scroll" >
    <picture class="parallax-slider">
    <source media="(orientation: portrait)" srcset="/assets/images/backgrounds/bg-1s.jpg">
    <source media="(orientation: landscape)" srcset="/assets/images/backgrounds/bg-1.jpg">
        <img src="/assets/images/backgrounds/bg-1s.jpg" alt="" class="w-full h-full object-cover fixed md:absolute inset-0" style="z-index: -1000">
    </picture>
            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                      <?php the_content() ?>
                    </div>
                </div>
            </div>
    </main>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>