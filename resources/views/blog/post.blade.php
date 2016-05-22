@extends('blog.master')

@section('body')

    @include('layouts.partials.carousel', ['title' => $post['title'], 'tagline' => "<h3 class=\"date-posted\"><span class=\"text-muted\">Posted on</span> {$post['created_at']->format('jS F Y')}</h3>", 'image'=>'/uploads/'.$post['image']])

    <div id="page-content" class="">
        <div class="container index">



    <article class="content post-content  col-md-8 col-md-offset-2">
        <div>{!! $post['html'] !!}</div>

    <section class="related">

        <p class="post-button call_to_action pjax">

            @if($post->nextPost())
            <a class="read-more pull-right" href="{{$post->nextPost()->getUrl()}}" title="{{$post->nextPost()['title']}}">
                Next : {{ str_limit($post->nextPost()['title'], 40) }} <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
            @endif

            @if($post->previousPost())
            <a class="pull-left read-more" href="{{$post->previousPost()->getUrl()}}" title="{{$post->previousPost()['title']}}">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Previous : {{ str_limit($post->previousPost()['title'], 40)}}
            </a>
            @endif
        </p>

        <div class="clearfix"></div>
    </section>
    <section class="content">
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_shortname = '{{\Config::get('blog.disqus')}}';

            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    </section>

    </article>


</div><!-- /blog -->
</div>


@stop