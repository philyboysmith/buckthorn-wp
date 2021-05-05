@extends('layouts.app')

@php

$query = $_GET['s'];

$team = get_field('image', 14);
$company = get_field('company', 10);

$extra_results = [];
foreach ($team as $key => $p) {


    $name = $p['name'];
    similar_text(strtolower($name), strtolower($query), $perc);
    if($perc > 50){
        $extra_results[] = [
            'title' => $p['name'],
            'blurb' => $p['biog'],
            'url' => '/our-team#team-' . sanitize_title($p['name'])
        ];
    }
}

foreach ($company as $key => $p) {
    $name = $p['title'];
    similar_text(strtolower($name), strtolower($query), $perc);
    if($perc > 50){
        $extra_results[] = [
            'title' => $name,
            'blurb' => $p['description'],
            'url' => '/our-companies#company-' . ($key + 1) . '-popup'
        ];
    }
}
@endphp

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
                        @if (!have_posts() && count($extra_results) === 0 )
                            <div class="alert alert-warning">
                            {{ __('Sorry, no results were found.', 'sage') }}
                            </div>
                            {!! get_search_form(false) !!}
                        @endif

                        @foreach ($extra_results as $result)

                        <article class="w-full prose mb-8">
                        <header>
                            <h3 class="entry-title"><a href="{{ $result['url'] }}">{{ $result['title'] }}</a></h3>

                        </header>
                        <div class="entry-summary">
                        <p>{{ $result['blurb'] }}</p>
                        </div>
                        </article>


                        @endforeach

                        @while(have_posts()) @php the_post() @endphp
                            @include('partials.content-search')
                        @endwhile
                    </div>
                </div>
            </div>
    </main>
@endsection
