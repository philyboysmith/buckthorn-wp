@extends('layouts.app')
@section('content')
@while(have_posts()) @php the_post() @endphp
<main class="site-content text-grey text-lg">
    <picture>
        <source media="(orientation: landscape)" srcset="{{ the_field('desktop')}}">
        <source media="(orientation: portrait)" srcset="{{ the_field('portrait')}}">
        <img src="{{ the_field('desktop')}}" alt="" class="w-full h-full object-cover fixed  inset-0"
            style="z-index: -1000">
    </picture>
    <div class="white-opacity-strip mb-4 md:mb-12">
    </div>

    <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans" x-data="{ filter: 'all' }">
        <div class="border-l-4 border-dgreen pl-6">
            <div class="flex flex-wrap mb-8">
                <div class="w-full">
                    <div class="prose">
                        @php the_content() @endphp
                    </div>
                </div>
            </div>

            {{-- Filter Buttons --}}
            <style>
                .filter-button:focus {
                    outline: none;
                }
            </style>
            <div class="flex items-center gap-2 mb-6 text-lg">
                <span class="font-semibold">Filter Portfolio By:</span>
                <button @click="filter = 'all'" :class="filter === 'all' ? 'font-bold underline' : ''"
                    class="hover:underline filter-button">
                    all
                </button>
                <span>|</span>
                <button @click="filter = 'active'" :class="filter === 'active' ? 'font-bold underline' : ''"
                    class="hover:underline filter-button">
                    Current
                </button>
                <span>|</span>
                <button @click="filter = 'exited'" :class="filter === 'exited' ? 'font-bold underline' : ''"
                    class="hover:underline filter-button">
                    Exited
                </button>
            </div>
        </div>
        {{-- Companies Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 text-white font-semibold lg:pl-6">
            @php ($i = 0) @endphp
            @while (have_rows('company'))
                @php (the_row())@endphp
                @php ($i++)@endphp
                @php ($isExited = get_sub_field('exited') ? 'true' : 'false') @endphp
                <a id="company-{{$i}}" href="#company-{{$i}}-popup"
                    class="relative open-popup-link overflow-hidden text-center p-6 flex items-end bg-white aspect-square hover:text-white hover:bg-{{ the_sub_field('colour') }} company-img company-{{$i}} reveal !min-h-none "
                    x-show="filter === 'all' || (filter === 'exited' && {{$isExited}}) || (filter === 'active' && !{{$isExited}})"
                    x-transition>
                    @if(get_sub_field('exited'))
                        <div class="exited">Exited</div>
                    @endif
                    <div class="company-content mx-auto text-sm">
                        <p>{{ the_sub_field('description') }}</p>
                    </div>
                </a>
                <style>
                    .company-{{$i}} {
                        background-image: url({{ get_sub_field('image')['colour'] }});
                        min-height: 0 !important;
                        aspect-ratio: 1/1 !important;
                    }

                    .company-{{$i}}:hover {
                        background-image: url({{ get_sub_field('image')['white_out'] }});
                    }
                </style>
            @endwhile

        </div>
    </div>
    @php ($i = 0) @endphp
    @while (have_rows('company'))
        @php the_row() @endphp
        @php $i++ @endphp
        @php $col = get_sub_field('colour') @endphp
    <!-- POPUP -->
    <div id="company-{{$i}}-popup" class="white-popup mfp-hide relative">
        <div class="absolute top-0 right-0 flex pt-2">
            <span onclick="jQuery.magnificPopup.instance.prev()"
                class="p-2 text-lgcolor7 cursor-pointer hover:text-{{ the_sub_field('colour') }}"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.05 33.55" class="h-6">
                    <g id="b3730093-63c2-47f3-b4ec-893cd3dfc476" data-name="Layer 2">
                        <g id="eaa71ef0-575b-41e6-a8ed-4107639e33d5" data-name="menu and footer">
                            <path
                                d="M17.55,33.55A2.2,2.2,0,0,1,16,32.9l-16-16L16.27.65A2.21,2.21,0,1,1,19.4,3.78L6.26,16.92,19.12,29.77a2.22,2.22,0,0,1-1.57,3.78Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
                </svg></span>
            <button onclick="jQuery.magnificPopup.instance.close()"
                class=" p-2 text-lgcolor7 cursor-pointer hover:text-{{ the_sub_field('colour') }}"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.65 33.55" class="h-6">
                    <g id="f3f264cb-6f95-4621-aeb1-b8ed316d6837" data-name="Layer 2">
                        <g id="e166d7d7-9c91-45aa-a216-b6eb7ac00402" data-name="menu and footer">
                            <path
                                d="M19.87,16.92,33,3.78A2.21,2.21,0,1,0,29.88.65L17,13.56,4.06.65A2.21,2.21,0,0,0,.93,3.78L13.79,16.63.65,29.77a2.22,2.22,0,0,0,1.56,3.78,2.24,2.24,0,0,0,1.57-.65L16.69,20,29.59,32.9a2.24,2.24,0,0,0,1.57.65,2.22,2.22,0,0,0,1.56-3.78Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
                </svg></button>
            <span onclick="jQuery.magnificPopup.instance.next()"
                class=" p-2 text-lgcolor7 cursor-pointer hover:text-{{ the_sub_field('colour') }}"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.05 33.55" class="h-6">
                    <g id="e31aad34-8db5-48ab-b864-8f5df91c78eb" data-name="Layer 2">
                        <g id="a0316c41-9883-4677-9bcb-3b8cc0c7ca40" data-name="menu and footer">
                            <path
                                d="M2.21,33.55A2.22,2.22,0,0,1,.65,29.77L13.79,16.63.93,3.78A2.21,2.21,0,0,1,4.06.65l16,16L3.78,32.9A2.24,2.24,0,0,1,2.21,33.55Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
                </svg></span>
        </div>
        <div class="lg:flex">
            <div class="w-full py-12 px-6 md:p-0 lg:w-7/12 flex flex-col justify-between">
                <div class="pr-4 md:pt-12 md:pb-0 md:px-12">
                    <div class="mb-4">
                        <img src="{{ get_sub_field('image')['popup'] }}" alt="{{ the_sub_field('title')}}"
                            class="h-16 md:h-auto w-auto" />
                    </div>
                    <div class="prose">
                        {{ the_sub_field('body')}}
                    </div>
                    @if (get_sub_field('numbers'))
                        @php
                            $numbers = get_sub_field('numbers');
                            $count = count($numbers);
                            if ($count <= 2) {
                                $gridCols = 'md:grid-cols-2';
                                $gridRows = 'grid-rows-2';
                            } elseif ($count === 3) {
                                $gridCols = 'md:grid-cols-3';
                                $gridRows = 'grid-rows-1';
                            } else {
                                $gridCols = 'md:grid-cols-4';
                                $gridRows = 'grid-rows-1';
                            }
                        @endphp
                        <h3 class="text-xl lg:text-3xl mb-4 font-serif">By the numbers:</h3>
                        <div
                            class="w-full grid grid-flow-col grid-cols-2 {{ $gridRows }} {{ $gridCols }} gap-4 text-center font-serif mb-4">
                            @foreach($numbers as $number)
                                <div class="flex-1">
                                    <span class="text-{{ $col }} text-3xl md:text-6xl block">{{$number['number']}}</span>
                                    <span class="block font-semibold font-sans text-sm">{{$number['description']}}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                @while (have_rows('bottom_block'))
                    @php the_row() @endphp
                @if(get_row_layout() == 'quotation')
                    <div class="md:flex bg-{{ $col }} text-white p-6 md:p-0">
                        <div class="md:flex-grow border-l-4 border-white p-4 md:my-3 md:ml-4">
                            <div class=" mb-6">{!!get_sub_field('quotation')!!}</p>
                            </div>
                            <div class="font-semibold font-serif">
                                <p class="leading-snug"><span
                                        class="text-3xl leading-none block">{{get_sub_field('citation')}}</span>
                                    <span class="text-lg font-normal">{{get_sub_field('job_title')}}</span>
                                </p>
                            </div>
                        </div>
                        @if(get_sub_field('image'))
                            <div class="block flex-none ">
                                <img src="{{get_sub_field('image')}}" alt="Allan" class="max-w-sm w-full">
                            </div>
                        @endif
                    </div>
                @endif
                @if(get_row_layout() == 'images')
                    <div class="flex w-full py-6 md:px-6">
                        @foreach (get_sub_field('images') as $image)
                            <div class="flex-1 w-1/3">
                                <img src="{{$image['image']}}" alt="" class="w-full border-2 border-white" />
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(get_row_layout() == 'video')
                    <div class="md:flex bg-{{ $col }} text-white md:p-0">
                        <div class="block md:w-1/3 ">
                            <a href="{{get_sub_field('url')}}" class="mfp-iframe"><img src="{{get_sub_field('thumbnail')}}"
                                    alt="" class="w-full"></a>
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="font-semibold border-r-1">

                                <p class="leading-snug">{{get_sub_field('text')}}</p>
                            </div>
                        </div>

                    </div>
                @endif
                @endwhile
            </div>
            <div class="w-full lg:w-5/12 bg-grey p-6 md:p-12 flex flex-col">
                <div class="prose flex-1">
                    {{ the_sub_field('secondary_content')}}
                </div>
                @if(get_sub_field('website_url'))
                    <a class="mt-auto pt-8 font-semibold"
                        href="{{the_sub_field('website_url')}}">{{ str_replace("https://", "", get_sub_field('website_url'))}}</a>
                @endif
            </div>
        </div>
    </div>
    @endwhile

</main>
@endwhile


<script>
    var h = location.hash;
    console.log(h);
    jQuery(document).ready(function ($) {
        if (h) {
            jQuery("a[href='" + h + "']").click();
        }
    });
</script>

<style>
    .exited {
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

    @endsection