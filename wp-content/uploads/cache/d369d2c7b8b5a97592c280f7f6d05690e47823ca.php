<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <main class="site-content text-grey text-lg"  >
    <picture>
    <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
    <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
        <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
        <div class="white-opacity-strip mb-4 md:mb-12"></div>
        <div class="mx-auto max-w-screen-2xl w-full">
            <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
                <div class="lg:flex flex-wrap mb-12">
                    <div class="w-full">
                        <div class="lg:flex">
                            <div class="pl-6 lg:pr-12 mb-12 lg:mb-0 border-l-4 border-blue">
                                <div class="lg:flex">
                                    <div class="w-full lg:w-5/12 pr-4">
                                        <div class="prose">
                                            <?php echo e(the_content()); ?>

                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex contact-icon contact-address">
                                                <span></span>
                                                <p><?php echo e(the_field('address')); ?></p>
                                            </div>
                                            <div class="flex contact-icon contact-phone">
                                                <span></span>
                                                <p><?php echo e(the_field('phone_number')); ?></p>
                                            </div>
                                            <div class="flex contact-icon contact-email">
                                                <span class="flex-shrink-0"></span>
                                                <p><a href="mailto:<?php echo e(the_field('email')); ?>" class="hover:text-green"><?php echo e(the_field('email')); ?></a></p>
                                            </div>
                                        </div>
                                        <!-- <div class="w-full mb-6">
                                            <h5 class="mb-2"><strong>For media contacts</strong></h5>
                                            <div class="flex contact-icon contact-phone">
                                                <span></span>
                                                <p>+44 (0)7834 335 677</p>
                                            </div>
                                            <div class="flex contact-icon contact-email">
                                                <span class="flex-shrink-0"></span>
                                                <p><a href="mailto:buckthornpartners@grayling.com" class="hover:text-green">buckthornpartners@grayling.com</a></p>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="w-full mb-12 lg:mb-0 lg:w-7/12">
                                    <a href="<?php echo e(the_field('map_link_url')); ?>" target="_blank">
                                        <div class="w-full"><img alt="" src="<?php echo e(the_field('map')); ?>" class="w-full"></div>
                                    </a>
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12">
                                    <h2 class="mb-3 font-serif font-semibold text-2xl lg:text-3xl">Get in touch</h2>
                                    <div class="form contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="400" title="Contact form"]'); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>