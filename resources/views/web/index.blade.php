@extends('layouts.web')
@section('content')


    <!-- banner section -->
    <div class="xs-banner v-yellow ltr">
        <div class="xs-banner-slider owl-carousel">

            @forelse($sliders as $slider)
            <div class="xs-banner-item" style="background-image:url('http://demo.xpeedstudio.com/html/marketpress/assets/images/backgrounds/slider_bg_3.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 xs-banner-image animInLeft">
                            <div class="d-none d-sm-none d-md-block">
                                <img src="{{asset('assets/custom-img/3.png')}}" alt="">
                            </div>
                        </div>

                        @if($slider->video == null)
                        <div class="col-md-6 xs-banner-content">
                            <h2 class="xs-banner-sub-title animInTop">{{ $slider->sub_title }}</h2>
                            <h3 class="xs-banner-title animInBottom">{{ $slider->title }}</h3>
                            <div class="xs-btn-wraper">
                                <a href="{{ $slider->button_link }}" class="btn btn-outline-primary animInLeft">{{ $slider->button_text }}</a>
                                <a href="#" class="btn btn-primary animInRight">تواصل معنا</a>
                            </div>
                        </div>
                        @else
                            <div class="col-md-6 ">

                                <!-- format video -->
                                <article class="post format-video hentry xs-blog-post-details">
                                    <a href="{{ $slider->video }}" data-fancybox="gallery">
                                        <div class="post-media post-image">
                                            <img src="{{ asset('assets/custom-img/1257e89d63d90a3.jpg') }}" class="img-responsive" alt="" style="    height: 350px;width: 100%;">
                                            <div class="post-video">

                                                <i class="fa fa-play"></i>

                                            </div>
                                            <div class="xs-overlay bg-black"></div>
                                        </div><!-- .post-media END -->
                                    </a>

                                </article><!-- .post  END -->
                            </div>
                        @endif
                        <div class="col-md-3 xs-banner-image animInRight">
                            <img src="{{asset('assets/custom-img/5.png')}}" alt="">
                        </div>
                    </div><!-- .row END -->
                </div><!-- .container END -->
            </div>

                @empty
            @endforelse


        </div>
    </div><!-- End banner section -->

    <!-- news section -->
    <section class="xs-section-padding bg-gray padding-50px">
        <div class="container">
            <div class="xs-content-header version-2">
                <h2 class="xs-content-title">الاخبار</h2>
                <a href="{{ route('news') }}" class="xs-simple-btn">مشاهدة الكل</a>
                <div class="clearfix"></div>
            </div>
            <div class="row auction-slider">

                @forelse($news as $new)
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-news">
                        <div class="entry-thumbnail">
                            <img class="news-image" src="{{ asset('assets/images/image_loader.gif') }}" data-echo="{{ Voyager::image($new->image) }}" alt="">
                        </div><!-- .entry-thumbnail END -->
                        <div class="xs-news-content">
                            <div class="entry-header">
                                <div class="entry-meta">
                                <span class="tags-links">
                                    <a href="{{ route('news') }}">الاخبار</a>
                                </span>
                                </div>
                                <h4 class="entry-title"><a href="{{ route('news.details',$new->id) }}"> {{ $new->title }}</a></h4>
                            </div><!-- .entry-header END -->
                            <div class="post-meta">
                                <span class="share-links"><i class="icon icon-calendar"></i><a href="{{ route('news.details',$new->id) }}">{{ $new->created_at->toDateString() }}</a></span>
                            </div><!-- .post-meta END -->
                        </div><!-- .xs-news-content END -->
                    </div><!-- .xs-single-news END -->
                </div>
                @empty
                @endforelse


            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end news section -->


    <div class="xs-banner-campaign-v2 padding-50px">
        <div class="container">
            <div class="row" id="banners-row">
                <div class="col-md-7 ">

                    <div class="slider">
                        <div class="slide_viewer">
                            <div class="slide_group">
                                @forelse($banners_right as $banner)
                                <div class="slide">
                                    <img src="{{ Voyager::image($banner->image) }}" alt="Campaign Banner" style="width: 100%;height: 300px !important;">
                                </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div><!-- End // .slider -->

                    <div class="slide_buttons">
                    </div>

                    <div class="directional_nav">
                        <div class="previous_btn" title="Previous">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                                <g>
                                    <g>
                                        <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			                            c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                                        <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="next_btn" title="Next">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                                <g>
                                    <g>
                                        <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                                        <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div><!-- End // .directional_nav -->



                </div>
                <div class="col-md-5">
                    <div class="slider">
                        <div class="slide_viewer">
                            <div class="slide_group">
                                @forelse($banners_left as $banner)
                                    <div class="slide">
                                        <img src="{{ Voyager::image($banner->image) }}" alt="Campaign Banner" style="width: 100%;height: 300px !important;">
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div><!-- End // .slider -->

                    <div class="slide_buttons">
                    </div>

                    <div class="directional_nav">
                        <div class="previous_btn" title="Previous">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                                <g>
                                    <g>
                                        <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			                            c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                                        <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="next_btn" title="Next">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                                <g>
                                    <g>
                                        <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                                        <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div><!-- End // .directional_nav -->

                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div><!-- end banner campaign version 2 section -->

    <!-- news section -->
    <section class="xs-section-padding bg-gray padding-50px">
        <div class="container">
            <div class="xs-content-header version-2">
                <h2 class="xs-content-title">المقالات</h2>
                <a href="{{ route('articles') }}" class="xs-simple-btn">مشاهدة الكل</a>
                <div class="clearfix"></div>
            </div>
            <div class="row auction-slider">

                @forelse($articels as $articel)
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-news">
                        <div class="entry-thumbnail">
                            <img class="news-image" src="{{ asset('assets/images/image_loader.gif') }}" data-echo="{{ Voyager::image($articel->image) }}" alt="">
                        </div><!-- .entry-thumbnail END -->
                        <div class="xs-news-content">
                            <div class="entry-header">
                                <div class="entry-meta">
                                <span class="tags-links">
                                    <a href="{{ route('articles') }}">المقالات</a>
                                </span>
                                </div>
                                <h4 class="entry-title"><a href="{{ route('article.details',$articel->id) }}">{{ $articel->title }} </a></h4>
                            </div><!-- .entry-header END -->
                            <div class="post-meta">
                                <span class="share-links"><i class="icon icon-calendar"></i><a href="{{ route('article.details',$articel->id) }}">{{ $articel->created_at->toDateString() }}</a></span>
                            </div><!-- .post-meta END -->
                        </div><!-- .xs-news-content END -->
                    </div><!-- .xs-single-news END -->
                </div>
                @empty
                @endforelse

            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end news section -->
    <!-- videos section -->
    <section class="xs-section-padding bg-videos padding-50px">
        <div class="container">
            <div class="xs-content-header version-2">
                <h2 class="xs-content-title">المرئيات التعليمية</h2>
                <a href="{{ route('videos') }}" class="xs-simple-btn">مشاهدة الكل</a>
                <div class="clearfix"></div>
            </div>
            <div class="row">

                @forelse($videos as $video)
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-news">
                        <div class="entry-thumbnail">
                            <iframe width="350" height="250" src="{{ $video->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                        </div><!-- .entry-thumbnail END -->

                    </div><!-- .xs-single-news END -->
                </div>
                @empty
                @endforelse



            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end videos section -->
    <!-- tab with widget slider section -->
    <section class="xs-section-padding v-yellow ltr padding-50px">
        <div class="container">
            <div class="xs-content-header version-2">
                <h2 class="xs-content-title">المتجر</h2>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="xs-content-header content-header-v2">
                        <ul class="nav nav-tabs xs-nav-tab version-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="today-on-sale-widget-tab" data-toggle="tab" href="#today-onSale-widget" role="tab" aria-controls="today-onSale-widget" aria-selected="true">منتجات مميزة</a>
                                <div class="customNavigation xs-custom-nav">
                                    <a class="prev" id="prev-5"><i class="icon icon-left-arrows"></i></a>
                                    <a class="next" id="next-5"><i class="icon icon-right-arrow"></i></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="today-hot-sale-widget-tab" data-toggle="tab" href="#today-hot-sale-widget" role="tab" aria-controls="today-hot-sale-widget" aria-selected="false">منتجات متداولة</a>
                                <div class="customNavigation xs-custom-nav">
                                    <a class="prev" id="prev-6"><i class="icon icon-left-arrows"></i></a>
                                    <a class="next" id="next-6"><i class="icon icon-right-arrow"></i></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="today-trend-widget-tab" data-toggle="tab" href="#today-trend-widget" role="tab" aria-controls="today-trend-widget" aria-selected="false">منتجات حديثة</a>
                                <div class="customNavigation xs-custom-nav">
                                    <a class="prev" id="prev-7"><i class="icon icon-left-arrows"></i></a>
                                    <a class="next" id="next-7"><i class="icon icon-right-arrow"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="today-onSale-widget" role="tabpanel" aria-labelledby="today-on-sale-widget-tab">


                            <div class="xs-product-slider-4 owl-carousel">
                                <div class="xs-product-slider-item">

                                    @forelse($priceProducts1 as $product)
                                    <div class="xs-product-widget media version-2">
                                        <img class="d-flex product-image" src="{{Voyager::image($product->image)}}" alt="Mobile">
                                        <div class="media-body align-self-center product-widget-content">
                                            <h4 class="product-title small"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                                            <span class="price small" dir="rtl">
                                             {{ $product->price }} ريال سعودي

                                        </span>
                                        </div><!-- .product-widget-content .version-2 END -->
                                    </div>
                                    @empty
                                    @endforelse

                                </div><!-- .xs-product-slider-item END -->
                                <div class="xs-product-slider-item">
                                    @forelse($priceProducts2 as $product)
                                        <div class="xs-product-widget media version-2">
                                            <img class="d-flex product-image" src="{{Voyager::image($product->image)}}" alt="Mobile">
                                            <div class="media-body align-self-center product-widget-content">
                                                <h4 class="product-title small"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                                                <span class="price small" dir="rtl">
                                             {{ $product->price }}  ريال سعودي

                                        </span>
                                            </div><!-- .product-widget-content .version-2 END -->
                                        </div>
                                    @empty
                                    @endforelse
                                </div><!-- .xs-product-slider-item END -->

                            </div><!-- .xs-product-slider-4 END -->
                        </div><!-- #today-onSale-widget END -->


                        <div class="tab-pane fade" id="today-hot-sale-widget" role="tabpanel" aria-labelledby="today-hot-sale-widget-tab">
                            <div class="xs-product-slider-5 owl-carousel">
                                <div class="xs-product-slider-item">
                                    @forelse($viewsProducts1 as $product)
                                        <div class="xs-product-widget media version-2">
                                            <img class="d-flex product-image" src="{{Voyager::image($product->image)}}" alt="Mobile">
                                            <div class="media-body align-self-center product-widget-content">
                                                <h4 class="product-title small"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                                                <span class="price small" dir="rtl">
                                             {{ $product->price }}  ريال سعودي

                                        </span>
                                            </div><!-- .product-widget-content .version-2 END -->
                                        </div>
                                    @empty
                                    @endforelse
                                </div><!-- .xs-product-slider-item END -->
                                <div class="xs-product-slider-item">
                                    @forelse($viewsProducts2 as $product)
                                        <div class="xs-product-widget media version-2">
                                            <img class="d-flex product-image" src="{{Voyager::image($product->image)}}" alt="Mobile">
                                            <div class="media-body align-self-center product-widget-content">
                                                <h4 class="product-title small"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                                                <span class="price small" dir="rtl">
                                             {{ $product->price }}  ريال سعودي

                                        </span>
                                            </div><!-- .product-widget-content .version-2 END -->
                                        </div>
                                    @empty
                                    @endforelse
                                </div><!-- .xs-product-slider-item END -->

                            </div><!-- .xs-product-slider-5 END -->
                        </div><!-- #today-hot-sale-widget-tab END -->
                        <div class="tab-pane fade" id="today-trend-widget" role="tabpanel" aria-labelledby="today-trend-widget-tab">
                            <div class="xs-product-slider-6 owl-carousel">
                                <div class="xs-product-slider-item">
                                    @forelse($lastProducts1 as $product)
                                        <div class="xs-product-widget media version-2">
                                            <img class="d-flex product-image" src="{{Voyager::image($product->image)}}" alt="Mobile">
                                            <div class="media-body align-self-center product-widget-content">
                                                <h4 class="product-title small"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                                                <span class="price small" dir="rtl">
                                             {{ $product->price }}  ريال سعودي

                                        </span>
                                            </div><!-- .product-widget-content .version-2 END -->
                                        </div>
                                    @empty
                                    @endforelse
                                </div><!-- .xs-product-slider-item END -->
                                <div class="xs-product-slider-item">
                                    @forelse($lastProducts2 as $product)
                                        <div class="xs-product-widget media version-2">
                                            <img class="d-flex product-image" src="{{Voyager::image($product->image)}}" alt="Mobile">
                                            <div class="media-body align-self-center product-widget-content">
                                                <h4 class="product-title small"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                                                <span class="price small" dir="rtl">
                                             {{ $product->price }}  ريال سعودي

                                        </span>
                                            </div><!-- .product-widget-content .version-2 END -->
                                        </div>
                                    @empty
                                    @endforelse
                                </div><!-- .xs-product-slider-item END -->

                            </div><!-- .xs-product-slider-6 END -->
                        </div><!-- #today-trend-widget END -->
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="slider">
                        <div class="slide_viewer" style="height: 320px;">
                            <div class="slide_group">
                                @forelse($banners_products as $banner)
                                    <div class="slide">
                                        <img src="{{ Voyager::image($banner->image) }}" alt="Campaign Banner" style="width: 100%;height: 300px !important;">
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div><!-- End // .slider -->

                    <div class="slide_buttons">
                    </div>

                    <div class="directional_nav">
                        <div class="previous_btn" title="Previous">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                                <g>
                                    <g>
                                        <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			                            c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                                        <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="next_btn" title="Next">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                                <g>
                                    <g>
                                        <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                                        <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div><!-- End // .directional_nav -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end tab with widget slider section section -->

    @include('includes.news-letter')

@stop