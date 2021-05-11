@extends('layouts.app')

@section('content')
  <main class="site-content text-grey text-lg"  >

            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-blue">

                        <div class="prose">
                      @php get_the_content(517) @endphp
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
