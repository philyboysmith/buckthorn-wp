@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <main class="site-content text-grey text-lg"  >
    <picture>
    <source media="(orientation: landscape)" srcset="{{ the_field('desktop')}}">
    <source media="(orientation: portrait)" srcset="{{ the_field('portrait')}}">
        <img src="{{ the_field('desktop')}}" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
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
                        <div class="w-full max-w-5xl md:flex homepage-block">
@php($i = 0)
                        @while(have_rows('blocks')) @php(the_row())
@php($i++)

                            <div class="w-full md:flex md:w-1/3 mb-4 relative">
                                <a href="{{get_sub_field('link')}}" class="absolute inset-0 z-10"></a>
                                <div class="@if(get_sub_field('image') ) flex @endif flex-1 bg-white pl-4 mr-4 border-l-4 border-{{ the_sub_field('colour') }}">
                                    <h3 class="w-2/3 text-lg leading-snug font-medium  p-2 ">
                                        {{ the_sub_field('title') }}
                                    </h3>
                                    @if(get_sub_field('image') )
                                    <div class="w-1/3">
                                    <img alt="{{ the_sub_field('title') }}" class="h-40 object-contain w-full object-bottom" src="{{ the_sub_field('image') }}">
                                    </div>
                                    @endif
                                    <p class="px-2">
                                        {{ the_sub_field('body') }}
                                    </p>
                                    @if($i === 1)
                                    <div class=" px-2 pb-2 flex items-center">
                                        <span class="arrow-link font-bold text-grey pr-3" >
                                            Find out how
                                        </span>
                                    </div>
                                    @endif

@if($i === 2 )
                                    <div class=" px-2 pb-1 absolute bottom-1 left-6">
                                        <span class="arrow-link font-bold text-grey pr-3" >
                                            Find out more
                                        </span>
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
