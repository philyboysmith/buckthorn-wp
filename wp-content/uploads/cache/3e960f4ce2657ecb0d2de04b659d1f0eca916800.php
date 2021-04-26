<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <main class="site-content bg-img bg-img-4 text-grey text-base">
        <div class="white-opacity-strip mb-4 md:mb-12"></div>
        <div class="mx-auto max-w-screen-2xl">
            <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
                <div class="lg:flex flex-wrap mb-12">
                    <div class="w-full">
                        <div class="lg:flex">
                            <div class="w-full lg:w-3/12">
                                <div class="pl-6 border-l-4 border-dgreen pr-4">
                                    <div class="prose">
                                        <?php the_content() ?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-9/12">
                                <div class="grid grid-flow-row sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-6">
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/mark-chaichian.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Mark Chaichian</h3>
                                                <p class="text-xs mb-0">Founding Partner</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-2-popup"><img alt="" src="/assets/images/joseph-connolly.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Joseph Connolly</h3>
                                                <p class="text-xs mb-0">Founding Partner</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/nicholas-gee.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Nicholas Gee</h3>
                                                <p class="text-xs mb-0">Founding Partner</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/lord-philip-hammond.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Lord Philip Hammond</h3>
                                                <p class="text-xs mb-0">Partner</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/neil-hartley.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Neil Hartley</h3>
                                                <p class="text-xs mb-0">Partner</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/lord-colin-moynihan.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Lord Colin Moynihan</h3>
                                                <p class="text-xs mb-0">Chairman</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/rob-willings.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Rob Willings</h3>
                                                <p class="text-xs mb-0">Partner</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="team-thumb bg-white">
                                        <a class="open-popup-link" href="#team-1-popup"><img alt="" src="/assets/images/nadine-fletcher-patel.jpg">
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 border-blue leading-snug">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">Nadine Fletcher-Patel</h3>
                                                <p class="text-xs mb-0">Associate</p>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- POP 1 -->
    <div class="white-popup mfp-hide max-w-lg" id="team-1-popup">
        <div class="">
            <div class="w-full p-0">
                <div class="md:pb-0">
                    <img alt="" src="/assets/images/mark-chaichian.jpg">
                    <div class="p-6 bg-blue text-white -mt-4 relative z-10">
                        <div class="border-l-2 pl-2">
                            <h3 class="font-serif text-2xl leading-none mb-0 font-semibold">Mark Chaichian</h3>
                            <p class="text-base mb-0 font-semibold">Founding Partner</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-grey p-6">
                <h3 class="text-3xl mb-4 font-serif">Prior to Buckthorn Partners, Mark worked atOne Equity Partners (“OEP”) focusing oninvestments in the supply chain to theenergy sector.</h3>
                <p>Mark has worked on a signiﬁcant number oftransactions in the energy and oil & gas sectors withconglomerates, independents and many other privateand public businesses. Before joining OEP, Mark workedat Marble Bar Asset Management, Clipper WindpowerPlc and Morgan Stanley. Mark qualiﬁed as a charteredaccountant at Andersen in the Energy and Resourcesgroup. Mark was a member of the British OlympicAssociation Audit Committee. He holds a BSc inChemistry from Bath University.</p>
            </div>
        </div>
    </div><!-- POP 1 -->
    <div class="white-popup mfp-hide max-w-lg" id="team-2-popup">
        <div class="">
            <div class="w-full p-0">
                <div class="md:pb-0">
                    <img alt="" src="/assets/images/joseph-connolly.jpg">
                    <div class="p-6 bg-blue text-white -mt-4 relative z-10">
                        <div class="border-l-2 pl-2">
                            <h3 class="font-serif text-2xl leading-none mb-0 font-semibold">Joseph Connolly</h3>
                            <p class="text-base mb-0 font-semibold">Founding Partner</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-grey p-6">
                <h3 class="text-3xl mb-4 font-serif">Prior to Buckthorn Partners, Mark worked atOne Equity Partners (“OEP”) focusing oninvestments in the supply chain to theenergy sector.</h3>
                <p>Mark has worked on a signiﬁcant number oftransactions in the energy and oil & gas sectors withconglomerates, independents and many other privateand public businesses. Before joining OEP, Mark workedat Marble Bar Asset Management, Clipper WindpowerPlc and Morgan Stanley. Mark qualiﬁed as a charteredaccountant at Andersen in the Energy and Resourcesgroup. Mark was a member of the British OlympicAssociation Audit Committee. He holds a BSc inChemistry from Bath University.</p>
            </div>
        </div>
    </div>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>