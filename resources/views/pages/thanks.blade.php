@extends('layouts.default')
@section('content')

    @include('layouts.partials.carousel', [
            'title' => 'Thanks',
            'tagline' => null,
            'image' => '/build/images/slide5.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center">I'll be in touch soon.</h2>

                </div>
            </div>
        </div>
    </div>
    @endsection