@extends('layouts.default')
@section('content')

    @include('layouts.partials.carousel', [
        'title' => '503',
        'tagline' => "Site not available",
        'image' => '/build/images/error.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <p class="text-center">Looks like the website isn't working at the moment, we'll get it back online soon so check back later.</p>


                </div>
            </div>
        </div>
    </div>
@endsection