@extends('layouts.master2')

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <style>
    </style>
    <title>إستشارة عقارية</title>
</head>

<body class="bg-white">
    @php
        $control = isset($_GET['control']) ? $_GET['control'] : 'advisors';
        
    @endphp
    @include('layouts.nav')

    <div class="page-content p-lg-5 p-sm-1">
        <div class="container">
            @if (count($searchs) > 0)
                <div class="page-content p-lg-5 p-sm-1">
                    <div class="container">
                        <p class="fs-5">
                        <h4 class="alert alert-info"><strong>{{ Auth::user()->name }} :
                                تم فلترة البيانات التي أدخلتها للتو </strong>
                        </h4>
                        </p>

                    </div>

                </div>
                if($control == 'search')
                <div class="owl-carousel py-5 owl-theme">
                    @foreach ($searchs as $item)
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
                @else
                <div class="text-center">
                    <img src="{{ asset('assets/img/walking-man.gif') }}"/>
                    <h4 class="text-dark my-3">لا يوجد بيانات مطابقة للبيانات التي أدخلتها
                        تواصل مع فريق الدعم
                    </h4>
                    <a href="http://wa.me/+201158232428" class="btn btn-success">WhatsApp</a>

                </div>
            @endif
        </div>
    </div>
    </div>
    <input class="form-control" autocomplete="off" placeholder="مساحة {{ $PurposeOfPurchase }}" hidden
        value="{{ $PurposeOfPurchase }}" type="text" name="cate">
    <input class="form-control" autocomplete="off" placeholder="مساحة " hidden value="{{ $space }}"
        type="text" name="space">
    <input class="form-control" autocomplete="off" placeholder="مساحة " hidden value="{{ $address }}"
        type="text" name="address">
    @include('layouts.fotterone')
    <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"
        integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
        integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
    <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
</body>

</html>
