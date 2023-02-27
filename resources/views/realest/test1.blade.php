@section('css')
@endsection

 {{-- public\assets\css-rtl\style.css --}}

<!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">

<style>
header{
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
{{-- 
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css-rtls/libraries/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css-rtls/libraries/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css-rtls/libraries/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css-rtls/libraries/owl.carousel.css">

        <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/css-rtls/libraries/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/css-rtls/libraries/owl.carousel.min.css')}}" rel="stylesheet">
       <link href="{{URL::asset('assets/css-rtls/libraries/owl.carousel.css')}}" rel="stylesheet"> --}}
        <title>عقارك</title>
    </head>
    <body style="background-color:#000000;" >
        
        <div class="blue-background-color bar">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-lg-6 d-flex flex-wrap justify-content-sm-center">
                        <div class="d-flex align-items-center english-font">
                            <i class="fa fa-phone ms-2"></i>
                            (123) 123-456
                        </div>
                        <div class="d-flex align-items-center ms-3">
                            <i class="fa fa-envelope mx-2"></i>
                            <a href="mailto:office@example.com" class="text-decoration-none english-font">office@example.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 social-links text-end d-flex justify-content-end">
                        <a href="#" class="me-2"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="me-2"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="me-2"><i class="fa fa-google"></i></a>
                        <a href="#" class="me-2"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg py-3" id="navbar">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="assets/img/backgrounds/logo.png" alt="" width="130"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-xl-2 p-0">
                  <li class="nav-item me-2">
                    <a class="nav-link rounded p-3 active" aria-current="page" href="index.html">الرئيسية</a>
                  </li>
                  <li class="nav-item me-2">
                    <a class="nav-link rounded p-3 active" aria-current="page" href="add-estate.html">إضافة عقار</a>
                  </li>
                  <li class="nav-item me-2">
                    <a class="nav-link rounded p-3 active" aria-current="page" href="terms.html">الشروط والأحكام</a>
                  </li>
                  <li class="nav-item me-2">
                    <a class="nav-link rounded p-3 active" aria-current="page" href="about.html">معلومات عنا</a>
                  </li>
                </ul>
                <div class="d-flex">
                    <!-- <a href="#" class="text-black text-decoration-none nav-link rounded text-dark">تسجيل دخول <i class="fa fa-user"></i></a> -->
                    <div class="dropdown">
                        <img src="assets/img/backgrounds/icons8-user-48.png" width="40" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />                          
                        <ul class="dropdown-menu border-top border-0 text-end" aria-labelledby="dropdownMenuButton1" dir="ltr">
                          <li class="dropdown-item" dir="rtl">مرحبا احمد!</li>
                          <li class="dropdown-item"><hr class="mb-1 mt-0"></li>                          
                          <li><a class="dropdown-item" href="#">الإعدادات <i class="fa fa-gear"></i></a></li>
                          <li><a class="dropdown-item" href="#">تسجيل الخروج <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="20" height="20" alt=""></a></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
        </nav>
        <header class="pt-5 position-relative">
            <div class="shadow position-absolute w-100 h-100 top-0 left-0 start-0 end-0"></div>
            <div class="container header-content position-relative">
                <h1 class="text-white text-center">اعثر علي منزل أحلامك</h1>
                <div class="row bg-white p-4 col-lg-8 m-auto mt-5 rounded shadow-lg">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control ms-2 rounded-0 p-3" placeholder="شريط البحث">
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-lg-6">
                                <input type="number" class="form-control ms-2 rounded-0 p-3 mb-0" placeholder="الحد الادني للسعر" min="40" max="1000">
                            </div>
                            <div class="col-lg-6">
                                <input type="number" class="form-control ms-2 rounded-0 p-3 mb-0" placeholder="الحد الأقصي">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <input type="text" class="form-control ms-2 rounded-0 p-3 mb-0" placeholder="المدينة">
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>عدد الغرف</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>عدد الحمامات</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>نوع العقار</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>مدة الإيجار</option>
                                </select>
                            </div>
                            <!-- <div class="col-lg-12 mt-3 row justify-content-start">
                                <h6 class="mt-2">نوع الإقامة</h6>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3 row justify-content-start">
                                <h6 class="mt-2">المميزات</h6>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                                <div class="check-box d-flex align-items-center col-lg-4 mt-3">
                                    <label for="home">منزل</label>
                                    <input type="checkbox" name="home" id="home" class="me-2">
                                </div>
                            </div> -->
                        </div>
                        <button class="btn btn-primary rounded-0 px-5 py-3 mt-4 blue-background-color d-flex align-items-center w-100 text-center justify-content-center">بحث <i class="fa fa-search me-2"></i></button>
                    </form>
                </div>
            </div>
        </header>



        
        <div class="kares-most-visited p-sm-5 p-1 bg-light">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">العقارات الأكثر زيارة</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">أكثر العقارات زيارة في أخر 24 ساعة</p>
                    </div>
                    <a href="#"><button class="btn fs-14 btn-accent py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="owl-carousel py-5 owl-theme">
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                              
                                
                            </div>


                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>  



                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>


                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>  




                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>


                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div> 

                    


                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  





                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  




                </div>
            </div>
        </div>



        <div class="kares-most-visited p-sm-5 p-1 bg-white">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">عقارات أضيفت حديثاً</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح احدث عقارات السكنية اليوم.</p>
                    </div>
                    <a href="#"><button class="btn fs-14 btn-accent py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="owl-carousel py-5 owl-theme">
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                </div>
            </div>
        </div>
        <div class="p-sm-5 p-1 bg-light">
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
                        <div class="why-choose-card mb-2 mb-sm-4 bg-white text-center rounded">
                            <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/high-five.png" alt=""></div>
                            <h3 class="my-4">موثوق به من قبل الآلاف</h3>
                            <p>القول المأثور ، السيرة الذاتية ، سهولة في القول المأثور.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="why-choose-card mb-2 mb-sm-4 bg-white text-center rounded">
                            <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/home.png" alt=""></div>
                            <h3 class="my-4">موثوق به من قبل الآلاف</h3>
                            <p>القول المأثور ، السيرة الذاتية ، سهولة في القول المأثور.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="why-choose-card mb-2 mb-sm-4 bg-white text-center rounded">
                            <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/profit.png" alt=""></div>
                            <h3 class="my-4">موثوق به من قبل الآلاف</h3>
                            <p>القول المأثور ، السيرة الذاتية ، سهولة في القول المأثور.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kares-most-visited p-sm-5 p-1 bg-white">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">العقارات الموصى بها</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح العقارات الموصى بها.</p>
                    </div>
                    <a href="#"><button class="btn fs-14 btn-accent py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="owl-carousel py-5 owl-theme">
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item">
                        <div class="card" dir="rtl">
                            <div class="position-relative p-1">
                                <div class="owl-carousel-img owl-theme" dir="ltr">
                                    <div class="item position-relative">
                                        <img src="assets/img/backgrounds/pc2.jpg" class="card-img-top" height="270" alt="...">
                                        <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">للتأجير</p>        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body mt-2 p-0">
                                <div class="px-4">
                                    <p class="text-danger fw-bold">حصري</p>
                                    <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">منزل الدوحة الاول</h5></a>
                                    <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> من داخل , الإمارات وحتى تكون مواجهً للكعبة </p>
                                    <!-- <ul class="p-0 d-flex justify-content-between">
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                        <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    </ul> -->
                                </div>
                                <hr class="m-0 mb-1">
                                <div class="publisher d-flex align-items-center justify-content-between p-4">
                                    <div class="info d-flex">
                                        <img src="assets/img/backgrounds/pc2.jpg" width="30" height="30" class="rounded-circle w-auto" alt="">
                                        <span class="english-font me-2 gray-color">Ahmed Naseem</span>
                                    </div>
                                    <div class="info gray-color">
                                        منذ عامين
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                </div>
            </div>
        </div>
        <div class="kares-most-visited A3kar-type p-sm-5 p-1 bg-light">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">نوع العقار</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح احدث عقارات اليوم.</p>
                    </div>
                    <a href="#"><button class="btn fs-14 btn-accent py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="row">
                    <div class="col-lg-3 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc2.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc1.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc3.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/1.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kares-most-visited p-sm-5 p-1 bg-white">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">اكثر المدن التي تحتوي علي عقارات</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح اشهر المدن التي تحتوي علي عقارات</p>
                    </div>
                    <a href="#"><button class="btn fs-14 btn-accent py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="row">
                    <div class="col-lg-8 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc2.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc1.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc3.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 my-2">
                        <div class="properti_city position-relative">
                            <a href="#">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/1.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>ميامي</h4>
                                        <p><span class="english-font">24</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-sm-5 p-3 blue-background-color text-white">
            <div class="container">
                <div class="row align-items-center justify-content-sm-center">
                    <div class="col-lg-6">
                        <h1>كن وكيل عقارات</h1>
                        <p>نحن نعمل فقط مع أفضل الشركات حول العالم</p>
                    </div>
                    <div class="col-lg-6 text-start">
                        <a href="#"><button class="btn fs-14 btn-accent py-3 lh-15 px-5 mb-6 mb-lg-0">تسجيل الدخول <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>                    </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-top-img">
                <div class="container">
                    <div class="row footer-top-style">
                        <div class="col-lg-4 mb-lg-0 mb-sm-5">
                            <img src="assets/img/backgrounds/logo_light.svg" width="250" class="mb-3" alt="">
                            <p class="fs-5">لوريم ابسيوم لوريم ابيسيوم لورم لوريم لوريم </p>
                            <div class="social-links text-end d-flex">
                                <a href="#" class="text-light"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="me-2 text-light"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="me-2 text-light"><i class="fa fa-google"></i></a>
                                <a href="#" class="me-2 text-light"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-lg-0 mb-sm-5">
                            <h3>روابط سريعة</h3>
                            <span class="heading-divider"></span>
                            <ul class="links">
                                <li class="mb-3"><a href="#" class="text-decoration-none text-light">العقارات</a></li>
                                <li class="mb-3"><a href="#" class="text-decoration-none text-light">العقارات</a></li>
    
                                <li class="mb-3"><a href="#" class="text-decoration-none text-light">العقارات</a></li>
    
                                <li class="mb-3"><a href="#" class="text-decoration-none text-light">العقارات</a></li>
    
                            </ul>
                        </div>
                        <div class="col-lg-4 mb-lg-0">
                            <h3>تواصل معنا</h3>
                            <span class="heading-divider"></span>
                            <ul class="links list-unstyled p-0">
                                <li class="mb-3 english-font"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">121 King St, Melbourne den 3000, Australia</li>
                                <li class="mb-3 english-font"><a href="mailto:info@example.com" class="text-decoration-none text-light"> <i class="fa fa-envelope ms-2"></i>info@example.com</a></li>
                                <li class="mb-3 english-font"><a href="tel:(+123) 596 000" class="text-decoration-none text-light"> <i class="fa fa-phone ms-2"></i>(+123) 596 000</a></li>
    
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-style">
                <div class="container">
                    <div class="row p-3">
                        <div class="col-12">
                            <p class="text-center text-light mb-0">جميع الحقوق محفوظة لدي عقارات</p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>  
        <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
        
<!--
        <script src="js/libraries/jquery-3.6.0.min.js"></script>
        <script src="js/libraries/owl.carousel.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/libraries/bootstrap.min.js"></script>
        <script src="js/libraries/a1a75d5546.js"></script>
        <script src="js/libraries/swiper-bundle.min.js"></script>

-->
    </body>
</html>


