@extends('layouts.master2')
@section('css')
@endsection
@section('content')
@endsection
@section('js')
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
		<!--- Internal Fontawesome css-->
	<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
	<!---Ionicons css-->
	<link href="{{URL::asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	<!---Internal Typicons css-->
	<link href="{{URL::asset('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">
	<!---Internal Feather css-->
	<link href="{{URL::asset('assets/plugins/feather/feather.css')}}" rel="stylesheet">
	<!---Internal Falg-icons css-->
	<link href="{{URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

@endsection

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <style>
        header {
            background-image: url(assets/img/backgrounds/1.jpg);
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            height: 100vh;
            background-attachment: fixed;
            display: grid;
            place-content: center;
        }

        body {
            background-color: #000000;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <title>الصفحه الرئيسيه</title>
    <link rel="icon" href="logoapp (1).png">
</head>

<body>

    @include('layouts.nav')

	<div class="main-error-wrapper  page page-h bg-white">
			<img src="{{URL::asset('assets/img/media/404.png')}}" class="error-page" alt="error">
			<h2>أُووبس. الصفحة التي تبحث عنها غير موجودة. </h2>
			<h6>ربما أخطأت في كتابة العنوان أو ربما تم نقل الصفحة.</h6><a class="btn btn-outline-danger" href="{{ url('/' . $page='home') }}">الصفحة الرئيسية</a>
		</div>

    @include('layouts.fotterone')
        <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
        <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
    @section('js')
        <!--Internal  Chart.bundle js -->
        <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
        <!-- Internal Select2.min js -->
        <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    @endsection
    </body>
</html>
