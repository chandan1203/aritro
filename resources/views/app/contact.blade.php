@extends('layouts.app')
@section('title','Contact')
@section('content')
    <section class="page-title" style="background-image:url({{ asset('') }}images/background/5.jpg)">
        <div class="pattern-layer" style="background-image:url({{ asset('') }}images/background/pattern-21.png)"></div>
        <div class="pattern-layer-two" style="background-image:url({{ asset('') }}images/icons/pattern-1.png)"></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="pull-left">
                    <h2>Contact Us</h2>
                    <div class="text">You have any help or start a new project contact us Now</div>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Bangladesh Office</h2>
                        <ul class="list-style-three">
                            <li><span class="icon flaticon-maps-and-flags"></span>31/11-A(4th Floor), Blok - C, Tajmohol
                                Road , Mohammadpur, Dhaka-1207
                            </li>
                            <li><span class="icon flaticon-call-2"></span><a href="tel:+880 1717 222 826">+880 1717 222
                                    826</a></li>
                            <li><span class="icon flaticon-email-2"></span><a href="mailto:info@ariitro.com">info@ariitro.com</a>
                            </li>
                        </ul>
                        <!-- Social Box -->
                        <div class="social-box">
                            <span>Contact on Social Media :</span>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-facebook-f"></a>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-twitter"></a>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-pinterest-p"></a>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-dribbble"></a>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>London Office</h2>
                        <ul class="list-style-three">
                            <li><span class="icon flaticon-maps-and-flags"></span>31/11-A(4th Floor), Blok - C, Tajmohol
                                Road , Mohammadpur, Dhaka-1207
                            </li>
                            <li><span class="icon flaticon-call-2"></span><a href="tel:+880 1717 222 826">+880 1717 222
                                    826</a></li>
                            <li><span class="icon flaticon-email-2"></span><a href="mailto:info@ariitro.com">info@ariitro.com</a>
                            </li>
                        </ul>
                        <!-- Social Box -->
                        <div class="social-box">
                            <span>Contact on Social Media :</span>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-facebook-f"></a>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-twitter"></a>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-pinterest-p"></a>
                            <a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-dribbble"></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Map Outer -->
            <div class="map-outer">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.8781729583693!2d90.3578190093269!3d23.764750888396417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c15d7eb710a9%3A0xdda4229381a95957!2sAriitro.com!5e0!3m2!1sen!2sbd!4v1616092842586!5m2!1sen!2sbd"
                    width="100%" height="560px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <section class="contact-form-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2><span>Contact Via Mail</span> <small>Fill form and send us</small> </h2>
                <div class="text d-none">Beyond more stoic this along goodness this this wow ipsum sed mante far impressive
                    <br> manifest farcrud opened inside.
                </div>
            </div>
            <div class="inner-container">
                <div class="contact-form">
                    <form method="POST" action="{{ route('hello') }}" id="contact-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" >
                                @error('name')
                                <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" >
                                @error('email')
                                <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject" >
                                @error('subject')
                                <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" >
                                @error('phone')
                                <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Your Question">{{ old('message') }}</textarea>
                                @error('message')
                                <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                <button type="submit" class="theme-btn btn-style-three"><span
                                        class="txt">Send</span></button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.app.footer_title')
@endsection
