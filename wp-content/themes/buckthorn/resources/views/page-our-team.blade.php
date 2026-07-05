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
    <div class="white-opacity-strip mb-4 md:mb-12"></div>
    <div class="mx-auto max-w-screen-2xl">
        <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
            <div class="mb-12" x-data="{ activeFilter: 'all' }">
                <div class="w-full mb-8">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                        <div class="px-6 border-l-4 border-dgreen">
                            <div class="prose">
                                @php the_content() @endphp
                            </div>
                        </div>
                        <div class="flex items-center gap-4 px-6  bg-white p-3 flex-wrap">
                            <span class="text-sm font-bold whitespace-nowrap">Filter Portfolio By:</span>
                            <div class="flex items-center gap-3 text-sm">
                                <button @click="activeFilter = 'all'"
                                    :class="{ 'font-semibold': activeFilter === 'all' }"
                                    class="hover:text-dgreen transition-colors focus:outline-none">
                                    All
                                </button>
                                <span class="text-gray-400">|</span>
                                <button @click="activeFilter = 'partners'"
                                    :class="{ 'font-semibold': activeFilter === 'partners' }"
                                    class="hover:text-dgreen transition-colors focus:outline-none">
                                    Partners
                                </button>
                                <span class="text-gray-400">|</span>
                                <button @click="activeFilter = 'investment-team'"
                                    :class="{ 'font-semibold': activeFilter === 'investment-team' }"
                                    class="hover:text-dgreen transition-colors focus:outline-none">
                                    Investment Team
                                </button>
                                <span class="text-gray-400">|</span>
                                <button @click="activeFilter = 'operations-finance'"
                                    :class="{ 'font-semibold': activeFilter === 'operations-finance' }"
                                    class="hover:text-dgreen transition-colors focus:outline-none">
                                    Operations
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="grid grid-flow-row sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-6">
                        @while (have_rows('image'))
                            @php
                                the_row();
                                $types = get_sub_field('type');
                                $typesArray = is_array($types) ? $types : ($types ? [$types] : []);
                                $typesJson = json_encode($typesArray);
                                $isPartner = !empty($typesArray) && in_array('partners', $typesArray);
                            @endphp
                            @if(get_sub_field('biog'))
                                {{-- All members with bio: headshot + clickable modal --}}
                                <div class="team-thumb bg-white group relative md:overflow-hidden"
                                    x-data="{ memberTypes: {{ $typesJson }} }"
                                    x-show="activeFilter === 'all' || memberTypes.includes(activeFilter)" x-transition>
                                    <a class="open-popup-link block relative overflow-hidden"
                                        href="#team-{{ sanitize_title(get_sub_field('name')) }}">
                                        <div class="overflow-hidden">
                                            <img alt="" src="{{get_sub_field('headshot')}}" class="w-full h-full object-cover">
                                        </div>
                                        <div class="px-3 py-2 bg-white team-thumb-content absolute bottom-0 left-0 right-0">
                                            <div class="pl-3 border-l-2 border-dgreen leading-snug flex items-center group">
                                                <div class="flex-1">
                                                <h3 class="font-serif text-lg leading-none mb-0 font-semibold text-black">
                                                    {{get_sub_field('name')}}
                                                </h3>
                                                <p class="text-xs mb-0 text-gray-500">{{get_sub_field('job_title')}}</p>
                                                </div>
                                                <div class="group-hover:opacity-100 opacity-0 transition-all duration-300  text-gray-500">
