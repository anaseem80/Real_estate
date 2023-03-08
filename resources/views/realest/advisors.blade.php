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

    <div class="page-content p-lg-5 p-sm-1">
        <div class="container">

            <div class="page-content p-lg-5 p-sm-1">
                <div class="container">
                    <p class="fs-5">
                        <strong>أهلا بي حضرتك في i REBC ، اضغط متابعة عشان نكمل :)
                            : اظهار زر متابعة يدخله ع السؤال الثاني</ strong>
                            <a href="{{ url('advisors?control=PurposeOfPurchase') }}" class="btn btn-info">متابعة</a>
                    </p>

                </div>

            </div>
            
    @if ($control == 'PurposeOfPurchase')
        <div class="page-content p-lg-5 p-sm-1">
            <div class="container">
                <p class="fs-5">
                    <strong> ايه الغرض من الشراء ؟

                </p>


                <div class="form-check">
                    <a href="advisors?control=investment" class="btn btn-primary">إشتثمار</a>
                </div>
                <div class="form-check">
                    <a href="advisors?control=investment2" class="btn btn-primary">سكني</a>
                </div>
            </div>

        </div>
    @endif


    @if ($control == 'investment')
        <div class="form-check">
            <a href="advisors?control=residential" class="btn btn-primary">سكني </a>
        </div>
        <div class="form-check">
            <a href="advisors?control=investment2" class="btn btn-primary">تجاري </a>
        </div>
        <div class="form-check">
            <a href="advisors?control=investment2" class="btn btn-primary">اداري </a>
        </div>
    @endif
    @if ($control == 'residential')
        <form action="{{ route('advisors.search') }}"method="get" enctype="multipart/form-data">
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

                                        <option value="1 ">منازل </option>
                                        <option value="2">شاليهات</option>
                                        <option value="3">فنادق</option>
                                        <option value="4"> فلل</option>
                                    </select>
                                </div>
                                <div class="col-lg">
                                    <p class="mg-b-10">تحب المساحة تكون ايه</p>
                                    <input class="form-control" autocomplete="off" placeholder=" تحب المساحة تكون ايه" type="text"
                                        name="space">
                                </div>
                                
                                <div class="col-lg">
                                    <p class="mg-b-10">تحب العقار يكون إجار ولا للبيع</p>
                                    <input class="form-control" autocomplete="off" placeholder="اجار ولا تمليك" type="text"
                                        name="space" value="{{ old('space') }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-danger"
                                style="width:200px; height:50px; background-color: blue; color:white; margin: 0 auto;">إرسال</button>
                        </div>
                    </div>
                </div>
                <!-- row closed -->
            </div>
            <!-- Container closed -->
            </div>
            <!-- main-content closed -->
        </form>
    @endif
    @if ($control == 'investment2')
        <p>test2222</p>
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
