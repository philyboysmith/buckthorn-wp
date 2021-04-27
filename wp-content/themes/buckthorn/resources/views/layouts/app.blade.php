<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('site font-sans text-black') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @yield('content')
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L8G2CJPM9Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L8G2CJPM9Q');
</script>
</body>
</html>
