@extends('layout.admin.master',  ['title' => 'show products'])

@section('content')
<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title page-title">Product Details</h4>
                    
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="html/product-list.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery mr-xl-1 mr-xxl-5">
                                        <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-a.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-g.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-d.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-h.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-e.jpg" class="rounded w-100" alt="">
                                            </div>
                                        </div><!-- .slider-init -->
                                        <div class="slider-init slider-nav" id="sliderNav" data-slick='{"arrows": false, "slidesToShow": 5, "slidesToScroll": 1, "asNavFor":"#sliderFor", "centerMode":true, "focusOnSelect": true, 
                "responsive":[ {"breakpoint": 1539,"settings":{"slidesToShow": 4}}, {"breakpoint": 768,"settings":{"slidesToShow": 3}}, {"breakpoint": 420,"settings":{"slidesToShow": 2}} ]
            }'>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="{{ $product->images->count() }}" class="rounded" alt="">
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="{{ $product->images->count() }}" class="rounded" alt="">
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="{{ $product->images->count() }}" class="rounded" alt="">
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="{{ $product->images->count() }}" class="rounded" alt="">
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="{{ $product->images->count() }}" class="rounded" alt="">
                                                </div>
                                            </div>
                                        </div><!-- .slider-nav -->
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 mr-xxl-5">
                                        <h4 class="product-price text-primary">${{ $product->regular_price }}<small class="text-muted fs-14px"> ${{ $product->sales_price }}</small></h4>
                                        <h4 class="product-title">{{ $product->name }}</h4>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-half"></em></li>
                                            </ul>
                                            <div class="amount">(2 Reviews)</div>
                                        </div><!-- .product-rating -->
                                        <div class="product-excrept text-soft">
                                            <p class="lead">{{ $product->description }}</p>
                                        </div>
                                        {{-- <div class="product-meta">
                                            <ul class="d-flex g-3 gx-5">
                                                <li>
                                                    <div class="fs-14px text-muted">Type</div>
                                                    <div class="fs-16px fw-bold text-secondary">Watch</div>
                                                </li>
                                                <li>
                                                    <div class="fs-14px text-muted">Model Number</div>
                                                    <div class="fs-16px fw-bold text-secondary">Forerunner 290XT</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-meta">
                                            <h6 class="title">Color</h6>
                                            <ul class="custom-control-group">
                                                <li>
                                                    <div class="custom-control color-control">
                                                        <input type="radio" class="custom-control-input" id="productColor1" name="productColor" checked>
                                                        <label class="custom-control-label dot dot-xl" data-bg="#754c24" for="productColor1"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control color-control">
                                                        <input type="radio" class="custom-control-input" id="productColor2" name="productColor">
                                                        <label class="custom-control-label dot dot-xl" data-bg="#636363" for="productColor2"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control color-control">
                                                        <input type="radio" class="custom-control-input" id="productColor3" name="productColor">
                                                        <label class="custom-control-label dot dot-xl" data-bg="#ba6ed4" for="productColor3"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control color-control">
                                                        <input type="radio" class="custom-control-input" id="productColor4" name="productColor">
                                                        <label class="custom-control-label dot dot-xl" data-bg="#ff87a3" for="productColor4"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="product-meta">
                                            <h6 class="title">Size</h6>
                                            <ul class="custom-control-group">
                                                <li>
                                                    <div class="custom-control custom-radio custom-control-pro no-control">
                                                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck1" checked>
                                                        <label class="custom-control-label" for="sizeCheck1">XS</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio custom-control-pro no-control">
                                                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck2">
                                                        <label class="custom-control-label" for="sizeCheck2">SM</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio custom-control-pro no-control">
                                                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck3">
                                                        <label class="custom-control-label" for="sizeCheck3">L</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio custom-control-pro no-control">
                                                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck4">
                                                        <label class="custom-control-label" for="sizeCheck4">XL</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- .product-meta -->
                                       
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <hr class="hr border-light">
                
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