<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20.05 33.55" class="h-6">
                    <g id="e31aad34-8db5-48ab-b864-8f5df91c78eb" data-name="Layer 2">
                        <g id="a0316c41-9883-4677-9bcb-3b8cc0c7ca40" data-name="menu and footer">
                            <path
                                d="M2.21,33.55A2.22,2.22,0,0,1,.65,29.77L13.79,16.63.93,3.78A2.21,2.21,0,0,1,4.06.65l16,16L3.78,32.9A2.24,2.24,0,0,1,2.21,33.55Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
                </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            @else
                                {{-- No bio: headshot (no click) + name and title --}}
                                <div class="bg-white overflow-hidden relative" x-data="{ memberTypes: {{ $typesJson }} }"
                                    x-show="activeFilter === 'all' || memberTypes.includes(activeFilter)" x-transition>
                                    @if(get_sub_field('headshot'))
                                    <div class="overflow-hidden">
                                        <img alt="" src="{{get_sub_field('headshot')}}" class="w-full h-full object-cover">
                                    </div>
                                    @endif
                                    <div class="px-3 py-2 bg-white absolute bottom-0 left-0 right-0">
                                        <div class="pl-3 border-l-2 border-dgreen leading-snug">
                                            <h3 class="font-serif text-lg leading-none mb-0 font-semibold text-black">
                                                {{get_sub_field('name')}}
                                            </h3>
                                            <p class="text-xs mb-0 text-gray-500">{{get_sub_field('job_title')}}</p>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endwhile
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- POP 1 -->
@while (have_rows('image')) @php the_row(); @endphp

<div class="w-full mfp-hide bg-white" id="team-{{ sanitize_title(get_sub_field('name')) }}">
    <div class="relative">
        <div class="absolute top-0 right-0 flex gap-2 pt-4 pr-4 z-20">
            <span onclick="event.stopPropagation(); jQuery.magnificPopup.instance.prev(); return false;"
                class="p-2 text-grey cursor-pointer hover:text-dgreen"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20.05 33.55" class="h-6">
                    <g id="b3730093-63c2-47f3-b4ec-893cd3dfc476" data-name="Layer 2">
                        <g id="eaa71ef0-575b-41e6-a8ed-4107639e33d5" data-name="menu and footer">
                            <path
                                d="M17.55,33.55A2.2,2.2,0,0,1,16,32.9l-16-16L16.27.65A2.21,2.21,0,1,1,19.4,3.78L6.26,16.92,19.12,29.77a2.22,2.22,0,0,1-1.57,3.78Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
                </svg></span>
            <button onclick="event.stopPropagation(); jQuery.magnificPopup.instance.close(); return false;"
                class="p-2 text-grey cursor-pointer hover:text-dgreen"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 33.65 33.55" class="h-6">
                    <g id="f3f264cb-6f95-4621-aeb1-b8ed316d6837" data-name="Layer 2">
                        <g id="e166d7d7-9c91-45aa-a216-b6eb7ac00402" data-name="menu and footer">
                            <path
                                d="M19.87,16.92,33,3.78A2.21,2.21,0,1,0,29.88.65L17,13.56,4.06.65A2.21,2.21,0,0,0,.93,3.78L13.79,16.63.65,29.77a2.22,2.22,0,0,0,1.56,3.78,2.24,2.24,0,0,0,1.57-.65L16.69,20,29.59,32.9a2.24,2.24,0,0,0,1.57.65,2.22,2.22,0,0,0,1.56-3.78Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
            </svg></button>
            <span onclick="event.stopPropagation(); jQuery.magnificPopup.instance.next(); return false;"
                class="p-2 text-grey cursor-pointer hover:text-dgreen"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20.05 33.55" class="h-6">
                    <g id="e31aad34-8db5-48ab-b864-8f5df91c78eb" data-name="Layer 2">
                        <g id="a0316c41-9883-4677-9bcb-3b8cc0c7ca40" data-name="menu and footer">
                            <path
                                d="M2.21,33.55A2.22,2.22,0,0,1,.65,29.77L13.79,16.63.93,3.78A2.21,2.21,0,0,1,4.06.65l16,16L3.78,32.9A2.24,2.24,0,0,1,2.21,33.55Z"
                                style="fill:currentColor" />
                        </g>
                    </g>
                </svg></span>
        </div>

        @php
            $modalTypes = get_sub_field('type');
            $modalTypesArray = is_array($modalTypes) ? $modalTypes : ($modalTypes ? [$modalTypes] : []);
            $modalIsPartner = !empty($modalTypesArray) && in_array('partners', $modalTypesArray);
        @endphp
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 p-8 md:p-12 ">
                <div class="border-l-4 border-dgreen pl-8 team-details">
                    <h2 class="font-serif text-3xl md:text-4xl leading-tight mb-2">{{get_sub_field('name')}}</h2>
                    <p class="text-gray-500 text-lg md:text-xl mb-6">{{get_sub_field('job_title')}}</p>
                    <div class="prose prose-lg">
                        {!! get_sub_field('biog') !!}
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img alt="{{get_sub_field('name')}}" src="{{get_sub_field('headshot')}}"
                    class="w-full h-full object-contain">
            </div>
        </div>
    </div>
