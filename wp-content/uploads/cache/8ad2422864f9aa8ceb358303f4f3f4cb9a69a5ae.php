<?php
/*
Template Name: Alice
*/


?>


<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <script src="//unpkg.com/alpinejs" defer></script>

  <main class="site-content text-grey text-lg w-full"  >
    <picture>
    <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
    <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
        <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans w-full">
            <?php if(isset($_POST['action'])): ?>
            <div class="flex flex-wrap w-full">
                <div class="lg:w-1/3">
                  <h1 class="text-4xl font-bold sticky" style="top: 150px;">Important Disclaimer
                  </h1>
                </div>
                <div class="lg:w-2/3 w-full lg:pl-6 flex-1">
                    <div class="prose">
                        <?php $__currentLoopData = get_field('categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div x-data="{ open: false }" class=" border-b  border-b ">
                            <button @click="open = !open" class="w-full flex items-center justify-between text-left focus:outline-none appearance-none py-4">
                              <div class="text-2xl font-bold font-serif"><?php echo e($item['title']); ?></div>
                              <svg 
                                class="w-6 h-6 transform transition-transform duration-200"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke="currentColor"
                              >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                              </svg>
                            </button>
                            <div 
                              x-show="open"
                              x-transition:enter="transition ease-out duration-200"
                              x-transition:enter-start="opacity-0 transform -translate-y-2"
                              x-transition:enter-end="opacity-100 transform translate-y-0"
                              x-transition:leave="transition ease-in duration-150"
                              x-transition:leave-start="opacity-100 transform translate-y-0"
                              x-transition:leave-end="opacity-0 transform -translate-y-2"
                              class="mt-2 space-y-2 pb-4"
                            >
                              <?php $__currentLoopData = $item['files']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($file['file']['url']); ?>" target="_blank" class="block text-primary hover:text-blue transition-colors duration-200">
                                  <?php echo e($file['file']['title']); ?>

                                </a>
                                <a href="<?php echo e($file['file']['url']); ?>" target="_blank" class="block text-primary hover:text-blue transition-colors duration-200">
                                  <?php echo e($file['file']['title']); ?>

                                </a>
                                <a href="<?php echo e($file['file']['url']); ?>" target="_blank" class="block text-primary hover:text-blue transition-colors duration-200">
                                  <?php echo e($file['file']['title']); ?>

                                </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <div class="flex flex-wrap w-full">
                    <div class="lg:w-1/3">
                      <h1 class="text-4xl font-bold sticky" style="top: 150px;">Important Disclaimer
                      </h1>
                    </div>
                    <div class="lg:w-2/3 w-full pl-6 border-l-4 border-blue">


                        <div class="prose">
                        <?php the_content() ?>
                        
                        </div>

                        <form method="POST" class="mt-8 flex gap-4">

                            <button type="submit" name="action" value="accept" class=" bg-brand hover:bg-blue hover:text-white  text-lgcolor7 p-2 mb-3 rounded-full text-xs  uppercase border-2 border-basecolor7 w-full text-center hover:border-blue">
                                I Accept
                            </button>
                            <a href="/" class=" bg-brand hover:bg-blue hover:text-white  text-lgcolor7 p-2 mb-3 rounded-full text-xs  uppercase border-2 border-basecolor7 w-full text-center hover:border-blue">
                                Decline
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <?php endif; ?>
    </main>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>