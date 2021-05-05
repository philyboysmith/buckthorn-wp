<article @php post_class('w-full prose  mb-8') @endphp>
  <header>
    <h3 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h3>

  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
