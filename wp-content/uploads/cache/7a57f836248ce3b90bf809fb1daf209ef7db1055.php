<?php

$the_query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'private'
]);

?>
<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <main class="site-content text-grey text-lg"  >
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
                        <div class="w-full border-l-4 border-blue pl-4 mb-12">
                            <h1 class="mb-4 font-serif text-4xl lg:text-5xl">Document Repository</h1>
                            <div class="font-semibold">
                                <p>Buckthorns shared storage space is a key part of our document management system (DMS) that serves your business</p>
                            </div>
                        </div>
                        <?php if(post_password_required()): ?>
         <?php echo get_the_password_form(); ?>

                        <?php else: ?>



                        <div class="lg:flex items-start">
                            <div class="w-full text-lg lg:w-7/12 mb-12 lg:mb-0 lg:pr-24">
                        <?php while($the_query->have_posts()): ?> <?php $the_query->the_post() ?>

                        <div class="w-full flex justify-end items-end bg-white border-l-4 border-dgreen p-4 pl-6 mb-4 repo-panel relative">
                            <a class="absolute inset-0 z-10" href="/download.php?file=<?php echo e(get_field('file')['filename']); ?>">&nbsp;</a>
                                <div class="w-11/12">
                                    <h3 class="font-serif font-semibold text-2xl lg:text-3xl"><?php echo get_the_title(); ?></h3>
                                    <div class="font-semibold text-sm">
                                        <p class="mb-1"><time class="inline-block updated" datetime="<?php echo e(get_post_time('c', true)); ?>" ><?php echo e(get_the_date()); ?></time></p>
                                    </div>
                                    <p class="mb-0"><?php echo get_the_content(); ?></p>
                                </div>
                                <div class="w-1/12"><img alt="" src="/assets/images/icon-pdf-dgreen.svg"></div>
                            </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="w-full p-6 mb-12 lg:mb-0 lg:w-5/12 bg-white">
                                <div class="w-full pl-6 border-l-4 border-blue">
                                    <h2 class="mb-3 font-serif font-semibold text-2xl lg:text-3xl">Register for updates</h2>
                                    <div class="form register-form">
                                        <form action="/my-handling-form-page" method="post">
                                            <div class="w-full mb-2">
                                                <input class="w-full p-1" id="firstname" name="firstname" placeholder="First name" type="text">
                                            </div>
                                            <div class="w-full mb-2">
                                                <input class="w-full p-1" id="lastname" name="lastname" placeholder="Last name" type="text">
                                            </div>
                                            <div class="w-full mb-4">
                                                <input class="w-full p-1" id="mail" name="email" placeholder="eMail" type="email">
                                            </div>
                                            <div class="flex w-full mb-2">
                                                <div class="round">
                                                    <input id="checkbox" type="checkbox"> <label for="checkbox"></label>
                                                </div>
                                                <div class="text-sm ml-6 mb-4">
                                                    I consent to Buckthorn holding my information.
                                                </div>
                                            </div>
                                            <div>
                                                <button class="arrow-link font-bold text-grey pr-3" type="submit">Sign me up</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>


<script>

</script>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>