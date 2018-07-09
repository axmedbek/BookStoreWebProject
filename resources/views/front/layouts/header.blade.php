<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9"><![endif]-->
<!--[if !IE]><!-->
<html><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield("title") | Alfakitab</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Axmedbek">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/front/images/favicons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/front/images/favicons/faviconx57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/front/images/favicons/faviconx72.png') }}">

    {{--<link href='http://fonts.googleapis.com/css?family=Hind:400,700,600,500,300%7CFira+Sans:400,700italic,500italic,400italic,300italic,700,500,300'--}}
          {{--rel='stylesheet' type='text/css'>--}}

    <!-- Fira Sans Fix - Google Fira Sans sometimes fails to load -->
    {{--<link href='http://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet'>--}}

    <link rel="stylesheet" href="{{ asset('css/front/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    @yield("css")
</head>
<body>
<div id="wrapper">
    <header class="header sticky-header border-less border-gray">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{ route('home_page') }}" title="Alfakitab - Online kitab mağazası">
                    <img src="{{ asset('images/front/images/alfakitab_logo.svg') }}" alt="Alfakitab - Logo" style="width: 100px;height: 36px;">
                </a>
            </div><!-- End .logo -->

            <nav class="menu-container">
                <ul class="menu">
                    <li><a href="{{ route('home_page') }}">ANA SƏHİFƏ</a></li>
                    <li><a href="#">kİTAB SAT</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">HAQQIMIZDA</a></li>
                    <li class="reverse"><a href="#">BİZİMLƏ ƏLAQƏ</a></li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="index.html">ANA SƏHİFƏ</a></li>
                    <li><a href="#">kİTAB SAT</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">HAQQIMIZDA</a></li>
                    <li class="reverse"><a href="#">BİZİMLƏ ƏLAQƏ</a></li>
                </ul>
            </nav>
            @admin <a href="{{ route('admin_page',app()->getLocale()) }}" class="btn btn-danger btn-sm" style="margin-top: 2%;margin-left: 4%;">Admin Panel</a> @endadmin

            <div class="header-search-container search-dropdown-fix">
                <a href="#" class="search-dropdown-btn" title="Search Form">
                    <i class="fa fa-search"></i>
                </a>

                <form action="#" class="header-search-form">
                    <input type="search" class="form-control" required placeholder="Axtar : Corc Oruel - Heyvanıstan">
                    <button type="submit" class="btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div><!-- End .header-search-container -->

            <div class="dropdowns-container">
                <button type="button" class="navbar-toggle">
                            <span class="toggle-wrapper">
                                <span class="toggle-text">Menu</span>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                </button>
                <div class="dropdowns-wrapper">
                    <ul class="header-dropdown account-dropdown">
                        <li>
                            <a href="#" title="Currency/Language">
                                <i class="fa fa-user"></i>
                                <span>Hesabım</span>
                            </a>
                            <ul>
                                @auth()
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            <span>Hesabım</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            <span>İstək listim</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                            <span>Bəyəndiklərim</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-credit-card"></i>
                                            <span>Ödəniş</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Hesabdan çıx</span>
                                        </a>
                                    </li>
                                @endauth
                                @guest()
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-lock"></i>
                                            <span>Daxil ol və ya Qeydiyyatdan keç</span>
                                        </a>
                                    </li>
                                @endguest
                            </ul>
                        </li>
                    </ul>

                    <div class="dropdown header-dropdown cart-dropdown">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="dcart-total-count">2</span>
                        </a>

                        <div class="dropdown-menu">
                            <p>2 item(s) in your cart - <span>$665.00</span></p>
                            <div class="dcart-products">
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('images/front/images/products/thumbs/product1.jpg') }}"
                                                 alt="Product">
                                        </a>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Draped sleeve detail shirt</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$280.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                    <a href="#" class="fa fa-times" title="Delete Product"><span class="sr-only">Delete product</span></a>
                                </div><!-- End .product -->
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('images/front/images/products/thumbs/product2.jpg') }}"
                                                 alt="Product">
                                        </a>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Draped wrap white blouse</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-old-price">$1500.00</span>
                                            <span class="product-price">$750.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                    <a href="#" class="fa fa-times" title="Delete Product"><span class="sr-only">Delete product</span></a>
                                </div><!-- End .product -->
                            </div><!-- End .dcart-products -->

                            <div class="dcart-action-container">
                                <div class="dcart-action-info">
                                    <p>Shipping: <span>$7.00</span></p>
                                    <p>Tax: <span>Free</span></p>
                                    <p>Total: <span>$665.00</span></p>
                                </div><!-- End .dcart-action-info -->

                                <div class="dcart-action">
                                    <a href="#" class="btn btn-gray3 btn-sm">View Cart</a>
                                    <a href="#" class="btn btn-custom btn-sm">Checkout</a>
                                </div><!-- End .dcart-action -->
                            </div><!-- End .dcart-action-container -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .header-dropdown -->

                    <ul class="header-dropdown">
                        <li>
                            <a href="#" title="Currency/Language">
                                <i class="fa fa-globe"></i>
                                <span>Currency/Language</span>
                            </a>

                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-flag"></i>
                                        <span>Language</span>
                                    </a>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/england.jpg') }}"
                                                     alt="England Flag">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/spain.jpg') }}"
                                                     alt="Spain Flag">
                                                <span>Spanish</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/france.jpg') }}"
                                                     alt="France Flag">
                                                <span>French</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-money-bill-alt"></i>
                                        <span>Currency</span>
                                    </a>

                                    <ul>
                                        <li><a href="#">Us Dollar</a></li>
                                        <li><a href="#">Euro</a></li>
                                        <li><a href="#">Pound St</a></li>
                                        <li><a href="#">Yuan</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- End .dropdowns-wrapper -->
            </div><!-- End .dropdowns-container -->

        </div><!-- End .container-fluid -->
    </header><!-- End .header -->

    <div class="mb30"></div><!-- margin -->