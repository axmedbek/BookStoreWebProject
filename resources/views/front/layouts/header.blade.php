<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!--><html><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield("title") | Alfakitab</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Axmedbek">

    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/front/images/favicons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/front/images/favicons/faviconx57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/front/images/favicons/faviconx72.png') }}">

    <link href='http://fonts.googleapis.com/css?family=Hind:400,700,600,500,300%7CFira+Sans:400,700italic,500italic,400italic,300italic,700,500,300' rel='stylesheet' type='text/css'>

    <!-- Fira Sans Fix - Google Fira Sans sometimes fails to load -->
    <link href='http://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('css/front/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}">
    @yield("css")
</head>
<body>
<div id="wrapper">
    <header class="header sticky-header border-less border-gray">
        <div class="container-fluid">
            <div class="logo">
                <a href="" title="Alfakitab - Online kitab mağazası">
                    <img src="{{ asset('images/front/images/logo-index.png') }}" alt="Alfakitab">
                </a>
            </div><!-- End .logo -->

            <nav class="menu-container">
                <ul class="menu">
                    <li>
                        <a href="index.html">Home</a>
                        <ul>
                            <li><a href="index.html">Home Version 1</a></li>
                            <li><a href="index2.html">Home Version 2</a></li>
                            <li><a href="index3.html">Home Version 3</a></li>
                            <li><a href="index4.html">Home Version 4</a></li>
                            <li><a href="index5.html">Home Version 5</a></li>
                            <li><a href="index6.html">Home Version 6</a></li>
                            <li><a href="index7.html">Home Version 7</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="mmenu-container"><a href="#">Shop</a>
                        <div class="megamenu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="mmenu-title">Clothing</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jeans &amp; Trousers </a></li>
                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                            <li><a href="#">Tops &amp; T-Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                            <li><a href="#">Skirts</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="mmenu-title">Shoes</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li>
                                                <a href="#"><span>Formal Shoes<span class="tip">New</span></span></a>
                                            </li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#"><span>Sandals<span class="tip">New</span></span></a></li>
                                            <li><a href="#"><span>Boots<span class="tip">New</span></span></a></li>
                                            <li><a href="#">Wide Fit</a></li>
                                            <li><a href="#">Slippers</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="mmenu-title">ACCESSORIES</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li><a href="#"><span>Bags &amp; Purses<span class="tip hot">Hot</span></span></a></li>
                                            <li><a href="#">Belts</a></li>
                                            <li><a href="#"><span>Gloves<span class="tip hot">Hot</span></span></a></li>
                                            <li><a href="#"><span>Jewellery<span class="tip hot">Hot</span></span></a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Hair Accessories</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="mmenu-title">Sports</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li><a href="#">Sport Tops &amp; Vests</a></li>
                                            <li><a href="#">Hoodies</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">FootWear</a></li>
                                            <li><a href="#">Sports Underwear</a></li>
                                            <li><a href="#">Bags</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner1.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-5 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner2.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner3.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner4.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .container -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Category Grid</a>
                                <ul>
                                    <li><a href="category.html">Category</a></li>
                                    <li><a href="category-2col.html">Two Columns</a></li>
                                    <li><a href="category-3col.html">Three Columns</a></li>
                                    <li><a href="category-left-sidebar.html">Category - Left Sidebar</a></li>
                                    <li><a href="category-left-sidebar-2col.html">Left Sidebar Two Col</a></li>
                                    <li><a href="category-left-sidebar-3col.html">Left Sidebar Three Col</a></li>
                                    <li><a href="category-fullwidth-3col.html">Fullwidth Three Col</a></li>
                                    <li><a href="category-fullwidth-4col.html">Fullwidth Four Col</a></li>
                                    <li><a href="category-fullwidth-5col.html">Fullwidth Five Col</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Category List</a>
                                <ul>
                                    <li><a href="category-list.html">Category List</a></li>
                                    <li><a href="category-list-left-sidebar.html">List - Left Sidebar</a></li>
                                    <li><a href="category-list-right-sidebar.html">List - Right Sidebar</a></li>
                                    <li><a href="category-list-box.html">Category ListBox</a></li>
                                    <li><a href="category-list-box-left-sidebar.html">ListBox - Left Sidebar</a></li>
                                    <li><a href="category-list-box-right-sidebar.html">ListBox - Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Product</a>
                                <ul>
                                    <li><a href="product.html">Product Version 1</a></li>
                                    <li><a href="product2.html">Product Version 2</a></li>
                                    <li><a href="product3.html">Product Version 3</a></li>
                                </ul>
                            </li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="compare.html">Compare Products</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="#">Contact</a>
                                <ul>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="contact2.html">Contact Us 2</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="#">Classic Layout</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry Layout</a>
                                <ul>
                                    <li><a href="blog-masonry-4col.html">Four Columns</a></li>
                                    <li><a href="blog-masonry-3col.html">Three Columns</a></li>
                                    <li><a href="blog-masonry-2col.html">Two Columns</a></li>
                                    <li><a href="blog-masonry-2col-left-sidebar.html">Two Col - Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="single.html">Blog Post</a></li>
                            <li><a href="single-left-sidebar.html">Post - Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="elements-headers.html">Headers</a></li>
                            <li><a href="elements-footers.html">Footers</a></li>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-pageheaders.html">Page Headers</a></li>
                            <li><a href="elements-collapses.html">Collapses</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-forms.html">Forms</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-progressbars.html">Progress Bars</a></li>
                            <li><a href="elements-media.html">Media</a></li>
                            <li><a href="elements-more.html">More</a></li>
                        </ul>
                    </li>
                    <li class="reverse"><a href="#">Portfolio</a>
                        <ul>
                            <li><a href="#">Grid Layout</a>
                                <ul>
                                    <li><a href="portfolio-grid-4col.html">Four Columns</a></li>
                                    <li><a href="portfolio-grid-3col.html">Three Columns</a></li>
                                    <li><a href="portfolio-grid-2col.html">Two Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry Layout</a>
                                <ul>
                                    <li><a href="portfolio-masonry-4col.html">Four Columns</a></li>
                                    <li><a href="portfolio-masonry-3col.html">Three Columns</a></li>
                                    <li><a href="portfolio-masonry-2col.html">Two Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry (Nogap)</a>
                                <ul>
                                    <li><a href="portfolio-masonry-nogap-4col.html">Four Columns</a></li>
                                    <li><a href="portfolio-masonry-nogap-3col.html">Three Columns</a></li>
                                    <li><a href="portfolio-masonry-nogap-2col.html">Two Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio-custom.html">Portfolio Custom</a></li>
                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                            <li><a href="single-portfolio2.html">Single Portfolio 2</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li>
                        <a href="index.html">Home</a>
                        <ul>
                            <li><a href="index.html">Home Version 1</a></li>
                            <li><a href="index2.html">Home Version 2</a></li>
                            <li><a href="index3.html">Home Version 3</a></li>
                            <li><a href="index4.html">Home Version 4</a></li>
                            <li><a href="index5.html">Home Version 5</a></li>
                            <li><a href="index6.html">Home Version 6</a></li>
                            <li><a href="index7.html">Home Version 7</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="mmenu-container"><a href="#">Shop</a>
                        <div class="megamenu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="mmenu-title">Clothing</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jeans &amp; Trousers </a></li>
                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                            <li><a href="#">Tops &amp; T-Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                            <li><a href="#">Skirts</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="mmenu-title">Shoes</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li>
                                                <a href="#"><span>Formal Shoes<span class="tip">New</span></span></a>
                                            </li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#"><span>Sandals<span class="tip">New</span></span></a></li>
                                            <li><a href="#"><span>Boots<span class="tip">New</span></span></a></li>
                                            <li><a href="#">Wide Fit</a></li>
                                            <li><a href="#">Slippers</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="mmenu-title">ACCESSORIES</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li><a href="#"><span>Bags &amp; Purses<span class="tip hot">Hot</span></span></a></li>
                                            <li><a href="#">Belts</a></li>
                                            <li><a href="#"><span>Gloves<span class="tip hot">Hot</span></span></a></li>
                                            <li><a href="#"><span>Jewellery<span class="tip hot">Hot</span></span></a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Hair Accessories</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="mmenu-title">Sports</div><!-- End .mmenu-title -->
                                        <ul>
                                            <li><a href="#">Sport Tops &amp; Vests</a></li>
                                            <li><a href="#">Hoodies</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">FootWear</a></li>
                                            <li><a href="#">Sports Underwear</a></li>
                                            <li><a href="#">Bags</a></li>
                                        </ul>
                                    </div><!-- End .col-5 -->
                                    <div class="col-5">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/images/banners/header/banner1.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-5 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner2.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner3.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#" title="Banner title">
                                                <img src="{{ asset('images/front/images/banners/header/banner4.jpg') }}" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .container -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Category Grid</a>
                                <ul>
                                    <li><a href="category.html">Category</a></li>
                                    <li><a href="category-2col.html">Two Columns</a></li>
                                    <li><a href="category-3col.html">Three Columns</a></li>
                                    <li><a href="category-left-sidebar.html">Category - Left Sidebar</a></li>
                                    <li><a href="category-left-sidebar-2col.html">Left Sidebar Two Col</a></li>
                                    <li><a href="category-left-sidebar-3col.html">Left Sidebar Three Col</a></li>
                                    <li><a href="category-fullwidth-3col.html">Fullwidth Three Col</a></li>
                                    <li><a href="category-fullwidth-4col.html">Fullwidth Four Col</a></li>
                                    <li><a href="category-fullwidth-5col.html">Fullwidth Five Col</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Category List</a>
                                <ul>
                                    <li><a href="category-list.html">Category List</a></li>
                                    <li><a href="category-list-left-sidebar.html">List - Left Sidebar</a></li>
                                    <li><a href="category-list-right-sidebar.html">List - Right Sidebar</a></li>
                                    <li><a href="category-list-box.html">Category ListBox</a></li>
                                    <li><a href="category-list-box-left-sidebar.html">ListBox - Left Sidebar</a></li>
                                    <li><a href="category-list-box-right-sidebar.html">ListBox - Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Product</a>
                                <ul>
                                    <li><a href="product.html">Product Version 1</a></li>
                                    <li><a href="product2.html">Product Version 2</a></li>
                                    <li><a href="product3.html">Product Version 3</a></li>
                                </ul>
                            </li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="compare.html">Compare Products</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="#">Contact</a>
                                <ul>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="contact2.html">Contact Us 2</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="#">Classic Layout</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry Layout</a>
                                <ul>
                                    <li><a href="blog-masonry-4col.html">Four Columns</a></li>
                                    <li><a href="blog-masonry-3col.html">Three Columns</a></li>
                                    <li><a href="blog-masonry-2col.html">Two Columns</a></li>
                                    <li><a href="blog-masonry-2col-left-sidebar.html">Two Col - Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="single.html">Blog Post</a></li>
                            <li><a href="single-left-sidebar.html">Post - Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="elements-headers.html">Headers</a></li>
                            <li><a href="elements-footers.html">Footers</a></li>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-pageheaders.html">Page Headers</a></li>
                            <li><a href="elements-collapses.html">Collapses</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-forms.html">Forms</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-progressbars.html">Progress Bars</a></li>
                            <li><a href="elements-media.html">Media</a></li>
                            <li><a href="elements-more.html">More</a></li>
                        </ul>
                    </li>
                    <li class="reverse"><a href="#">Portfolio</a>
                        <ul>
                            <li><a href="#">Grid Layout</a>
                                <ul>
                                    <li><a href="portfolio-grid-4col.html">Four Columns</a></li>
                                    <li><a href="portfolio-grid-3col.html">Three Columns</a></li>
                                    <li><a href="portfolio-grid-2col.html">Two Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry Layout</a>
                                <ul>
                                    <li><a href="portfolio-masonry-4col.html">Four Columns</a></li>
                                    <li><a href="portfolio-masonry-3col.html">Three Columns</a></li>
                                    <li><a href="portfolio-masonry-2col.html">Two Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry (Nogap)</a>
                                <ul>
                                    <li><a href="portfolio-masonry-nogap-4col.html">Four Columns</a></li>
                                    <li><a href="portfolio-masonry-nogap-3col.html">Three Columns</a></li>
                                    <li><a href="portfolio-masonry-nogap-2col.html">Two Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio-custom.html">Portfolio Custom</a></li>
                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                            <li><a href="single-portfolio2.html">Single Portfolio 2</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="header-search-container search-dropdown-fix">
                <a href="#" class="search-dropdown-btn" title="Search Form">
                    <i class="icon icon-header-search"></i>
                </a>

                <form action="#" class="header-search-form">
                    <div class="dropdown search-dropdown">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Categories
                            <i class="icon icon-search-arrow"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Computers</a></li>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Televisions</a></li>
                            <li><a href="#">Audio &amp; Video</a></li>
                            <li><a href="#">Cell Phones</a></li>
                            <li><a href="#">home appliance</a></li>
                            <li><a href="#">Cameras &amp; Photo</a></li>
                            <li><a href="#">Featured Sales</a></li>
                            <li><a href="#">Liquidations</a></li>
                        </ul><!-- End .dropdown -->
                    </div><!-- End .dropdown -->
                    <input type="search" class="form-control" required>
                    <button type="submit" class="btn">
                        <i class="icon icon-header-search"></i>
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
                                <i class="icon icon-header icon-user"></i>
                                <span>My Account</span>
                            </a>

                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-dropdown-user"></i>
                                        <span>My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-dropdown-wishlist"></i>
                                        <span>My Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-dropdown-heart"></i>
                                        <span>My Favorites</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-dropdown-check"></i>
                                        <span>Checkout</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-dropdown-lock"></i>
                                        <span>Login or Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="dropdown header-dropdown cart-dropdown">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon icon-header icon-cart"></i>
                            <span class="dcart-total-count">2</span>
                        </a>

                        <div class="dropdown-menu">
                            <p>2 item(s) in your cart - <span>$665.00</span></p>
                            <div class="dcart-products">
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('images/front/images/products/thumbs/product1.jpg') }}" alt="Product">
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
                                    <a href="#" class="icon delete-btn lighter" title="Delete Product"><span class="sr-only">Delete product</span></a>
                                </div><!-- End .product -->
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('images/front/images/products/thumbs/product2.jpg') }}" alt="Product">
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
                                    <a href="#" class="icon delete-btn lighter" title="Delete Product"><span class="sr-only">Delete product</span></a>
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
                                <i class="icon icon-header icon-globe"></i>
                                <span>Currency/Language</span>
                            </a>

                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-language"></i>
                                        <span>Language</span>
                                    </a>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/england.jpg') }}" alt="England Flag">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/spain.jpg') }}" alt="Spain Flag">
                                                <span>Spanish</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/france.jpg') }}" alt="France Flag">
                                                <span>French</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/germany.jpg') }}" alt="Germany Flag">
                                                <span>German</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/flags/italy.jpg') }}" alt="Italy Flag">
                                                <span>Italian</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-dropdown icon-currency"></i>
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