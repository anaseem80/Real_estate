@extends('layouts.master2')

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
        <link rel="icon" href="{{URL::asset('assets/img/brand/favicon-white.png')}}" type="image/x-icon"/>
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <style>
        </style>
        <title>الشروط والأحكام</title>
    </head>
    <body class="bg-white">
        @include('layouts.nav')
        <div class="text-center py-5 banner-site" style="background-image:url({{ asset('assets/img/backgrounds/1.jpg') }})">
            <h1>الشروط والأحكام</h1>
        </div>

        <div class="page-content p-lg-5 p-sm-1">
            <div class="container">

                <div class="page-content p-lg-5 p-sm-1 text-dark">
                    <div class="container">
                      <p class="fs-5">
                        <ol>
                          <li>
                            <strong> حساب المستخدم </ strong>
                            <ol>
                              <li> لاستخدام تطبيقنا ، يجب عليك إنشاء حساب. </ li>
                              <li> أنت مسؤول عن الحفاظ على سرية معلومات حسابك وكلمة المرور. </ li>
                              <li> أنت توافق على إخطارنا فورًا بأي استخدام غير مصرح به لحسابك. </ li>
                            </ol>
                          </li>
                          <li>
                            <strong> استخدام التطبيق </ strong>
                            <ol>
                              <li> لا يجوز لك استخدام تطبيقنا إلا للأغراض القانونية ووفقًا لهذه الشروط والأحكام. </ li>
                              <li> أنت توافق على عدم استخدام تطبيقنا من أجل:
                                <ol type = "a">
                                  <li> تحميل أو نشر أو نقل أي محتوى غير قانوني أو ضار أو مهدد أو مسيء أو مضايق أو تشهيري أو فاحش أو مبتذل أو جنسي صريح أو مسيء بطريقة أخرى ؛ </ li>
                                  <li> انتحال شخصية أي شخص أو كيان ؛ أو </li>
                                  <li> التدخل في تشغيل تطبيقنا أو تعطيله. </ li>
                                </ol>
                              </li>
                            </ol>
                          </li>
                          <li>
                            <strong> المحتوى </ strong>
                            <ol>
                              <li> يتيح لك تطبيقنا تحميل المحتوى أو نشره أو نقله بأي طريقة أخرى ، بما في ذلك على سبيل المثال لا الحصر ، أوصاف الممتلكات والصور ومقاطع الفيديو. </ li>
                              <li> أنت المسؤول الوحيد عن المحتوى الذي تحمّله أو تنشره أو تنقله من خلال تطبيقنا. </ li>
                              <li> توافق على عدم تحميل أو نشر أو نقل أي محتوى ينتهك أي براءة اختراع أو علامة تجارية أو سر تجاري أو حقوق طبع ونشر أو حقوق ملكية أخرى لأي طرف. </ li>
                              <li> أنت تمنحنا ترخيصًا عالميًا غير حصري وقابل للتحويل وقابل للترخيص من الباطن وخالي من حقوق الملكية لاستخدام أي محتوى تحمّله أو تنشره أو تنقله من خلال تطبيقنا. </ li>
                            </ol>
                          </li>
                          <li>
                            <strong> إخلاء المسؤولية </ strong>
                            <ol>
                              <li> يتم تقديم طلبنا على أساس "كما هو" و "حسب توفره". نحن لا نقدم أي تعهدات أو ضمانات من أي نوع ، صريحة أو ضمنية ، فيما يتعلق بتشغيل تطبيقنا أو المعلومات أو المحتوى أو المواد أو المنتجات المدرجة في تطبيقنا. </ li>
                              <li> أنت تدرك وتوافق على أن استخدامك لتطبيقنا يكون على مسؤوليتك الخاصة وأننا لن نكون مسؤولين عن أي أضرار من أي نوع تنشأ عن استخدام تطبيقنا ، بما في ذلك على سبيل المثال لا الحصر ، مباشرة أو غير مباشرة أو عرضية والعقاب والأضرار اللاحقة. </ li>
                            </ol>
                          </li>
                          <li>
                            <strong> تحديد المسؤولية </ strong>
                            <p> لن نتحمل بأي حال من الأحوال المسؤولية عن أي أضرار من أي نوع ، بما في ذلك على سبيل المثال لا الحصر ، الأضرار المباشرة وغير المباشرة والعرضية والعقابية والتبعية الناشئة عن استخدام تطبيقنا أو عدم القدرة على استخدام تطبيقنا. </p>
                          </li>
                          <li>
                            <strong> التعويض </strong>
                            <p> أنت توافق على تعويضنا والدفاع عننا وحمايتنا نحن والشركات التابعة لنا والمسؤولين والمديرين والموظفين والوكلاء والمرخصين والموردين من وضد جميع الخسائر والنفقات والأضرار والتكاليف ، بما في ذلك أتعاب المحاماة المعقولة ، الناتجة عن أي انتهاك لهذه الشروط والأحكام أو أي نشاط متعلق بحسابك. </p>
                                <li> 6.1 أنت توافق على تعويضنا والدفاع عننا وحمايتنا ، والشركات التابعة لنا ، والمسؤولين والمديرين والموظفين والوكلاء والمرخصين والموردين لدينا
                                    من وضد أي وجميع المطالبات أو الالتزامات أو الأضرار أو الخسائر أو التكاليف أو النفقات أو الرسوم (بما في ذلك أتعاب المحاماة المعقولة) التي تنشأ عن استخدامك لتطبيقنا أو أي محتوى تقوم بتحميله أو نشره أو نقله من خلال تطبيقنا. </li>
                                    
                                    </ul>
                                    <p> 7. الإنهاء </p>
                                    <ul>
                                        <li> 7.1 يجوز لنا إنهاء وصولك إلى تطبيقنا في أي وقت ولأي سبب ، دون إشعار أو مسؤولية. </ li>
                                        <li> 7.2 عند الإنهاء ، ستتوقف على الفور جميع الحقوق الممنوحة لك بموجب هذه الشروط والأحكام. </ li>
                                    </ul>
                                    <p> 8. القانون الحاكم </p>
                                    <ul>
                                        <li> 8.1 تخضع هذه الشروط والأحكام وتفسر وفقًا لقوانين الولاية التي يقع مقرنا الرئيسي فيها ، دون إعمال أي مبادئ لتعارض القوانين. </ li>
                                    </ul>
                                    <p> 9. تغييرات على الشروط والأحكام </p>
                                    <ul>
                                        <li> 9.1 يجوز لنا مراجعة هذه الشروط والأحكام في أي وقت دون إشعار. </ li>
                                        <li> 9.2 باستخدام تطبيقنا ، فإنك توافق على الالتزام بالإصدار الحالي من هذه الشروط والأحكام. </ li>
                                    </ul>
                                    <p> 10. معلومات الاتصال </p>
                                    <ul>
                                        <li> 10.1 إذا كانت لديك أي أسئلة حول هذه البنود والشروط ، فيرجى الاتصال بنا على [insert contact information]. </li>
                                    </ul>
                        
                        
                                  </p>
                          </li>
                        </ol>
                      </p>
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



















