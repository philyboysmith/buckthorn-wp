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
                    <div class="mb-12 lg:mb-0">
                        <div class="w-full border-l-4 border-blue pl-4 mb-12">
                            <h1 class="mb-4 font-serif text-4xl lg:text-5xl">Document Repository</h1>
                            <div class="font-semibold">
                                <p>Buckthorns shared storage space is a key part of our document management system (DMS) that serves your business</p>
                            </div>
                        </div>
                        <div class="lg:flex items-start">
                            <div class="w-full text-lg lg:w-7/12 mb-12 lg:mb-0 lg:pr-24">
                                <div class="w-full flex justify-end items-end bg-white border-l-4 border-dgreen p-4 pl-6 mb-4 repo-panel">
                                    <div class="w-11/12">
                                        <h3 class="font-serif font-semibold text-2xl lg:text-3xl">Letter to Buckthorn</h3>
                                        <div class="font-semibold text-sm">
                                            <p class="mb-1">Wednesday, 14 July 2021</p>
                                        </div>
                                        <p class="mb-0">Letter from a company to Buckthorn following Q2 proﬁt upgrade,maintaining request for Adverse Recommendation Change.</p>
                                    </div>
                                    <div class="w-1/12"><img alt="" src="/assets/images/icon-pdf-dgreen.svg"></div>
                                </div>
                                <div class="w-full flex justify-end items-end bg-white border-l-4 border-green p-4 pl-6 mb-4 repo-panel">
                                    <div class="w-11/12">
                                        <h3 class="font-serif font-semibold text-2xl lg:text-3xl">Letter to Buckthorn</h3>
                                        <div class="font-semibold text-sm">
                                            <p class="mb-1">Wednesday, 14 July 2021</p>
                                        </div>
                                        <p class="mb-0">Letter from a company to Buckthorn following Q2 proﬁt upgrade,maintaining request for Adverse Recommendation Change.</p>
                                    </div>
                                    <div class="w-1/12"><img alt="" src="/assets/images/icon-pdf-green.svg"></div>
                                </div>
                                <div class="w-full flex justify-end items-end bg-white border-l-4 border-grey p-4 pl-6 mb-4 repo-panel">
                                    <div class="w-11/12">
                                        <h3 class="font-serif font-semibold text-2xl lg:text-3xl">Letter to Buckthorn</h3>
                                        <div class="font-semibold text-sm">
                                            <p class="mb-1">Wednesday, 14 July 2021</p>
                                        </div>
                                        <p class="mb-0">Letter from a company to Buckthorn following Q2 proﬁt upgrade,maintaining request for Adverse Recommendation Change.</p>
                                    </div>
                                    <div class="w-1/12"><img alt="" src="/assets/images/icon-pdf-grey.svg"></div>
                                </div>
                            </div>
                            <div class="w-full p-6 mb-12 lg:mb-0 lg:w-5/12 bg-white">
                                <div class="w-full pl-6 border-l-4 border-blue">
                                    <h2 class="mb-3 font-serif font-semibold text-2xl lg:text-3xl">Register for updates</h2>
                                    <div class="form register-form">
                                        <form action="/my-handling-form-page" method="post">
                                            <div class="w-full mb-2">
                                                <input class="w-full p-1" id="firstname" name="firstname" placeholder="First name" type="text">
                                            </div>
                                            <div class="w-full mb-2">
                                                <input class="w-full p-1" id="lastname" name="lastname" placeholder="Last name" type="text">
                                            </div>
                                            <div class="w-full mb-4">
                                                <input class="w-full p-1" id="mail" name="email" placeholder="eMail" type="email">
                                            </div>
                                            <div class="flex w-full mb-2">
                                                <div class="round">
                                                    <input id="checkbox" type="checkbox"> <label for="checkbox"></label>
                                                </div>
                                                <div class="text-sm ml-6 mb-4">
                                                    I consent to Buckthorn holding my information.
                                                </div>
                                            </div>
                                            <div>
                                                <button class="arrow-link font-bold text-grey pr-3" type="submit">Sign me up</button>
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
