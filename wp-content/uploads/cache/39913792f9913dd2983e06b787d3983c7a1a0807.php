<?php
$post = get_post(517);
?>

<?php $__env->startSection('content'); ?>
  <main class="site-content text-grey text-lg"  >

            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-blue">

                        <div class="prose">
                      <?php echo $post->post_content; ?>

                        </div>
                    </div>
                </div>
            </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>