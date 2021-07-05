@extends('layouts.app')
@section('title','Home')
@section('content')
    <section class="main-slider-two">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide" style="background-image:url({{ asset('') }}images/main-slider/image-2.jpg)">
                <div class="section-pattern-layer"></div>
                <div class="pattern-layer"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-2.png)"></div>
                <div class="pattern-layer-two"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-8.png)"></div>
                <div class="pattern-layer-three"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-3.png)"></div>
                <div class="pattern-layer-four"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-4.png)"></div>
                <div class="auto-container">
                    <!-- Content Box -->
                    <div class="content-box">
                        <div class="title">Welcome to Ariitro bangladesh</div>
                        <h1>Smart Web Develpment <br> And Design Agecny</h1>
                        <div class="link-box">
                            <a href="about.php" class="theme-btn btn-style-two"><span
                                    class="txt">More Discover</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('') }}images/main-slider/image-2.jpg)">
                <div class="section-pattern-layer"></div>
                <div class="pattern-layer"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-2.png)"></div>
                <div class="pattern-layer-two"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-8.png)"></div>
                <div class="pattern-layer-three"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-3.png)"></div>
                <div class="pattern-layer-four"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-4.png)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="title">Welcome to Ariitro bangladesh</div>
                        <h1>GET YOUR WEBSITE <br>
                            WEBSITE DEVELOPMENT
                        </h1>
                        <div class="link-box">
                            <a href="about.php" class="theme-btn btn-style-two"><span
                                    class="txt">More Discover</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('') }}images/main-slider/image-2.jpg)">
                <div class="section-pattern-layer"></div>
                <div class="pattern-layer"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-2.png)"></div>
                <div class="pattern-layer-two"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-8.png)"></div>
                <div class="pattern-layer-three"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-3.png)"></div>
                <div class="pattern-layer-four"
                     style="background-image:url({{ asset('') }}images/main-slider/pattern-4.png)"></div>
                <div class="auto-container">
                    <!-- Content Box -->
                    <div class="content-box">
                        <div class="title">Welcome to Ariitro bangladesh</div>
                        <h1>Smart Web Develpment <br> And Design Agecny</h1>
                        <div class="link-box">
                            <a href="about.php" class="theme-btn btn-style-two"><span
                                    class="txt">More Discover</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.app.solution_section_two')
    <section class="services-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2 class="text-center">Let’s Make Somthing Best <span>Togather</span></h2>
                            <div class="text text-center">We are committed to providing our customers with exceptional
                                service while
                                offering our employees the best training.
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="solution-block col-lg-3 col-md-3 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="solution-pattern-layer"
                                         style="background-image:url({{ asset('') }}images/background/pattern-2.png)"></div>
                                    <div class="solution-pattern-layer-two"
                                         style="background-image:url({{ asset('') }}images/background/pattern-27.png)"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-seo"></span>
                                    </div>
                                    <h3><a href="services-single.html">SEO & CONTENT <br> WRITING</a></h3>
                                    <div class="text">
                                        {{ Str::limit('We provides a professional article writing service to improve your SEO is one of the best business decisions you’re going to make if you take your search engine rankings seriously.', 70) }}

                                    </div>
                                    <span class="side-icon flaticon-seo"></span>
                                </div>
                                {{-- <a class="arrow" href="services-single.html"><span
                                        class="flaticon-angle-arrow-pointing-to-right"></span></a> --}}
                            </div>
                            <div class="solution-block col-lg-3 col-md-3 col-sm-12">
                                <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="solution-pattern-layer"
                                         style="background-image:url({{ asset('') }}images/background/pattern-2.png)"></div>
                                    <div class="solution-pattern-layer-two"
                                         style="background-image:url({{ asset('') }}images/background/pattern-27.png)"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-campaign"></span>
                                    </div>
                                    <h3><a href="services-single.html">DIGITAL <br> MARKETING</a></h3>
                                    <div class="text">
                                        {{ Str::limit('We are a fast-growing digital marketing agency that uses a combination of technology, problem solving, and marketing to make online paid advertising profitable for our wide variety of clients.', 70) }}
                                    </div>
                                    <span class="side-icon flaticon-campaign"></span>
                                </div>
                                {{-- <a class="arrow" href="services-single.html"><span
                                        class="flaticon-angle-arrow-pointing-to-right"></span></a> --}}
                            </div>
                            <div class="solution-block col-lg-3 col-md-3 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="solution-pattern-layer"
                                         style="background-image:url({{ asset('') }}images/background/pattern-2.png)"></div>
                                    <div class="solution-pattern-layer-two"
                                         style="background-image:url({{ asset('') }}images/background/pattern-27.png)"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-layout"></span>
                                    </div>
                                    <h3><a href="services-single.html">WEBSITE DEVELOPMENT</a></h3>
                                    <div class="text">
                                        {{ Str::limit('Our mission is to provide affordable, professional web design, web development  to small businesses at a lower cost than traditional consulting firms. Your business is important to us.', 70) }}

                                    </div>
                                    <span class="side-icon flaticon-layout"></span>
                                </div>
                                {{-- <a class="arrow" href="services-single.html"><span
                                        class="flaticon-angle-arrow-pointing-to-right"></span></a> --}}
                            </div>
                            <div class="solution-block col-lg-3 col-md-3 col-sm-12">
                                <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="solution-pattern-layer"
                                         style="background-image:url({{ asset('') }}images/background/pattern-2.png)"></div>
                                    <div class="solution-pattern-layer-two"
                                         style="background-image:url({{ asset('') }}images/background/pattern-27.png)"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-graphic-design"></span>
                                    </div>
                                    <h3><a href="services-single.html">UI/UX <br> DESIGNING</a></h3>
                                    <div class="text">
                                        {{ Str::limit('We always ensure that the end user is at the heart of our design considerations, offering  a range of design services from UX research to interaction design, as well as full usability audits. Our UX design approach is rooted in collaborative and iterative design, and our participatory mindset, coupled with our open communication approach is how we always work.',70) }}
                                    </div>
                                    <span class="side-icon flaticon-graphic-design"></span>
                                </div>
                                {{-- <a class="arrow" href="services-single.html"><span
                                        class="flaticon-angle-arrow-pointing-to-right"></span></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column my-last-part clearfix">
                        <div class="text-bar w-50 pull-left">You Want to Check All Services click this Button Now</div>
                        <div class="btn-box text-center pull-left w-50 ">
                            <a href="{{route('contact')}}" target="_blank" class="theme-btn btn-style-five"><span
                                    class="txt">More Discover</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="business-section">
        <div class="lower-pattern"
             style="background-image:url({{ asset('') }}images/background/pattern-20.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{ asset('') }}images/resource/business.jpg" alt=""/>
                        </div>
                        <div class="business-graph">
                            <div class="row clearfix">
                                <div class="counter-boxed col-lg-4 col-md-6 col-sm-12">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#18c5fe" data-bgColor="#3c3e3f"
                                               data-width="125" data-height="125" data-linecap="normal" value="87"
                                               thickness="0.05">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="87"
                                                                                data-speed="3500"></span>%
                                        </div>
                                        <h6>Quality Services</h6>
                                    </div>
                                </div>
                                <div class="counter-boxed col-lg-5 col-md-6 col-sm-12">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#18c5fe" data-bgColor="#3c3e3f"
                                               data-width="125" data-height="125" data-linecap="normal" value="75"
                                               thickness="0.05">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="75"
                                                                                data-speed="3500"></span>%
                                        </div>
                                        <h6>Skilled Person</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                        <h2>We are Specialists <br> in <span>Business Way</span></h2>
                        <div class="text">
                            <p>We believe that success is achieved through a highly collaborative interaction, so that
                                we can work together to identify and evaluate opportunities beyond your current
                                operations.</p>
                            <p>There are many variations of passages the majority have suffered alteration in some fo
                                injected humour, or randomised words believable.</p>
                        </div>
                        <div class="skills">
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">DIGITAL MARKETING</div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="70">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="2000"
                                                                             data-stop="70">0</span>%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="projects-section-three">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>BEST Plan Organization <br> <span>Arrangements</span></h2>
            </div>
            <div class="masonry-items-container row clearfix">
                <div class="gallery-block-three masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('') }}images/gallery/10.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                        <div class="separate"></div>
                                        <div class="title">New Solutions And Excellent</div>
                                    </div>
                                </div>
                            </div>
                            <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>
                        </figure>
                    </div>
                </div>
                <div class="gallery-block-three masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('') }}images/gallery/10.jpg" alt="">

                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                        <div class="separate"></div>
                                        <div class="title">New Solutions And Excellent</div>
                                    </div>
                                </div>
                            </div>
                            <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>
                        </figure>
                    </div>
                </div>
                <div class="gallery-block-three masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('') }}images/gallery/12.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                        <div class="separate"></div>
                                        <div class="title">New Solutions And Excellent</div>
                                    </div>
                                </div>
                            </div>
                            <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>
                        </figure>
                    </div>
                </div>
                <div class="gallery-block-three masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('') }}images/gallery/10.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                        <div class="separate"></div>
                                        <div class="title">New Solutions And Excellent</div>
                                    </div>
                                </div>
                            </div>
                            <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>
                        </figure>
                    </div>
                </div>

            </div>
            <div class="btn-box text-center">
                <a href="about.php" class="theme-btn btn-style-three"><span class="txt">More Discover</span></a>
            </div>
        </div>
    </section> --}}

    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('') }}images/resource/last-logo-design.png"
                                                                   alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('') }}images/clients/3.png"
                                                                   alt=""></a></figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<!--    <section class="testimonial-section-three"
             style="background-image:url({{ asset('') }}images/background/4.jpg)">
        <div class="auto-container">
            <div class="testimonial-outer">
                <div class="client-testimonial-carousel owl-carousel owl-theme">
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote-1"></div>
                            <div class="text">This is due to their excellent service, competitive pricing and customer
                                support. It’s throughly refresing to get such a personal touch.
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote-1"></div>
                            <div class="text">This is due to their excellent service, competitive pricing and customer
                                support. It’s throughly refresing to get such a personal touch.
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote-1"></div>
                            <div class="text">This is due to their excellent service, competitive pricing and customer
                                support. It’s throughly refresing to get such a personal touch.
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote-1"></div>
                            <div class="text">This is due to their excellent service, competitive pricing and customer
                                support. It’s throughly refresing to get such a personal touch.
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote-1"></div>
                            <div class="text">This is due to their excellent service, competitive pricing and customer
                                support. It’s throughly refresing to get such a personal touch.
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote-1"></div>
                            <div class="text">This is due to their excellent service, competitive pricing and customer
                                support. It’s throughly refresing to get such a personal touch.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">

                            <div class="author-info">
                                <div class="author-name">Angilina MArker</div>
                                <div class="designation">Business CEO</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <div class="author-info">
                                <div class="author-name">Angilina MArker</div>
                                <div class="designation">Business CEO</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <div class="author-info">
                                <div class="author-name">Angilina MArker</div>
                                <div class="designation">Business CEO</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <div class="author-info">
                                <div class="author-name">Angilina MArker</div>
                                <div class="designation">Business CEO</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <div class="author-info">
                                <div class="author-name">Angilina MArker</div>
                                <div class="designation">Business CEO</div>
                            </div>
                        </div>
                        <div class="thumb-item">
&lt;!&ndash;                            <figure class="thumb-box"><img src="{{ asset('') }}images/resource/author-7.jpg"
                                                           alt=""></figure>&ndash;&gt;
                            <div class="author-info">
                                <div class="author-name">Angilina MArker</div>
                                <div class="designation">Business CEO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    @include('layouts.app.footer_title')
@endsection
