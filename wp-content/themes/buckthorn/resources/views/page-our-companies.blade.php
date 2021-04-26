@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <main class="site-content bg-img bg-img-3 text-grey text-base">
            <div class="white-opacity-strip mb-4 md:mb-12">
            </div>


            <div class="mx-auto max-w-screen-2xl">
                <div class="m-4 mb-12 flex flex-wrap">


                <div class="lg:w-5/12 p-6 md:py-12 mb-6 lg:mb-0 md:text-lg bg-white-trans">


                    <div class="w-full  pl-6 border-l-4 border-blue">
                        <div class="prose">
                            @php the_content() @endphp
                        </div>
                    </div>
                </div>


                <div class="w-full lg:w-7/12 lg:pl-6 md:text-lg">

                    <div class="grid md:grid-cols-2 gap-4 text-white font-semibold">
                            @php ($i = 0)
                            @while ( have_rows('company') ) @php (the_row())
                            @php ($i++)

                          <div class="text-center p-6 flex items-end bg-white hover:bg-{{ the_sub_field('colour') }} company-img company-{{$i}}">
                              <div class="company-content mx-auto text-sm">
                                <p>{{ the_sub_field('description') }}</p>
                                <a href="#company-{{$i}}-popup" class="cta-lines open-popup-link">Find out more</a>
                              </div>
                          </div>
                          <style>
                            .company-{{$i}}{
                                background-image: url({{ get_sub_field('image')['colour'] }});
                            }

                            .company-{{$i}}:hover {
                                background-image: url({{ get_sub_field('image')['white_out'] }});
                            }
                          </style>


                          @endwhile


                      </div>

                </div>

</div>

@php ($i = 0)
                            @while ( have_rows('company') ) @php (the_row())
                            @php ($i++)
<!-- POPUP -->
<div id="company-{{$i}}-popup" class="white-popup mfp-hide">
    <div class="lg:flex">
        <div class="w-full py-12 px-6 md:p-0 lg:w-7/12">
            <div class="pr-4 md:pt-12 md:pb-0 md:px-12">
                <div class="mb-4">
                    <ig src="{{ get_sub_field('image')['colour'] }}" alt="{{ the_sub_field('title')}}" />
                </div>
                <div class="prose">
                        {{ the_sub_field('content')}}
                </div>

                @if (get_sub_field('numbers'))
                <h3 class="text-xl lg:text-3xl mb-4 font-serif">By the numbers:</h3>

                <div class="w-full grid grid-flow-col grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 gap-4 text-center font-serif mb-4">
                    @foreach( get_sub_field('numbers') as $number)
                    <div class="flex-1">
                        <span class="text-blue text-3xl md:text-6xl block">{{$number['number']}}</span>
                        <span class="block font-semibold font-sans text-sm">{{$number['description']}}</span>
                    </div>
                    @endforeach

                </div>
                @endif
            </div>

            @while ( have_rows('bottom_block') ) @php(the_row())
                        @if( get_row_layout() == 'quotation' )
            <div class="md:flex bg-blue text-white p-6 md:p-0">
                <div class="md:flex-grow border-l-4 border-white p-4 md:my-3 md:ml-4">
                    <div class="text-xl font-semibold mb-6"><p>{{get_sub_field('quotation')}}</p></div>
                    <div class="font-semibold font-serif">
                        <p class="leading-snug"><span class="text-3xl leading-none block">{{get_sub_field('citation')}}</span>
                        <span class="text-base font-normal">{{get_sub_field('job_title')}}</span>
                        </p>
                   </div>
                </div>

                <div class="hidden md:block flex-none ">
                    <img src="{{get_sub_field('image')}}" alt="Allan">
                </div>
            </div>
            @endif
            @if( get_row_layout() == 'images' )

            <div class="flex w-full p-6">
                @foreach (get_sub_field('images') as $image)
                            <img src="{{$image['image']}}" alt="" class="flex-1 w-1/3 border-2 border-white"/>
                @endforeach
            </div>
            @endif
            @endwhile

        </div>

        <div class="w-full lg:w-5/12 bg-grey p-6 md:p-12">
           <div class="prose">
               {{ the_sub_field('secondary_content')}}
           </div>
        </div>


    </div>

</div>

@endwhile





        </main>
  @endwhile
@endsection
