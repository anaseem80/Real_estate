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
    <link rel="icon" href="{{URL::asset('assets/img/brand/favicon-white.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .file-icon p{
            display: none;
        }
    </style>
    <title>اضافة عقار</title>
</head>

<body class="bg-white">
    @include('layouts.nav')
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
    <div class="text-center py-5 banner-site" style="background-image:url({{ asset('assets/img/backgrounds/1.jpg') }})">
        <h1>إضافة عقار</h1>
    </div>
    <div class="page-content p-lg-5 p-sm-1">
        <div class="container">
            <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3 row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="type">اختر العقار</label>
                        <select name="proType_id" id="proType_id" class="form-control rounded-0 ">
                            <option selected disabled>رجاء الأختيار</option>
                            @foreach ($proprtietypes as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="type">نوع العقار</label>
                        <select class="form-control rounded-0 " id="propertye_id" name="catogerie_id">
                            <option selected disabled>رجاء الأختيار</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">اسم العقار</label>
                        <input type="text" autocomplete="off" id="name" name="name" class="form-control ms-2 rounded-0 " placeholder="اسم العقار" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="town">اسم المدينة</label>
                        <input type="text" autocomplete="off" id="town" name="country" class="form-control ms-2 rounded-0 " placeholder="اسم المدينة" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="size">مساحة العقار</label>
                        <input type="number" autocomplete="off" id="size" name="space" class="form-control ms-2 rounded-0 " placeholder="مساحة العقار" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">السعر لكل متر</label>
                        <input type="number" autocomplete="off" id="price" name="price" class="form-control ms-2 rounded-0 " placeholder="السعر لكل متر" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">الوصف</label>
                        <textarea name="description" class="form-control" id="description" placeholder="اكتب الوصف هنا"></textarea>
                    </div>


                    <div class="col-lg-6 mb-3 mb-lg-0 payMethod">
                        <label for="rent type">بيع/ايجار</label>
                        <select class="form-control rounded-0  rent" id="rentType" name="Rental_term">
                            <option selected disabled>رجاء الأختيار</option>
                            <option title="Volvo is a car" value="سنوي">سنوي</option>
                            <option value="شهري">شهري</option>
                            <option value="يومي">يومي</option>
                            <option value="تمليك">للبيع</option>
                        </select>
                    </div>
                    <div class="mb-3 mb-lg-0" id="payMethod1" style="display: none">
                        <label for="rent type">قسط/كاش</label>
                        <select class="form-control w-100 rounded-0" id="contract" name="payment_method">
                            <option selected disabled>عايز تدفع بالقسط ولا كاش</option>
                            <option value="قسط">قسط</option>
                            <option value="كاش">كاش</option>
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3 mb-lg-0 direction" style="display:none">
                        <label for="direction">مكان العقار </label>
                        <select class="form-control rounded-0 " id="direction" name="property_direction">
                            <option selected disabled>رجاء الأختيار</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <div style="display: none" id="numbeer_room" class="col-lg-6 mb-3 mb-lg-0">
                        <label for="type">تحديد عدد الغرف</label>
                        <select class="form-control rounded-0 " id="type" name="numbeer_room">
                            <option selected disabled>رجاء الأختيار</option>
                            <option title="Volvo is a car" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3 mb-lg-0" id="numbeer_toilet" style="display: none">
                        <label for="rent type">تحديد عدد الحمامات</label>
                        <select class="form-control rounded-0 " id="rent type" name="numbeer_toilet">
                            <option selected disabled>رجاء الأختيار</option>
                            <option title="Volvo is a car" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="rent type">السعر الكلي</label>
                        <input type="number" name="pay" class="form-control ms-2 rounded-0 " placeholder="البادجت/المزانية">
                        <div class="mb-4">
                            <p class="mg-b-10">مميزات العقار</p>
                            <select name="future[]" multiple="multiple" class="form-control select2">
                                <option disabled>رجاء الأختيار</option>
                                <option value="سطح خاص">سطح خاص</option>
                                <option value="مدخل سيارة">مدخل سيارة</option>
                                <option value="مكيفات">مكيفات</option>
                                <option value="مدخل خاص ">مدخل خاص </option>
                                <option value="إطلالة على معلم رئيسي">إطلالة على معلم رئيسي</option>
                                <option value="إنترنت">إنترنت</option>
                                <option value="منطقة لعب للأطفال "> منطقة لعب للأطفال </option>
                                <option value="نادي رياضي مشترك ">نادي رياضي مشترك </option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group mb-3">
                        <label for="file">ارفق ملفك الان</label>
                        <div class="row mb-4">
                            <div class="col-sm-12 col-md-4">
                                <input name="images[]" type="file" class="dropify" data-height="200" multiple id="gallery-photo-add" enctype="multipart/form-data" multiple>
                            </div>
                            <div class="gallery"></div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="projectinput1"> العنوان</label>
                            <input autocomplete="off" type="text" id="pac-input" class="form-control ms-2 rounded-0 " placeholder="العنوان" name="address">

                            {{-- @error('address')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror --}}
                        </div>
                    </div>
                    <input type="submit" value="إضافة" class="btn btn-success rounded-0 px-5 py-3 my-4 d-flex align-items-center w-100 text-center justify-content-center">
                </div>
            </form>
        </div>
    </div>

    @include('layouts.fotterone')

    <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js" integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
    <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->

    <script>
        $(".select2").select2()
        $(document).ready(function(e) {
            if ($(this).val() == "شهري" || $(this).val() == "يومي" || $(this).val() == "سنوي") {
                $(".payment-method").css("display", "none")
            } else {
                $(".payment-method").css("display", "block")
            }
        })

    </script>
    <script>
        $("#rentType").on('change',function(){
            if($(this).val() == 'سنوي' ||$(this).val() == 'شهري' ||$(this).val() == 'يومي' )
            {
                $("#payMethod1").css('display','none')
            } else
            {
                $("#payMethod1").css('display','block')
            }
        });
    </script>
    <script>
        $("#proType_id").on("change", function() {
            $(".direction").css("display", "block")
            if ($(this).val() == 1) {
                $("#direction").html(`
                    <option selected="" disabled="">رجاء الأختيار</option>
                    <option value="داخل الكومباوند">داخل الكومباوند</option>
                    <option value="خارج الكومباوند">خارج الكومباوند</option>
                `)
            } else {
                $("#direction").html(`
                    <option selected="" disabled="">رجاء الأختيار</option>
                    <option value="داخل المول">داخل المول</option>
                    <option value="خارج المول">خارج المول</option>
                `)
            }
        })
        $('#proType_id').change(function() {
            var id = $(this).val();
            console.log(id);
            if (id) {
                $.ajax({
                    url: "{{ url('property_ajax') }}/" + id
                    , type: "GET"
                    , dataType: "json"
                    , success: function(data) {
                        $("#propertye_id").find('option:not(:first)').remove();
                        if (data['newproperty']) {
                            $.each(data['newproperty'], function(key, value) {
                                $("#propertye_id").append("<option value=" + value[
                                        'id'] + ">" + value['name'] +
                                    "</option>");
                            });
                        }

                    }
                });
            } else {
                $('#propertye_id').empty();
            }
        });

    </script>
    <script>
        $("#proType_id").on("change", function() {
            if ($(this).val() == 1) {
                $("#numbeer_room").css('display', 'block')
                $("#numbeer_toilet").css('display', 'block')
            } else {
                $("#numbeer_room").css('display', 'none')
                $("#numbeer_toilet").css('display', 'none')
            }
        });

    </script>
</body>
</html>
