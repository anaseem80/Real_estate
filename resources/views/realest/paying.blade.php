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
    <link rel="icon" href="{{URL::asset('assets/img/brand/favicon-white.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <style>
    </style>
    <title>إستشارة عقارية</title>
</head>

<body class="bg-white">
    @include('layouts.nav')
    <div class="text-center py-5 banner-site" style="background-image:url({{ asset('assets/img/backgrounds/1.jpg') }})">
        <h1>المستشار العقاري</h1>
    </div>


        <form action="{{ route('advisors.search') }}"method="get" enctype="multipart/form-data">
            <!-- row -->
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                            <div class="page-content p-4">

                                {{--  <div class="mb-4">
                                    <p class="mg-b-10">عنوان {{ $PurposeOfPurchase }} تحب يكون فين </p>
                                    <div class="col-lg">
                                        <input class="form-control" autocomplete="off"
                                            placeholder="مساحة {{ $PurposeOfPurchase }}" type="text" name="space">
                                    </div>
                                </div>  --}}

                                <input type="submit" value="إرسال"
                                    class="btn btn-success rounded-0 px-5 py-3 my-4 d-flex align-items-center w-100 text-center justify-content-center">
                            </div>
                </div>
        </form>

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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(e) {

        $('#contract').change(function() {
            var id = $(this).val()
            console.log(id)
            if ($(this).val() == 'ايجار') {
                $("#leaseTerm").css("display", "block")
                $("#budget").css("display", "block")
                $("#totalPrice").css("display", "none")

            } else {
                $("#leaseTerm").css("display", "none")
                $("#budget").css("display", "none")
                $("#totalPrice").css("display", "block")
            }
            //else
            //{
            //    $("#addressInput").css("display","none")
            //}
        });
    });
</script>

</html>
