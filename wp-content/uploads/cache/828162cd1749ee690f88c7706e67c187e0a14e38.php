<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>

  <main class="site-content bg-img bg-img-3 text-grey text-base">
            <div class="white-opacity-strip mb-4 md:mb-12">
            </div>


            <div class="mx-auto max-w-screen-2xl">
                <div class="m-4 mb-12 flex flex-wrap">


                <div class="lg:w-5/12 p-6 md:py-12 mb-6 lg:mb-0 md:text-lg bg-white-trans">


                    <div class="w-full  pl-6 border-l-4 border-blue">
                        <div class="prose">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>


                <div class="w-full lg:w-7/12 lg:pl-6 md:text-lg">

                    <div class="grid md:grid-cols-2 gap-4 text-white font-semibold">
                            <?php ($i = 0); ?>
                            <?php while( have_rows('company') ): ?> <?php (the_row()); ?>
                            <?php ($i++); ?>

                          <div class="text-center p-6 flex items-end bg-white hover:bg-<?php echo e(the_sub_field('colour')); ?> company-img company-<?php echo e($i); ?>">
                              <div class="company-content mx-auto text-sm">
                                <p><?php echo e(the_sub_field('description')); ?></p>
                                <a href="#company-<?php echo e($i); ?>-popup" class="cta-lines open-popup-link">Find out more</a>
                              </div>
                          </div>
                          <style>
                            .company-<?php echo e($i); ?>{
                                background-image: url(<?php echo e(get_sub_field('image')['colour']); ?>);
                            }

                            .company-<?php echo e($i); ?>:hover {
                                background-image: url(<?php echo e(get_sub_field('image')['white_out']); ?>);
                            }
                          </style>


                          <?php endwhile; ?>


                      </div>

                </div>

</div>

<?php ($i = 0); ?>
                            <?php while( have_rows('company') ): ?> <?php (the_row()); ?>
                            <?php ($i++); ?>
<!-- POPUP -->
<div id="company-<?php echo e($i); ?>-popup" class="white-popup mfp-hide">
    <div class="lg:flex">
        <div class="w-full py-12 px-6 md:p-0 lg:w-7/12">
            <div class="pr-4 md:pt-12 md:pb-0 md:px-12">
                <div class="mb-4">
                    <ig src="<?php echo e(get_sub_field('image')['colour']); ?>" alt="<?php echo e(the_sub_field('title')); ?>" />
                </div>
                <div class="prose">
                        <?php echo e(the_sub_field('content')); ?>

                </div>

                <?php if(get_sub_field('numbers')): ?>
                <h3 class="text-xl lg:text-3xl mb-4 font-serif">By the numbers:</h3>

                <div class="w-full grid grid-flow-col grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 gap-4 text-center font-serif mb-4">
                    <?php $__currentLoopData = get_sub_field('numbers'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex-1">
                        <span class="text-blue text-3xl md:text-6xl block"><?php echo e($number['number']); ?></span>
                        <span class="block font-semibold font-sans text-sm"><?php echo e($number['description']); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <?php endif; ?>
            </div>

            <?php while( have_rows('bottom_block') ): ?> <?php (the_row()); ?>
                        <?php if( get_row_layout() == 'quotation' ): ?>
            <div class="md:flex bg-blue text-white p-6 md:p-0">
                <div class="md:flex-grow border-l-4 border-white p-4 md:my-3 md:ml-4">
                    <div class="text-xl font-semibold mb-6"><p><?php echo e(get_sub_field('quotation')); ?></p></div>
                    <div class="font-semibold font-serif">
                        <p class="leading-snug"><span class="text-3xl leading-none block"><?php echo e(get_sub_field('citation')); ?></span>
                        <span class="text-base font-normal"><?php echo e(get_sub_field('job_title')); ?></span>
                        </p>
                   </div>
                </div>

                <div class="hidden md:block flex-none ">
                    <img src="<?php echo e(get_sub_field('image')); ?>" alt="Allan">
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_row_layout() == 'images' ): ?>

            <div class="flex w-full p-6">
                <?php $__currentLoopData = get_sub_field('images'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e($image['image']); ?>" alt="" class="flex-1 w-1/3 border-2 border-white"/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>

        </div>

        <div class="w-full lg:w-5/12 bg-grey p-6 md:p-12">
           <div class="prose">
               <?php echo e(the_sub_field('secondary_content')); ?>

           </div>
        </div>


    </div>

</div>

<?php endwhile; ?>





        </main>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>