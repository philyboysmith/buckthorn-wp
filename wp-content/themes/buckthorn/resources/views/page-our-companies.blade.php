@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <style>

            .company-img {
                position: relative;
                background-repeat: no-repeat;
                background-position: center center;
                transition:all ease-in-out 0.5s;
                min-height:320px;
            }

            .company-1 {
                background-image: url(/dist/assets/images/logos/ashtead-coloured.png);
            }

            .company-1:hover {
                background-color:#273885;
                background-image: url(/dist/assets/images/logos/ashtead-white.png);
            }


            .company-2 {
                background-image: url(/dist/assets/images/logos/ashtead-coloured.png);
            }

            .company-2:hover {
                background-color:orange;
                background-image: url(/dist/assets/images/logos/ashtead-white.png);
            }

            .company-3 {
                background-image: url(/dist/assets/images/logos/ashtead-coloured.png);
            }

            .company-3:hover {
                background-color:#007653;
                background-image: url(/dist/assets/images/logos/ashtead-white.png);
            }


            .company-4 {
                background-image: url(/dist/assets/images/logos/ashtead-coloured.png);
            }

            .company-4:hover {
                background-color:#39869B;
                background-image: url(/dist/assets/images/logos/ashtead-white.png);
            }


        </style>
  <main class="site-content bg-img bg-img-3 text-grey text-base">
            <div class="white-opacity-strip mb-4 md:mb-12">
            </div>


            <div class="mx-auto max-w-screen-2xl">
                <div class="m-4 mb-12 flex flex-wrap">


                <div class="lg:w-5/12 p-6 md:py-12 mb-6 lg:mb-0 md:text-lg bg-white-trans">


                    <div class="w-full  pl-6 border-l-4 border-blue">
                        @php the_content()
                    </div>
                </div>


                <div class="w-full lg:w-7/12 lg:pl-6 md:text-lg">

                    <div class="grid md:grid-cols-2 gap-4 text-white font-semibold">
                          <div class="text-center p-6 flex items-end bg-white company-img company-1">
                              <div class="company-content mx-auto text-sm">
                                <p>Solutions for the offshore energy industry.</p>
                                <a href="#company-1-popup" class="cta-lines open-popup-link">Find out more</a>
                              </div>
                          </div>

                          <div class="text-center p-6 flex items-end bg-white company-img company-2">
                              <div class="company-content mx-auto text-sm">
                                <p>Solutions for the offshore energy industry.</p>
                                <a href="#company-2-popup" class="cta-lines open-popup-link">Find out more</a>
                              </div>
                          </div>

                          <div class="text-center p-6 flex items-end bg-white company-img company-3">
                              <div class="company-content mx-auto text-sm">
                                <p>Solutions for the offshore energy industry.</p>
                                <a href="" class="cta-lines">Find out more</a>
                              </div>
                          </div>

                          <div class="text-center p-6 flex items-end bg-white company-img company-4">
                              <div class="company-content mx-auto text-sm">
                                <p>Solutions for the offshore energy industry.</p>
                                <a href="" class="cta-lines">Find out more</a>
                              </div>
                          </div>
                      </div>

                </div>

</div>
<!-- POPUP -->
<div id="company-1-popup" class="white-popup mfp-hide">
    <div class="lg:flex">
        <div class="w-full py-12 px-6 md:p-0 lg:w-7/12">
            <div class="pr-4 md:pt-12 md:pb-0 md:px-12">
                <img src="/assets/images/logos/ashtead-coloured.png" alt="Ashtead" class="mb-4">
                <h3 class="text-xl lg:text-3xl mb-4 font-serif">Ashtead Technology is a leading global provider of technologically-advanced subsea solutions, tools and systems.</h3>
                <p>We strive to be the most comprehensive provider of rental, management and consultancy services in subseatechnology, delivering what the industry needs to grow and succeed.In addition to providing subsea survey, mechanical and ROV tooling equipment, we offer technical consultancyand custom-built solutions throughout the asset life-cycle, across a broad range of markets including the oil and gas and renewable energy sectors.</p>

                <h3 class="text-xl lg:text-3xl mb-4 font-serif">By the numbers:</h3>

                <div class="w-full grid grid-flow-col grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 gap-4 text-center font-serif mb-4">
                    <div class="flex-1">
                        <span class="text-blue text-3xl md:text-6xl block">190</span>
                        <span class="block font-semibold font-sans text-sm">staff worldwide</span>
                    </div>
                    <div class="flex-1">
                        <span class="text-blue text-3xl md:text-6xl block">9</span>
                        <span class="block font-semibold font-sans text-sm">regional hubs</span>
                    </div>
                    <div class="flex-1">
                        <span class="text-blue text-3xl md:text-6xl block">3k</span>
                        <span class="block font-semibold font-sans text-sm">years of experience</span>
                    </div>
                    <div class="flex-1">
                        <span class="text-blue text-3xl md:text-6xl block">$140m</span>
                        <span class="block font-semibold font-sans text-sm">rental fleet</span>
                    </div>
                </div>
            </div>

            <div class="md:flex bg-blue text-white p-6 md:p-0">
                <div class="md:flex-grow border-l-4 border-white p-4 md:my-3 md:ml-4">
                    <div class="text-xl font-semibold mb-6"><p>"Interesting quote from Ashtead’s CEO, or a Buckthorn Partner, commenting on the journey so far...”</p></div>
                    <div class="font-semibold font-serif">
                        <p class="leading-snug"><span class="text-3xl leading-none block">Allan Pirie</span>
                        <span class="text-base font-normal">Job position</span>
                        </p>
                   </div>
                </div>

                <div class="hidden md:block flex-none ">
                    <img src="/assets/images/allan.jpg" alt="Allan">
                </div>
            </div>

        </div>

        <div class="w-full lg:w-5/12 bg-grey p-6 md:p-12">
            <h3 class="text-3xl mb-4 font-serif">Our journey</h3>
            <p>Buckthorn and the Arab Petroleum InvestmentsCorporation (APICORP) acquired Ashtead Technology Limited (Ashtead) in April 2016. Since its launch in 1985,Ashtead has grown to become a leading independentprovider of subsea technology and services to the energy industry with a strong customer base built on trust andquality.</p>
            <p>Since Buckthorn acquired Ashtead, the following acquisitions have been completed:</p>
            <table class="w-full table-auto">
                <tbody>
                <tr class="border-b border-grey">
                  <td class="py-2 pr-2">2019</td>
                  <td class="py-2">Underwater Cutting Solutions</td>
                </tr>
                <tr class="border-b border-grey">
                  <td class="py-2 pr-2">2019</td>
                  <td class="py-2">Forum Subsea Rentals</td>
                </tr>
                <tr class="border-b border-grey">
                  <td class="py-2 pr-2">2019</td>
                  <td class="py-2">Aquatech Solutions</td>
                </tr>
                <tr class="border-b border-grey">
                  <td class="py-2 pr-2">2018</td>
                  <td class="py-2">Welaptega</td>
                </tr>
              </tbody>
            </table>
        </div>


    </div>

</div>







        </main>
  @endwhile
@endsection
