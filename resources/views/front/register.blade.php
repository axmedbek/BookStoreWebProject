@extends('front.layouts.base')
@section('content')
    <div class="main">
        <div class="page-header custom larger mb50">
            <div class="container-fluid">
                <h1>Register Account</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Register Account</li>
                </ol>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <form action="{{ route('register_process') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row row-lg">
                            <div class="col-sm-6">
                                <h2>YOUR PERSONAL DETAILS</h2>
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="username" required>
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Enter your
                                        username <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="name" required>
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Enter your
                                        firstname <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="lastname" required>
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Enter your
                                        lastname <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="email" class="form-control" name="email" required>
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>Enter your
                                        email <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control datepicker" name="birthday" required>
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>Enter your
                                        birthday <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <select class="custom-select form-control" name="gender" required>
                                        <option value=""></option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                    <label class="input-desc"><i class="icon input-icon input-flag"></i>Enter your gender
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control" required>
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Enter your
                                        password <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control" required>
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Enter your
                                        password repeat<span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->

                            <div class="mb40 visible-xs"></div><!-- margin -->

                            <div class="col-sm-6">
                                <h2>YOUR ADDRESSES</h2>
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="address" required>
                                    <label class="input-desc"><i class="icon input-icon input-pin"></i>Enter your
                                        address<span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="mobil_phone" required>
                                    <label class="input-desc"><i class="icon input-icon input-phone"></i>Enter your
                                        telephone <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="mobil_phone2" required>
                                    <label class="input-desc"><i class="icon input-icon input-phone"></i>Enter your
                                        telephone2 <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="zip_code" required>
                                    <label class="input-desc"><i class="icon input-icon input-fax"></i>Enter your post
                                        code <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <select class="custom-select form-control" name="city" required>
                                        <option value="">&nbsp;</option>
                                        <option value="1">Baki</option>
                                        <option value="2">Sheki</option>
                                        <option value="3">Quba</option>
                                    </select>
                                    <label class="input-desc"><i class="icon input-icon input-flag"></i>Enter your city
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="mb5"></div><!-- margin -->
                                <div class="checkbox">
                                    <label class="custom-checkbox-wrapper">
                                            <span class="custom-checkbox-container">
                                                <input type="checkbox" name="jeans" value="jeans">
                                                <span class="custom-checkbox-icon"></span>
                                            </span>
                                        <span>I wish to subscribe to the Sconto Shop newsletter.</span>
                                    </label>
                                </div><!-- End .checkbox -->

                                <div class="checkbox">
                                    <label class="custom-checkbox-wrapper">
                                            <span class="custom-checkbox-container">
                                                <input type="checkbox" name="jeans" value="jeans">
                                                <span class="custom-checkbox-icon"></span>
                                            </span>
                                        <span>I have reed and agree to the <a href="#">Privacy Policy</a>.</span>
                                    </label>
                                </div><!-- End .checkbox -->

                                <div class="mb5"></div><!-- margin -->

                                <button type="submit" class="btn btn-custom">CREATE ACCOUNT</button>
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .col-md-9 -->

                <div class="mb80 visible-sm visible-xs"></div><!-- margin -->

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

                    <div class="widget">
                        <h3 class="widget-title">Testimonials</h3>
                        <div class="widget-body">
                            <div class="swiper-container testimonials-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonial">
                                        <blockquote>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posu ere
                                                cubilia curae. Quisque sceler isque mollis nisl vel volutpat. Aenean
                                                vitae eros magna. Henean eleifend ligula at lacus. Mauris magna lectus,
                                                porta eget faucibus in, suscipit sed nunc. Cras feugiat diam a
                                                tortor.</p>
                                        </blockquote>
                                        <div class="testimonial-owner">
                                            <figure>
                                                <img src="assets/images/blog/users/mark.png" alt="Mark">
                                            </figure>
                                            <div class="owner-meta">
                                                Mark Lewis,<br>
                                                06.04.2016
                                            </div>
                                        </div><!-- End .testimonial-owner -->
                                    </div><!-- End .testimonial -->
                                    <div class="swiper-slide testimonial">
                                        <blockquote>
                                            <p>hasellus pharetra pretium sapien dignissim eleifend. Lorem ipsum dolor
                                                sit amet, consectetur adipisicing elit. Sit minima inventore eveniet,
                                                quam repellendus. Quidem unde, est nemo ducimus. Amet molestias sed
                                                aspernatur quo, molestiae deleniti cumque itaque praesentium
                                                consectetur!</p>
                                        </blockquote>
                                        <div class="testimonial-owner">
                                            <figure>
                                                <img src="assets/images/blog/users/grace.png" alt="Grace">
                                            </figure>
                                            <div class="owner-meta">
                                                Grace Lewis,<br>
                                                03.04.2016
                                            </div>
                                        </div><!-- End .testimonial-owner -->
                                    </div><!-- End .testimonial -->
                                </div><!-- End .swiper-wrapper -->

                                <div class="swiper-button-next icon"></div>
                                <div class="swiper-button-prev icon"></div>
                            </div><!-- end .swiper-container -->
                        </div><!-- End .widget-body -->
                    </div><!-- End .widget -->
                </aside>
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
        <div class="mb40 visible-md visible-lg"></div><!-- margin -->
    </div><!-- End .main -->
    @include('front.layouts.footer_inline')
@endsection
@section('title','Qeydiyyat səhifəsi')
@section('description','Alfakitab-da indi qeydiyyatdan keç və fürsətləri əldən vermə.Kitabqurdlarına şiddətlə tövsiyyə olunur')
@section('keywords','alfakitab,kitab,online kitab satışı,kitab sat , ədəbiyyat,sərfəli qiymətə kitablar,kitab,azca kitab,türkcə kitab,rusca kitab,ingiliscə kitab,ingilisce kitab')
@section('css')
@endsection
@section('js')
    <script>
        $('.datepicker').datepicker();
    </script>
@endsection