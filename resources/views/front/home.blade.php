@extends("front.layouts.base")
@section("title","Ana səhifə")
@section("description","Azərbaycanda ən sərfəli qiymətə türk, rus, ingilis dillərində bədii, dərs və digər kitablar və vəsaitləri Alfakitabdan əldə edə bilərsiniz")
@section("keywords","kitab,online kitab,rus dilində kitablar,türkcə kitablar,kitablar,azərbaycanca kitablar,bədii kitablar,ucuz kitablar,pdf kitablar")
@section("content")
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-md-push-3">

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="https://i.idefix.com/pimages/Content/Uploads/BannerFiles/idefix/851x_can_lp.jpg" alt="Slider post 1">
                                <div class="carousel-caption">
                                    Slider Caption
                                </div><!-- End .carousel-caption -->
                            </div><!-- End .item -->

                            <div class="item">
                                <img src="https://i.idefix.com/pimages/Content/Uploads/BannerFiles/idefix/851x_dunya_kupasi.jpg" alt="Slider post 2">
                                <div class="carousel-caption">
                                    Slider Caption II
                                </div><!-- End .carousel-caption -->
                            </div><!-- End .item -->

                            <div class="item">
                                <img src="https://i.idefix.com/pimages/Content/Uploads/BannerFiles/idefix/0618_i_t_29_851x305_ayinyayinevi_pegasus.jpg" alt="Slider post 3">
                                <div class="carousel-caption">
                                    Slider Caption III
                                </div><!-- End .carousel-caption -->
                            </div><!-- End .item -->
                        </div><!-- End .carousel-inner -->

                        <!-- Controls -->
                        <a class="left carousel-control icon" href="#carousel-example-generic" role="button" data-slide="prev"></a>
                        <a class="right carousel-control icon" href="#carousel-example-generic" role="button" data-slide="next"></a>
                    </div><!-- End .carousel -->

                    <div class="mb30 mb20-sm"></div><!-- margin -->


                    <div class="mb35 mb20-sm"></div><!-- margin -->

                    <div class="products-tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-bordered simple-tabs text-center text-uppercase" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab-special" aria-controls="tab-special" role="tab" data-toggle="tab">
                                    Yenİ
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#tab-latest" aria-controls="tab-latest" role="tab" data-toggle="tab">
                                    Ən çox satılan
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#tab-bestsellers" aria-controls="tab-bestsellers" role="tab" data-toggle="tab">
                                    Endİrİmdə olanlar
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#tab-features" aria-controls="tab-features" role="tab" data-toggle="tab">
                                    Bİzİm seçdİklərİmİz
                                </a>
                            </li>
                        </ul>

                        <!-- Tab Panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="tab-special">
                                <div class="row product-container-row">
                                    <div class="products-container max-col-3" data-layoutmode="fitRows">
                                        @foreach(\App\Book::all() as $book)
                                            <div class="product-column">
                                                <div class="product product2">
                                                    <span class="product-label discount">-25%</span>
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="{{ route('product_page',$book->slug) }}">
                                                                <img src="{{ asset('images/front/images/book_images/'.$book->book_img) }}"
                                                                     alt="{{ $book->slug }} image">
                                                            </a>
                                                        </figure>
                                                    </div><!-- End .product-top -->

                                                    <div class="product-meta">
                                                        <div class="product-brand">
                                                            <a href="#">
                                                                @foreach($book->book_writers as $key => $writer)
                                                                    {{ $writer->name }} {{ sizeof($book->book_writers) > $key + 1 ? ',' : ''}}
                                                                @endforeach
                                                            </a>
                                                        </div><!-- End .product-brand -->
                                                        <div class="ratings-container">
                                                            <div class="ratings" style="width: 100%;"></div>
                                                            <!-- End .ratings -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .product-meta -->

                                                    <h3 class="product-title">
                                                        <a href="{{ route('product_page',$book->slug) }}">{{ $book->name }}</a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-price">{{ $book->cost }} Azn</span>
                                                    </div><!-- End .product-price-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                    class="icon icon-cart2"></i>
                                                            <span>Add To Cart</span></a>
                                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                    class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                    class="icon icon-compare2"></i>
                                                            <span>Add To Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .product-column -->
                                        @endforeach
                                    </div><!-- End .product-container-->
                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab-latest">
                                <div class="row product-container-row">
                                    <div class="products-container max-col-3" data-layoutmode="fitRows">
                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label discount">-25%</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product20.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">Samsung</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Prince of wales check blazer</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$180.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product4.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">BenQ</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 60%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Draped wrap white blouse</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$588.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label discount">-20%</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product13.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #e3e3e5;"></span>
                                                        <span style="background-color: #91d7e5;"></span>
                                                        <span style="background-color: #897e83;"></span>
                                                        <span style="background-color: #fac67c;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Draped sleeve detail shirt</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$280.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product15.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #fac67c;"></span>
                                                        <span style="background-color: #565656;"></span>
                                                        <span style="background-color: #ececec;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Long v-neck cardigan</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$630.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label">New</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product19.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">Philips</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 80%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Cropped panel jacket</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$180.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product14.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #dfe0e2;"></span>
                                                        <span style="background-color: #525257;"></span>
                                                        <span style="background-color: #515b78;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Striped skinny trousers</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-old-price">$1500.00</span>
                                                    <span class="product-price">$750.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->
                                    </div><!-- End .product-container-->
                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab-bestsellers">
                                <div class="row product-container-row">
                                    <div class="products-container max-col-3" data-layoutmode="fitRows">
                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label outofstock">Out of<br>Stock</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product17.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">Samsung</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Prince of wales check blazer</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$180.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product16.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">BenQ</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 60%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Draped wrap white blouse</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$588.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label">New</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product13.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #e3e3e5;"></span>
                                                        <span style="background-color: #91d7e5;"></span>
                                                        <span style="background-color: #897e83;"></span>
                                                        <span style="background-color: #fac67c;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Draped sleeve detail shirt</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$280.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product3.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #fac67c;"></span>
                                                        <span style="background-color: #565656;"></span>
                                                        <span style="background-color: #ececec;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Long v-neck cardigan</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$630.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label outofstock">Out of<br>Stock</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product5.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">Philips</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 80%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Cropped panel jacket</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$180.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product6.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #dfe0e2;"></span>
                                                        <span style="background-color: #525257;"></span>
                                                        <span style="background-color: #515b78;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Striped skinny trousers</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-old-price">$1500.00</span>
                                                    <span class="product-price">$750.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->
                                    </div><!-- End .product-container-->
                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab-features">
                                <div class="row product-container-row">
                                    <div class="products-container max-col-3" data-layoutmode="fitRows">
                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label">New</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product14.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">Samsung</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Prince of wales check blazer</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$180.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product12.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">BenQ</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 60%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Draped wrap white blouse</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$588.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product11.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #e3e3e5;"></span>
                                                        <span style="background-color: #91d7e5;"></span>
                                                        <span style="background-color: #897e83;"></span>
                                                        <span style="background-color: #fac67c;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Draped sleeve detail shirt</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$280.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product9.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #fac67c;"></span>
                                                        <span style="background-color: #565656;"></span>
                                                        <span style="background-color: #ececec;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Long v-neck cardigan</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$630.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <span class="product-label discount">-25%</span>
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product7.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-brand">
                                                        <a href="#">Philips</a>
                                                    </div><!-- End .product-brand -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 80%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Cropped panel jacket</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-price">$180.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->

                                        <div class="product-column">
                                            <div class="product product2">
                                                <div class="product-top">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="{{ asset('images/front/images/products/product6.jpg') }}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </figure>
                                                </div><!-- End .product-top -->

                                                <div class="product-meta">
                                                    <div class="product-colors">
                                                        <span style="background-color: #dfe0e2;"></span>
                                                        <span style="background-color: #525257;"></span>
                                                        <span style="background-color: #515b78;"></span>
                                                    </div><!-- End .product-colors -->
                                                    <div class="ratings-container">
                                                        <div class="ratings" style="width: 100%;"></div>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .product-meta -->

                                                <h3 class="product-title">
                                                    <a href="#">Striped skinny trousers</a>
                                                </h3>

                                                <div class="product-price-container">
                                                    <span class="product-old-price">$1500.00</span>
                                                    <span class="product-price">$750.00</span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                                class="icon icon-cart2"></i>
                                                        <span>Add To Cart</span></a>
                                                    <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                                class="icon icon-wishlist2"></i>
                                                        <span>Add To Wishlist</span></a>
                                                    <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                                class="icon icon-compare2"></i>
                                                        <span>Add To Compare</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product -->
                                        </div><!-- End .product-column -->
                                    </div><!-- End .product-container-->
                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                        </div><!-- End .tab-content -->
                    </div><!-- End role="tabpanel" -->

                    <div class="mb50 mb30-sm mb20-xs"></div><!-- margin -->

                    <div class="banner bigger">
                        <a href="#">
                            <img src="{{ asset('images/front/images/banners/index/banner3.jpg') }}" alt="Banner">
                        </a>
                        <div class="banner-content">
                            <h4 class="wow zoomIn">Next is here</h4>
                            <h3 class="wow zoomIn" data-wow-delay="0.2s">galaxy s6 <br>available now</h3>
                            <a href="#" class="btn btn-custom wow zoomIn" data-wow-delay="0.4s">Find out more</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->

                    <div class="mb60 mb40-sm mb40-xs"></div><!-- margin -->

                    <div class="deal-carousel-container">
                        <h2 class="carousel-title text-center">DEAL OF THE DAY</h2>
                        <div class="swiper-container dealoftheday-carousel v2">
                            <!-- Add Navigation -->
                            <div class="swiper-nav-wrapper">
                                <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                                <div class="swiper-button-next icon"></div><!-- End .button-next -->
                            </div><!-- End .swiper-nav-wrapper -->

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product product2">
                                        <span class="product-label discount">-25%</span>
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product1.jpg') }}"
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
                                            <a href="#">Prince of wales check</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$180.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->

                                    <div class="product product2">
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product2.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-brand">
                                                <a href="#">Philips</a>
                                            </div><!-- End .product-brand -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Striped skinny trouser</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$1030.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .swiper-slide -->

                                <div class="swiper-slide">
                                    <div class="product product2">
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product3.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-brand">
                                                <a href="#">Sony</a>
                                            </div><!-- End .product-brand -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Long v-neck cardigan</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$472.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->

                                    <div class="product product2">
                                        <span class="product-label">New</span>
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product4.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-colors">
                                                <span style="background-color: #e3e3e5;"></span>
                                                <span style="background-color: #91d7e5;"></span>
                                                <span style="background-color: #897e83;"></span>
                                            </div><!-- End .product-colors -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Cropped panel jacket</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$380.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .swiper-slide -->

                                <div class="swiper-slide double">
                                    <div class="product product2 wide">
                                        <span class="product-label discount">-25%</span>
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product-big2.jpg') }}"
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
                                            <a href="#">Draped wrap white blouse</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-old-price">$586.00</span>
                                            <span class="product-price">$450.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-countdown countdown-sep"></div>
                                        <!-- End .product-countdown -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .swiper-slide -->

                                <div class="swiper-slide">
                                    <div class="product product2">
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product5.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-brand">
                                                <a href="#">Samsung</a>
                                            </div><!-- End .product-brand -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Prince of wales check blazer</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$180.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->

                                    <div class="product product2">
                                        <span class="product-label discount">-25%</span>
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product7.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-brand">
                                                <a href="#">Samsung</a>
                                            </div><!-- End .product-brand -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Prince of wales check blazer</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$180.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .swiper-slide -->

                                <div class="swiper-slide">
                                    <div class="product product2">
                                        <span class="product-label">New</span>
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product8.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-brand">
                                                <a href="#">Samsung</a>
                                            </div><!-- End .product-brand -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Prince of wales check blazer</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$180.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->

                                    <div class="product product2">
                                        <div class="product-top">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('images/front/images/products/product10.jpg') }}"
                                                         alt="Product Image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product-top -->

                                        <div class="product-meta">
                                            <div class="product-brand">
                                                <a href="#">Samsung</a>
                                            </div><!-- End .product-brand -->
                                            <div class="ratings-container">
                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .product-meta -->

                                        <h3 class="product-title">
                                            <a href="#">Prince of wales check blazer</a>
                                        </h3>

                                        <div class="product-price-container">
                                            <span class="product-price">$180.00</span>
                                        </div><!-- End .product-price-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i
                                                        class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                            <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i
                                                        class="icon icon-wishlist2"></i>
                                                <span>Add To Wishlist</span></a>
                                            <a href="#" class="btn-add-compare" title="Add to Compare"><i
                                                        class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .swiper-slide -->
                            </div><!-- End .swiper-wrapper -->
                        </div><!-- End .swiper-container -->
                    </div><!-- End .deal-carousel-container -->

                    <div class="mb70 mb50-sm mb40-xs"></div><!-- margin -->

                    <div class="banner newsletter-banner ">
                        <img src="{{ asset('images/front/images/banners/index/banner4.jpg') }}" alt="Banner">
                        <div class="banner-content">
                            <h4>Times a ticking</h4>
                            <h3>don’t miss out</h3>
                            <p>Subscribe for the latest styles and sales, plus get 25% off your first order.</p>
                            <form>
                                <input type="email" class="form-control" placeholder="your@email.com" required>
                                <button type="submit" class="btn btn-custom">Sign Up</button>
                            </form>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->

                    <h2 class="carousel-title text-center">FROM THE BLOG</h2>
                    <div class="swiper-container fromblog-smaller-carousel">
                        <!-- Add Navigation -->
                        <div class="swiper-nav-wrapper">
                            <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                            <div class="swiper-button-next icon"></div><!-- End .button-next -->
                        </div><!-- End .swiper-nav-wrapper -->

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="entry entry-small">
                                    <figure class="entry-media">
                                        <a href="single.html">
                                            <img src="{{ asset('images/front/images/blog/index2/post1.jpg') }}"
                                                 alt="Entry">
                                        </a>
                                    </figure>
                                    <div class="entry-content-wrapper">
                                        <span class="entry-date">12 November</span>
                                        <h2 class="entry-title">
                                            <a href="single.html">Curabitur Faucibus Aliquam Felis</a>
                                        </h2>
                                        <div class="entry-content">
                                            <p>Vivamus mollis varius metus in egestas. Vestibulum blandit auctor dolor.
                                                Praesent iaculis ultrices accumsan. Integer sollicitu din consectetur
                                                lectus, vitae vulputate velit pharetra sed. Nunc ac lobortis velit, eu
                                                tempus tellus.</p>
                                        </div><!-- End .entry-excerpt -->
                                        <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                    </div><!-- End .entry-content-wrapper -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-small">
                                    <figure class="entry-media">
                                        <a href="single.html">
                                            <img src="{{ asset('images/front/images/blog/index2/post2.jpg') }}"
                                                 alt="Entry">
                                        </a>
                                    </figure>
                                    <div class="entry-content-wrapper">
                                        <span class="entry-date">25 November</span>
                                        <h2 class="entry-title">
                                            <a href="single.html">Suspendisse Laoreet Sagittis</a>
                                        </h2>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate
                                                convallis nulla at faucibus tellus commodo id. Sed metus eros, dapibus
                                                id porttitor ac, viverra vitae urna Integer interdum ultricies
                                                malesuada. Donec nisl lorem, dictum sit amet lectus.</p>
                                        </div><!-- End .entry-excerpt -->
                                        <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                    </div><!-- End .entry-content-wrapper -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-small">
                                    <figure class="entry-media">
                                        <a href="single.html">
                                            <img src="{{ asset('images/front/images/blog/index2/post3.jpg') }}"
                                                 alt="Entry">
                                        </a>
                                    </figure>
                                    <div class="entry-content-wrapper">
                                        <span class="entry-date">06 December</span>
                                        <h2 class="entry-title">
                                            <a href="single.html">volutpat sit felis mollis</a>
                                        </h2>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate
                                                convallis nulla at faucibus tellus commodo id. Sed metus eros, dapibus
                                                id porttitor ac, viverra vitae urna Integer interdum ultricies
                                                malesuada. Donec nisl lorem, dictum sit amet lectus.</p>
                                        </div><!-- End .entry-excerpt -->
                                        <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                    </div><!-- End .entry-content-wrapper -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-small">
                                    <figure class="entry-media">
                                        <a href="single.html">
                                            <img src="{{ asset('images/front/images/blog/index2/post4.jpg') }}"
                                                 alt="Entry">
                                        </a>
                                    </figure>
                                    <div class="entry-content-wrapper">
                                        <span class="entry-date">10 October</span>
                                        <h2 class="entry-title">
                                            <a href="single.html">Nullam vulp utate conval</a>
                                        </h2>
                                        <div class="entry-content">
                                            <p>Vivamus mollis varius metus in egestas. Vestibulum blandit auctor dolor.
                                                Praesent iaculis ultrices accumsan. Integer sollicitu din consectetur
                                                lectus, vitae vulputate velit pharetra sed. Nunc ac lobortis velit, eu
                                                tempus tellus.</p>
                                        </div><!-- End .entry-excerpt -->
                                        <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                    </div><!-- End .entry-content-wrapper -->
                                </article>
                            </div><!-- End .swiper-slide -->
                        </div><!-- End .swiper-wrapper -->
                    </div><!-- End .swiper-container -->

                    <div class="mb20 mb5-xs"></div><!-- margin -->

                    <h2 class="carousel-title text-center">MANUFACTURERS</h2>
                    <div class="swiper-container partners-small-carousel">
                        <!-- Add Navigation -->
                        <div class="swiper-nav-wrapper">
                            <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                            <div class="swiper-button-next icon"></div><!-- End .button-next -->
                        </div><!-- End .swiper-nav-wrapper -->

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner1.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner2.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner3.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner4.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner5.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner6.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner7.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="partner">
                                    <a href="#" title="Partner Name">
                                        <img src="{{ asset('images/front/images/partners/dark/partner1.png') }}"
                                             alt="Partner">
                                    </a>
                                </div><!-- End .partner -->
                            </div><!-- End .swiper-slide -->
                        </div><!-- End .swiper-wrapper -->
                    </div><!-- End .swiper-container -->

                    <div class="mb140 mb100-sm mb80-xs"></div><!-- margin -->
                </div><!-- End .col-md-9 -->

                @include('front.layouts.sidebar')
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .main -->
@endsection()

@section("css")
@endsection
@section("js")
    <script type="text/javascript">
        (function () {
            "use strict";

            $(document).ready(function () {
                var revapi;
                if ($("#rev_slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider");
                } else {
                    revapi = $("#rev_slider").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "assets/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 10000,
                        disableProgressBar: "on",
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "custom",
                                enable: true,
                                hide_onmobile: false,
                                hide_under: 768,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                hide_under: 767,
                                style: "custom",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 15
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%"
                        },
                        responsiveLevels: [1800, 1600, 1200, 992, 767],
                        gridwidth: [1350, 800, 720, 720, 480],
                        gridheight: [800, 440, 520, 520, 240],
                        lazyType: "single",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                        },
                        shadow: 0,
                        spinner: "on",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });


                    $("#rev_slider").bind("revolution.slide.onloaded", function (e) {
                        BackgroundCheck.init({
                            targets: '.tparrows, .tp-bullets, .tp-caption',
                            images: '.tp-bgimg'
                        });
                    });

                    $("#rev_slider").bind("revolution.slide.onafterswap", function (e, data) {
                        BackgroundCheck.refresh();
                    });
                }
            });

        })();
    </script>
@endsection