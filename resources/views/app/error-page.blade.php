@extends('layouts.app')
@section('title','Not Found')
@section('content')
    <section class="page-title" style="background-image:url({{ asset('') }}images/background/6.jpg)">
        <div class="pattern-layer" style="background-image:url({{ asset('') }}images/background/pattern-21.png)"></div>
        <div class="pattern-layer-two" style="background-image:url({{ asset('') }}images/icons/pattern-1.png)"></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="pull-left">
                    <h2>Not Found</h2>
                    <div class="text">Our Latest News For Our Clients to Breaf Update.</div>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="error-section">
        <div class="auto-container">
            <div class="content">
                <h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
                <a href="{{ route('index') }}" class="theme-btn btn-style-three"><span class="txt">Go to Home Page</span></a>
            </div>
        </div>
    </section>
    @include('layouts.app.footer_title')
@endsection
