@extends('layouts.default')

@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'Skills',
        'tagline' => null,
        'image' => '/images/slide4.jpg' ])

    <div id="page-content" class="skills-page">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="section-title">Development</h2>
                    <ul class="skills-ul">
                        <li>
                            Object Orientated Programming
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                        </li>
                        <li>
                            PHP
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                            </div>
                        </li>
                        <li>
                            JavaScript
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                        </li>

                      </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="section-title">Design</h2>
                </div>
                <div class="col-md-4">
                    <h2 class="section-title">Architecture</h2>
                </div>

            </div>

        </div>
    </div>

@stop


