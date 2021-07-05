<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.app.head_content')
</head>
<body>
<div class="page-wrapper">
    <div class="preloader"></div>
    @include('layouts.app.header')
    @yield('content')
    @include('layouts.app.footer')
    @include('layouts.app.sidebar_cart')
</div>
@include('layouts.app.color_plate')
@include('layouts.app.header_search')


<script src="{{ asset('') }}js/jquery.js"></script>
<script src="{{ asset('') }}js/popper.min.js"></script>
<script src="{{ asset('') }}js/bootstrap.min.js"></script>
<script src="{{ asset('') }}js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('') }}js/jquery.fancybox.js"></script>
<script src="{{ asset('') }}js/appear.js"></script>
<script src="{{ asset('') }}js/nav-tool.js"></script>
<script src="{{ asset('') }}js/validate.js"></script>
<script src="{{ asset('') }}js/mixitup.js"></script>
<script src="{{ asset('') }}js/owl.js"></script>
<script src="{{ asset('') }}js/knob.js"></script>
<script src="{{ asset('') }}js/wow.js"></script>
<script src="{{ asset('') }}js/isotope.js"></script>
<script src="{{ asset('') }}js/jquery-ui.js"></script>
<script src="{{ asset('') }}js/script.js"></script>
<script src="{{ asset('') }}js/color-settings.js"></script>
<script>

    mybutton = document.getElementById("backToTopID");
    mybutton.style.display = "none";
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 700 || document.documentElement.scrollTop >700) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
</script>
</body>
</html>
