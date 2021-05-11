<?php $__env->startSection('content'); ?>
<main class="site-content text-grey text-lg">
    <picture>
        <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
        <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
        <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
    <div class="white-opacity-strip mb-4 md:mb-12"></div>
    <div class="mx-auto max-w-screen-2xl">
        <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
            <div class="lg:flex flex-wrap mb-12">
                <div class="mb-12 lg:mb-0">

                    <div class="lg:flex items-start">
                        <div class="w-full text-lg lg:w-full mb-12 lg:mb-0 lg:pr-24">
                            <?php while(have_posts()): ?> <?php the_post() ?>
                            <div class="w-full bg-white border-l-4 border-dgreen p-4 pl-6 mb-4 repo-panel relative">
                            <a class="absolute inset-0 z-10" href="<?php echo e(the_field('file')); ?>">&nbsp;</a>
                                    <h3 class="font-serif font-semibold text-2xl lg:text-3xl"><?php echo get_the_title(); ?></h3>
                                <div class="w-11/12">
                                    <div class="font-semibold text-sm">
                                        <p class="mb-1"><time class="inline-block updated" datetime="<?php echo e(get_post_time('c', true)); ?>" ><?php echo e(get_the_date()); ?></time></p>
                                    </div>
                                    <p class="mb-0"><?php echo get_the_content(); ?></p>
                                </div>
                                <div class="w-1/12"><img alt="" src="/assets/images/icon-pdf-dgreen.svg" class="w-12"></div>
                            </div>
                            <?php endwhile; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>