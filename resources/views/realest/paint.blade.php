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
    <title>خدمة التشطيب</title>
</head>
<body>

   

        @include('layouts.headone')

        @include('layouts.nav')
        @section('content')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('Add'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('Add') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        @if (session()->has('Edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('Edit') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        @if (session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('delete') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has('Error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('Error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="page-content p-lg-5 p-sm-1">
            <div class="container">

                <div class="page-content p-lg-5 p-sm-1">
                    <div class="container">
                        <p class="fs-5">
                            <strong>خدمة التشطيب</ strong>
                        </p>
                    </div>
                    <form action="{{ route('paint.store') }}"method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($id)
                        <div class="mb-4">
                            <p class="mg-b-10">نوع العقار</p>
                            <select name="catogerie_id" class="form-control SlectBox"
                                onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                <!--placeholder-->
                                <option title="Volvo is a car" value="منزل">اختار نوع العقار</option>
                                @foreach ($catogery as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach

                            </select>
                        </div>
                            <div class="col-lg">
                                <div class="mb-4">
                                    <p class="mg-b-10">مساحة العقار</p>
                                <input class="form-control" placeholder="أكتب مساحة العقار" type="text" name="space">
                            </div>
                            @else
                            <div class="col-lg">
                                <div class="mb-4">
                                    <p class="mg-b-10">أسم المستخدم</p>
                                <input class="form-control" placeholder="أكتب أسم المستخدم" type="text" name="name">
                            </div>
                            <div class="mb-4">
                                <p class="mg-b-10">نوع العقار</p>
                                <select name="catogerie_id" class="form-control SlectBox"
                                    onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option title="Volvo is a car" value="منزل">اختار نوع العقار</option>
                                    @foreach ($catogery as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
    
                                </select>
                            </div>
                            <div class="col-lg">
                                <div class="mb-4">
                                    <p class="mg-b-10">مساحة العقار</p>
                                <input class="form-control" placeholder="أكتب مساحة العقار" type="text" name="space">
                            </div>
                            <div class="col-lg">
                                <div class="mb-4">
                                    <p class="mg-b-10">رقم الهاتف</p>
                                <input class="form-control" placeholder="أكتب رقم الهاتف" type="text" name="phone">
                            </div>
                        @endif
                        <button type="submit" class="btn btn-danger"
                        style="width:200px; height:50px; background-color: blue; color:white; margin: 0 auto;">إرسال</button>
                    </form>
                </div>

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