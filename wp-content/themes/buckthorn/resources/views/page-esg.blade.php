@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<main class="site-content bg-img bg-img-2 text-grey text-base">
    <div class="white-opacity-strip mb-4 md:mb-12">
    </div>


    <div class="mx-auto max-w-screen-2xl">
        <div class="p-6 md:py-12 m-4 mb-12 md:text-lg bg-white-trans">


            <div class="flex flex-wrap mb-12">
                <div class="w-full pl-6 border-l-4 border-dgreen">
                    <div class="prose">
                        @php the_content() @endphp
                    </div>
                </div>
            </div>


            <div class="flex flex-wrap">
                <div class="w-full">
                    @php ($i = 0)
                    <!-- Tab links -->
                    <div class="tabsy text-base">

                        @while(have_rows('tabs')) @php( the_row())
                        @php ($i++)
                        <input type="radio" id="tab{{$i}}" name="tab" checked>
                        <label class="lg:w-1/3 text-4xl font-serif tabButton" for="tab{{$i}}">
                            <span class="px-1 py-2 mt-2 lg:mt-0 md:mr-2 tabButton-inner"><span class="border-l-2 border-blue pl-4 ml-1">{{ the_sub_field('title') }}</span>
                        </label>
                        @while ( have_rows('body') ) @php(the_row())
                        @if( get_row_layout() == 'full_width' )
                        <div class="tab">
                            <div class="content bg-white p-6">
                            {{ the_sub_field('body') }}
                            </div>
                        </div>
                        @elseif( get_row_layout() == 'split' )
                        <div class="tab">
                        <div class="content lg:flex bg-white p-6">
                            <div class="w-full lg:w-7/12 lg:pr-10">
                            {{ the_sub_field('body') }}
                            </div>
                            <div class="w-full lg:w-5/12 esg-table">
                            {{ the_sub_field('secondary_content') }}
                            </div>
                        </div>
</div>
                        @endif
                        @endwhile

                        @endwhile

                    </div>
                </div>
            </div>
        </div>


</main>
@endwhile
@endsection
