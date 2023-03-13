<!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <style>
            swiper-container {
              width: 100%;
              height: 100%;
            }
        
            swiper-slide {
              text-align: center;
              font-size: 18px;
              background: #fff;
              display: flex;
              justify-content: center;
              align-items: center;
            }
        
            swiper-slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
            }
        
        
            swiper-container {
              width: 100%;
              height: 300px;
              margin-left: auto;
              margin-right: auto;
            }
        
            swiper-slide {
              background-size: cover;
              background-position: center;
            }
        
            .mySwiper {
              height: 500px;
              width: 100%;
            }
        
            .mySwiper2 {
              height: 20%;
              box-sizing: border-box;
              padding: 10px 0;
            }
        
            .mySwiper2 swiper-slide {
              width: 25%;
              height: auto;
              opacity: 0.4;
            }
        
            .mySwiper2 .swiper-slide-thumb-active {
              opacity: 1;
            }
        
            .mySwiper2 swiper-slide img, swiper-slide a {
              width: 100%;
              height: 100%;
              object-fit: cover;
            }
            .property-features {
                display: block;
                columns: 3;
                -webkit-columns: 3;
                -moz-columns: 3;
            }
        </style>
        <title>عقارك</title>
    </head>
    <body>
       
        @include('layouts.nav')
       
        
      
        <div class="page-content p-lg-5 p-sm-1 mt-5">
            <div class="container mt-5">
                <div class="3kares-most-visited p-sm-2 p-1 mb-4">
                    <div class="container">
                        <div class="row">

                         


                          
                            @foreach ($property as $item)
                                
                          
                           
                            <div class="col-xl-4 col-lg-6 col-md-12 item mb-3">
                                <div class="card" dir="rtl">
                                    <div class="position-relative p-1">
                                        <div class="item position-relative">
                                        
                                            <img src="{{ URL::asset($item->picture) }}" class="card-img-top" height="270" alt="...">
                                            <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">اعلي تقييم</p>   
                                        </div>                                
                                    </div>
                                    <div class="card-body mt-2 p-0">
                                        <div class="px-4">
                                            <p class="text-danger fw-bold">حصري</p>
                                            <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">{{$item->name}}</h5></a>
                                            <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="/assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> {{$item->country}}</p>
                                            <!-- <ul class="p-0 d-flex justify-content-between">
                                                <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                                <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                                <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                            </ul> -->
                                        </div>
                                        <hr class="m-0 mb-1">
                                        <div class="publisher d-flex align-items-center justify-content-between p-4">
                                           
                                            <div class="info gray-color">
                                                {{$item->created_at}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                           
                                
                            @endforeach
                                
                           


                            
                        </div>

                    </div>
                </div>
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
     
    </body>
</html>