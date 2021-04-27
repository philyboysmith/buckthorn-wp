@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <main class="site-content text-grey text-base parallax-window" data-parallax="scroll" >
    <picture class="parallax-slider">
    <source media="(orientation: landscape)" srcset="{{ the_field('desktop')}}">
    <source media="(orientation: portrait)" srcset="{{ the_field('portrait')}}">
        <img src="{{ the_field('desktop')}}" alt="" class="w-full h-full object-cover fixed md:absolute inset-0" style="z-index: -1000">
    </picture>
            <div class="white-opacity-strip mb-12">
            </div>


            <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-blue">

                        <div class="prose">

                        @php the_content() @endphp
                        </div>
                        <div class="md:flex">
                            <div class="w-full lg:w-7/12 mb-8 lg:mb-0 text-base lg:mr-12">
                                <div class="mb-4">
                                    {{ the_field('first_block_body')}}
                                </div>
                            </div>

                            <div class="w-full lg:w-5/12 text-base">
                                <div class="bg-white p-6 mb-6 reveal">
                                  <h3 class="font-semibold mb-4">{{get_field('sidebar_one')['title']}}</h3>
                                  <div class="grid md:grid-cols-2 gap-4 text-white font-semibold">
                                      @foreach (get_field('sidebar_one')['block'] as $row)
                                      <div class="flex items-center text-center p-4 bg-{{$row['colour'] }}">{{$row['text'] }}</div>
                                      @endforeach
                                  </div>
                                </div>
                                <div class="bg-white p-6 mb-6 reveal">
                                    <h3 class="font-semibold mb-4">{{get_field('sidebar_two')['title']}}</h3>
                                    <img src="{{get_field('sidebar_two')['graphic']}}" alt="Graph">
                                </div>

                                </div>
                            </div>

                         </div>
                    </div>
                </div>


                <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-dgreen">
                        <div class="prose">
                            {{ the_field('second_block')}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
  @endwhile
@endsection
