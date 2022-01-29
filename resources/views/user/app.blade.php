<!DOCTYPE html>
<html lang="en">

<head>
    <title>KIADANIKA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('shopper') }}/fonts/icomoon/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('shopper') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{ asset('shopper') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('shopper') }}/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css') }}/font/font.css">
    <style>
        /* Container holding the image and the text */
        /* .container {
            position: relative;
            text-align: center;
            color: white;
        } */

        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

        /* Top left text */
        .top-left {
            position: absolute;
            top: 80px;
            left: 100px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
        }

        /* Top right text */
        .top-right {
            position: absolute;
            top: 100px;
            right: 16px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
        }

        .top-right2 {
            position: absolute;
            top: 200px;
            right: 16px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
        }

        /* Bottom right text */
        .bottom-right {
            position: absolute;
            bottom: 80px;
            right: 30px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
        }

        .carousel .item {
            height: 300px;
        }

        .item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 300px;
        }

    </style>
</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">

            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form action="{{ route('user.produk.cari') }}" method="get" class="site-block-top-search" style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                @csrf
                                <span class="icon icon-search2"></span>
                                <input type="text" class="form-control border-0" name="cari" placeholder="Search">
                            </form>
                        </div>

                        
                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="centered">
                                <!-- <a href="index.html" class="js-logo-clone" style="color:brown">
                                    KIADANIKA
                                </a> -->
                                <img src="images/logo/New_Logo_no_background.png" style=" height: 120px;
                                     width: 205px; position:relative">
                            </div>
                        </div>
                        
                        

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <!-- <div class="top-right links"> -->
                                <div class="site-top-icons">

                                    <ul>
                                        @if (Route::has('login'))
                                            @auth
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" id="dropdownMenuButton"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                                                            style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                                            <span class="icon icon-person"></span>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ route('user.alamat') }}">Pengaturan Alamat</a>
                                                            <a class="dropdown-item" href="#">Pengaturan Akun</a>
                                                            <a class="dropdown-item" href="#">

                                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <?php
                                                    $user_id = \Auth::user()->id;
                                                    $total_keranjang = \DB::table('keranjang')
                                                        ->select(DB::raw('count(id) as jumlah'))
                                                        ->where('user_id', $user_id)
                                                        ->first();
                                                    ?>
                                                    <a href="{{ route('user.keranjang') }}" class="site-cart" 
                                                    style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                                        <span class="icon icon-add_shopping_cart"></span>
                                                        <span class="count">{{ $total_keranjang->jumlah }}</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <?php
                                                    $user_id = \Auth::user()->id;
                                                    $total_order = \DB::table('order')
                                                        ->select(DB::raw('count(id) as jumlah'))
                                                        ->where('user_id', $user_id)
                                                        ->where('status_order_id', '!=', 5)
                                                        ->where('status_order_id', '!=', 6)
                                                        ->first();
                                                    ?>
                                                    <a href="{{ route('user.order') }}" class="site-cart" 
                                                    style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                                        <span class="icon icon-shopping_cart"></span>
                                                        <span class="count">{{ $total_order->jumlah }}</span>
                                                    </a>
                                                </li>
                                                
                                                @else
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                                        <span class="icon icon-person"></span>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="{{ route('login') }}">Masuk</a>
                                                        @if (Route::has('register'))
                                                        <a class="dropdown-item" href="{{ route('register') }}">Daftar</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endauth
                                        @endif
                                        
                                        <li class="d-inline-block d-md-none ml-md-0">
                                            <a href="#"
                                                class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                                                
                                    </ul>

                                </div>
                            <!-- </div> -->
                        </div>

                        <!-- nyoba benerin icon akun keluar dari tempatnya ketika windowed mode -->
                        <!-- <div class="site-top-icons">
                            <form action="{{ route('user.produk.cari') }}" method="get" class="site-block-top-search" style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                @csrf
                                <span class="icon icon-search2"></span>
                                <input type="text" class="form-control border-0" name="cari" placeholder="Search">
                            </form>
                        </div> -->

                    </div>
                </div>
            </div>

            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="{{ Request::path() === '/' ? '' : '' }}"><a href="{{ route('home') }}">
                                <p style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                    HOME</p>
                            </a></li>

                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                    <!-- <span class="icon icon-person"></span> -->SHOP
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">WOODENWARE</a>
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">KITCHEN</a>
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">TOILETRIES</a>
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">ACCESSORIES</a>

                                                            <!-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form> -->
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                    <!-- <span class="icon icon-person"></span> -->HAMPERS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">WEDDING</a>
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">BIRTHDAY</a>
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">HARI
                                        RAYA</a>
                                    <a class="dropdown-item" href="{{ route('user.produk') }}"
                                        style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">KIDS</a>

                                                        <!-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> -->
                                </div>
                            </div>
                        </li>

                        <!-- <li class="{{ Request::path() === 'produk' ? '' : '' }}"><a href="{{ route('user.produk') }}">SHOP</a></li> -->
                        <!-- <li class="{{ Request::path() === 'produk' ? '' : '' }}"><a href="{{ route('user.produk') }}">HAMPERS</a></li> -->
                        <!-- <li class="{{ Request::path() === 'produk' ? '' : '' }}"><a href="{{ route('user.produk') }}">
                                <p style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                    Kategori</p>
                            </a></li> -->
                        <li class="{{ Request::path() === 'kontak' ? '' : '' }}"><a href="{{ route('kontak') }}">
                                <p style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                    ABOUT
                                    US
                                </p>
                            </a></li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')


        <footer class="site-footer border-top">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">
                                    <p
                                        style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                        Tentang Kami</p>
                                </h3>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <strong>
                                    <p style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">
                                        Kia dan Ika datang untuk menghadirkan keunikan secara natural dalam memenuhi
                                        kebutuhan rumah sehari-hari.
                                        Semua produk kami tercipta dari ketulusan para pengrajin lokal Indonesia.
                                    </p>
                                </strong>
                                                    <!-- <ul class="list-unstyled">
                                    <li><a href="#">Sell online</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Shopping cart</a></li>
                                    <li><a href="#">Store builder</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <ul class="list-unstyled">
                                    <li><a href="#">Mobile commerce</a></li>
                                    <li><a href="#">Dropshipping</a></li>
                                    <li><a href="#">Website development</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <ul class="list-unstyled">
                                    <li><a href="#">Point of sale</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Software</a></li>
                                    </ul> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">
                                <p style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                    Kontak Kami</p>
                            </h3>
                            <ul class="list-unstyled">
                                <!-- <li class="instagram">
                                    <p style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">by.kiadanika</p>
                                </li> -->
                                <li class="instagram">
                                    <!-- <p style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">by.kiadanika</p> -->
                                    <a href="https://www.instagram.com/by.kiadanika/">
                                        <button type="button" class="btn btn-outline-danger">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                                </path>
                                            </svg> -->
                                            by.kiadanika
                                        </button>
                                    </a>
                                </li>
                                <li class="address">
                                    <a href="https://www.instagram.com/by.kiadanika/">
                                        <p
                                            style="font-family: 'Butler'; font-weight: 300; font-style: normal; color:brown">
                                            Jalan sukses menuju dunia akhirat</p>
                                    </a>
                                </li>
                                <li class="phone">
                                    <a href="tel://23923929210">
                                        <p
                                            style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                            +62 819 1552 1076</p>
                                    </a>
                                </li>
                                <li class="email">
                                    <p
                                        style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                                        order@kiadanika.com</p>
                                </li>
                            </ul>
                        </div>

                                        <!-- <div class="block-7">
                            <form action="#" method="post">
                                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                                <div class="form-group">
                                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                                <input type="submit" class="btn btn-sm btn-primary" value="Send">
                                </div>
                            </form>
                            </div> -->
                    </div>
                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:brown">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script data-cfasync="false"
                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());

                            </script> <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank"
                                style="font-family: 'Butler'; font-weight: bold; font-style: normal; color:#E74C3C"><strong>Kiadanika</strong></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>

            </div>
        </footer>


                    <!-- BATAS ATAS FOOTER BARU -->
                    <?php /* 
                <footer id="footer" class="footer-wrapper">


                <!-- FOOTER 1 -->

                <!-- FOOTER 2 -->
                <div class="footer-widgets footer footer-2 dark">
                    <div class="row dark large-columns-2 mb-0">

                    <div id="block_widget-2" class="col pb-0 widget block_widget">
                        <span class="widget-title">Tentang Kami</span>
                        <div class="is-divider small"></div>
                        <p>Dekayu mendukung Para Pengrajin untuk tumbuh dan berinovasi dalam memproduksi produk Kerajinan. Tidak hanya nilai estetikanya saja namun bersama menambahkan nilai fungsi pada produk-produk yang dihasilkan.</p>
                        <div class="social-icons follow-icons"><a href="https://www.facebook.com/dekayujogja/" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon button circle is-outline facebook tooltip tooltipstered"><i class="icon-facebook"></i></a><a href="https://www.instagram.com/dekorasi.kayu" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon button circle is-outline instagram tooltip tooltipstered"><i class="icon-instagram"></i></a><a href="mailto:order@dekayu.id" data-label="E-mail" rel="nofollow" class="icon button circle is-outline email tooltip tooltipstered"><i class="icon-envelop"></i></a><a href="https://youtu.be/eBy_5S23ERA" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon button circle is-outline youtube tooltip tooltipstered"><i class="icon-youtube"></i></a></div>
                    </div>
                    <div id="text-15" class="col pb-0 widget widget_text"><span class="widget-title">Kontak Kami</span>
                        <div class="is-divider small"></div>
                        <div class="textwidget">
                        <p>CV Dekayu Indonesia.</p>
                        <p><a href="https://g.page/dekayu?share">Jl. Mentri Supeno No. 62A, Sorosutan, Umbulharjo, Yogyakarta, 55161</a></p>
                        <p>Buka : Senin-Sabtu Jam 10:00 s.d. 18:00 WIB</p>
                        <p><a href="https://wa.me/6282133009600">WA/HP +62 821-3300-9600</a> | <a href="mailto:order@dekayu.id">Email: order@dekayu.id</a></p>
                        </div>
                    </div>
                    </div>
                </div>



                <div class="absolute-footer dark medium-text-center small-text-center">
                    <div class="container clearfix">


                    <div class="footer-primary pull-left">
                        <div class="menu-main-container">
                        <ul id="menu-main-1" class="links footer-nav uppercase">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-261"><a href="https://dekayu.id/">Beranda</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-232"><a href="https://dekayu.id/shop/">Produk</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-393"><a href="https://dekayu.id/hampers/">Gift Hampers</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="https://dekayu.id/blog/">Blog</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-91 current_page_item menu-item-has-children menu-item-267"><a href="https://dekayu.id/tentang-kami/" aria-current="page">Tentang Kami</a></li>
                        </ul>
                        </div>
                        <div class="copyright-footer">
                        Copyright 2021 © <strong>Dekayu Indonesia</strong> </div>
                    </div>
                    </div>
                </div>
                </footer>
                */ ?>
                    <!-- BATAS BAWAH FOOTER BARU -->

    </div>

    <script src="{{ asset('shopper') }}/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="{{ asset('shopper') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('shopper') }}/js/popper.min.js"></script>
    <script src="{{ asset('shopper') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('shopper') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('shopper') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('shopper') }}/js/aos.js"></script>

    <script src="{{ asset('shopper') }}/js/main.js"></script>
    @yield('js')
</body>

</html>
