@extends('layouts.default')
@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'Edit post',
        'tagline' => "",
        'image' => '/build/images/error.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    {!! BootForm::open()->action('/post/'.$model->id)->multipart()->put() !!}
                    {!! BootForm::bind($model) !!}
                    {!! BootForm::text('Title', 'title')->required()->labelClass('required') !!}
                    {!! BootForm::textarea('Content', 'content')->required()->labelClass('required')->rows(20) !!}
                    <div class="text-small">
                        {!! BootForm::select('Status', 'public')->options([
                        0 => 'Draft',
                        1 => 'Published',
                        ])!!}
                    </div>
                    {!! BootForm::file('Image', 'image') !!}

                    {!! BootForm::submit('Edit', 'read-more') !!}
                    {!! BootForm::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection