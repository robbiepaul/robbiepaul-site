@extends('layouts.default')

@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'Skills',
        'tagline' => 'Always learning and improving',
        'image' => '/build/images/slide4.jpg' ])

    <div id="page-content" class="skills-page">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Development</h2>
                    <ul class="skills-ul">

                            @include('pages.partials.skill', ['label' => 'Object Orientated Programming', 'value' => 80])
                            @include('pages.partials.skill', ['label' => 'PHP', 'value' => 90])
                            @include('pages.partials.skill', ['label' => 'HTML5', 'value' => 90])
                            @include('pages.partials.skill', ['label' => 'JavaScript', 'value' => 80])
                            @include('pages.partials.skill', ['label' => 'Laravel Framework', 'value' => 80])
                            @include('pages.partials.skill', ['label' => 'Zend Framework', 'value' => 70])
                            @include('pages.partials.skill', ['label' => 'WordPress', 'value' => 70])
                            @include('pages.partials.skill', ['label' => 'AngularJS', 'value' => 70])
                            @include('pages.partials.skill', ['label' => 'jQuery', 'value' => 80])
                            @include('pages.partials.skill', ['label' => 'SASS', 'value' => 80])
                            @include('pages.partials.skill', ['label' => 'Ionic Framework', 'value' => 70])
                            @include('pages.partials.skill', ['label' => 'ActionScript', 'value' => 70])
                            @include('pages.partials.skill', ['label' => 'Node.js', 'value' => 60])
                            @include('pages.partials.skill', ['label' => 'Ruby', 'value' => 60])

                      </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Design</h2>
                    <ul class="skills-ul">
                        @include('pages.partials.skill', ['label' => 'User Experience Principles', 'value' => 80])
                        @include('pages.partials.skill', ['label' => 'Accessibility Standards', 'value' => 80])
                        @include('pages.partials.skill', ['label' => 'Grid Systems', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'Typography', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'Colour theory', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'Vector design', 'value' => 70])

                    </ul>
                    <h2 class="section-title" style="margin-top: 53px;">Architecture</h2>
                    <ul class="skills-ul">
                        @include('pages.partials.skill', ['label' => 'Linux CLI', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'Vagrant', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'MySQL', 'value' => 80])
                        @include('pages.partials.skill', ['label' => 'Apache', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'NGINX', 'value' => 70])
                        @include('pages.partials.skill', ['label' => 'Redis', 'value' => 60])
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="call_to_action text-right">
                            <a href="/cv.pdf" class="read-more" target="_blank">Download my latest CV</a>
                        </p>
                    </div>
                </div>


            </div>

        </div>
    </div>

@stop


