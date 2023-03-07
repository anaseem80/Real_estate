@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
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





    <div class="3kares-most-visited p-sm-5 p-1 mt-5">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                 
                </div>

            </div>

            <div class="3kares-most-visited p-sm-5 p-1">
                <div class="container">
                    <div class="title d-flex flex-wrap justify-content-between align-items-center">
                        

                    </div>
                    <div class="owl-carousel py-5 owl-theme">

                        @foreach ($search as $item)
                            <div class="item">
                                <div class="card" dir="rtl">
                                    <div class="position-relative p-1">
                                        <div class="owl-carousel-img owl-theme" dir="ltr">
                                            <div class="item position-relative">
                                                <img src="{{ $item->picture }}" class="card-img-top" height="270"
                                                    alt="...">
                                                <p
                                                    class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
                                                    <span class="english-font">اعلي تقييم
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-body mt-2 p-0">
                                        <div class="px-4">
                                            <p class="text-danger fw-bold">حصري</p>
                                            <a href="detelisscreen/{{ $item->id }}" class="text-decoration-none">
                                                <h5 class="card-title mt-3 fw-bold gray-color">
                                                    {{ $item->name }}
                                                </h5>
                                            </a>
                                            <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                                <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg"
                                                    class="location ms-2" width="15" height="15"
                                                    alt="">{{ $item->country }}
                                            </p>
                                            <!-- <ul class="p-0 d-flex justify-content-between">
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                 </ul> -->
                                        </div>
                                        <hr class="m-0 mb-1">
                                        <div class="publisher d-flex align-items-center justify-content-between p-4">

                                            <div class="info gray-color">
                                                {{ $item->created_at }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    @include('layouts.fotterone')
    <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
    <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
</body>

</html>

@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
@endsection
