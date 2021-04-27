<?php

$colors = [
    'blue',
    'basecolor4',
    'basecolor5'
];
?>
<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php the_post() ?>
<main class="site-content text-grey text-base parallax-window" data-parallax="scroll" >
    <picture class="parallax-slider">
    <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
    <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
        <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed md:absolute inset-0" style="z-index: -1000">
    </picture>
    <div class="white-opacity-strip mb-4 md:mb-12">
    </div>


    <div class="mx-auto max-w-screen-2xl">
        <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">


            <div class="flex flex-wrap mb-12">
                <div class="w-full pl-6 border-l-4 border-dgreen">
                    <div class="prose">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>


            <div class="flex flex-wrap">
                <div class="w-full">
                    <?php ($i = 0); ?>
                    <!-- Tab links -->
                    <div class="tabsy text-base">

                        <?php while(have_rows('tabs')): ?> <?php ( the_row()); ?>
                        <input type="radio" id="tab<?php echo e($i); ?>" name="tab" checked>
                        <label class="lg:w-1/3 text-4xl font-serif tabButton" for="tab<?php echo e($i); ?>">
                            <span class="px-1 py-2 mt-2 lg:mt-0 <?php if($i !== 2): ?> md:mr-2 <?php endif; ?> tabButton-inner"><span class="border-l-4 border-<?php echo e($colors[$i]); ?> pl-4 ml-1"><?php echo e(the_sub_field('title')); ?></span>
                        </label>
                        <?php while( have_rows('body') ): ?> <?php (the_row()); ?>
                        <?php if( get_row_layout() == 'full_width' ): ?>
                        <div class="tab">
                            <div class="prose bg-white p-6">
                            <?php echo e(the_sub_field('body')); ?>

                            </div>
                        </div>
                        <?php elseif( get_row_layout() == 'split' ): ?>
                        <div class="tab">
                        <div class="prose lg:flex bg-white p-6">
                            <div class="w-full lg:w-7/12 lg:pr-10">
                            <?php echo e(the_sub_field('body')); ?>

                            </div>
                            <div class="w-full lg:w-5/12 esg-table">
                            <?php echo e(the_sub_field('secondary_content')); ?>

                            </div>
                        </div>
</div>
                        <?php endif; ?>
                        <?php ($i++); ?>

                        <?php endwhile; ?>

                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>


</main>
<?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>