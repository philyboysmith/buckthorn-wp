@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <main class="site-content bg-img bg-img-1">
        @php the_content() @endphp
    </main>
  @endwhile
@endsection
