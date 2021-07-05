@extends('layouts.app')
@section('title','Projects')
@section('content')
    <section class="page-title" style="background-image:url({{ asset('') }}images/background/5.jpg)">
        <div class="pattern-layer" style="background-image:url({{ asset('') }}images/background/pattern-21.png)"></div>
        <div class="pattern-layer-two" style="background-image:url({{ asset('') }}images/icons/pattern-1.png)"></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="pull-left">
                    <h2>Our Successful Projects</h2>
                    <div class="text">Welcom To Award Winning Aritro Bangladesh</div>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section style-two">
        <div class="auto-container">

            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter=".branding">BRANDING</li>
                        <li class="filter" data-role="button" data-filter=".illustration">ILLUSTRATION</li>
                        <li class="filter" data-role="button" data-filter=".photography">PHOTOGRAPHY</li>
                        <li class="filter" data-role="button" data-filter=".web-design">WEB DESIGN</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix web-design photography col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/18.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix photography illustration col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/19.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!--<a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix web-design branding col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/20.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix web-design branding col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/21.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix photography branding illustration col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/22.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix web-design photography col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/23.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!--<a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix photography illustration col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/24.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix web-design branding col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/25.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block-three mix web-design branding col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('') }}images/gallery/26.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-single.html">Wesite Creation</a></h3>
                                            <div class="separate"></div>
                                            <div class="title">New Solutions And Excellent</div>
                                        </div>
                                    </div>
                                </div>
                                <!--<a href="projects-single.html" class="link-arrow flaticon-right-arrow-1"></a>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="btn-box text-center">
                <a href="#" class="theme-btn btn-style-three"><span class="txt">More Discover</span></a>
            </div>

        </div>
    </section>
    <section class="cta-section" style="background-image:url({{ asset('') }}images/background/1.jpg)">
        <div class="auto-container">
            <div class="icon flaticon-code"></div>
            <h2>Extraordinary Things in Business are <br> Never Done By One Individual. <br> <span>THEY'RE Finished by a Group of Individuals.</span></h2>
            <div class="btn-box text-center">
                <a href="about.html" class="theme-btn btn-style-four"><span class="txt">More Discover</span></a>
            </div>
        </div>
    </section>
    <section class="solution-section-three">
        <div class="auto-container">
            <div class="top-divider"></div>
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>We Make The Perfect <span>Solutions</span></h2>
                <div class="text">We are committed to providing our customers with exceptional service <br> while offering our employees the best training.</div>
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Solution Block Two -->
                    <div class="solution-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="block-inner">
                            <div class="inner-box">
                                <div class="color-layer-one"></div>
                                <div class="color-layer-two"></div>
                                <div class="side-icon flaticon-seo"></div>
                                <h3><a href="services-single.html">SEO & CONTENT <br> WRITING</a></h3>
                                <div class="text">We are committed to providing our customers with exceptional service while offering ...</div>
                                <a class="read-more" href="services-single.html">Read More <span class="arrow fa fa-angle-double-right"></span></a>
                            </div>
                            <div class="lower-box">
                                <div class="box"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-seo"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Solution Block Two -->
                    <div class="solution-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="block-inner">
                            <div class="inner-box">
                                <div class="color-layer-one"></div>
                                <div class="color-layer-two"></div>
                                <div class="side-icon flaticon-campaign"></div>
                                <h3><a href="services-single.html">DIGITAL <br> MARKETING</a></h3>
                                <div class="text">We are committed to providing our customers with exceptional service while offering ...</div>
                                <a class="read-more" href="services-single.html">Read More <span class="arrow fa fa-angle-double-right"></span></a>
                            </div>
                            <div class="lower-box">
                                <div class="box"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-campaign"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Solution Block Two -->
                    <div class="solution-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="block-inner">
                            <div class="inner-box">
                                <div class="color-layer-one"></div>
                                <div class="color-layer-two"></div>
                                <div class="side-icon flaticon-graphic-design"></div>
                                <h3><a href="services-single.html">UI/UX <br> DESIGNING</a></h3>
                                <div class="text">We are committed to providing our customers with exceptional service while offering ...</div>
                                <a class="read-more" href="services-single.html">Read More <span class="arrow fa fa-angle-double-right"></span></a>
                            </div>
                            <div class="lower-box">
                                <div class="box"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-graphic-design"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Solution Block Two -->
                    <div class="solution-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="block-inner">
                            <div class="inner-box">
                                <div class="color-layer-one"></div>
                                <div class="color-layer-two"></div>
                                <div class="side-icon flaticon-layout"></div>
                                <h3><a href="services-single.html">WEBSITE <br> DEVELOPMENT</a></h3>
                                <div class="text">We are committed to providing our customers with exceptional service while offering ...</div>
                                <a class="read-more" href="services-single.html">Read More <span class="arrow fa fa-angle-double-right"></span></a>
                            </div>
                            <div class="lower-box">
                                <div class="box"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-layout"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="bottom-divider"></div>
        </div>
    </section>
    <section class="quote-section style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Get a free <span>quote.</span></h2>

                        <!-- Default Form -->
                        <div class="default-form">
                            <form method="post" action="blog.html">

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Your Phone" required="">
                                </div>

                                <div class="form-group">
                                    <select class="custom-select-box">
                                        <option>Choose Your Services</option>
                                        <option>Service One</option>
                                        <option>Service Two</option>
                                        <option>Service Three</option>
                                        <option>Service Four</option>
                                        <option>Service Five</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form"><span class="txt">More Discover</span></button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>See Our feature <br> why you choose the <span>Moran</span></h2>
                            <div class="text">We are committed to providing our customers with exceptional service while offering our employees the best training.</div>
                        </div>
                        <ul class="numbering-list">
                            <li><span class="number">01</span><strong>PROFESSIONAL STAFF</strong>There are many variations of passages of majority have suffered.</li>
                            <li><span class="number">02</span><strong>100% SATISFACTION</strong>There are many variations of passages of majority have suffered.</li>
                            <li><span class="number">03</span><strong>QUALITY DESIGNING</strong>There are many variations of passages of majority have suffered.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.app.footer_title')
@endsection
