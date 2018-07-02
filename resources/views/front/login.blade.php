@extends('front.layouts.base')
@section("content")
    <div class="main">
        <div class="page-header custom larger mb60">
            <div class="container-fluid">
                <h1>Hesabınıza daxİl olun</h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home_page') }}">Ana səhifə</a></li>
                    <i class="fa fa-arrow-right" style="color: white;"></i>
                    <li class="active">Login</li>
                </ol>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row row-lg">
                        <div class="col-sm-6" style="margin-left: 25%;">
                            <h2 class="text-center">Xoş gəldin KİTABQURDU !</h2>
                            <div class="registered-customer-section">
                                <p>Hesabınıza daxil olaraq daha çox fürsətdən yararlana bilərsiniz.</p>
                                <form action="{{ route('login_process') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group label-overlay">
                                        <input type="text" class="form-control" name="email" required>
                                        <label class="input-desc"><i class="icon input-icon input-email"></i>Enter your
                                            email <span class="input-required">*</span></label>
                                    </div><!-- End .form-group -->
                                    <div class="form-group label-overlay">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="input-desc"><i class="icon input-icon input-password"></i>Enter
                                            your password <span class="input-required">*</span></label>
                                    </div><!-- End .form-group -->

                                    <div class="mb20"></div><!-- margin -->

                                    <div class="form-action">
                                        <button type="submit" class="btn btn-custom">Daxil ol</button>
                                        <a href="{{ route('register_page') }}" class="btn btn-custom"
                                           style="margin-left: 10px;">Hesab yarat</a>
                                        <a href="#" class="forget-link">Şifrəni unutmusan ?</a>
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
    @include('front.layouts.footer_inline')

@endsection
@section('title','Login səhifəsi')
