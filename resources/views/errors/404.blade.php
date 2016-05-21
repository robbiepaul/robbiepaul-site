@extends('layouts.default')
@section('content')

    @include('layouts.partials.carousel', [
        'title' => '404',
        'tagline' => "Page not found",
        'image' => '/build/images/error.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <p class="text-center">We couldn't find the page you were looking for, why don't you try one of these?</p>
                    <ul class="nav nav-stacked text-center">
                        @include('layouts.partials.nav')
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection