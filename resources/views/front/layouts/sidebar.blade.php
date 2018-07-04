<aside class="col-md-3 col-md-pull-9 sidebar">
    <div class="widget widget-category">
        <h3 class="widget-title">
            Kateqorİyalar
            <i class="icon cat-title-icon"></i>
        </h3>
        <ul class="category-list" id="category_ul">
            @foreach(\App\Category::all() as $category)
                <li>
                    <a href="{{ route('category.page',str_slug($category->name)) }}">
                        {{ $category->name }}
                        <i class="{{ $category->icon }}" style="float: right;"></i>
                        <ul class="category-list" style="display: none;">
                            @foreach($category->sub_categories as $subcategory)
                                <li>
                                    <a href="{{ route('category.page',str_slug($subcategory->name)) }}">
                                        {{ $subcategory->name }}
                                        <i class="{{ $subcategory->icon }}" style="float: right;"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </a>
                </li>
            @endforeach
        </ul>
    </div><!-- End .widget -->

    <div class="widget widget-category">
        <h3 class="widget-title">
            Nəşrİyyatlar
        </h3>
        <ul class="category-list">
            @foreach(\App\Publisher::all() as $publisher)
                <li><a href="{{ route('publisher.page',str_slug($publisher->name)) }}">{{ $publisher->name }}</a></li>
            @endforeach
        </ul>
    </div><!-- End .widget -->

    <div class="widget">
        <h3 class="widget-title">Bestsellers</h3>
        <div class="swiper-container bestsellers-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product product-sm">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/products/thumbs/product1.jpg') }}"
                                     alt="Product">
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
                                <img src="{{ asset('images/front/images/products/thumbs/product2.jpg') }}"
                                     alt="Product">
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
                                <img src="{{ asset('images/front/images/products/thumbs/product3.jpg') }}"
                                     alt="Product">
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
                                <img src="{{ asset('images/front/images/products/thumbs/product4.jpg') }}"
                                     alt="Product">
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
                                <img src="{{ asset('images/front/images/products/thumbs/product5.jpg') }}"
                                     alt="Product">
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
                                <img src="{{ asset('images/front/images/products/thumbs/product6.jpg') }}"
                                     alt="Product">
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
        <h3 class="widget-title">Latest Deals</h3>
        <div class="widget-body">
            <div class="swiper-container product-deals-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="product product2">
                            <span class="product-label discount">-50%</span>
                            <div class="product-top">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('images/front/images/products/product23.jpg') }}"
                                             alt="Product Image">
                                    </a>
                                </figure>
                            </div><!-- End .product-top -->

                            <div class="product-meta">
                                <div class="product-brand">
                                    <a href="#">Samsung</a>
                                </div><!-- End .product-brand -->
                                <div class="ratings-container">
                                    <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                </div><!-- End .ratings -->
                            </div><!-- End .product-meta -->

                            <h3 class="product-title">
                                <a href="#">Prince of wales check blazer</a>
                            </h3>

                            <div class="product-price-container">
                                <span class="product-price">$180.00</span>
                            </div><!-- End .product-price-container -->

                            <div class="product-countdown"></div><!-- End .product-countdown -->
                        </div><!-- End .product -->
                    </div><!-- End .swiper-slide -->

                    <div class="swiper-slide">
                        <div class="product product2">
                            <span class="product-label">New</span>
                            <div class="product-top">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('images/front/images/products/product11.jpg') }}"
                                             alt="Product Image">
                                    </a>
                                </figure>
                            </div><!-- End .product-top -->

                            <div class="product-meta">
                                <div class="product-brand">
                                    <a href="#">BenQ</a>
                                </div><!-- End .product-brand -->
                                <div class="ratings-container">
                                    <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                </div><!-- End .ratings -->
                            </div><!-- End .product-meta -->

                            <h3 class="product-title">
                                <a href="#">Long V-neck Cardigan</a>
                            </h3>

                            <div class="product-price-container">
                                <span class="product-old-price">$180.00</span>
                                <span class="product-price">$90.00</span>
                            </div><!-- End .product-price-container -->

                            <div class="product-countdown"></div><!-- End .product-countdown -->
                        </div><!-- End .product -->
                    </div><!-- End .swiper-slide -->

                </div><!-- End .swiper-wrapper -->

                <div class="swiper-button-next icon"></div>
                <div class="swiper-button-prev icon"></div>
            </div><!-- end .swiper-container -->
        </div><!-- End .widget-body -->
    </div><!-- End .widget -->

    <div class="widget">
        <h3 class="widget-title">Popular Posts</h3>
        <div class="swiper-container popular-posts-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="popular-entry">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/thumbs/post1.jpg') }}" alt="Post">
                            </a>
                        </figure>
                        <div class="pentry-meta">
                            <span>November 2, 2015</span>
                            <h5><a href="#">Curabitur Faucibus Aliquam</a></h5>
                        </div>
                    </div><!-- End .popular-entry -->
                    <div class="popular-entry">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/thumbs/post2.jpg') }}" alt="Post">
                            </a>
                        </figure>
                        <div class="pentry-meta">
                            <span>April 15, 2015</span>
                            <h5><a href="#">Suspendisse Sagittis</a></h5>
                        </div>
                    </div><!-- End .popular-entry -->
                    <div class="popular-entry">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/thumbs/post3.jpg') }}" alt="Post">
                            </a>
                        </figure>
                        <div class="pentry-meta">
                            <span>November 2, 2015</span>
                            <h5><a href="#">Phasellus congue iaculis nisl</a></h5>
                        </div>
                    </div><!-- End .popular-entry -->
                </div><!-- End .swiper-slide -->

                <div class="swiper-slide">
                    <div class="popular-entry">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/thumbs/post4.jpg') }}" alt="Post">
                            </a>
                        </figure>
                        <div class="pentry-meta">
                            <span>December 21, 2015</span>
                            <h5><a href="#">Phasellus congue iaculis nisl</a></h5>
                        </div>
                    </div><!-- End .popular-entry -->
                    <div class="popular-entry">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/thumbs/post5.jpg') }}" alt="Post">
                            </a>
                        </figure>
                        <div class="pentry-meta">
                            <span>September 11, 2015</span>
                            <h5><a href="#">Curabitur Faucibus Aliquam</a></h5>
                        </div>
                    </div><!-- End .popular-entry -->
                    <div class="popular-entry">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/thumbs/post6.jpg') }}" alt="Post">
                            </a>
                        </figure>
                        <div class="pentry-meta">
                            <span>June 15, 2015</span>
                            <h5><a href="#">Suspendisse Sagittis</a></h5>
                        </div>
                    </div><!-- End .popular-entry -->
                </div><!-- End .swiper-slide -->
            </div><!-- End .swiper-wrapper -->

            <div class="swiper-button-next icon"></div>
            <div class="swiper-button-prev icon"></div>
        </div><!-- end .swiper-container -->
    </div><!-- End .widget -->

    <div class="widget">
        <h3 class="widget-title">Latest Comments</h3>
        <div class="swiper-container latest-comments-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="latest-comment">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/users/anon.png') }}" alt="User">
                            </a>
                        </figure>
                        <div class="lcomment-meta">
                            <h5><a href="#">Rachel Green</a></h5>
                            <p>Maecenas semper aliquam massa pharetra sem vitae nisi eleif molestie...</p>
                            <span>March 5, 2015</span>
                        </div><!-- end .lcomment-meta -->
                    </div><!-- End .latest-comment -->
                    <div class="latest-comment">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/users/anna.png') }}" alt="User">
                            </a>
                        </figure>
                        <div class="lcomment-meta">
                            <h5><a href="#">Anna Ratallick</a></h5>
                            <p>Donec rutrum faucibus risu sit amet lectus luctus ac. Nunc in nunc mollis...</p>
                            <span>March 22, 2015</span>
                        </div><!-- end .lcomment-meta -->
                    </div><!-- End .latest-comment -->
                    <div class="latest-comment">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/mages/blog/users/grace.png') }}" alt="User">
                            </a>
                        </figure>
                        <div class="lcomment-meta">
                            <h5><a href="#">Grace Hudson</a></h5>
                            <p>Ut finibus lectus neque, a aliquam tellac. Cras vehicula ultricies lorem eget...</p>
                            <span>July 14, 2015</span>
                        </div><!-- end .lcomment-meta -->
                    </div><!-- End .latest-comment -->
                </div><!-- End .swiper-slide -->
                <div class="swiper-slide">
                    <div class="latest-comment">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/users/david.png') }}" alt="User">
                            </a>
                        </figure>
                        <div class="lcomment-meta">
                            <h5><a href="#">Davis Hudson</a></h5>
                            <p>Ut finibus lectus neque, a aliquam tellac. Cras vehicula ultricies lorem eget...</p>
                            <span>April 14, 2015</span>
                        </div><!-- end .lcomment-meta -->
                    </div><!-- End .latest-comment -->
                    <div class="latest-comment">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/users/anon.png') }}" alt="User">
                            </a>
                        </figure>
                        <div class="lcomment-meta">
                            <h5><a href="#">James Blue</a></h5>
                            <p>Maecenas semper aliquam massa pharetra sem vitae nisi eleif molestie...</p>
                            <span>August 5, 2015</span>
                        </div><!-- end .lcomment-meta -->
                    </div><!-- End .latest-comment -->
                    <div class="latest-comment">
                        <figure>
                            <a href="#">
                                <img src="{{ asset('images/front/images/blog/users/susan.png') }}" alt="User">
                            </a>
                        </figure>
                        <div class="lcomment-meta">
                            <h5><a href="#">Susan Machatta</a></h5>
                            <p>Donec rutrum faucibus risu sit amet lectus luctus ac. Nunc in nunc mollis...</p>
                            <span>May 18, 2015</span>
                        </div><!-- end .lcomment-meta -->
                    </div><!-- End .latest-comment -->
                </div><!-- End .swiper-slide -->
            </div><!-- End .swiper-wrapper -->

            <div class="swiper-button-next icon"></div>
            <div class="swiper-button-prev icon"></div>
        </div><!-- end .swiper-container -->
    </div><!-- End .widget -->

    <div class="widget">
        <h3 class="widget-title">Latest Video</h3>

        <div class="widget-body">
            <iframe width="560" height="315" src="http://www.youtube.com/embed/N_2OmTZ08L0" allowfullscreen></iframe>
        </div><!-- End .widget-body -->
    </div><!-- End .widget -->

    <div class="widget">
        <div class="widget-body">
            <div id="banner-widget-slider" class="carousel slide" data-ride="carousel" data-interval="10000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#banner-widget-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#banner-widget-slider" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('images/front/images/banners/sidebar/banner1.jpg') }}" alt="Banner 1">
                    </div><!-- End .item -->

                    <div class="item">
                        <img src="{{ asset('images/front/images/banners/sidebar/banner2.jpg') }}" alt="Banner 2">
                    </div><!-- End .item -->
                </div><!-- End .carousel-inner -->
            </div><!-- End .carousel -->
        </div><!-- End .widget-body -->
    </div><!-- End .widget -->

    <div class="widget ">
        <div class="widget-body">
            <div class="banner">
                <a href="#">
                    <img src="{{ asset('images/front/images/banners/sidebar/banner3.jpg') }}" alt="Banner">
                </a>
            </div>
        </div><!-- End .widget-body -->
    </div><!-- End .widget -->
</aside>

@section('js')
    <script>
        $("#category_ul>li").each(function () {
            $(this).on('click', function () {
                $(this).find('ul').slideToggle("slow");
            });
        });
    </script>
@endsection