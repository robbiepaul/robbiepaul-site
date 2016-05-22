@extends('blog.master')

@section('body')
    @include('layouts.partials.carousel', ['title' => "<small class='recommended-post'>Recommended Post</small><br><a href='".url('/blog/'.$mostRecommended['id'].'/'.str_slug($mostRecommended['title']))."'>".$mostRecommended['title']."</a>", 'tagline' => str_limit(strip_tags($mostRecommended['content']), 170). "<br/><a class='read-post' href='".url('/blog/'.$mostRecommended['id'].'/'.str_slug($mostRecommended['title']))."'>READ &raquo;</a>", 'image'=>'/uploads/'.$mostRecommended['image']])

<div class="container index">

    <div id="recentPosts">
        <h1 class="section-title">Recent posts</h1>
        @foreach($last as $post)
            <article class="row blog-post">
                <div class="col-lg-4">
                    <a href="{{ $post->getUrl() }}">
                        <img src="/uploads/{{$post['thumb']}}" alt="{{$post['title']}} " class="img-rounded img-responsive" />
                    </a>
                </div>
                <div class="col-lg-8">
                    <h2 class="featurette-heading"><a href="{{ $post->getUrl() }}">{{$post['title']}}</a></h2>
                    <h3 class="date-posted"><span class="text-muted">Posted on</span> {{ $post['created_at']->format('jS F Y') }}</h3>
                    <p>{{str_limit(strip_tags($post['html']), 300)}}</p>
                    <p>
                        <a href=" {{ $post->getUrl()  }}" class="read-more">Read more</a>
                    </p>
                </div>
                <hr class="featurette-divider">
            </article>
        @endforeach
        <div class="pjax">
        {!! $last->render() !!}
        </div>
    </div>

</div>



        


@stop