@extends('layouts.inner')

@section('head')

@show

@section('content')
    @include('header')
    <section>
        
        <div class="row title">
              <div class="col-md-8 col-md-offset-2 wp1 animated fadeInLeft">
                <h1 class="arrow">{{$page->title}}</h1>
              </div>
        </div>
        <div class="row">
            {{$page->content}}
        </div>
        
    </section>
    @include('footer')



    <script>hljs.initHighlightingOnLoad();</script>
    
@stop