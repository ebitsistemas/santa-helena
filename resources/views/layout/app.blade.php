<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo ao Laticínio Santa Helena</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/logo_g.png') }}">
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- Css-->
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fonts/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-select.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/agrikol_iconl.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
</head>

<body>
<div class="page-wrapper" id="inicio">
    <div class="site-header__header-one-wrap">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="mailto:recepcao@laticiniosh.com.br"><span class="icon-message"></span>recepcao@laticiniosh.com.br</a>
                    <a href="tel:45999371483"><span class="icon-phone-call"></span>(45) 99937-1483</a>
                </div>
                <div class="topbar-one__middle">
                    <a href="{{ url('') }}" class="main-nav__logo">
                        <img src="{{ url('assets/images/logo_g.png') }}" width="225" class="main-logo" alt="Logo">
                    </a>
                </div>
                <div class="topbar-one__right">
                    <div class="topbar-one__social">
                        <a href="https://www.facebook.com/p/Laticínio-Santa-Helena-100063672297039/" target="_blank"><i
                                class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/explore/locations/110565777132466/laticinio-santa-helena/"
                           target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/5545999371403" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <header class="main-nav__header-one">
            <nav class="header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li>
                                <a href="{{ url('') }}#inicio">Início</a>
                            </li>
                            <li>
                                <a href="{{ url('') }}#produtos">Produtos</a>
                            </li>
                            <li>
                                <a href="{{ url('galeria') }}">Galeria</a>
                            </li>
                            <li>
                                <a href="{{ url('') }}#contato">Contato</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>
    </div>

    @yield('content')

    <section class="contact_google_map_1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.9082177034174!2d-53.39579804739084!3d-24.969237160548815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3d52aaa33a803%3A0x48d5e43751dbec6e!2sLatic%C3%ADnio%20Santa%20Helena!5e0!3m2!1spt-BR!2sbr!4v1747164997951!5m2!1spt-BR!2sbr"
                class="google-map__contact1" allowfullscreen=""></iframe>
    </section>

    <footer class="site-footer" id="contato">
        <div class="site-footer_farm_image"><img src="{{ url('assets/images/site-footer-farm.png') }}" alt="Farm Image"></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__title">
                            <h3>Sobre</h3>
                        </div>
                        <div class="footer-widget_about_text">
                            <p>
                                Em janeiro de 2011, a empresa foi assumida pelos sócios proprietários atuais.<br>
                                A capacidade fabril era de apenas 20 mil litros de leite/dia, e processava-se apenas 5-10
                                mil litros dessa capacidade.<br>
                                Atualmente o processamento chega a 95.000 mil litros; Mensalmente chega até 2,5 milhões de
                                litros de leite, além da venda de leite Spot.<br>
                                Os produtos fabricados são Queijo Muçarela, Soro de Leite, Creme de leite, Creme de soro e
                                Gordura láctea.<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-widget__column footer-widget__link wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__title">
                            <h3>Explore</h3>
                        </div>
                        <ul class="footer-widget__links-list list-unstyled">
                            <li><a href="{{ url('') }}#inicio">Início</a></li>
                            <li><a href="{{ url('') }}#produtos">Produtos</a></li>
                            <li><a href="{{ url('') }}#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget__column footer-widget__contact wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__title">
                            <h3>Contato</h3>
                        </div>
                        <div class="footer-widget_contact">
                            <p>
                                ROD BR 277 KM 584, S/N - LOTE RURAL 09<br>
                                GLEBA SAO FRANCISCO<br>
                                CASCAVEL/PR<br>
                            </p>
                            <a href="mailto:recepcao@laticiniosh.com.br"><span class="icon-message"></span> recepcao@laticiniosh.com.br</a><br>
                            <a href="tel:45999371483"><span class="icon-phone-call"></span> (45) 99937-1483</a>
                            <div class="site-footer__social">
                                <a href="https://www.facebook.com/p/Laticínio-Santa-Helena-100063672297039/"
                                   target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/explore/locations/110565777132466/laticinio-santa-helena/"
                                   target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://wa.me/5545999371403" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="site-footer_bottom">
        <div class="container">
            <div class="site-footer_bottom_copyright" style="width: 100%; text-align: center !important;">
                <p class="text-uppercase" style="font-size: 24px !important;">"Tudo posso naquele que me fortalece" - <span style="font-size: 18px !important;"> Filipenses 4:13</span></p>
                <p>&copy; 2025. Todos os direitos reservados. <a href="#">Laticínio Santa Helena</a></p>
            </div>
        </div>
    </div>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">
            <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ url('assets/images/close-1-1.png') }}" alt=""></a>
        </div>

        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>

        <div class="side-menu__sep"></div>

        <div class="side-menu__content">
            <p>
                <a href="mailto:recepcao@laticiniosh.com.br">recepcao@laticiniosh.com.br</a> <br>
                <a href="tel:45999371483">(45) 99937-1483</a>
            </p>
            <div class="side-menu__social">
                <a href="https://www.facebook.com/p/Laticínio-Santa-Helena-100063672297039/" target="_blank"><i
                        class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/explore/locations/110565777132466/laticinio-santa-helena/"
                   target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/5545999371403" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ url('assets/js/wow.js') }}"></script>
<script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ url('assets/js/swiper.min.js') }}"></script>
<script src="{{ url('assets/js/typed-2.0.11.js') }}"></script>
<script src="{{ url('assets/js/vegas.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ url('assets/js/countdown.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ url('assets/js/nouislider.min.js') }}"></script>
<script src="{{ url('assets/js/isotope.js') }}"></script>
<script src="{{ url('assets/js/appear.js') }}"></script>
<!-- template scripts -->
<script src="{{ url('assets/js/theme.js') }}"></script>
<script data-n-head="ssr" src="{{ url('assets/plugins/glightbox/glightbox.min.js') }}" data-body="true"></script>
<script data-n-head="ssr" src="{{ url('assets/plugins/accordion/accordion.min.js') }}" data-body="true"></script>
</body>
</html>
