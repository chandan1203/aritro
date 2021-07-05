<header class="main-header header-style-two">

    <!-- Header Top Two -->
    <div class="header-top-two">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left pull-left">
                    <ul class="info-list">
                        <!--                        <li><span class="icon flaticon-maps-and-flags"></span>31/11-A(4th Floor), Blok - C, Tajmohol Road , Mohammadpur, Dhaka-1207</li>-->
                        <li><span class="icon flaticon-call-2"></span><a href="tel:01717 222 826">01717 222 826</a></li>
                        <li><span class="icon flaticon-email-2"></span><a href="mailto:info@ariitro.com">info@ariitro.com</a>
                        </li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right pull-right">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-twitter"></a></li>
                        <li><a href="https://www.facebook.com/ariitrobangladeshexportimport" target="_blank"
                               class="fa fa-pinterest-p"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container my-nav-bar" >
            <div class="inner-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img
                                src="{{ asset('') }}images/aritro_pic/aritro-logo.png" alt="" title="" width="135"
                                height="80"></a></div>
                </div>

                <div class="nav-outer pull-right clearfix">

                    <!-- Mobile Navigation Toggler For Mobile -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=" "><a href="{{ route('about') }}">About us</a></li>
                                <li class=""><a href="{{ route('services') }}">Services</a></li>
                                <li class="dropdown"><a href="{{ route('why-us') }}">Why US</a>
                                    <ul>
                                        <li><a href="{{ route('projects') }}">Our works</a></li>
                                        <li><a href="{{ route('skill') }}">Our Skill</a></li>
                                        <li><a href="{{ route('clients') }}">Our Clients</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ route('blog') }}">Blog</a>
                                    <ul>
                                        <li><a href="{{ route('blog') }}">Our Blog</a></li>
                                        <li><a href="{{ route('blog-detail') }}">Blog Details</a></li>
                                        <li><a href="{{ route('error-page') }}">Error Page</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li class="dropdown"><a href="{{ route('blog') }}">Our sister concern</a>
                                    <ul>
                                        <li><a href="https://ariitro.com/" target="_blank">Aritro E-commerce</a></li>
                                        <li><a href="https://www.facebook.com/aritroholidaystourismagency" target="_blank">Aritro Holidays</a></li>
                                        <li><a href="{{ route('error-page') }}">Aritro Electronics</a></li>
                                        <li><a href="{{ route('export-import') }}">Export/Import</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Options Box -->
                    <div class="options-box clearfix">
                        <!-- Search Box -->
                        <!--                        <div class="search-box-outer">
                                                    <div class="search-box-btn"><span class="fa fa-search"></span></div>
                                                </div>-->

                        <!-- Grid Box -->
                        <div class="grid-box navSidebar-button">
                            <a href="#" class="icon flaticon-menu"></a>
                        </div>

                        <div class="btn-box">
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-five"><span
                                    class="txt">Contact Now</span></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('index') }}"><img
                        src="{{ asset('') }}images/resource/last-logo-design.png" height="80" width="135" alt=""
                        title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
