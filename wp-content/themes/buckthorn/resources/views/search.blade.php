@extends('layouts.app')

@section('content')
  <main class="site-content bg-img bg-img-1">
            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl w-full p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                        <h1 class="mb-4 font-serif text-4xl lg:text-5xl xl:text-6xl">
                            Search results
                        </h1>
                        @if (!have_posts())
                            <div class="alert alert-warning">
                            {{ __('Sorry, no results were found.', 'sage') }}
                            </div>
                            {!! get_search_form(false) !!}
                        @endif

                        @while(have_posts()) @php the_post() @endphp
                            @include('partials.content-search')
                        @endwhile
                    </div>
                </div>
            </div>
    </main>
@endsection
