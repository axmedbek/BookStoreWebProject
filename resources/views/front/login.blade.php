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
                            @if(count($errors->all()) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        {{ $error }} <br>
                                    @endforeach
                                </div>
                            @endif
                            <h2 class="text-center">Xoş gəldin KİTABQURDU !</h2>
                            <div class="registered-customer-section">
                                <p>Hesabınıza daxil olaraq daha çox fürsətdən yararlana bilərsiniz.</p>
                                <form id="login_form" action="{{ route('login_process') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group label-overlay">
                                        <input type="text"
                                               class="form-control {{ $errors->has("email") ? 'error-message' : '' }}"
                                               name="email" autocomplete="off">
                                        <label class="input-desc"><i class="icon input-icon input-email"></i>Emailinizi
                                            daxil edin <span class="input-required">*</span></label>
                                        @if($errors->has('email'))<span
                                                style="color: tomato;">{{ $errors->first('email') }}</span>@endif
                                        <span style="color: tomato;"></span>

                                    </div><!-- End .form-group -->
                                    <div class="form-group label-overlay">
                                        <input type="password"
                                               class="form-control {{ $errors->has("password") ? 'error-message' : '' }}"
                                               name="password" autocomplete="off">
                                        <label class="input-desc"><i class="icon input-icon input-password"></i>Şifrənizi
                                            daxil edin
                                            <span class="input-required">*</span></label>
                                        @if($errors->has('password'))<span
                                                style="color: tomato;">{{ $errors->first('password') }}</span>@endif
                                        <span style="color: tomato;"></span>


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
@section('js')
    <script>
        $('#login_form').on('submit', function (e) {
            e.preventDefault();
            let email = $(this).find('[name="email"]'),
                password = $(this).find('[name="password"]'),
                errorStatus = true;

            email.css('border', '');
            password.css('border', '');

            if (email.val().trim().length < 1) {
                email.css('border', '1px solid tomato');
                errorStatus = false;
            }

            if (password.val().trim().length < 1) {
                password.css('border', '1px solid tomato');
                errorStatus = false;
            }

            if (errorStatus) {
                $('#login_form').off('submit').submit();
            }

        });

        $('#login_form').find('input[name="email"]').on('keyup',function(){
            let email = $(this);
//            if(email.val().trim().length < 5){
//                email.css('border','1px solid tomato');
//                email.parents('div:eq(0)').find('span:last').show();
//                email.parents('div:eq(0)').find('span:last').text('Emaili boş saxlamaq olmaz');
//            }
//            else{
//                email.css('border','');
//                email.parents('div:eq(0)').find('span:last').hide();
//            }
            validateFormInput(email.val().trim().length < 5,email,'Emaili boş saxlamaq olmaz');
            //validateFormInput(validateEmail(email),email,'Email formatı düzgün deyil');

        });

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function validateFormInput(condition,element,messsage){
            if(condition){
                element.css('border','1px solid tomato');
                element.parents('div:eq(0)').find('span:last').show();
                element.parents('div:eq(0)').find('span:last').text(messsage);
            }
            else{
                element.css('border','');
                element.parents('div:eq(0)').find('span:last').hide();
            }
        }

    </script>
@endsection
@section('css')
    <style>
        .error-message{
            border: 1px solid tomato;
        }
    </style>
@endsection
