@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <main class="site-content text-grey text-base"  >
    <picture>
    <source media="(orientation: landscape)" srcset="{{ the_field('desktop')}}">
    <source media="(orientation: portrait)" srcset="{{ the_field('portrait')}}">
        <img src="{{ the_field('desktop')}}" alt="" class="w-full h-full object-cover fixed  inset-0" style="z-index: -1000">
    </picture>
        <div class="white-opacity-strip mb-4 md:mb-12"></div>
        <div class="mx-auto max-w-screen-2xl w-full">
            <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
                <div class="lg:flex flex-wrap mb-12">
                    <div class="w-full">
                        <div class="lg:flex">
                            <div class="pl-6 lg:pr-12 mb-12 lg:mb-0 border-l-4 border-blue">
                                <div class="lg:flex">
                                    <div class="w-full lg:w-5/12 pr-4">
                                        <h1 class="mb-4 font-serif text-4xl lg:text-5xl">Contact Us</h1>
                                        <div class="font-semibold">
                                            <p>Get in touch with Buckthorn Partners LLP</p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <p>Buckthorn Partners LLP</p>
                                            <div class="flex contact-icon contact-address">
                                                <span></span>
                                                <p>Princes House<br>
                                                38 Jermyn Street<br>
                                                London,<br>
                                                SW1Y 6DN</p>
                                            </div>
                                            <div class="flex contact-icon contact-phone">
                                                <span></span>
                                                <p>+44 (0)203 959 1070</p>
                                            </div>
                                            <div class="flex contact-icon contact-email">
                                                <span class="flex-shrink-0"></span>
                                                <p><a href="mailto:info@buckthornpartners.com" class="hover:text-green">info@buckthornpartners.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full mb-12 lg:mb-0 lg:w-7/12">
                                    <a href="{{ the_field('map_link_url')}}" target="_blank">
                                        <div class="w-full"><img alt="" src="{{ the_field('map')}}" class="w-full"></div>
                                    </a>
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12">
                                    <h2 class="mb-3 font-serif font-semibold text-2xl lg:text-3xl">Get in touch</h2>
                                    <div class="form contact-form">
                                        <form action="/my-handling-form-page" method="post">
                                            <div class="w-full mb-2">
                                                <input class="w-full p-2" id="name" name="name" placeholder="Full name" type="text">
                                            </div>
                                            <div class="w-full mb-2">
                                                <input class="w-full p-2" id="mail" name="email" placeholder="Your email address" type="email">
                                            </div>
                                            <div class="w-full mb-2">
                                                <textarea class="w-full p-2" id="msg" name="message" placeholder="Message..."></textarea>
                                            </div>
                                            <div class="flex w-full mb-2">
                                                <div class="round">
                                                    <input id="checkbox" type="checkbox"> <label for="checkbox"></label>
                                                </div>
                                                <div class="text-sm ml-6 mb-4">
                                                    I’ve read the terms and conditions and Privacy statement consent to Buckthorn Partners holding my information.
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit">Submit &gt;</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  @endwhile
@endsection
