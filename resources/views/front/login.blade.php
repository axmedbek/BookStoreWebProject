
@extends('front.layouts.base')
@section("content")
<div class="main">
    <div class="page-header custom larger mb60">
        <div class="container-fluid">
            <h1>Login or Register</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Login or Register</li>
            </ol>
        </div><!-- End .container-fluid -->
    </div><!-- End .page-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="row row-lg">
                    <div class="col-sm-6">
                        <h2>NEW CUSTOMER</h2>

                        <div class="new-customer-section">
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        </div><!-- End .new-customer-section -->

                        <a href="{{ route('register_page') }}" class="btn btn-custom">CREATE AN ACCOUNT</a>
                    </div><!-- End .col-sm-6 -->

                    <div class="mb60 visible-xs"></div><!-- margin -->

                    <div class="col-sm-6">
                        <h2>REGISTERED CUSTOMERS</h2>
                        <div class="registered-customer-section">
                            <p>If you have an account with us, please log in.</p>
                            <form action="{{ route('login_process') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group label-overlay">
                                    <input type="email" class="form-control" name="email" required>
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>Enter your email <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control" name="password" required>
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Enter your password <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->

                                <div class="mb20"></div><!-- margin -->

                                <div class="form-action">
                                    <button type="submit" class="btn btn-custom">LOGIN</button>
                                    <a href="#" class="forget-link">Forgot Your Password?</a>
                                </div><!-- End .form-action -->
                            </form>
                        </div><!-- End .registered-customer-section -->
                    </div><!-- End .col-sm-6 -->
                </div><!-- End .row -->
            </div><!-- End .col-md-9 -->

            <div class="mb100 visible-sm visible-xs"></div><!-- margin -->

            <aside class="col-md-3 sidebar">

                <div class="widget">
                    <h3 class="widget-title">Bestsellers</h3>
                    <div class="swiper-container bestsellers-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/products/thumbs/product1.jpg" alt="Product">
                                        </a>
                                        <span class="product-label discount">-25%</span>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Navy blue silk pleated dress</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$250.00</span>
                                            <span class="product-old-price">$350.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                </div><!-- End .product -->
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/products/thumbs/product2.jpg" alt="Product">
                                        </a>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Mustard yellow ruffle dress</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$214.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                </div><!-- End .product -->
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/products/thumbs/product3.jpg" alt="Product">
                                        </a>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Asymmetric crew neck sweater</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$1450.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/products/thumbs/product4.jpg" alt="Product">
                                        </a>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Mustard yellow ruffle dress</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$180.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                </div><!-- End .product -->
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/products/thumbs/product5.jpg" alt="Product">
                                        </a>
                                        <span class="product-label new">NEW</span>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Asymmetric crew neck sweater</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$160</span>
                                            <span class="product-old-price">$280.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                </div><!-- End .product -->
                                <div class="product product-sm">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/products/thumbs/product6.jpg" alt="Product">
                                        </a>
                                    </figure>
                                    <div class="product-meta">
                                        <h5 class="product-title">
                                            <a href="#">Navy blue silk pleated dress</a>
                                        </h5>
                                        <div class="product-price-container">
                                            <span class="product-price">$21.00</span>
                                            <span class="product-old-price">$300.00</span>
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product-meta -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->
                        </div><!-- End .swiper-wrapper -->

                        <div class="swiper-button-next icon"></div>
                        <div class="swiper-button-prev icon"></div>
                    </div><!-- end .swiper-container -->
                </div><!-- End .widget -->

            </aside>
        </div><!-- End .row -->
    </div><!-- End .container-fluid -->
    <div class="mb80 visible-md visible-lg"></div><!-- margin -->
</div><!-- End .main -->

<footer class="footer">
    <div class="footer-newsletter">
        <div class="container-fluid">
            <h4>Stay in the know!</h4>
            <p>Subscribe for the latest styles and sales, plus get 25% off your first order.</p>
            <form>
                <input type="email" class="form-control" placeholder="your@email.com" required>
                <button type="submit" class="btn btn-custom">Sign Up</button>
            </form>
        </div><!-- End .container-fluid -->
    </div><!-- End .footer-newsletter -->

    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Top Rated</h4>
                        <ul class="products-list">
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product1.jpg" alt="Product">
                                    </a>
                                    <span class="product-label discount">-25%</span>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Navy blue silk pleated dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$250.00</span>
                                        <span class="product-old-price">$350.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product2.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Mustard yellow ruffle dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$214.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product3.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Asymmetric crew neck sweater</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$1450.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">On Sale</h4>
                        <ul class="products-list">
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product4.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Navy blue silk pleated dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$1200.00</span>
                                        <span class="product-old-price">$1500.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product5.jpg" alt="Product">
                                    </a>
                                    <span class="product-label">New</span>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Mustard yellow ruffle dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$858.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product6.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Asymmetric crew neck sweater</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$360.00</span>
                                        <span class="product-old-price">$400.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Top Sellers</h4>
                        <ul class="products-list">
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product7.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Navy blue silk pleated dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$750.00</span>
                                        <span class="product-old-price">$1800.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product8.jpg" alt="Product">
                                    </a>
                                    <span class="product-label discount">-40%</span>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Mustard yellow ruffle dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$260.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product9.jpg" alt="Product">
                                    </a>
                                    <span class="product-label outofstock">Out Of<br>Stock</span>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Asymmetric crew neck sweater</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$345.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Recommended</h4>
                        <ul class="products-list">
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product10.jpg" alt="Product">
                                    </a>
                                    <span class="product-label">New</span>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Navy blue silk pleated dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$250.00</span>
                                        <span class="product-old-price">$1500.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product11.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Mustard yellow ruffle dress</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$1235.00</span>
                                        <span class="product-old-price">$1400.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                            <li class="product">
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/products/thumbs/product12.jpg" alt="Product">
                                    </a>
                                </figure>
                                <div class="product-meta">
                                    <h5 class="product-title">
                                        <a href="#">Asymmetric crew neck sweater</a>
                                    </h5>
                                    <div class="product-price-container">
                                        <span class="product-price">$650.00</span>
                                    </div><!-- End .product-price-container -->
                                </div><!-- End .product-meta -->
                            </li>
                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .footer-top -->
    @endsection
@section('title','Login səhifəsi')
