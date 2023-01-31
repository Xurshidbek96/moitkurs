<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>moitikurs.uz - Online ta&#039;lim platformasi</title>

    <meta name="title" content="Online darslar platformasi">
    <meta name="description"
        content="Eng zamonaviy bilimlarni online o&#039;rganing.
        Istalgan joydan, istalgan vaqtda va istalgan qurilma orqali darslarimizga ulanishingiz mumkin.">
    <meta name="keywords"
        content="video darslar, LMS, Learning Management System, Virtualdars.uz, Onlinedars.uz, Masofaviy ta&#039;lim, Online ta&#039;lim, online kurslar, dasturlash, dizayn, ingliz tili, rus tili, video kurslar, eduon, mohirdev">
    <meta property="og:type" content="website">

    <link href="/front/edumy/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front/assets/4991a0c9/css/kv-grid.min.css" rel="stylesheet">
    <link href="/front/assets/3de9da2a/ajaxcrud.css" rel="stylesheet">
    <link href="/front/edumy/css/style.css" rel="stylesheet">
    <link href="/front/edumy/css/responsive.css" rel="stylesheet">
    <link href="/front/edumy/custom/custom.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LT6TVGFVXZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-LT6TVGFVXZ');
    </script>



    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2222215397927863');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="/front/#" />
    </noscript>
    <!-- End Facebook Pixel Code -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/front/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="/front/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>


    <div class="wrapper">
        <div class="preloader"></div>


        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_five navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" id="logos" style="width:40px;" src="/front/images/header-logo3.png"  alt="header-logo3.png">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="/" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="/front/uploads/files/logo.png" style=" width:60px;" alt="virtualdars"
                            style="margin-bottom: 20px" width="80px">
                        <span></span>
                    </a>
                    <!-- Responsive Menu Structure-->

                    <div class="ht_left_widget home5 float-left">
                        <ul>
                            <li class="list-inline-item">
                                <div class="header_top_lang_widget">
                                    <div class="ht-widget-container">
                                        <div class="vertical-wrapper">
                                            <h2 class="title-vertical home5">
                                                <span class="text-title">Menyu</span> <i
                                                    class="fa fa-angle-down show-down" aria-hidden="true"></i>
                                            </h2>
                                            <div class="content-vertical home5">
                                                <ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">

                                                    <li>
                                                        <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                                            data-toggle="dropdown">Yo'nalishlar <b
                                                                class="caret"></b></a>
                                                                <?php
                                                                use App\Models\Category;
                                                                $category = Category::all();
                                                                ?>
                                                        <div class="dropdown-menu vertical-megamenu"
                                                            style="width: 300px;height: auto">
                                                            <div class="dropdown-menu-inner">
                                                                <div class="element-inner">
                                                                    <div class="element-section-wrap">
                                                                        <div class="element-container">
                                                                            <div class="element-row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="element-wrapper">
                                                                                        <div class="widget-nav-menu">
                                                                                            <div
                                                                                                class="element-list-wrapper wn-menu">
                                                                                                <ul
                                                                                                    class="element-menu-list">
                                                                                                @foreach ($category as $c)
                                                                                                    <li>
                                                                                                        <a
                                                                                                            href="{{ route('filter_all', $c->id) }}">{{ $c->name }}</a>
                                                                                                    </li>
                                                                                                @endforeach
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="element-warapper-btn"
                                                                                            style="margin-bottom: 17px">
                                                                                            <a
                                                                                                href="/all">
                                                                                                <div
                                                                                                    class="element-wrapper-sub-title">
                                                                                                    Barcha kurslar <i
                                                                                                        class="flaticon-right-arrow-1"></i>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="/about">Loyiha haqida</a>
                                                    </li>


                                                    <li>
                                                        <a href="/workers">Loyiha a'zolari</a>
                                                    </li>

                                                    <li>
                                                        <a href="/pages">Foydali sahifalar</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Foydalanuvchi yo'riqnomasi</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Ilmiy nashrlar</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item dn-1440">
                                <div class="ht_search_widget">
                                    <div class="header_search_widget">
                                        <form class="form-inline mailchimp_form" action="{{ route('search') }}">
                                            @csrf
                                            <input type="text" required class="form-control mb-2 mr-sm-2"
                                                id="inlineFormInputMail2" name="search"
                                                placeholder="Kurslarni qidirish" style="width: 200px">
                                            <button type="submit" class="btn btn-primary mb-2"><span
                                                    class="flaticon-magnifying-glass"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item list_s dib-1440 dn">
                                <div class="search_overlay home5">
                                    <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger"
                                        href="#">
                                        <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <? use Illuminate\Support\Facades\Auth; ?>
                        @if(auth()->guard('client')->check())
                            <li class="">
                                <a href="/client/my_courses"><span class="title">Mening kurslarim</span></a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <span class="title">
                                        <span class="flaticon-user"></span> </span>
                                </a>
                                <ul class="sub-menu" style="display: none;">
                                    <li class="">
                                        <a href="/client/dashboard">Shaxsiy kabinet</a>
                                    </li>

                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="/client/register"><span class="title">Ro'yhatdan o'tish</span></a>
                            </li>

                            <li>
                                <a href="/client/login"><span class="title">Kirish</span></a>
                            </li>
                        @endif


                        <li>
                            <a href="/faq"><span class="title">Yordam</span></a>
                        </li>



                        <li>
                            <a href="/contact"><span class="title">Bog'lanish</span></a>
                        </li>



                        <li>
                            <a href="/all"><span class="title">Kurslar</span></a>
                        </li>

                    </ul>
                </nav>
                <!-- End of Responsive Menu -->
            </div>
        </header>

        <!-- Modal Search Button Bacground Overlay -->
        <div class="search_overlay dn-992">
            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button">
                    <i class="fa fa-times"></i>
                </a>
                <div id="mk-fullscreen-search-wrapper">
                    <form method="get" id="mk-fullscreen-searchform" action="/course/all">
                        <input type="text" value="" placeholder="Kurslarni qidirish..." name="title"
                            id="mk-fullscreen-search-input" required>
                        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                type="submit"></i>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2">

                        <img class="nav_logo_img img-fluid float-left mt20" src="/front/uploads/files/logo.png"
                            width="70px" alt="virtualdars">

                        <span></span>
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item">
                            <div class="search_overlay">
                                <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger"
                                    href="#">
                                    <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                                </a>
                                <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i
                                            class="fa fa-times"></i></a>
                                    <div id="mk-fullscreen-search-wrapper2">
                                        <form method="get" id="mk-fullscreen-searchform2" action="/course/all">
                                            <input type="text" value="" placeholder="Kurslarni qidirish..."
                                                id="mk-fullscreen-search-input2" name="title">
                                            <i class="flaticon-magnifying-glass fullscreen-search-icon">
                                                <input value="" type="submit"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><a href="/">Bosh sahifa</a></li>

                    <li><a href="/all">Kurslar</a></li>

                    <li><a href="/contact">Bog'lanish</a></li>

                    <li><a href="/faq">Yordam</a></li>
                    <li>
                        <a href="/about">Loyiha haqida</a>
                    </li>
                    <li>
                        <a href="/workers">Loyiha a'zolari</a>
                    </li>
                    <li>
                        <a href="/pages">Foydali sahifalar</a>
                    </li>
                    <li>
                        <a href="#">Foydalanuvchi yo'riqnomasi</a>
                    </li>
                    <li>
                        <a href="#">Ilmiy nashrlar</a>
                    </li>
                    @if(auth()->guard('client')->check())
                        <li><a href="/client/dashboard"><span class="flaticon-user"></span> Kabinet</a></li>
                        <li><a href="/client/my_courses"><span class="flaticon-edit"></span> Kurslarim</a></li>
                    @else
                        <li><a href="/client/login"><span class="flaticon-user"></span> Kirish</a></li>
                        <li><a href="/client/register"><span class="flaticon-edit"></span> Ro'yxatdan o'tish</a></li>
                    @endif

                </ul>
            </nav>
        </div>
