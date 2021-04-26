@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <main class="site-content bg-basecolor8 text-grey text-base parallax-window" data-parallax="scroll" >
    <picture class="parallax-slider">
    <source media="(orientation: portrait)" srcset="/assets/images/backgrounds/bg-1s.jpg">
    <source media="(orientation: landscape)" srcset="/assets/images/backgrounds/bg-1.jpg">
        <img src="/assets/images/backgrounds/bg-1s.jpg" alt="" class="w-full h-full object-cover fixed md:absolute inset-0" style="z-index: -1000">
    </picture>
    <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                        <div class="prose">
                            @php the_content() @endphp
                        </div>
                    </div>
                </div>
            </div>
            @if (have_rows('blocks'))
            <div class="bg-white-trans mt-auto">
                <div class="m-auto max-w-screen-2xl p-4 pt-12 leading-snug ">
                    <div class="mb-2">
                        <div class="w-full max-w-5xl md:flex ">

                        @while(have_rows('blocks')) @php(the_row())

                            <div class="w-full md:flex md:w-1/3 mb-4 invisible reveal relative">
                                <a href="{{get_sub_field('link')->post_name}}" class="absolute inset-0"></a>
                                <div class="@if(get_sub_field('image') ) flex @endif flex-1 bg-white pl-4 mr-4 border-l-4 border-{{ the_sub_field('colour') }}">
                                    <h3 class="flex-grow text-lg leading-snug font-medium  p-2 ">
                                        {{ the_sub_field('title') }}
                                    </h3>
                                    @if(get_sub_field('image') )
                                    <img alt="{{ the_sub_field('title') }}" class="h-40 object-cover" src="{{ the_sub_field('image') }}">
                                    @endif
                                    <p class="px-2">
                                        {{ the_sub_field('body') }}
                                    </p>
                                    @if(!get_sub_field('image') )
                                    <div class=" px-2 pb-2 flex items-center">
                                        <a class="arrow-link font-bold text-grey pr-3" href="">
                                            Find out how
                                        </a>
                                    </div>
                                    @endif

                                </div>
                            </div>
                            @endwhile
                    </div>
                </div>
            </div>
            @endif
    </main>
  @endwhile
@endsection
