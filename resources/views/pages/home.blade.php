@extends('layouts.default')

@section('content')

    @include('layouts.partials.carousel', ['title' => 'Passionate about the web', 'tagline' => 'I love what I do&#8212; I\'m always working on a side project or learning a new skill. Web technologies are constantly changing and it\'s important to stay one-step-ahead.', 'image'=>'/images/slide1.jpg'])

    <div class="marketing">

      <div class="row" id="marketingPoints">
          <div class=" container">
            <div class="col-lg-4">
              <div class="img-circle icon-bg"><img src="images/icons/code.png" alt="Coding icon" style='max-width: 50px'></div>
              <h2>Coding</h2>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <div class="img-circle icon-bg"><img src="images/icons/ui.png" alt="UI Design icon" style='max-width: 50px'></div>
              <h2>Design</h2>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <div class="img-circle icon-bg"><img src="images/icons/data.png" alt="Architecture icon" style='max-width: 50px'></div>
              <h2>Architecture</h2>


            </div>
          </div>
      </div>

      </div>
      <div class="container">
          <div id="recentPosts">
                <h1 class="section-title">Recent blog posts</h1>


                @foreach($last as $post)
                  <article class="row blog-post">
                      <div class="col-lg-4">
                          <a href="{{ url('/blog/'.$post['id'].'/'.str_slug($post['title'])) }}">
                              <img src="uploads/{{$post['image']}}" alt="{{$post['title']}} " class="img-rounded img-responsive" />
                          </a>
                      </div>
                      <div class="col-lg-8">
                          <h2 class="featurette-heading"><a href="{{ url('/blog/'.$post['id'].'/'.str_slug($post['title'])) }}">{{$post['title']}}</a></h2>
                          <h3 class="date-posted"><span class="text-muted">Posted on</span> {{ $post['created_at']->format('jS F Y') }}</h3>
                          <p>{{str_limit(strip_tags($post['content']), 300)}}</p>
                          <p>
                              <a href="{{ url('/blog/'.$post['id'].'/'.str_slug($post['title'])) }}" class="read-more">Read more</a>
                          </p>
                      </div>
                      <hr class="featurette-divider">
                  </article>

                @endforeach
              <p class="pjax">
                <a href="/blog" class="see-more">Show all posts</a>
              </p>
          </div>
    </div>

@stop


