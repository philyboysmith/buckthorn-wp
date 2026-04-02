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
    <div class="white-opacity-strip">
    </div>
    <div class="mx-auto max-w-screen-2xl p-4 md:text-lg pb-48" id="hero-content">
        <div class="flex flex-wrap my-6 xl:my-12">
            <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                <div class="prose">
                    @php the_content() @endphp
                </div>
                  <div id="scroll-indicator" class="text-left font-bold flex items-center gap-2 hidden" style="margin-top: 320px;">
                    <p class="text-lg p-0 m-0">Scroll down for more</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
  


    {{-- About Block --}}
    @if(get_field('about_title') || get_field('about_body'))
    <div class="bg-white-trans mt-auto mb-12">
        <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg ">
            <div class="flex flex-wrap">
                <div class="w-full pl-6 border-dgreen">
                    <div class="prose ">
                        @if(get_field('about_title'))
                            <h2>{!! get_field('about_title') !!}</h2>
                        @endif
                        @if(get_field('about_body'))
                            {!! get_field('about_body') !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Stats Carousel --}}
    @if(have_rows('about_stats'))
    <div class="w-full relative z-10">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>
            .stat-text span {
                font-family: Georgia, 'Times New Roman', serif;
                font-size: 3rem;
                line-height: 1;
                font-family: Abhaya Libre, sans-serif;
            }

            @media (min-width: 768px) {
                .stat-text span {
                    font-size: 3rem;
                }
            }

            .stat-box {
                aspect-ratio: 1 / 1;
            }

            .stats-carousel .swiper-slide {
                height: auto;
            }
        </style>
        <div class="mx-auto max-w-screen-2xl p-6 mb-12">
            <div class="swiper stats-carousel">
                <div class="swiper-wrapper">
                    @while(have_rows('about_stats')) @php(the_row())
                    <div class="swiper-slide">
                        <div class="p-6 flex flex-col items-start stat-box"
                            style="background-color: {{ get_sub_field('colour') }};">
                            <div class="border-l-4 border-white pl-4 h-full flex flex-col">
                                @if(get_sub_field('logo'))
                                    <div class="mb-4 flex-1">
                                        <img src="{{ get_sub_field('logo')['url'] }}" alt="{{ get_sub_field('logo')['alt'] }}"
                                            class="h-16 w-auto object-contain">
                                    </div>
                                @endif
                                <div class="text-white stat-text">
                                    {!! get_sub_field('first_line') !!}<br />{!! get_sub_field('second_line') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endwhile
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const statsSwiper = new Swiper('.stats-carousel', {
                    slidesPerView: 1,
                    spaceBetween: 16,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 16,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 16,
                        }
                    }
                });
            });
        </script>
        @endif
    </div>
    @endif

    {{-- GSAP Scroll Animation --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);

            // Animate the scroll indicator gap from 120px to 0px
            gsap.to('#scroll-indicator', {
                marginTop: 0,
                ease: 'none',
                scrollTrigger: {
                    trigger: '#scroll-indicator',
                    start: 'top bottom',
                    end: 'top center',
                    scrub: true,
                }
            });
        });
    </script>

</main>
@endwhile
@endsection