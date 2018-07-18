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
                        <div class="col-md-6 xs-banner-content">
                            <h2 class="xs-banner-sub-title animInTop">{{ $slider->sub_title }}</h2>
                            <h3 class="xs-banner-title animInBottom">{{ $slider->title }}</h3>
                            <div class="xs-btn-wraper">
                                <a href="{{ $slider->button_link }}" class="btn btn-outline-primary animInLeft">{{ $slider->button_text }}</a>
                                <a href="#" class="btn btn-primary animInRight">تواصل معنا</a>
                            </div>
                        </div>
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
                <a href="#" class="xs-simple-btn">مشاهدة الكل</a>
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
                                    <a href="#">الاخبار</a>
                                </span>
                                </div>
                                <h4 class="entry-title"><a href="#"> {{ $new->title }}</a></h4>
                            </div><!-- .entry-header END -->
                            <div class="post-meta">
                                <span class="share-links"><i class="icon icon-calendar"></i><a href="#">{{ $new->created_at->toDateString() }}</a></span>
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
            <div class="row">
                <div class="col-md-7">
                    <a href="{{ $banners[0]->link }}" class="xs-banner-campaign">
                        <img src="{{ asset('assets/images/image_loader.gif') }}" data-echo="{{ Voyager::image($banners[0]->image) }}" alt="Campaign Banner">
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="{{ $banners[1]->link }}" class="xs-banner-campaign">
                        <img src="{{ asset('assets/images/image_loader.gif') }}" data-echo="{{ Voyager::image($banners[1]->image) }}" alt="Campaign Banner">
                    </a>
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
                <a href="#" class="xs-simple-btn">مشاهدة الكل</a>
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
                                            <h4 class="product-title small"><a href="#">{{ $product->title }}</a></h4>
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
                                                <h4 class="product-title small"><a href="#">{{ $product->title }}</a></h4>
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
                                                <h4 class="product-title small"><a href="#">{{ $product->title }}</a></h4>
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
                                                <h4 class="product-title small"><a href="#">{{ $product->title }}</a></h4>
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
                                                <h4 class="product-title small"><a href="#">{{ $product->title }}</a></h4>
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
                                                <h4 class="product-title small"><a href="#">{{ $product->title }}</a></h4>
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
                    <a href="{{ $banners[2]->link }}" class="xs-banner-campaign d-none d-md-none d-lg-block">
                        <img src="{{ asset('assets/images/image_loader.gif') }}" data-echo="{{ Voyager::image($banners[2]->image) }}" alt="">
                    </a>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end tab with widget slider section section -->

    @include('includes.news-letter')

@stop