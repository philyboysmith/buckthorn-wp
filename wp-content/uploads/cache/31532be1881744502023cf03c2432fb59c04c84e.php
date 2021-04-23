<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>

    <main class="site-content bg-img bg-img-2 text-grey text-base">
            <div class="white-opacity-strip mb-12">
            </div>


            <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-blue">

                        <?php the_content() ?>

                        <div class="md:flex">
                            <div class="w-full lg:w-7/12 mb-8 text-base lg:mr-12">
                                <div class="mb-12">
                                    <?php echo e(the_field('first_block_body')); ?>

                                </div>
                            </div>

                            <div class="w-full lg:w-5/12 text-base">
                                <div class="bg-white p-6 mb-6">
                                  <h3 class="font-semibold mb-4"><?php echo e(the_field('sidebar_one')['title']); ?></h3>
                                  <div class="grid md:grid-cols-2 gap-4 text-white font-semibold">
                                      <?php $__currentLoopData = get_field('sidebar_one')['block']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <div class="flex items-center text-center p-4 bg-<?php echo e($row['colour']); ?>"><?php echo e($row['text']); ?></div>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                                </div>
                                <div class="bg-white p-6 mb-6">
                                    <h3 class="font-semibold mb-4"><?php echo e(get_field('sidebar_two')['title']); ?></h3>

                                    <img src="<?php echo e(get_field('sidebar_two')['graphic']); ?>" alt="Graph">
                                </div>

                                </div>
                            </div>

                         </div>
                    </div>
                </div>


                <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-dgreen">
                        <?php echo e(the_field('second_block')); ?>

                    </div>
                </div>
            </div>
        </main>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>