</div><!-- POP 1 -->
@endwhile
@endwhile

<script>
    var h = location.hash;
    console.log(h);
    jQuery(document).ready(function ($) {
        if (h) {
            jQuery("a[href='" + h + "']").click();
        }

        // Update popup navigation to respect filters
        function initMagnificPopup() {
            // Destroy all existing instances
            $.magnificPopup.close();

            // Wait for Alpine transitions to complete (increased timeout)
            setTimeout(function() {
                // Get all team-thumb elements and check if Alpine has hidden them
                var $visibleThumbs = $('.team-thumb').filter(function() {
                    // Alpine x-show sets display: none via inline style when hidden
                    // If no style attribute or style doesn't contain display: none, it's visible
                    var style = this.getAttribute('style');
                    if (!style) return true; // No style = visible
                    return !style.includes('display: none');
                });

                console.log('Visible thumbs:', $visibleThumbs.length);

                // Build items array for gallery with only visible members
                var items = [];
                $visibleThumbs.each(function() {
                    var $link = $(this).find('.open-popup-link');
                    if ($link.length) {
                        items.push({
                            src: $link.attr('href'),
                            type: 'inline'
                        });
                    }
                });

                console.log('Gallery items:', items.length);

                // Remove old handlers and initialize new ones
                $('.open-popup-link').off('click.magnificPopup');

                // Initialize magnificPopup with delegate to handle dynamic visibility
                $visibleThumbs.find('.open-popup-link').magnificPopup({
                    type: 'inline',
                    closeMarkup: '<button title="%title%" type="button" class="mfp-close" style="display:none;">×</button>',
                    closeOnContentClick: false,
                    mainClass: 'our-team',
                    removalDelay: 300,
                    gallery: {
                        enabled: true
                    },
                    callbacks: {
                        elementParse: function(item) {
                            item.src = item.el.attr('href');
                        },
                        change: function() {
                            console.log('Changed to:', this.currItem.src);
                        }
                    }
                });
            }, 400);
        }

        // Initialize on page load
        setTimeout(initMagnificPopup, 500);

        // Re-initialize when filters change - listen on the actual filter buttons
        $(document).on('click', 'button[\\@click^="activeFilter"]', function() {
            setTimeout(initMagnificPopup, 600);
        });
    });
</script>

<style>
    .our-team .mfp-content {
        max-width: 90%;
        width: 90%;
    }

    .team-thumb:hover .team-thumb-content {
        background: white;
        color: inherit;
        background-image: none;
    }

    .team-thumb-content div {
        border-color: #007653;
    }


    @media (min-width: 1024px) {
        .our-team .mfp-content {
            max-width: 1400px;
        }
    }

    /* Team thumb hover effect - desktop only */
    @media (min-width: 768px) {
        /* .team-thumb .team-thumb-content {
            transform: translateY(100%);
        } */

        .team-thumb:hover .team-thumb-content,
        .team-thumb.group:hover .team-thumb-content {
            transform: translateY(0);
            background-color: white;
        }

        /* Ensure parent has overflow hidden on desktop */
        .team-thumb,
        .team-thumb .open-popup-link {
            overflow: hidden;
        }
    }
</style>
@endsection