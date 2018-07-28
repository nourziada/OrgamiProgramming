@extends('layouts.web')
@section('content')


    <!--breadcumb start here-->
    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">المنتجات </a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- product info section -->
    <!-- Modal -->
    <div class="xs-section-padding xs-product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" dir="ltr" style="margin-top: 15px;">
                    <div class="xs-sync-slider-preview">
                        <div class="sync-slider-preview owl-carousel owl-loaded owl-drag">
                            @forelse(json_decode($product->images) as $image)
                                <div class="item">
                                    <img src="{{ Voyager::image($image) }}"  alt="Product" style="width: 100%;height: 380px;">
                                </div>
                            @empty
                            @endforelse


                        </div>
                    </div>


                    <div class="sync-slider-thumb owl-carousel owl-loaded owl-drag">

                        @forelse(json_decode($product->images) as $image)
                            <div class="item">
                                <img src="{{ Voyager::image($image) }}" alt="Product" style="width: 100%;height: 150px;">
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 15px;">
                    <div class="summary-content single-product-summary">
                        <h3 class="entry-title"> تفاصيل المنتج </h3>
                        <h4 class="product-title">{{ $product->title }}</h4>
                        {{--<span class="star-rating color-green">--}}
                        {{--<span class="value">(200 Customers review)</span>--}}
                    </span>
                        <ul class="xs-list check" style="line-height: 2;">
                            {!! nl2br($product->content) !!}
                        </ul>
                        <span class="price highlight">
                        {{--<del>$590.00</del>--}}
                        {{ $product->price }} ريال سعودي
                    </span>
                        <div class="xs-add-to-chart-form row">
                            <div class="col-md-8" dir="ltr">
                                <form action="{{ route('add.cart') }}" method="post" >
                                    {{csrf_field()}}
                                    <div class="w-quantity quantity xs_input_number">
                                        <input type="number" name="qty" min="1" max="100" value="1">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                    </div>
                                    <div class="w-quantity-btn">
                                        <input type="hidden" name="add-to-cart" value="605">
                                        <button type="submit" class="single_add_to_cart_button btn btn-primary">
                                            اضف الى السلة
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            {{--<div class="col-md-2">--}}
                                {{--<a href="#" class="xs-wishlist-and-compare"><i class="fa fa-heart" aria-hidden="true"></i></a>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-2">--}}
                                {{--<a href="#" class="xs-wishlist-and-compare"><i class="icon icon-shuffle-arrow" aria-hidden="true"></i></a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end product info section -->



@stop