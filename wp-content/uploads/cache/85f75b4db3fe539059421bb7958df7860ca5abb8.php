<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <main class="site-content bg-img bg-img-1">
    <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                        <div class="prose">
                            <?php the_content() ?>
                        </div>
                        <h1 class="mb-4 font-serif text-4xl lg:text-5xl xl:text-6xl">
                            Helping companies transform and grow into the Energy services businesses of the future.
                        </h1>
                        <div class="text-xl md:w-10/12 lg:text-xl text-grey">
                            <p>
                                We focus on integrating renewable energy, lowering emissions, increasing energy efficiency and other improvements to existing energy infrastructure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(have_rows('blocks')): ?>
            <div class="bg-white-trans mt-auto">
                <div class="m-auto max-w-screen-2xl p-4 pt-12 leading-snug ">
                    <div class="mb-2">
                        <div class="w-full md:w-full lg:w-10/12 xl:w-7/12 md:flex">

                        <?php while(have_rows('blocks')): ?> <?php (the_row()); ?>

                            <div class="w-full md:flex md:w-1/3 mb-4">
                                <div class="<?php if(get_sub_field('image') ): ?> flex <?php endif; ?> flex-1 bg-white p-2 pl-4 mr-4 border-l-4 border-<?php echo e(the_sub_field('colour')); ?>">
                                    <h3 class="flex-grow text-lg leading-snug font-medium">
                                        <?php echo e(the_sub_field('title')); ?>

                                    </h3>
                                    <?php if(get_sub_field('image') ): ?>
                                    <img alt="<?php echo e(the_sub_field('title')); ?>" class="w-16 pr-2" src="<?php echo e(the_sub_field('image')); ?>">
                                    <?php endif; ?>
                                    <p>
                                        <?php echo e(the_sub_field('body')); ?>

                                    </p>

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