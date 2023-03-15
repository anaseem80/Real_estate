<footer>
    <div class="footer-top-img">
        <div class="container">
            <div class="row footer-top-style">
                <div class="col-lg-4 mb-lg-0 mb-sm-5">
                    <img src=" {{ asset('assets/img/brand/logo.jpeg') }}" width="250" class="mb-3" alt="">
                    <p class="fs-5 text-light">ايريبك شركة مصرية تأسست بهدف تقديم خدمات عقارية فى مجالات متعددة تشمل
                        السكني , التجارى والسياحي . كما قامت ايريبك بضم مجموعة من المطورين العقارين ذوي المصداقية لكي
                        تتمكن من عرض أكثر عدد من المشاريع المتميزة التي يمتلكها هؤلاء المطورين تحت سقف واحد.</p>
                    <div class="social-links text-end d-flex">
                        <a href="https://www.facebook.com/profile.php?id=100090842993598&mibextid=ZbWKwL" class="text-light"><i class="fa fa-facebook"></i></a>
                        <!-- <a href="#" class="me-2 text-light"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="me-2 text-light"><i class="fa fa-google"></i></a>
                        <a href="#" class="me-2 text-light"><i class="fa fa-pinterest"></i></a> -->
                    </div>
                </div>


                <div class="col-lg-4 mb-lg-0 mb-sm-5">
                    <h3>روابط سريعه </h3>
                    <span class="heading-divider"></span>
                    <ul class="links">
                        <li class="mb-3">
                            <a class="text-decoration-none text-light" aria-current="page"
                                href="{{ url('/' . ($page = 'blogview')) }}">مدونه</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-decoration-none text-light" aria-current="page"
                                href="{{ url('/' . ($page = 'terms')) }}">الشروط والأحكام</a>
                        </li>   
                    </ul>
                </div>
                <div class="col-lg-4 mb-lg-0">
                    <h3>تواصل معنا</h3>
                    <span class="heading-divider"></span>
                    <ul class="links list-unstyled p-0">
                        <!-- <li class="mb-3 english-font"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt=""> دبي مول وبجوار برج خليفة</li> -->
                        <li class="mb-3 english-font"><a href="mailto:info@example.com"
                                class="text-decoration-none text-light"> <i
                                    class="fa fa-envelope ms-2"></i>irebcc@gmail.com</a></li>
                        <li class="mb-3 english-font"><a href="tel:+20 1158232428" dir="ltr"
                                class="text-decoration-none text-light"> +20 1158232428 <i class="fa fa-phone ms-2"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="footer-bottom-style">
        <div class="container">
            <div class="row p-3">
                <div class="col-12">
                    <p class="text-center text-light mb-0">جميع الحقوق محفوظة لدي <span class="font-english">i
                            REBC</span></p>
                </div>
            </div>
        </div>
    </div>

</footer>
