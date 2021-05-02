@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <main class="site-content text-grey text-lg"  >
    <picture>
    <source media="(orientation: landscape)" srcset="{{ the_field('desktop')}}">
    <source media="(orientation: portrait)" srcset="{{ the_field('portrait')}}">
        <img src="{{ the_field('desktop')}}" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
        <div class="white-opacity-strip mb-4 md:mb-12"></div>
        <div class="mx-auto max-w-screen-2xl">
            <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
                <div class="lg:flex flex-wrap mb-12">
                    <div class="w-full">
                        <div class="lg:flex">
                            <div class="w-full lg:w-3/12">
                                <div class="px-6 border-l-4 border-dgreen">
                                    <div class="prose">
                                        @php the_content() @endphp
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-9/12">
                                <div class="grid grid-flow-row sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-6">
                                @while ( have_rows('image') ) @php(the_row())
                                    <div class="team-thumb bg-white group overflow-hidden">
                                        <a class="open-popup-link" href="#team-{{ sanitize_title(get_sub_field('name')) }}"><div class="overflow-hidden"><img alt="" src="{{get_sub_field('headshot')}}" class="hover:scale-110 transform transition duration-400"></div>
                                        <div class="text-blue px-3 py-2 bg-white team-thumb-content">
                                            <div class="pl-3 border-l-2 leading-snug" style="border-color: currentColor">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold">{{get_sub_field('name')}}</h3>
                                                <p class="text-xs mb-0">{{get_sub_field('job_title')}}</p>
                                            </div>
                                        </div></a>
                                    </div>
                                @endwhile
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- POP 1 -->
    @while ( have_rows('image') ) @php(the_row())

    <div class="w-full mfp-hide" id="team-{{ sanitize_title(get_sub_field('name')) }}">
        <div class="relative">
            <div class="absolute top-0 right-0 flex pt-2">

            <span onclick="jQuery.magnificPopup.instance.prev()" class="p-2 text-lgcolor7 cursor-pointer hover:text-lgcolor6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.05 33.55" class="h-6"><g id="b3730093-63c2-47f3-b4ec-893cd3dfc476" data-name="Layer 2"><g id="eaa71ef0-575b-41e6-a8ed-4107639e33d5" data-name="menu and footer"><path d="M17.55,33.55A2.2,2.2,0,0,1,16,32.9l-16-16L16.27.65A2.21,2.21,0,1,1,19.4,3.78L6.26,16.92,19.12,29.77a2.22,2.22,0,0,1-1.57,3.78Z" style="fill:currentColor"/></g></g></svg></span>
                <button onclick="jQuery.magnificPopup.instance.close()" class=" p-2 text-lgcolor7 cursor-pointer hover:text-lgcolor6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.65 33.55" class="h-6"><g id="f3f264cb-6f95-4621-aeb1-b8ed316d6837" data-name="Layer 2"><g id="e166d7d7-9c91-45aa-a216-b6eb7ac00402" data-name="menu and footer"><path d="M19.87,16.92,33,3.78A2.21,2.21,0,1,0,29.88.65L17,13.56,4.06.65A2.21,2.21,0,0,0,.93,3.78L13.79,16.63.65,29.77a2.22,2.22,0,0,0,1.56,3.78,2.24,2.24,0,0,0,1.57-.65L16.69,20,29.59,32.9a2.24,2.24,0,0,0,1.57.65,2.22,2.22,0,0,0,1.56-3.78Z" style="fill:currentColor"/></g></g></svg></button>
            <span onclick="jQuery.magnificPopup.instance.next()" class=" p-2 text-lgcolor7 cursor-pointer hover:text-lgcolor6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.05 33.55" class="h-6"><g id="e31aad34-8db5-48ab-b864-8f5df91c78eb" data-name="Layer 2"><g id="a0316c41-9883-4677-9bcb-3b8cc0c7ca40" data-name="menu and footer"><path d="M2.21,33.55A2.22,2.22,0,0,1,.65,29.77L13.79,16.63.93,3.78A2.21,2.21,0,0,1,4.06.65l16,16L3.78,32.9A2.24,2.24,0,0,1,2.21,33.55Z" style="fill:currentColor"/></g></g></svg></span>

            </div>
            <div class="w-full p-0">
                <div class="md:pb-0">
                   <img alt="" src="{{get_sub_field('headshot')}}">
                    <div class="p-6 bg-blue text-white -mt-4 relative z-10">
                        <div class="border-l-2 pl-2">
                            <h3 class="font-serif text-2xl leading-none mb-0 font-semibold">{{get_sub_field('name')}}</h3>
                            <p class="text-lg mb-0 font-semibold">{{get_sub_field('job_title')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-grey p-6">
                    <div class="prose">
                        {{get_sub_field('biog')}}
                    </div>
            </div>
        </div>
    </div><!-- POP 1 -->
    @endwhile
  @endwhile
@endsection
