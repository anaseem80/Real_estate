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

    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('assets/img/backgrounds/1.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('assets/img/backgrounds/blog-1.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('assets/img/backgrounds/blog-2.jpg')}}" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->



    <div class="3kares-most-visited p-sm-5 p-1 mt-5">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">العقارات الأكثر زيارة</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">أكثر العقارات زيارة في أخر 24 ساعة</p>
                </div>

            </div>
            <div class="owl-carousel py-5 owl-theme">





                @foreach ($propertiesviews as $item)
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
                                            {{ $item->name }}</h5>
                                    </a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                        <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg"
                                            class="location ms-2" width="15" height="15"
                                            alt="">{{ $item->country }}
                                    </p>
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




    <div class="3kares-most-visited p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">عقارات أضيفت حديثاً</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح احدث عقارات السكنية اليوم.</p>
                </div>

            </div>
            <div class="owl-carousel py-5 owl-theme">

                @foreach ($newProperties as $item)
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
    <div class="3kares-most-visited p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">عقارات للبيع</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح العقارات المتوفرة للبيع.</p>
                </div>

            </div>
            <div class="owl-carousel py-5 owl-theme">

                @foreach ($newforsale as $item)
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="{{ $item->property->picture }}" class="card-img-top"
                                            height="270" alt="...">
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
                                    <a href="detelisscreen/{{ $item->property->id }}" class="text-decoration-none">
                                        <h5 class="card-title mt-3 fw-bold gray-color">
                                            {{ $item->property->name }}
                                        </h5>
                                    </a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                        <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg"
                                            class="location ms-2" width="15" height="15"
                                            alt="">{{ $item->property->country }}
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
                                        {{ $item->property->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach







            </div>
        </div>
    </div>
    <div class="3kares-most-visited p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">عقارات للإيجار</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح العقارات المتوفرة للإيجار.</p>
                </div>

            </div>
            <div class="owl-carousel py-5 owl-theme">

                @foreach ($newForRent as $item)
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="{{ $item->property->picture }}" class="card-img-top"
                                            height="270" alt="...">
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
                                    <a href="detelisscreen/{{ $item->property->id }}" class="text-decoration-none">
                                        <h5 class="card-title mt-3 fw-bold gray-color">
                                            {{ $item->property->name }}
                                        </h5>
                                    </a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                        <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg"
                                            class="location ms-2" width="15" height="15"
                                            alt="">{{ $item->property->country }}
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
                                        {{ $item->Rental_term }}
                                    </div>
                                    <div class="info gray-color">
                                        {{ $item->property->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach







            </div>
        </div>
    </div>
    <div class="p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">لماذا نحن؟</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">نحن نقدم خدمة كاملة في كل خطوة.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                        <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/high-five.png"
                                alt=""></div>
                        <h3 class="my-4 text-dark">موثوق به من قبل الآلاف</h3>
                        <p>لدينا دعم فني بلاضافه الي سيره ذاتيه قويه</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                        <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/home.png"
                                alt=""></div>
                        <h3 class="my-4 text-dark">موثوق به من قبل الآلاف</h3>
                        <p>لدينا كثير من التجارب الايجابيه مع العملاء</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                        <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/profit.png"
                                alt=""></div>
                        <h3 class="my-4 text-dark">موثوق به من قبل الآلاف</h3>
                        <p>السهوله في التواصل , متاحين خلال 24 ساعه</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="3kares-most-visited p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">العقارات الموصى بها</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح العقارات الموصى بها.</p>
                </div>

            </div>
            <div class="owl-carousel py-5 owl-theme">




                @foreach ($propertiesRec as $item)
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



    <div class="3kares-most-visited A3kar-type p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">نوع العقار</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح احدث عقارات اليوم.</p>
                </div>

            </div>
            <div class="row">


                @foreach ($catogerys as $item)
                    <div class="col-lg-3 my-2">
                        <div class="properti_city position-relative">
                            <a href="morepropertyCato/{{ $item->id }}">
                                <div class="thumb"><img class="img-fluid w-100" src="{{ $item->image_path }}"
                                        alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>{{ $item->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach





            </div>
        </div>
    </div>






    <div class="3kares-most-visited p-sm-5 p-1">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">اكثر المدن التي تحتوي علي عقارات</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح اشهر المدن التي تحتوي علي عقارات</p>
                </div>

            </div>
            <div class="row">
                {{-- @foreach ($mostCountries as $item) --}}

                <div class="col-lg-8 my-2">
                    <div class="properti_city position-relative">
                        <a href="moreproperty/{{ $mostCountries[0]->country }}">
                            <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc2.jpg"
                                    alt="pc1.jpg"></div>
                            <div class="overlay">
                                <div class="details text-light">
                                    <h4>{{ $mostCountries[0]->country }}</h4>
                                    <p class="text-light"><span
                                            class="english-font">{{ $mostCountries[0]->count }}</span>
                                        عقار
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 my-2">
                    <div class="properti_city position-relative">
                        <a href="moreproperty/{{ $mostCountries[1]->country }}">
                            <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc1.jpg"
                                    alt="pc1.jpg"></div>
                            <div class="overlay">
                                <div class="details text-light">
                                    <h4>{{ $mostCountries[1]->country }}</h4>
                                    <p class="text-light"><span
                                            class="english-font text-light">{{ $mostCountries[1]->count }}</span>
                                        عقار
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 my-2">
                    <div class="properti_city position-relative">
                        <a href="moreproperty/{{ $mostCountries[2]->country }}">
                            <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc3.jpg"
                                    alt="pc1.jpg"></div>
                            <div class="overlay">
                                <div class="details text-light">
                                    <h4>{{ $mostCountries[2]->country }}</h4>
                                    <p class="text-light"><span
                                            class="english-font text-light">{{ $mostCountries[2]->count }}</span>
                                        عقار
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 my-2">
                    <div class="properti_city position-relative">
                        <a href="moreproperty/{{ $mostCountries[3]->country }}">
                            <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/1.jpg"
                                    alt="pc1.jpg"></div>
                            <div class="overlay">
                                <div class="details text-light">
                                    <h4>{{ $mostCountries[3]->country }}</h4>
                                    <p class="text-light"><span
                                            class="english-font text-light">{{ $mostCountries[3]->count }}</span>
                                        عقار
                                    </p>
                                </div>
                            </div>
                        </a>
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
