<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <main class="site-content text-grey text-base"  >
    <picture>
    <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
    <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
        <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
    <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                        <div class="prose">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(have_rows('blocks')): ?>
            <div class="bg-white-trans mt-auto">
                <div class="m-auto max-w-screen-2xl p-4 pt-12 leading-snug ">
                    <div class="mb-2">
                        <div class="w-full max-w-5xl md:flex homepage-block">

                        <?php while(have_rows('blocks')): ?> <?php (the_row()); ?>

                            <div class="w-full md:flex md:w-1/3 mb-4 relative">
                                <a href="<?php echo e(get_sub_field('link')->post_name); ?>" class="absolute inset-0"></a>
                                <div class="<?php if(get_sub_field('image') ): ?> flex <?php endif; ?> flex-1 bg-white pl-4 mr-4 border-l-4 border-<?php echo e(the_sub_field('colour')); ?>">
                                    <h3 class="w-2/3 text-lg leading-snug font-medium  p-2 ">
                                        <?php echo e(the_sub_field('title')); ?>

                                    </h3>
                                    <?php if(get_sub_field('image') ): ?>
                                    <div class="w-1/3">
                                    <img alt="<?php echo e(the_sub_field('title')); ?>" class="h-40 object-contain w-full object-bottom" src="<?php echo e(the_sub_field('image')); ?>">
                                    </div>
                                    <?php endif; ?>
                                    <p class="px-2">
                                        <?php echo e(the_sub_field('body')); ?>

                                    </p>
                                    <?php if(!get_sub_field('image') ): ?>
                                    <div class=" px-2 pb-2 flex items-center">
                                        <a class="arrow-link font-bold text-grey pr-3" href="">
                                            Find out how
                                        </a>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
    </main>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>