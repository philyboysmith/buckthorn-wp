<?php $__env->startSection('content'); ?>
<main class="site-content text-grey text-lg">
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
                    <div class="lg:flex items-start">
                        <div class="w-full text-lg lg:w-7/12 mb-12 lg:mb-0 lg:pr-24">
                            <?php while(have_posts()): ?> <?php the_post() ?>
                            <div class="w-full flex justify-end items-end bg-white border-l-4 border-dgreen p-4 pl-6 mb-4 repo-panel relative">
                            <a class="absolute inset-0 z-10" href="<?php echo e(the_field('file')); ?>">&nbsp;</a>
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
                                    <form class="js-cm-form form" id="subForm" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="191722FC90141D02184CB1B62AB3DC26DA788FDF4D3189DEF9FE2B7209C8920850712F7B2DC01878762DB37C47641B52D1D01E7906448D77249703377A978260">
                                        <div>
                                            <div class="w-full mb-2"><input required placeholder="First Name" id="fieldjlliluj" class="p-1 w-full" maxlength="200" name="cm-f-jlliluj"></div>
                                            <div class="w-full mb-2"><input required placeholder="Last Name" id="fieldjlliluy" class="p-1 w-full" maxlength="200" name="cm-f-jlliluy"></div>
                                            <div class="w-full mb-2"><input required autocomplete="Email" placeholder="Email" class="js-cm-email-input qa-input-email p-1 w-full" id="fieldEmail" maxlength="200" name="cm-ykjjzi-ykjjzi" required="" type="email"></div>
                                            <div class="my-4 flex items-center outline-none round md:mr-16">
                                                <input id="gdpr" type="checkbox" name="essential" required class="opacity-0" style="visibility: visible!important"> <label for="gdpr" class="wpcf7-list-item-label "></label>
                                                <span class="pl-8 inline-block flex-1">I consent to Buckthorn holding my information.</span>
                                            </div>
                                        </div><button type="submit" class="arrow-link font-bold text-grey pr-3 mt-4">Sign me up</button>
                                    </form>
                                </div>
                                <script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


<div id="myModal" class="white-popup mfp-hide">
        <div class="p-4 md:p-12">
        <div class="w-full border-l-4 border-blue pl-4 md:pl-12">
        <div class="prose">
                                        <?php echo e(the_field('disclaimer')); ?>

                                        <button class="arrow-link font-bold text-grey pr-3 mt-4" onclick="window.approved()">I have read and understood the above conditions</button>
                                        </div>
        </div>
        </div>
    </div>

    <?php if($_COOKIE['disclaimer'] != '1') { ?>
<script>

function approved() {
    var theDate = new Date();
    var oneYearLater = new Date( theDate.getTime() + 31536000000 );
    window.document.cookie = "disclaimer=1; expires=" + oneYearLater + "; path=/";
    jQuery.magnificPopup.close();
}
jQuery(document).ready(function ($) {
console.log('gdfgdf')
$.magnificPopup.open({
    items: {
        src: '#myModal'
    },
    showCloseBtn:false,
    type: 'inline'
      });
    });
    </script>
    <?php } ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>