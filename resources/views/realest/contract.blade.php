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

    @include('layouts.headone')
    @include('layouts.nav')
    <div class="text-center py-5" style="background-image:url({{ asset('assets/img/backgrounds/1.jpg') }})">
        <h1>المستشار العقاري</h1>
    </div>
    
        <form action="{{ route('advisors.paying') }}"method="get">

            <!-- row -->
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                            <div class="page-content p-lg-5 p-sm-1">

                                {{--  <div class="mb-4">
                                    <p class="mg-b-10">عنوان {{ $PurposeOfPurchase }} تحب يكون فين </p>
                                    <div class="col-lg">
                                        <input class="form-control" autocomplete="off"
                                            placeholder="مساحة {{ $PurposeOfPurchase }}" type="text" name="space">
                                    </div>
                                </div>  --}}
                                <div class="mb-3 mb-lg-0">
                                    <label for="rent type">ايجار/تمليك</label>
                                    <select class="form-control rounded-0 w-100"  id="contract" required>
                                        <option disabled selected>عايز {{ $PurposeOfPurchase }} ايجار ولا تمليك</option>
                                        <option value="ايجار">ايجار</option>
                                        <option value="تمليك">تمليك</option>
                                    </select>
                                </div>
                                <div class="mb-3 mb-lg-0" id="leaseTerm" style="display: none">
                                    <label for="rent type">مدة الإيجار</label>
                                    <select class="form-control rounded-0 w-100" id="rent type" name="Rental_term" required>
                                        <option title="Volvo is a car" value="سنوي">سنوي</option>
                                        <option value="شهري">شهري</option>
                                        <option value="يومي">يومي</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3" id="budget" style="display: none">
                                    <label for="price">الميزانية</label>
                                    <input type="number" autocomplete="off" id="price" name="price"
                                        class="form-control ms-2 rounded-0" placeholder="السعر لكل متر">
                                </div>
                                <div class="form-group mb-3" id="totalPrice" style="display: none">
                                    <label for="price">السعر الكلي</label>
                                    <input type="number" autocomplete="off" id="price" name="price2"
                                        class="form-control ms-2 rounded-0" placeholder="السعر الكلي">
                                </div>
                                <input class="form-control" autocomplete="off" placeholder="مساحة {{ $PurposeOfPurchase }}"
                                hidden value="{{ $PurposeOfPurchase }}" type="text" name="cate">
                                <input class="form-control" autocomplete="off" placeholder="مساحة " hidden
                                    value="{{ $space }}" type="text" name="space">
                                <input class="form-control" autocomplete="off" placeholder="مساحة " hidden
                                    value="{{ $address }}" type="text" name="address">
                                <input type="submit" value="التالي"
                                    class="btn btn-success rounded-0 px-5 py-3 my-4 d-flex align-items-center w-100 text-center justify-content-center">
                                </div>
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
</body>
</html>
