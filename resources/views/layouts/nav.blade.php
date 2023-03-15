<nav class="navbar navbar-expand-lg navbar-light shadow-sm py-3 fixed-top" id="navbar">
    <div class="container">
    
        <a class="navbar-brand rounded-0" href="{{ url('/' . ($page = 'home')) }}"><img src="{{ URL::asset('assets/img/brand/logo_purple.png') }}" alt="" width="130" class="rounded-0"></a>
        <button class="navbar-toggler p-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-xl-2 p-0">
                <li class="nav-item me-2">
                    <a class="nav-link  rounded p-3 active" aria-current="page"
                        href="{{ url('/' . ($page = 'home')) }}"
                        @auth {{ 'style=display:block;' }} @endauth>الرئيسية</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link  rounded p-3 active" aria-current="page"
                        href="{{ url('/' . ($page = 'advisors')) }}">إستشارة عقارية</a>
                </li> 
                <li class="nav-item me-2">
                    <a class="nav-link  rounded p-3 active" aria-current="page"
                        href="{{ route('paints') }}">خدمة التشطيب</a>
                </li>
                @auth
                @if (Auth::user()->user_type == 'admin')
                <li class="nav-item me-2">
                    <a class="nav-link  rounded p-3 active" aria-current="page"
                        href="{{ url('/' . ($page = 'dashboard')) }}">لوحة التحكم</a>
                </li>
                @endif
                <li class="nav-item me-2"><a class="nav-link  rounded p-3 active" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                </li>
                @endauth
                <li class="nav-item me-2">
                    <a class="nav-link  rounded p-3 active rounded-pill text-light add-real-estate" aria-current="page"
                        href="{{ url('/' . ($page = 'propertyinsertweb')) }}">إضافة عقار</a>
                </li>
                <!-- <li class="nav-item me-2">
                    <form method="GET" action="{{ route('search') }}">

                        <div class="input-group mb-3">

                            <input type="text" autocomplete="off" name="search" class="form-control"
                                placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">

                            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>

                        </div>

                    </form>
                </li> -->

                <!-- {{-- <li class="nav-item me-2">
            <a class="nav-link  rounded p-3 active" aria-current="page" href="{{ url('/' . $page='aboutpage') }}">معلومات عنا</a>
          </li> --}} -->
            </ul>
            <!-- <div class="d-flex">
                 <a href="#" class="text-black text-decoration-none nav-link rounded ">تسجيل دخول <i class="fa fa-user"></i></a> 

                @auth
                    <div class="dropdown">
                        <img src="/assets/img/backgrounds/icons8-user-48.png" width="40" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />
                        <ul class="dropdown-menu border-top border-0 text-end" aria-labelledby="dropdownMenuButton1"
                            dir="ltr">
                            <li class="dropdown-item" dir="rtl">مرحبا {{ Auth::user()->name }}!</li>
                            <li class="dropdown-item">
                                <hr class="mb-1 mt-0">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/' . ($page = 'profile')) }}">الإعدادات <i
                                        class="fa fa-gear"></i></a></li>
                            @if (Auth::user()->user_type == 'admin')
                                <li><a class="dropdown-item" href="{{ url('/' . ($page = 'dashboard')) }}">لوحة التحكم <i
                                            class="fa fa-gear"></i></a></li>
                            @endif

                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                        class="bx bx-log-out"></i>تسجيل خروج</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth

            </div> -->
        </div>
    </div>
</nav>
