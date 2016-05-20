@extends('layouts.default')
@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'Contact me',
        'tagline' => "Get in touch, it would be nice to hear from you",
        'image' => '/build/images/slide5.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    {!! BootForm::open()->action('/contact') !!}
                    {!! BootForm::text('Name', 'name') !!}
                    {!! BootForm::text('Email', 'email') !!}
                    {!! BootForm::text('Phone number', 'phone') !!}
                    {!! BootForm::textarea('Message', 'msg') !!}
                    <div class="text-small">
                    {!! BootForm::checkbox('Subscribe to updates', 'newsletter') !!}
                    </div>
                    {!! BootForm::submit('Send message', 'read-more') !!}
                    {!! BootForm::close() !!}

                </div>
            </div>
        </div>
    </div>
    @endsection