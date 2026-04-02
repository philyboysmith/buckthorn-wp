<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
        <main class="site-content text-grey text-lg">
            <picture>
                <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
                <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
                <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed  inset-0"
                    style="z-index: -1000">
            </picture>
            <div class="white-opacity-strip mb-4 md:mb-12"></div>
            <div class="mx-auto max-w-screen-xl w-full">
                <div class="p-6 md:p-12 m-4 mb-12 bg-white-trans">
                    <div class="border-l-4 border-blue pl-6">
                        <div class="mb-8">
                            <h1 class="font-serif text-3xl md:text-4xl mb-2">Contact Us</h1>
                            <p class="text-lg text-gray-600">Get in touch with Buckthorn Partners LLP</p>
                        </div>

                        <div class="lg:flex lg:gap-12 mb-8">
                            
                            <div class="w-full lg:w-5/12 mb-8 lg:mb-0">
                                <h3 class="font-semibold text-xl mb-4">Buckthorn Partners LLP</h3>

                                <div class="space-y-4">
                                    <div class="flex contact-icon contact-address">
                                        <span class="flex-shrink-0"></span>
                                        <p><?php echo e(the_field('address')); ?></p>
                                    </div>
                                    <div class="flex contact-icon contact-phone">
                                        <span class="flex-shrink-0"></span>
                                        <p><?php echo e(the_field('phone_number')); ?></p>
                                    </div>
                                    <div class="flex contact-icon contact-email">
                                        <span class="flex-shrink-0"></span>
                                        <p><a href="mailto:<?php echo e(the_field('email')); ?>"
                                                class="hover:text-green"><?php echo e(the_field('email')); ?></a></p>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="w-full lg:w-7/12">
                                <h2 class="font-semibold text-xl mb-4">Get in touch</h2>
                                <div class="form contact-form">
                                    <?php echo do_shortcode('[contact-form-7 id="400" title="Contact form"]'); ?>

                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <a href="<?php echo e(the_field('map_link_url')); ?>" target="_blank">
                                <div class="w-full"><img alt="" src="<?php echo e(the_field('map')); ?>" class="w-full"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>