@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <main class="site-content text-grey text-base parallax-window" data-parallax="scroll" >
    <picture class="parallax-slider">
    <source media="(orientation: landscape)" srcset="{{ the_field('desktop')}}">
    <source media="(orientation: portrait)" srcset="{{ the_field('portrait')}}">
        <img src="{{ the_field('desktop')}}" alt="" class="w-full h-full object-cover fixed md:absolute inset-0" style="z-index: -1000">
    </picture>
            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                      @php the_content() @endphp
                    </div>
                </div>
            </div>
    </main>
  @endwhile
@endsection
