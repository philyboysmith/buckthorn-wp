<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <main class="site-content text-grey text-lg"  >
    <picture>
    <source media="(orientation: landscape)" srcset="<?php echo e(the_field('desktop')); ?>">
    <source media="(orientation: portrait)" srcset="<?php echo e(the_field('portrait')); ?>">
        <img src="<?php echo e(the_field('desktop')); ?>" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
            <div class="white-opacity-strip mb-4 md:mb-12">
            </div>
            <div class="mx-auto max-w-screen-2xl">
                <div class="m-4 mb-12 flex flex-wrap">
                        <div class="lg:w-5/12 p-6 md:py-12 mb-6 lg:mb-0 md:text-lg bg-white-trans">
                        <div class="w-full  pl-6 border-l-4 border-<?php echo e(the_sub_field('colour')); ?>">
                        <div class="prose">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
                    <div class="w-full lg:w-7/12 lg:pl-6 md:text-lg flex flex-col justify-between">
                    <div class="grid md:grid-cols-2 gap-4 text-white font-semibold">
                            <?php ($i = 0); ?>
                            <?php while( have_rows('company') ): ?> <?php (the_row()); ?>
                            <?php ($i++); ?>
                          <a  id="company-<?php echo e($i); ?>" href="#company-<?php echo e($i); ?>-popup" class="relative open-popup-link overflow-hidden text-center p-6 flex items-end bg-white hover:text-white hover:bg-<?php echo e(the_sub_field('colour')); ?> company-img company-<?php echo e($i); ?> reveal">
<?php if(get_sub_field('exited')): ?>
<div class="exited">Exited</div>
<?php endif; ?>
                              <div class="company-content mx-auto text-sm">
                                <p><?php echo e(the_sub_field('description')); ?></p>
                              </div>
</a>
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
                            <?php ($col = get_sub_field('colour') ); ?>
<!-- POPUP -->
<div id="company-<?php echo e($i); ?>-popup" class="white-popup mfp-hide relative">
<div class="absolute top-0 right-0 flex pt-2">
<span onclick="jQuery.magnificPopup.instance.prev()" class="p-2 text-lgcolor7 cursor-pointer hover:text-<?php echo e(the_sub_field('colour')); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.05 33.55" class="h-6"><g id="b3730093-63c2-47f3-b4ec-893cd3dfc476" data-name="Layer 2"><g id="eaa71ef0-575b-41e6-a8ed-4107639e33d5" data-name="menu and footer"><path d="M17.55,33.55A2.2,2.2,0,0,1,16,32.9l-16-16L16.27.65A2.21,2.21,0,1,1,19.4,3.78L6.26,16.92,19.12,29.77a2.22,2.22,0,0,1-1.57,3.78Z" style="fill:currentColor"/></g></g></svg></span>
    <button onclick="jQuery.magnificPopup.instance.close()" class=" p-2 text-lgcolor7 cursor-pointer hover:text-<?php echo e(the_sub_field('colour')); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.65 33.55" class="h-6"><g id="f3f264cb-6f95-4621-aeb1-b8ed316d6837" data-name="Layer 2"><g id="e166d7d7-9c91-45aa-a216-b6eb7ac00402" data-name="menu and footer"><path d="M19.87,16.92,33,3.78A2.21,2.21,0,1,0,29.88.65L17,13.56,4.06.65A2.21,2.21,0,0,0,.93,3.78L13.79,16.63.65,29.77a2.22,2.22,0,0,0,1.56,3.78,2.24,2.24,0,0,0,1.57-.65L16.69,20,29.59,32.9a2.24,2.24,0,0,0,1.57.65,2.22,2.22,0,0,0,1.56-3.78Z" style="fill:currentColor"/></g></g></svg></button>
