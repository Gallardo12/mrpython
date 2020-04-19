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

    @yield('content')

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