@yield('content')

<!-- Our Footer -->
<section class="footer_one">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_contact_widget">
                    <h4>Bog'lanish</h4>
                    <p><span class="flaticon-placeholder-1"> </span>O'zbekiston Namangan sh
                    </p>
                    <p><span class="flaticon-phone-call"> </span>+998 99 999 99 99</p>
                    <p><span class="flaticon-email"> </span>test@gmail.com</p>

                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_program_widget">
                    <h4>Menyular</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/about">Loyiha haqida</a>
                        </li>
                        <li>
                            <a href="/workers">Loyiha a'zolari</a>
                        </li>
                        <li>
                            <a href="/pages">Foydali sahifalar</a>
                        </li>
                        <li>
                            <a href="#">Foydalanuvchi yo'riqnomasi</a>
                        </li>
                        <li>
                            <a href="#">Ilmiy nashrlar</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_support_widget">
                    <h4>Qo'llab quvvatlash</h4>
                    <ul class="list-unstyled">

                        <li><a href="/contact">Bog'lanish</a></li>
                        <li><a href="/faq">FAQ</a></li>

                        <li><a href="/client/register" role="modal-remote">Ro'yxatdan o'tish</a></li>
                        <li><a href="/client/login" role="modal-remote">Kirish</a></li>


                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                <div class="footer_apps_widget">
                    <h4>Mobile</h4>
                    <div class="app_grid">

                        <a href="#">
                            <button class="play_store_btn btn-dark">
                                <span class="icon">
                                    <span class="flaticon-google-play"></span>
                                </span>
                                <span class="title">Google Play</span>
                                <span class="subtitle"></span>
                            </button>
                        </a>
                        <button class="apple_btn btn-dark mt-3">
                            <span class="icon">
                                <span class="flaticon-apple"></span>
                            </span>
                            <span class="title">App Store</span>
                            <span class="subtitle">Ishlab chiqish jarayonida</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer Middle Area -->