<span onclick="jQuery.magnificPopup.instance.next()" class=" p-2 text-lgcolor7 cursor-pointer hover:text-<?php echo e(the_sub_field('colour')); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.05 33.55" class="h-6"><g id="e31aad34-8db5-48ab-b864-8f5df91c78eb" data-name="Layer 2"><g id="a0316c41-9883-4677-9bcb-3b8cc0c7ca40" data-name="menu and footer"><path d="M2.21,33.55A2.22,2.22,0,0,1,.65,29.77L13.79,16.63.93,3.78A2.21,2.21,0,0,1,4.06.65l16,16L3.78,32.9A2.24,2.24,0,0,1,2.21,33.55Z" style="fill:currentColor"/></g></g></svg></span>
</div>
    <div class="lg:flex">
        <div class="w-full py-12 px-6 md:p-0 lg:w-7/12 flex flex-col justify-between">
            <div class="pr-4 md:pt-12 md:pb-0 md:px-12">
                <div class="mb-4">
                    <img src="<?php echo e(get_sub_field('image')['popup']); ?>" alt="<?php echo e(the_sub_field('title')); ?>" class="h-16 md:h-auto w-auto"/>
                </div>
                <div class="prose">
                        <?php echo e(the_sub_field('body')); ?>

                </div>
                <?php if(get_sub_field('numbers')): ?>
                <h3 class="text-xl lg:text-3xl mb-4 font-serif">By the numbers:</h3>
                <div class="w-full grid grid-flow-col grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 gap-4 text-center font-serif mb-4">
                    <?php $__currentLoopData = get_sub_field('numbers'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex-1">
                        <span class="text-<?php echo e($col); ?> text-3xl md:text-6xl block"><?php echo e($number['number']); ?></span>
                        <span class="block font-semibold font-sans text-sm"><?php echo e($number['description']); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
            <?php while( have_rows('bottom_block') ): ?> <?php (the_row()); ?>
                        <?php if( get_row_layout() == 'quotation' ): ?>
            <div class="md:flex bg-<?php echo e($col); ?> text-white p-6 md:p-0">
                <div class="md:flex-grow border-l-4 border-white p-4 md:my-3 md:ml-4">
                    <div class=" mb-6"><?php echo get_sub_field('quotation'); ?></p></div>
                    <div class="font-semibold font-serif">
                        <p class="leading-snug"><span class="text-3xl leading-none block"><?php echo e(get_sub_field('citation')); ?></span>
                        <span class="text-lg font-normal"><?php echo e(get_sub_field('job_title')); ?></span>
                        </p>
                   </div>
                </div>
<?php if(get_sub_field('image')): ?>
                <div class="block flex-none ">
                    <img src="<?php echo e(get_sub_field('image')); ?>" alt="Allan" class="max-w-sm w-full">
                </div>
<?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if( get_row_layout() == 'images' ): ?>
            <div class="flex w-full py-6 md:px-6">
                <?php $__currentLoopData = get_sub_field('images'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex-1 w-1/3">
                    <img src="<?php echo e($image['image']); ?>" alt="" class="w-full border-2 border-white"/>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <?php if( get_row_layout() == 'video' ): ?>
            <div class="md:flex bg-<?php echo e($col); ?> text-white md:p-0">
                <div class="block md:w-1/3 ">
                <a href="<?php echo e(get_sub_field('url')); ?>" class="mfp-iframe"><img src="<?php echo e(get_sub_field('thumbnail')); ?>" alt="" class="w-full"></a>
                </div>
                <div class="md:w-2/3 p-6">
                    <div class="font-semibold border-r-1">

                        <p class="leading-snug"><?php echo e(get_sub_field('text')); ?></p>
                   </div>
                </div>

            </div>
            <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <div class="w-full lg:w-5/12 bg-grey p-6 md:p-12 flex flex-col">
           <div class="prose flex-1">
               <?php echo e(the_sub_field('secondary_content')); ?>

           </div>
           <?php if( get_sub_field('website_url') ): ?>
           <a class="mt-auto pt-8 font-semibold" href="<?php echo e(the_sub_field('website_url')); ?>"><?php echo e(str_replace("https://", "", get_sub_field('website_url'))); ?></a>
           <?php endif; ?>
        </div>
</div>
</div>
<?php endwhile; ?>

        </main>
  <?php endwhile; ?>


 <script>
        var h = location.hash;
        console.log(h);
        jQuery(document).ready(function ($) {
            if (h) {
                jQuery("a[href='" + h +"']").click();
            }
        });
     </script>

<style>
.exited 
{
    position: absolute;
    top: 0;
    right: 0;
    padding: 0 4em;
    background: #c5c5c4;
    transform: rotate(45deg) translate(30%, 0);
    /* transform-origin: top right; */
    color: black;
    font-weight: 400;
    font-size: 16px;
    font-family: Abhaya Libre, sans-serif;
}
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>