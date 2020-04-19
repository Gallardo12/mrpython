<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <script src="https://kit.fontawesome.com/2319676d2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a style="color: white; font-family: 'Roboto', sans-serif; font-size: 25px;" href="{{ url('/') }}">
                                    <img height="70px" src="{{ asset('img/site/logo_transparent.png') }}" alt="">
                                    Mr. Python
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ url('/') }}">Inicio</a></li>
                                        <li><a href="{{ url('/cursos') }}">Cursos <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/cursos') }}">Todos</a></li>
                                                <li><a href="elements.html">Blog con Laravel</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/blog') }}">Blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/blog') }}">Todos</a></li>
                                                <li><a href="single-blog.html">Desarrollo Web</a></li>
                                                <li><a href="single-blog.html">IOT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                                        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                                        @guest
                                        <li>
                                            <a href="{{ route('login') }}" class="login">
                                                <span>Admin</span>
                                            </a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="login">
                                                <span>Registrarse</span>
                                            </a>
                                        </li>
                                        @endif
                                        @else
                                        <li><a href="#">{{ Auth::user()->name }} <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li>
                                                    <a class="login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Salir
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="#">
                                        <i class="fa fa-phone"></i>
                                        <span>Contáctanos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Aprende <br>
                                Programación <br>
                                Online</h3>
                            <a href="#" class="boxed_btn">Nuestros Cursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area" style="padding: 100px 0 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>30 Tutoriales <br>
                            de 1 curso</h3>
                        <p>Dentro de este sitio encontraras cursos diseñados para aprender a usar nuevas tecnologías en el desarrollo de programas de escritorio, sitios web, análisis de datos, inteligencia artificial y desarrollo de aplicaciones móviles.</p>
                        <a href="#" class="boxed_btn">Empezar un Curso</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>1</span>
                                    <p> Curso</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>30</span>
                                    <p> Lecciones</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>1</span>
                                    <p> Estudiante</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses" style="padding: 100px 0 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Cursos Populares</h3>
                        <p>Estos son los cursos más solicitados por los estudiantes. <br> Puedes empezar con los cursos básicos y avanzar a tu propio ritmo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6  col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 ">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Web" role="tabpanel" aria-labelledby="Web-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Web1" role="tabpanel" aria-labelledby="Web-tab1">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4  col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Web11" role="tabpanel" aria-labelledby="Web-tab11">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Adobe-XD8" role="tabpanel" aria-labelledby="Adobe-XD8">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4  col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Adobe-XD9" role="tabpanel" aria-labelledby="Adobe-XD-tab9">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Adobe XD</span>
                                        <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development <br>
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 ">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Photoshop</span>
                                        <h3><a href="#">Mobile App design step by step <br>
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/5.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX</span>
                                        <h3><a href="#">How to complete user research <br>
                                                and make work flow</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Commitment to dedicated <br>
                                                Support</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="flaticon-mark-as-favorite-star"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                <span class="offer">$89.00</span>
                                                <span class="active_prise">
                                                    $49
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="#" class="boxed_btn_rev">More Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_courses_end-->


    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- asdasd</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->

    <!-- our_courses_start -->
    <div class="our_courses" style="padding: 100px 0 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Nuestras Especialidades</h3>
                        <p>Los cursos se dividen en cuatro categorias principales. <br> Si tienes alguna sugerencia o quieres ser autor de un curso, ésta es una plataforma colaborativa, mándanos un correo. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <img src="https://img.icons8.com/color/64/000000/python.png" />
                        </div>
                        <h3>Python</h3>
                        <p>
                            Cursos con el mejor lenguaje de programación en la actualidad, orientados a conceptos de programación básica, big data, inteligencia artificial y machine learning.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <img src="https://img.icons8.com/cute-clipart/64/000000/application-window.png" />
                        </div>
                        <h3>Desarrollo Web</h3>
                        <p>
                            Cursos sobre diseño de sitios web estáticos y dinámicos, uso de frameworks ágiles como Django, Ruby on Rails y Laravel.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <img src="https://img.icons8.com/cotton/64/000000/medical-mobile-app.png" />
                        </div>
                        <h3>Aplicaciones Móviles</h3>
                        <p>
                            Cursos sobre desarrollo de aplicaciónes móviles nativas para Android e híbridas con tecnologías como Ionic y React Native.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <img src="https://img.icons8.com/officel/64/000000/code.png" />
                        </div>
                        <h3>Programación</h3>
                        <p>
                            Cursos orientados a otros Lenguajes de Programación como Ruby, Java, C# entre otros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Suscribirse al boletín informativo</h3>
                        <p>Noticias, nuevos cursos, publicaciones sobre nuevas tecnologías y más.</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>Recibe nuestras noticias</h4>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Ingresa tu correo electrónico">
                            <button type="submit">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
    <div class="our_latest_blog" style="padding: 100px 0 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Nuestros últimas publicaciones</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/1.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>{{ $blog->created_at->diffforhumans() }} en <a href="#">Programación</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">{{ $blog->title }}</a></h3>
                            </div>
                            <p class="blog_text">
                                {{ $blog->body }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->


    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top" style="padding: 70px 0 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a style="color: white; font-family: 'Roboto', sans-serif; font-size: 25px;" href="{{ url('/') }}">
                                    <img height=70px" src="{{ asset('img/site/logo_transparent.png') }}" alt="">
                                    Mr. Python
                                </a>
                            </div>
                            <p>
                                Sitio web colaborativo para la creación de cursos sobre programación, nuevas tecnologías y actualizaciones en los lenguajes de programación actuales.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/MrPythonCode/" target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <!--li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li-->
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCWyKrXTlZi7R0sBxVkBjylg?view_as=public" target="_blank">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Cursos
                            </h3>
                            <ul>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#"> Photoshop</a></li>
                                <li><a href="#">Illustrator</a></li>
                                <li><a href="#">Adobe XD</a></li>
                                <li><a href="#">UI/UX</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Recursos
                            </h3>
                            <ul>
                                <li><a href="#">Free Adobe XD</a></li>
                                <li><a href="#">Tutorials</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> About</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <p>
                                200, D-block, Green lane USA <br>
                                +10 367 467 8934 <br>
                                edumark@contact.com
                            </p>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Mr. Python &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados | Esta plantilla es creada con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- JS here -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>