<section class="footer_middle_area p0">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                <div class="logo-widget home1">
                    <img class="img-fluid" src="/front/uploads/files/logo.png" alt="virtualdars"
                        style="margin-top: 19px" width="80px">
                    <span></span>
                </div>
            </div>
            <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                <div class="footer_menu_widget">

                    <ul>

                        <li class="list-inline-item"><a href="#">Foydalanish shartlari</a>
                        </li>
                        <li class="list-inline-item"><a href="#">Maxfiylik siyosati</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                <div class="footer_social_widget mt15">
                    <ul>

                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fa fa-paper-plane"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer Bottom Area -->
<section class="footer_bottom_area pt25 pb25">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="copyright-widget text-center">
                    <p>Copyright <a href="http://devxurshidbek.uz" target="_blank">X Muminov - Web
                            developer</a> © 2022. All
                        Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>


<div class="loader-modal"></div>
<script type="text/javascript" src="/front/edumy/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/front/edumy/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="/front/edumy/js/popper.min.js"></script>
<script src="/front/assets/4d700c56/yii.js"></script>
<script type="text/javascript" src="/front//edumy/js/bootstrap.min.js"></script>
<script src="/front/assets/4d700c56/yii.gridView.js"></script>
<script src="/front/assets/3de9da2a/ModalRemote.js"></script>
<script src="/front/assets/3de9da2a/ajaxcrud.js"></script>
<script type="text/javascript" src="/front/edumy/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="/front/edumy/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="/front/edumy/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="/front/edumy/js/isotop.js"></script>
<script type="text/javascript" src="/front/edumy/js/snackbar.min.js"></script>
<script type="text/javascript" src="/front/edumy/js/simplebar.js"></script>
<script type="text/javascript" src="/front/edumy/js/parallax.js"></script>
<script type="text/javascript" src="/front/edumy/js/scrollto.js"></script>
<script type="text/javascript" src="/front/edumy/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="/front/edumy/js/jquery.counterup.js"></script>
<script type="text/javascript" src="/front/edumy/js/wow.min.js"></script>
<script type="text/javascript" src="/front/edumy/js/progressbar.js"></script>
<script type="text/javascript" src="/front/edumy/js/slider.js"></script>
<script type="text/javascript" src="/front/edumy/js/timepicker.js"></script>
<script type="text/javascript" src="/front/edumy/js/script.js"></script>
<script type="text/javascript" src="/front/edumy/custom/custom.js"></script>
<script src="/front/assets/3cad139f/sweetalert2.all.min.js"></script>
<script>
jQuery(function($) {

    $('#masonry_abc').isotope({
        filter: '.category_all'
    })

});
</script>
</body>

</html>
