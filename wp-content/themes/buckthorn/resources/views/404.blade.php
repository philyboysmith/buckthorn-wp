@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <main class="site-content text-grey text-lg"  >

            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl p-6 py-12 mb-12 md:text-lg bg-white-trans">
                <div class="flex flex-wrap">
                    <div class="w-full pl-6 border-l-4 border-blue">

                        <div class="prose">
                        <div class="prose">

                      <h2>Error 404</h2>



                      <p>We’re sorry. The content that you were looking for cannot be found here. Please use Search above, or click on one of the below links to access the main pages of our site:</p>



                      <p><a href="https://buckthornpartners.com/"><strong>Homepage</strong></a></p>



                      <p><a href="../about-us/"><strong>About us</strong></a></p>



                      <p><a href="../our-companies/"><strong>Our companies:</strong></a></p>



                      <ul><li><a href="../our-companies/#company-1-popup">Ashtead</a></li><li><a href="../our-companies/#company-2-popup">TWMA</a></li><li><a href="../our-companies/#company-3-popup">Coretrax</a></li><li><a href="../our-companies/#company-4-popup">Paradigm</a></li></ul>



                      <p><a href=".../esg/"><strong>Environment, Society and Governance (ESG)</strong></a></p>



                      <p><a href="../our-team/"><strong>Our team</strong></a></p>



                      <p><a href="../contact/"><strong>Contact</strong></a></p>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
  @endwhile
@endsection
