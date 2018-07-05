@extends('front.layouts.base')
@section('content')
    <div class="main">
        <div class="container-fluid">
            <div class="top-filter-container clearfix">
                <div class="filter-left clearfix">
                    <a href="#" class="btn btn-gray btn-border">Compare</a>
                    <div class="page-sort-filter">
                        <select class="custom-select form-control">
                            <option>Sort By: Default</option>
                            <option>Sort By: Size</option>
                            <option>Sort By: Sales</option>
                            <option>Sort By: Popularity</option>
                        </select>
                    </div><!-- End .page-sort-filter -->

                    <div class="layout-btns-container ">
                        <a href="#" class="icon layout-btn btn-list"></a>
                        <a href="#" class="icon layout-btn btn-grid active"></a>
                    </div><!-- End .layout-btns-container -->
                </div><!-- End .filter-left -->
                <nav class="filter-right pagination-container clearfix">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>
                            <a href="#" aria-label="Next" class="icon next-icon">
                                <span aria-hidden="true"><span class="sr-only">Next</span></span>
                            </a>
                        </li>
                    </ul>
                    <div class="page-view-filter">
                        <select class="custom-select form-control">
                            <option>Show: 20</option>
                            <option>Show: 25</option>
                            <option>Show: 30</option>
                            <option>Show: 35</option>
                        </select>
                    </div><!-- End .page-view-filter -->
                </nav>

            </div><!-- End .top-filter -->

            <div class="row product-container-row">
                <div class="products-container max-col-4" data-layoutmode="fitRows">
                    @foreach($books as $book)
                        <div class="product-column">
                            <div class="product product1">
                                <span class="product-label discount">-25%</span>
                                <div class="product-top">
                                    <figure>
                                        <a href="{{ route('product_page',$book->slug) }}">
                                            <img src="{{ asset('images/front/images/book_images/'.$book->book_img) }}"
                                                 alt="Product Image">
                                        </a>
                                    </figure>
                                    <a href="" class="btn-quickview icon" title="View"><span
                                                class="sr-only">View</span></a>
                                </div><!-- End .product-top -->
                                <div class="product-meta">
                                    <div class="product-brand">
                                        <a href="{{ route('product_page',$book->slug) }}">{{ $book->name }}</a>
                                    </div><!-- End .product-brand -->
                                </div><!-- End .product-meta -->
                                <div class="ratings-container">
                                    <div class="ratings" style="width: 0%;"></div><!-- End .ratings -->
                                </div><!-- End .ratings -->
                                <h3 class="product-title" style="{{ sizeof($book->book_writers) < 2 ? 'margin-bottom:28px;' : '' }}">
                                    <span style="font-weight: bold;">Yazar : </span>
                                    @foreach($book->book_writers as $key => $writer)
                                        <a href="#">{{ $writer->name }} </a> {{ sizeof($book->book_writers) > $key + 1 ? ',' : ''}}
                                    @endforeach
                                </h3>
                                <h3 class="product-title">
                                    <span style="font-weight: bold">Nəşriyyat : </span>
                                    <a href="#">{{ $book->publisher->name }} </a>
                                </h3>
                                <div class="product-price-container">
                                    <span class="product-price"
                                          style="font-weight: bold;font-size: 13px;color: #666666;">Mağaza qiyməti : </span>
                                    {{--<span style="font-weight: bold;">Mağaza qiyməti : </span>--}}
                                    <span class="product-old-price">{{ $book->cost + 1 }} Azn</span>
                                </div><!-- End .product-price-container -->
                                <div class="product-price-container">
                                    <span class="product-price"
                                          style="font-weight: bold;font-size: 13px;color: #666666;">Alfakitab qiyməti : </span>
                                    {{--<span style="font-weight: bold;">Alfakitab qiyməti : </span>--}}
                                    <span class="product-price">{{ $book->cost }} Azn</span>
                                </div><!-- End .product-price-container -->


                                <div class="product-action">
                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i>
                                        <span>Səbətə at</span></a>
                                    <a href="#" class="icon btn-product-like" title="Like"><span
                                                class="sr-only">Bəyən</span></a>
                                    <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .product-col -->
                    @endforeach
                    @foreach($books as $book)
                        <div class="product-column">
                            <div class="product product1">
                                <span class="product-label discount">-25%</span>
                                <div class="product-top">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('images/front/images/book_images/'.$book->book_img) }}"
                                                 alt="Product Image">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-quickview icon" title="View"><span
                                                class="sr-only">View</span></a>
                                </div><!-- End .product-top -->
                                <div class="product-meta">
                                    <div class="product-brand">
                                        <a href="#">{{ $book->name }}</a>
                                    </div><!-- End .product-brand -->
                                </div><!-- End .product-meta -->
                                <div class="ratings-container">
                                    <div class="ratings" style="width: 0%;"></div><!-- End .ratings -->
                                </div><!-- End .ratings -->
                                <h3 class="product-title" style="{{ sizeof($book->book_writers) < 2 ? 'margin-bottom:28px;' : '' }}">
                                    <span style="font-weight: bold">Yazar : </span>
                                    @foreach($book->book_writers as $key => $writer)
                                        <a href="#">{{ $writer->name }} </a> {{ sizeof($book->book_writers) > $key + 1 ? ',' : ''}}
                                    @endforeach
                                </h3>
                                <h3 class="product-title">
                                    <span style="font-weight: bold">Nəşriyyat : </span>
                                    <a href="#">{{ $book->publisher->name }} </a>
                                </h3>
                                <div class="product-price-container">
                                    <span class="product-price"
                                          style="font-weight: bold;font-size: 13px;color: #666666;">Mağaza qiyməti : </span>
                                    {{--<span style="font-weight: bold;">Mağaza qiyməti : </span>--}}
                                    <span class="product-old-price">{{ $book->cost + 1 }} Azn</span>
                                </div><!-- End .product-price-container -->
                                <div class="product-price-container">
                                    <span class="product-price"
                                          style="font-weight: bold;font-size: 13px;color: #666666;">Alfakitab qiyməti : </span>
                                    {{--<span style="font-weight: bold;">Alfakitab qiyməti : </span>--}}
                                    <span class="product-price">{{ $book->cost }} Azn</span>
                                </div><!-- End .product-price-container -->


                                <div class="product-action">
                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i>
                                        <span>Səbətə at</span></a>
                                    <a href="#" class="icon btn-product-like" title="Like"><span
                                                class="sr-only">Bəyən</span></a>
                                    <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .product-col -->
                    @endforeach
                    @foreach($books as $book)
                        <div class="product-column">
                            <div class="product product1">
                                <span class="product-label discount">-25%</span>
                                <div class="product-top">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('images/front/images/book_images/'.$book->book_img) }}"
                                                 alt="Product Image">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-quickview icon" title="View"><span
                                                class="sr-only">View</span></a>
                                </div><!-- End .product-top -->
                                <div class="product-meta">
                                    <div class="product-brand">
                                        <a href="#">{{ $book->name }}</a>
                                    </div><!-- End .product-brand -->
                                </div><!-- End .product-meta -->
                                <div class="ratings-container">
                                    <div class="ratings" style="width: 0%;"></div><!-- End .ratings -->
                                </div><!-- End .ratings -->
                                <h3 class="product-title" style="{{ sizeof($book->book_writers) < 2 ? 'margin-bottom:28px;' : '' }}">
                                    <span style="font-weight: bold">Yazar : </span>
                                    @foreach($book->book_writers as $key => $writer)
                                        <a href="#">{{ $writer->name }} </a> {{ sizeof($book->book_writers) > $key + 1 ? ',' : ''}}
                                    @endforeach
                                </h3>
                                <h3 class="product-title">
                                    <span style="font-weight: bold">Nəşriyyat : </span>
                                    <a href="#">{{ $book->publisher->name }} </a>
                                </h3>
                                <div class="product-price-container">
                                    <span class="product-price"
                                          style="font-weight: bold;font-size: 13px;color: #666666;">Mağaza qiyməti : </span>
                                    {{--<span style="font-weight: bold;">Mağaza qiyməti : </span>--}}
                                    <span class="product-old-price">{{ $book->cost + 1 }} Azn</span>
                                </div><!-- End .product-price-container -->
                                <div class="product-price-container">
                                    <span class="product-price"
                                          style="font-weight: bold;font-size: 13px;color: #666666;">Alfakitab qiyməti : </span>
                                    {{--<span style="font-weight: bold;">Alfakitab qiyməti : </span>--}}
                                    <span class="product-price">{{ $book->cost }} Azn</span>
                                </div><!-- End .product-price-container -->


                                <div class="product-action">
                                    <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i>
                                        <span>Səbətə at</span></a>
                                    <a href="#" class="icon btn-product-like" title="Like"><span
                                                class="sr-only">Bəyən</span></a>
                                    <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .product-col -->
                    @endforeach
                </div><!-- End .products-container -->
            </div><!-- End .product-container-row -->

            <nav class="pagination-container">
                <label>Showing: 1-4 of 16</label>
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                        <a href="#" aria-label="Next" class="icon next-icon">
                            <span aria-hidden="true"><span class="sr-only">Next</span></span>
                        </a>
                    </li>
                </ul>
                <div class="page-view-filter">
                    <select class="custom-select form-control">
                        <option>Show: 20</option>
                        <option>Show: 25</option>
                        <option>Show: 30</option>
                        <option>Show: 35</option>
                    </select>
                </div><!-- End .page-view-filter -->
            </nav>
        </div><!-- End .container-fluid -->
    </div><!-- End .main -->
@endsection
@section('title',$categoryName)
@section('description','')
@section('keywords','')
@section('css')
@endsection
@section('js')
@endsection