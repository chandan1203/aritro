<footer class="main-footer" style="background-image: url({{ asset('') }}images/background/pattern-10.png)">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('') }}images/aritro_pic/aritro-logo.png" alt=""/></a>
                                </div>
                                <div class="text">Welcome to our web design and development.
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/ariitrobangladeshexportimport"  target="_blank" class="fa fa-facebook-f"></a></li>
                                    <li><a href="https://www.facebook.com/ariitrobangladeshexportimport"  target="_blank" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.facebook.com/ariitrobangladeshexportimport"  target="_blank" class="fa fa-pinterest-p"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>QUICK LINKS </h4>
                                <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-6">
                                        <ul class="list-link">
                                            <li><a href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            <li><a href="{{route('about')}}">Privacy Policy</a></li>
                                            <li><a href="{{route('about')}}">Help</a></li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-6">
                                        <ul class="list-link">
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Terms Of Use</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h4>CONTACT</h4>
                                <ul class="list-style-two">
                                    <li><span class="icon flaticon-maps-and-flags"></span>
                                        Level-3, House: 8, Road -2, PC Culture Housing Society, Shekhertek, Mohammadpur, Dhaka -1207
                                    </li>
                                    <li><span class="icon flaticon-call-2"></span>CALL ANYTIME : <a
                                            href="tel:+880 1717 222 826">+880 1717 222 826</a></li>
                                    <li><span class="icon flaticon-email-2"></span><a
                                            href="mailto:info@ariitro.com">info@ariitro.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h4>Newsletter</h4>
                                <div class="text">Sign up for our latest news & articles. We <br> won’t give you
                                    spam mails.
                                </div>

                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="GET" action="{{route('contact')}}">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Your Email"
                                                   required>
                                            <button type="submit" class="submit-btn"><span
                                                    class="icon flaticon-email-2"></span></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="text">Copyright © 2021 Aritro Bangladesh. All Rights Reserved</div>
                </div>
                <div id="backToTopID" class="arrow-column col-lg-6 col-md-12 col-sm-12">
                    <!--Scroll to top-->
                    <div class="scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
                </div>
            </div>
        </div>
    </div>
</footer>
