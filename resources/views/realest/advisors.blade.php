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

<body>
    @php
        $control = isset($_GET['control']) ? $_GET['control'] : 'advisors';

    @endphp
    @include('layouts.headone')
    @include('layouts.nav')
    @if ($control != 'PurposeOfPurchase' && $control != 'investment' && $control != 'residential')
        <div class="page-content p-lg-5 p-sm-1">
            <div class="container">

                <div class="page-content p-lg-5 p-sm-1">
                    <div class="container">
                        <p class="fs-5">
                            <strong>أهلا بي حضرتك في i REBC ، اضغط متابعة عشان نكمل :)
                                </ strong>
                                <a href="{{ url('advisors?control=PurposeOfPurchase') }}"
                                    class="btn btn-info">متابعة</a>
                        </p>

                    </div>

                </div>
    @endif
    @if ($control == 'PurposeOfPurchase')
        <div class="page-content p-lg-5 p-sm-1">
            <div class="container">
                <p class="fs-5">
                    <strong> ايه الغرض من الشراء ؟

                </p>


                <div class="form-check">
                    <a href="advisors?control=investment" class="btn btn-primary">إستثمار</a>
                </div>
                <div class="form-check">
                    <a href="advisors?control=residential" class="btn btn-primary">سكني</a>
                </div>
            </div>

        </div>
    @endif


    @if ($control == 'investment')
        <div class="form-check">
            <form action="{{ route('advisors.PurposeOfPurchase') }}"method="get" enctype="multipart/form-data">

                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                            <div class="card-body">
                                <div class="row row-sm">

                                    <div class="mb-4">
                                        <p class="mg-b-10">تحب نوع الإستثمار ايه؟</p>
                                        <select name="cate" class="form-control SlectBox">
                                            <option value="المحل">المحل </option>
                                            <option value="المكتب">المكتب</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" value="التالي"
                                    class="btn btn-success rounded-0 px-5 py-3 my-4 d-flex align-items-center w-100 text-center justify-content-center">

            </form>
    @endif
  @if($control == 'residential')
  <form action="{{ route('advisors.PurposeOfPurchase') }}"method="get" enctype="multipart/form-data">

    <!-- row -->
    <div class="row">
        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <!--div-->
            <div class="card">
                <div class="card-body">
                    <div class="row row-sm">

                        <div class="mb-4">
                            <p class="mg-b-10">تحب نوع السكن ايه؟</p>
                            <select name="cate" class="form-control SlectBox">
                                <option value="منزل">منزل </option>
                                <option value="فندق">فندق</option>
                                <option value="شاليه">شاليه </option>
                                <option value="فيلا">فيلا</option>

                            </select>
                        </div>
                    </div>
                    <input type="submit" value="التالي"
                        class="btn btn-success rounded-0 px-5 py-3 my-4 d-flex align-items-center w-100 text-center justify-content-center">

</form>
  @endif
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
