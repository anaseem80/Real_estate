<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <link rel="icon" href="{{URL::asset('assets/img/brand/favicon-white.png')}}" type="image/x-icon" />
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

    <title>الصفحه الرئيسيه</title>
</head>

<body class="bg-white">
    <div id="global-loader">
        <img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    @include('layouts.nav')
    <header style="background-image:url('{{URL::asset('assets/img/landing-carousel-1.webp')}}');margin-top:100px" class="position-relative">
        <div class="shadow"></div>
        <div class="header-content position-relative">
            <div class="container">
                <div class="col-lg-8 m-auto">
                    <h1 class="mb-3 fw-bold text-center">أعثر علي منزل أحلامك!</h1>
                    <form method="GET" action="{{ route('search') }}">
                        <div class="input-group mb-3 position-relative">
                            <input type="text" autocomplete="off" name="search" class="form-control rounded-pill p-3"
                                placeholder="الأسم أو المكان" aria-label="Search" aria-describedby="button-addon2" required>
                            <button class="btn btn-success search-button border-0 position-absolute start-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="3kares-most-visited">
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
                    <div class="card border" dir="rtl">
                        <div class="position-relative p-1">
                            <div class="owl-carousel-img owl-theme" dir="ltr">
                                <div class="item position-relative">
                                    <img src="{{ $item->picture }}" class="card-img-top" height="270" alt="...">
                                    <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
                                        <span class="english-font">اعلي تقييم
                                    </p>
                                </div>
                            </div>


                        </div>
                        <div class="card-body mt-2 p-0">
                            <div class="px-4">
                                <p class="text-danger fw-bold">حصري</p>
                                <a href="{{ route('detelisscreen',$item) }}" class="text-decoration-none">
                                    <h5 class="card-title mt-3 fw-bold gray-color">
                                        {{ $item->name }}</h5>
                                </a>
                                <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                    <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{ $item->country }}
                                </p>
                                <p class="mt-3 fw-light d-flex align-items-center gray-color font-english">
                                    {{ $item->created_at }}
                                </p>
                            </div>
                            <hr class="m-0 mb-1 text-dark">
                            <div class="publisher row p-4">
                                <div class="col-lg-6"><a href="http://wa.me/+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-whatsapp text-dark fs-5"></i> واتساب</a></div>
                                <div class="col-lg-6"><a href="tel:+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-phone text-dark fs-5"></i> هاتف</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach





            </div>
        </div>
    </div>

    <div class="3kares-most-visited ">
        <div class="container">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h1 class="mt-5 mb-4">عقارات سكنية أضيفت حديثاً</h1>
                    <span class="heading-divider"></span>
                    <p class="mb-5 fs-5">تصفح احدث عقارات السكنية اليوم.</p>
                </div>

            </div>
            <div class="owl-carousel py-5 owl-theme">

                @foreach ($newProperties as $item)
                <div class="item">
                    <div class="card border" dir="rtl">
                        <div class="position-relative p-1">
                            <div class="owl-carousel-img owl-theme" dir="ltr">
                                <div class="item position-relative">
                                    <img src="{{ $item->picture }}" class="card-img-top" height="270" alt="...">
                                    <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
                                        <span class="english-font">اعلي تقييم
                                    </p>
                                </div>
                            </div>


                        </div>
                        <div class="card-body mt-2 p-0">
                            <div class="px-4">
                                <p class="text-danger fw-bold">حصري</p>
                                <a href="{{ route('detelisscreen',$item) }}" class="text-decoration-none">
                                    <h5 class="card-title mt-3 fw-bold gray-color">
                                        {{ $item->name }}
                                    </h5>
                                </a>
                                <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                    <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{ $item->country }}
                                </p>
                                <!-- <ul class="p-0 d-flex justify-content-between">
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                 </ul> -->
                            </div>
                            <hr class="m-0 mb-1 text-dark">
                            <div class="publisher row p-4">
                                <div class="col-lg-6"><a href="http://wa.me/+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-whatsapp text-dark fs-5"></i> واتساب</a></div>
                                <div class="col-lg-6"><a href="tel:+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-phone text-dark fs-5"></i> هاتف</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="3kares-most-visited A3kar-type ">
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
                        @if($item->count > 0)
                        <div class="col-lg-3 my-2">
                            <div class="properti_city position-relative">
                                <a href="morepropertyCato/{{ $item->id }}">
                                    <div class="thumb"><img class="img-fluid w-100" src="{{ $item->image_path }}" alt="pc1.jpg"></div>
                                    <div class="overlay">
                                        <div class="details text-light">
                                            <h4>{{ $item->name }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach





                    </div>
                </div>
            </div>
            <div class="3kares-most-visited ">
                <div class="container">
                    <div class="title d-flex flex-wrap justify-content-between align-items-center">
                        <div>
                            <h1 class="mt-5 mb-4">عقارات تجارية أضيفت حديثاً</h1>
                            <span class="heading-divider"></span>
                            <p class="mb-5 fs-5">تصفح احدث العقارات التجارية اليوم.</p>
                        </div>

                    </div>
                    <div class="owl-carousel py-5 owl-theme">

                        @foreach ($newCommercial as $item)
                        <div class="item">
                            <div class="card border" dir="rtl">
                                <div class="position-relative p-1">
                                    <div class="owl-carousel-img owl-theme" dir="ltr">
                                        <div class="item position-relative">
                                            <img src="{{ $item->picture }}" class="card-img-top" height="270" alt="...">
                                            <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
                                                <span class="english-font">اعلي تقييم
                                            </p>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-body mt-2 p-0">
                                    <div class="px-4">
                                        <p class="text-danger fw-bold">حصري</p>
                                        <a href="{{ route('detelisscreen',$item) }}" class="text-decoration-none">
                                            <h5 class="card-title mt-3 fw-bold gray-color">
                                                {{ $item->name }}
                                            </h5>
                                        </a>
                                        <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                            <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{ $item->country }}
                                        </p>
                                        <!-- <ul class="p-0 d-flex justify-content-between">
                                                 <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                                 <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                                 <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                             </ul> -->
                                    </div>
                                    <hr class="m-0 mb-1 text-dark">
                                    <div class="publisher row p-4">
                                        <div class="col-lg-6"><a href="http://wa.me/+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-whatsapp text-dark fs-5"></i> واتساب</a></div>
                                        <div class="col-lg-6"><a href="tel:+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-phone text-dark fs-5"></i> هاتف</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach







                    </div>
                </div>
            </div>
            <div class="3kares-most-visited ">
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
                            <div class="card border" dir="rtl">
                                <div class="position-relative p-1">
                                    <div class="owl-carousel-img owl-theme" dir="ltr">
                                        <div class="item position-relative">
                                            <img src="{{ $item->property->picture }}" class="card-img-top" height="270" alt="...">
                                            <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
                                                <span class="english-font">اعلي تقييم
                                            </p>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-body mt-2 p-0">
                                    <div class="px-4">
                                        <p class="text-danger fw-bold">حصري</p>
                                        <a href="{{ route('detelisscreen',$item) }}" class="text-decoration-none">
                                            <h5 class="card-title mt-3 fw-bold gray-color">
                                                {{ $item->property->name }}
                                            </h5>
                                        </a>
                                        <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                            <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{ $item->property->country }}
                                        </p>
                                        <!-- <ul class="p-0 d-flex justify-content-between">
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                 </ul> -->
                                    </div>
                                    <hr class="m-0 mb-1 text-dark">
                                    <div class="publisher row p-4">
                                        <div class="col-lg-6"><a href="http://wa.me/+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-whatsapp text-dark fs-5"></i> واتساب</a></div>
                                        <div class="col-lg-6"><a href="tel:+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-phone text-dark fs-5"></i> هاتف</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach







                    </div>
                </div>
            </div>
            <div class="3kares-most-visited ">
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
                            <div class="card border" dir="rtl">
                                <div class="position-relative p-1">
                                    <div class="owl-carousel-img owl-theme" dir="ltr">
                                        <div class="item position-relative">
                                            <img src="{{ $item->property->picture }}" class="card-img-top" height="270" alt="...">
                                            <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
                                                <span class="english-font">اعلي تقييم
                                            </p>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-body mt-2 p-0">
                                    <div class="px-4">
                                        <p class="text-danger fw-bold">حصري</p>
                                        <a href="{{ route('detelisscreen',$item) }}" class="text-decoration-none">
                                            <h5 class="card-title mt-3 fw-bold gray-color">
                                                {{ $item->property->name }}
                                            </h5>
                                        </a>
                                        <p class="mt-3 fw-light d-flex align-items-center gray-color">
                                            <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{ $item->property->country }}
                                        </p>
                                        <!-- <ul class="p-0 d-flex justify-content-between">
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                 </ul> -->
                                    </div>
                                    <hr class="m-0 mb-1 text-dark">
                                    <div class="publisher row p-4">
                                        <div class="col-lg-6"><a href="http://wa.me/+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-whatsapp text-dark fs-5"></i> واتساب</a></div>
                                        <div class="col-lg-6"><a href="tel:+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-phone text-dark fs-5"></i> هاتف</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach







                    </div>
                </div>
            </div>
            <div class="">
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
                                <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/high-five.png" alt=""></div>
                                <h3 class="my-4 text-dark">موثوق به من قبل الآلاف</h3>
                                <p>لدينا دعم فني بلاضافه الي سيره ذاتيه قويه</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                                <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/home.png" alt=""></div>
                                <h3 class="my-4 text-dark">موثوق به من قبل الآلاف</h3>
                                <p>لدينا كثير من التجارب الايجابيه مع العملاء</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                                <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/profit.png" alt=""></div>
                                <h3 class="my-4 text-dark">موثوق به من قبل الآلاف</h3>
                                <p>السهوله في التواصل , متاحين خلال 24 ساعه</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="3kares-most-visited ">
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
                            <div class="card border" dir="rtl">
                                <div class="position-relative p-1">
                                    <div class="owl-carousel-img owl-theme" dir="ltr">
                                        <div class="item position-relative">
                                            <img src="{{ $item->picture }}" class="card-img-top" height="270" alt="...">
                                            <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold">
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
                                            <img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{ $item->country }}
                                        </p>
                                    </div>
                                    <hr class="m-0 mb-1 text-dark">
                                    <div class="publisher row p-4">
                                        <div class="col-lg-6"><a href="http://wa.me/+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-whatsapp text-dark fs-5"></i> واتساب</a></div>
                                        <div class="col-lg-6"><a href="tel:+201158232428" class="btn btn border-dark border-2 rounded-pill w-100"><i class="fa fa-phone text-dark fs-5"></i> هاتف</a></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>
                </div>
            </div>







            @if(count($mostCountries) > 0)
            <div class="3kares-most-visited ">
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
                                    <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc2.jpg" alt="pc1.jpg"></div>
                                    <div class="overlay">
                                        <div class="details text-light">
                                            <h4>{{ $mostCountries[0]->country }}</h4>
                                            <p class="text-light"><span class="english-font">{{ $mostCountries[0]->count }}</span>
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
                                    <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc1.jpg" alt="pc1.jpg"></div>
                                    <div class="overlay">
                                        <div class="details text-light">
                                            <h4>{{ $mostCountries[1]->country }}</h4>
                                            <p class="text-light"><span class="english-font text-light">{{ $mostCountries[1]->count }}</span>
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
                                    <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc3.jpg" alt="pc1.jpg"></div>
                                    <div class="overlay">
                                        <div class="details text-light">
                                            <h4>{{ $mostCountries[2]->country }}</h4>
                                            <p class="text-light"><span class="english-font text-light">{{ $mostCountries[2]->count }}</span>
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
                                    <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/1.jpg" alt="pc1.jpg"></div>
                                    <div class="overlay">
                                        <div class="details text-light">
                                            <h4>{{ $mostCountries[3]->country }}</h4>
                                            <p class="text-light"><span class="english-font text-light">{{ $mostCountries[3]->count }}</span>
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
            @else
            لا يتوفر بيانات
            @endif


        </div>
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
    @include('layouts.footer-scripts')
</body>
</html>
