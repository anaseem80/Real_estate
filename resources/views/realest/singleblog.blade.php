@extends('layouts.master2')

<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$blogs->title}}</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <link rel="icon" href="{{URL::asset('assets/img/brand/favicon-white.png')}}" type="image/x-icon"/>
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/lightcase/lightcase.css') }}">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

     <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
	<!---Ionicons css-->
	<link href="{{URL::asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	<!---Internal Typicons css-->
	<link href="{{URL::asset('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">
	<!---Internal Feather css-->
	<link href="{{URL::asset('assets/plugins/feather/feather.css')}}" rel="stylesheet">
	<!---Internal Falg-icons css-->
	<link href="{{URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

     
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout" dir="rtl">
@include('layouts.nav')
<div class="text-center py-5 banner-site banner-site" style="background-image:url({{ asset('assets/img/backgrounds/1.jpg') }})">
        <h1>{{$blogs->title}}</h1>
</div>

<section id="blog" class="bg-grey my-5">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <!-- Blog -->
                <div class="col-md-12 blog-holder">
                    <div class="row">
                    <div class="mt-4">
                    <img src="{{ asset($blogs->image) }}" class="w-100 img-fluid" alt="">
                    <p class="mt-5">{{$blogs->content}}</p>
                    </div> 
                    </div>
                </div>
                <!-- End of Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section--></div>
@include('layouts.fotterone')
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.css') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/stellar/jquery.stellar.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('vendor/isotope/isotope.min.js') }}"></script>
    <script src="{{ asset('vendor/lightcase/lightcase.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/waypoint.min.js') }}"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script src="{{ asset('vendor/waypoints/waypoint.min.js') }}"></script>
	<!-- Main JS -->
	<script> !function(n,t,e){console.log("init");var o={init:function(e){o.select2(),o.stellar(),o.carousel(),o.portfolio(),o.lightCase(),o.sideNav(),o.counter(),o.skills(),o.aos(),o.navbarChange()},select2:function(){n(e).ready(function(){n("select").select2()})},stellar:function(){var e=n(t).width();767<=e&&(n(".bg-fixed").attr("data-stellar-background-ratio","0.8"),n.stellar({horizontalScrolling:!1,responsive:!0,parallaxBackgrounds:!0,scrollProperty:"scroll"}))},carousel:function(){n(".testi-carousel").owlCarousel({loop:!0,margin:10,autoplay:!0,nav:!1,dots:!0,dotSpeed:1e3,autoplay:!0,autoplaySpeed:1e3,items:1}),n(".client-slider").owlCarousel({loop:!0,margin:10,nav:!0,navSpeed:1e3,dots:!1,autoplay:!0,autoplaySpeed:1e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:3},1e3:{items:6}}})},portfolio:function(){var t=n(".grid-portfolio").isotope({itemSelector:".grid-item",masonry:{gutter:".gutter-sizer",columnWidth:".grid-sizer"},percentPosition:!0});return n(".filter-button-group").on("click","a",function(){var e=n(this).attr("data-filter");t.isotope({filter:e})}),n(".btn-filter a.is-checked").addClass("active"),n(".btn-filter a").on("click",function(){n(".btn-filter a").removeClass("active"),n(this).addClass("active")}),!1},lightCase:function(){jQuery(e).ready(function(e){e("a[data-rel^=lightcase]").lightcase()})},sideNav:function(){n("#side-nav-open").click(function(){n("#side-nav").css("width","300"),setTimeout(function(){n("body").addClass("sidenav-open")},200),setTimeout(function(){n("body").addClass("in")},400)}),n("#side-nav-close, #canvas-overlay").click(function(){setTimeout(function(){n("body").removeClass("in")},200),setTimeout(function(){n("body").removeClass("sidenav-open"),n("#side-nav").css("width","0")},400)}),n("#side-search-open").click(function(){n("#side-search").css("width","300"),setTimeout(function(){n("body").addClass("sidesearch-open")},200),setTimeout(function(){n("body").addClass("in")},300)}),n("#side-search-close, #canvas-overlay").click(function(){setTimeout(function(){n("body").removeClass("in")},200),setTimeout(function(){n("body").removeClass("sidesearch-open"),n("#side-search").css("width","0")},300)})},counter:function(){n("#counter").each(function(){n(this).waypoint({handler:function(e){n(".number").countTo({speed:1e3}),this.destroy()},offset:"80%"})})},skills:function(){n("#skills").each(function(){return n(this).waypoint({handler:function(e){n(".progress").each(function(){console.log(n(this).attr("data-percent")),n(this).find(".progress-bar").delay(1e4).css({width:n(this).attr("data-percent")})})},offset:"80%"}),!1})},aos:function(){AOS.init({once:!0})},navbarChange:function(){n(t).scroll(function(){var e=n(t).scrollTop();return 150<e?(n("#header-navbar").removeClass("navbar-transparent"),n("body").addClass("not-on-top")):(n("body").removeClass("not-on-top"),n("#header-navbar").addClass("navbar-transparent")),!1})}};n(e).ready(function(){o.init(n)})}(window.jQuery,window,document);  </script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>

