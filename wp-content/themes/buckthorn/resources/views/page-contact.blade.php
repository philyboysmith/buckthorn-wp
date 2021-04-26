@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <main class="site-content bg-img bg-img-5 text-grey text-base">
        <div class="white-opacity-strip mb-4 md:mb-12"></div>
        <div class="mx-auto max-w-screen-2xl">
            <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">
                <div class="lg:flex flex-wrap mb-12">
                    <div class="w-full">
                        <div class="lg:flex">
                            <div class="pl-6 lg:pr-12 mb-12 lg:mb-0 border-l-4 border-blue">
                                <div class="lg:flex">
                                    <div class="w-full lg:w-5/12">
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
                                                <span></span>
                                                <p>info@buckthornpartners.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full mb-12 lg:mb-0 lg:w-7/12">
                                        <div class="w-full"><img alt="" src="/assets/images/map-placeholder.jpg"></div>
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
