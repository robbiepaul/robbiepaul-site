@extends('layouts.default')

@section('content')

    @include('layouts.partials.carousel', ['title' => 'Passionate about the web', 'tagline' => 'I love what I do&#8212; I\'m always working on a side project or learning a new skill. Web technologies are constantly changing and it\'s important to stay one step ahead.', 'image'=>'/build/images/slide1.jpg'])

    {{--<div class="marketing">--}}

      {{--<div class="" id="marketingPoints">--}}
          {{--<div class=" container">--}}
            {{--<div class="col-lg-4">--}}
              {{--<div class="img-circle icon-bg"><img src="/build/images/icons/code.png" alt="Coding icon" style='max-width: 50px'></div>--}}
              {{--<h2>Coding</h2>--}}

            {{--</div><!-- /.col-lg-4 -->--}}
            {{--<div class="col-lg-4">--}}
              {{--<div class="img-circle icon-bg"><img src="/build/images/icons/ui.png" alt="UI Design icon" style='max-width: 50px'></div>--}}
              {{--<h2>Design</h2>--}}

            {{--</div><!-- /.col-lg-4 -->--}}
            {{--<div class="col-lg-4">--}}
              {{--<div class="img-circle icon-bg"><img src="/build/images/icons/data.png" alt="Architecture icon" style='max-width: 50px'></div>--}}
              {{--<h2>Architecture</h2>--}}


            {{--</div>--}}
          {{--</div>--}}
      {{--</div>--}}

      {{--</div>--}}
    <div class="marketing">

      <div class="" id="marketingPoints">
          <div class=" container">
              <h1 class="section-title">Recent projects</h1>
            <div class="row">
                <div class="col-md-4">
                    <a href="/projects#pagemeta" class="box">
                      <img src="/build/images/projects/pagemeta-thumb.png" alt="PageMeta API" class="img-responsive img-rounded">
                      <h2 class="text-center">PageMeta API</h2>
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-md-4">
                    <a href="/projects#cloudconvert-laravel" class="box">
                        <img src="/build/images/projects/cloudconvert-laravel-thumb.png" alt="CloudConvert Laravel" class="img-responsive img-rounded">
                        <h2 class="text-center">CloudConvert Laravel</h2>
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-md-4">
                    <a href="/projects#morethanabusinesscard" class="box">
                        <img src="/build/images/projects/morethanabusinesscard-thumb.png" alt="More than a business card" class="img-responsive img-rounded">
                        <h2 class="text-center">More than a business card</h2>
                    </a>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <p class="pjax">
                      <a href="/projects" class="see-more">View all projects</a>
                  </p>
              </div>
            </div>
          </div>


      </div>

      </div>


      <div class="container">
          <div id="recentPosts">
                <h1 class="section-title">Recent blog posts</h1>

@if(!empty($last))
                @foreach($last as $post)
                  <article class="row blog-post">
                      <div class="col-lg-4">
                          <a href="{{ $post->getUrl() }}">
                              <img src="uploads/{{$post['thumb']}}" alt="{{$post['title']}} " class="img-rounded img-responsive" />
                          </a>
                      </div>
                      <div class="col-lg-8">
                          <h2 class="featurette-heading"><a href="{{ $post->getUrl() }}">{{$post['title']}}</a></h2>
                          <h3 class="date-posted"><span class="text-muted">Posted on</span> {{ $post['created_at']->format('jS F Y') }}</h3>
                          <p>{{str_limit(strip_tags($post['content']), 300)}}</p>
                          <p>
                              <a href="{{ $post->getUrl() }}" class="read-more">Read more</a>
                          </p>
                      </div>
                      <hr class="featurette-divider">
                  </article>

                @endforeach
                    <p class="pjax">
                        <a href="/blog" class="see-more">Show all posts</a>
                    </p>
              @else
                <p><em>No posts yet</em></p>

    @endif

          </div>
    </div>

@stop


