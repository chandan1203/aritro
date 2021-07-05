@extends('layouts.app')
@section('title','Blog Detail')
@section('content')
    <section class="page-title" style="background-image:url({{ asset('') }}images/background/6.jpg)">
        <div class="pattern-layer" style="background-image:url({{ asset('') }}images/background/pattern-21.png)"></div>
        <div class="pattern-layer-two" style="background-image:url({{ asset('') }}images/icons/pattern-1.png)"></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="pull-left">
                    <h2>Our Latest News</h2>
                    <div class="text">Our Latest News For Our Clients to Breaf Update.</div>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!-- Block Detail -->
                    <div class="blog-detail">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image:url({{ asset('') }}images/background/pattern-25.png)"></div>
                            <div class="image">
                                <img src="{{ asset('') }}images/resource/news-10.jpg" alt="" />
                                <div class="category">Web Design</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-timetable"></span>August 25, 2021</li>
                                    <li><span class="icon flaticon-email"></span>Comments 03</li>
                                    <li><span class="icon flaticon-user-2"></span>Admin</li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3>Creative Para Jóvenes: Designer’s UI/UX Complete Checklist.</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                                <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                <blockquote>
                                    <span class="quote-icon flaticon-quote-1"></span>
                                    <div class="quote-text">"The Essence of WordPress Design Will Always <br> Be About People and How They Live.”</div>
                                    <div class="quote-author">By Albert Hadley</div>
                                </blockquote>
                                <p>it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                <div class="two-column">
                                    <div class="row clearfix">
                                        <!-- Column -->
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <div class="image">
                                                <img src="{{ asset('') }}images/resource/news-19.jpg" alt="" />
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post Share Options-->
                                <div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <div class="pull-left tags">TAGS: <a href="#">Business,</a> <a href="#">Morancy,</a><a href="#">Technology</a></div>
                                        <ul class="tags pull-right">
                                            <div class="business">Category: <a href="#">Business,</a> <a href="#">Morancy,</a></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Author Box -->
                            <div class="blog-author-box">
                                <div class="author-inner">
                                    <div class="thumb"><img src="{{ asset('') }}images/resource/author-8.jpg" alt=""></div>
                                    <h4 class="name">CHRISTINE EVE</h4>
                                    <div class="text">Lorem ipsum is simply free text used by copytyping. Neque porro est qui dolorem ipsum quia quaed veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <ul class="social-icon clearfix">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="comments-area">
                            <div class="group-title">
                                <h3>2 Comments</h3>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="{{ asset('') }}images/resource/author-9.jpg" alt=""></div>
                                    <div class="comment-info clearfix"><strong>KEVIN MARTIN</strong><div class="comment-time">20 APRIL, 2021</div></div>
                                    <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <a class="theme-btn reply-btn" href="#">Reply Now <span class="arrow flaticon-right-arrow-1"></span></a>
                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="{{ asset('') }}images/resource/author-10.jpg" alt=""></div>
                                    <div class="comment-info clearfix"><strong>SARAH ALBERT</strong><div class="comment-time">20 APRIL, 2021</div></div>
                                    <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <a class="theme-btn reply-btn" href="#">Reply Now <span class="arrow flaticon-right-arrow-1"></span></a>
                                </div>
                            </div>

                        </div>


                        <!-- Comment Form -->
                        <div class="comment-form">

                            <div class="group-title"><h3>LEAVE A COMMENT</h3></div>

                            <!--Comment Form-->
                            <form method="post" action="blog.html">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Full Name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea class="" name="message" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send now</span></button>
                                    </div>

                                </div>
                            </form>

                        </div>


                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <div class="sidebar-inner">

                            <!-- Search -->
                            <div class="sidebar-widget search-box">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search ....." required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="widget-content">
                                    <div class="sidebar-title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="cat-list-two">
                                        <li><a href="#">Software <span>(25)</span></a></li>
                                        <li><a href="#">WordPress Design<span>(80)</span></a></li>
                                        <li><a href="#">UI/UX<span>(95)</span></a></li>
                                        <li><a href="#">Landscape Design<span>(75)</span></a></li>
                                        <li><a href="#">Lighting<span>(35)</span></a></li>
                                        <li><a href="#">Construction<span>(40)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Popular Post Widget -->
                            <div class="sidebar-widget popular-posts">
                                <div class="widget-content">
                                    <div class="sidebar-title">
                                        <h3>LATEST POSTS</h3>
                                    </div>
                                    <article class="post">
                                        <figure class="post-thumb"><img src="{{ asset('') }}images/resource/post-thumb-4.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
                                        <div class="text"><a href="blog-detail.html">Guide to Make Your WordPress Journal.</a></div>
                                        <div class="post-info">August 25, 2021</div>
                                    </article>

                                    <article class="post">
                                        <figure class="post-thumb"><img src="{{ asset('') }}images/resource/post-thumb-5.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
                                        <div class="text"><a href="blog-detail.html">Basic Rules of Running Web Morancy</a></div>
                                        <div class="post-info">August 25, 2021</div>
                                    </article>

                                    <article class="post">
                                        <figure class="post-thumb"><img src="{{ asset('') }}images/resource/post-thumb-6.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
                                        <div class="text"><a href="blog-detail.html">We Build & Activate Brands Insight</a></div>
                                        <div class="post-info">August 25, 2021</div>
                                    </article>
                                </div>
                            </div>

                            <!-- Tags Widget -->
                            <div class="sidebar-widget popular-tags">
                                <div class="widget-content">
                                    <div class="sidebar-title">
                                        <h3>Tags</h3>
                                    </div>
                                    <a href="#">Software</a>
                                    <a href="#">WordPress</a>
                                    <a href="#">UI/UX Design</a>
                                    <a href="#">Landscape</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Graphics</a>
                                    <a href="#">Lighting</a>
                                    <a href="#">Exteriors</a>
                                    <a href="#">Home</a>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.app.footer_title')
@endsection
