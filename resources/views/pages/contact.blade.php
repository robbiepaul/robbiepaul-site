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
                    {!! BootForm::text('Name', 'name')->required()->labelClass('required') !!}
                    {!! BootForm::text('Email', 'email')->required()->labelClass('required') !!}
                    {!! BootForm::text('Phone number', 'phone') !!}
                    {!! BootForm::textarea('Message', 'msg')->required()->labelClass('required') !!}
                    <div class="text-small">
                    {{--{!! BootForm::checkbox('Subscribe to updates', 'newsletter') !!}--}}
                        <div class="checkbox">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="newsletter">
                                Subscribe to updates
                            </label>
                        </div>
                    </div>
                    {!! BootForm::submit('Send message', 'read-more') !!}
                    {!! BootForm::close() !!}

                </div>
            </div>
        </div>
    </div>
    @endsection