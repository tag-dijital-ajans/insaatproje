<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$ayar->site_adi}}</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/anasayfa/img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/anasayfa/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/anasayfa/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/anasayfa/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/anasayfa/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/anasayfa/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/anasayfa/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/anasayfa/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/anasayfa/css/theme.css">
    <link rel="stylesheet" href="/anasayfa/css/theme-elements.css">
    <link rel="stylesheet" href="/anasayfa/css/theme-blog.css">
    <link rel="stylesheet" href="/anasayfa/css/theme-shop.css">
    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/anasayfa/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/anasayfa/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/anasayfa/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="/anasayfa/vendor/nivo-slider/nivo-slider.css">
    <link rel="stylesheet" href="/anasayfa/vendor/nivo-slider/default/default.css">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="/anasayfa/css/skins/skin-construction.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="/anasayfa/css/demos/demo-construction.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/anasayfa/css/custom.css">
@yield('css')
    <!-- Head Libs -->

</head>
<body data-spy="scroll" data-target="#sidebar" data-offset="120">

    <header>
        @include('anasayfa.header')
    </header>



        @if(request()->route()->getName()=='anasayfa')
            @include('anasayfa.slider')
        @endif
{{--slider alanı--}}

    @yield('icerik')
@include('anasayfa.footer')

<!-- Vendor -->
        <script src="/anasayfa/vendor/modernizr/modernizr.min.js"></script>
<script src="/anasayfa/vendor/jquery/jquery.min.js"></script>
<script src="/anasayfa/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/anasayfa/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/anasayfa/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="/anasayfa/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/anasayfa/vendor/common/common.min.js"></script>
<script src="/anasayfa/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="/anasayfa/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="/anasayfa/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/anasayfa/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="/anasayfa/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/anasayfa/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/anasayfa/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/anasayfa/vendor/vide/vide.min.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="/anasayfa/js/theme.js"></script>
<!-- Current Page Vendor and Views -->
<script src="/anasayfa/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/anasayfa/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Current Page Vendor and Views -->
<script src="/anasayfa/vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
<script src="/anasayfa/js/views/view.contact.js"></script>
<!-- Demo -->
<script src="/anasayfa/js/demos/demo-construction.js"></script>
<!-- Theme Custom -->
<script src="/anasayfa/js/custom.js"></script>
<!-- Theme Initialization Files -->
<script src="/anasayfa/js/theme.init.js"></script>
@yield('js')
<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->
</body>
</html>
{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$ayar->site_adi}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/{{$ayar->favicon}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/revolution/css/settings.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/css/main_{{$ayar->temarenk}}.css">
    <!--===============================================================================================-->
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

</head>
<body class="animsition">

<header>
@include('anasayfa.header')
</header>

@if(request()->route()->getName()=='anasayfa')
@include('anasayfa.slider')
@endif

@yield('icerik')

@include('anasayfa.footer')

<!--===============================================================================================-->
<script src="/anasayfa/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/bootstrap/js/popper.js"></script>
<script src="/anasayfa/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/anasayfa/js/revo-custom.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/waypoint/jquery.waypoints.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/countterup/jquery.counterup.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/slick/slick.min.js"></script>
<script src="/anasayfa/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/js/main.js"></script>
@yield('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
@include('sweetalert::alert')
<link rel="icon" href="{{$ayar->favicon}}" type="image/x-icon"/>
</body>
</html>
--}}
