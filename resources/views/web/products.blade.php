@extends('layouts.web')
@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">منتجاتنا</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->
    <section class="xs-section-padding bg-gray">
        <div class="container">
            <div class="xs-content-header version-2">
                <h2 class="xs-content-title">منتجاتنا</h2>
                <div class="clearfix"></div>
            </div>
            <div class="row">

                @forelse($products as $product)
                <div class="col-md-6 col-lg-3">
                    <div class="xs-product-wraper version-2 product-header">
                        <div class="xs-product-header media product-content">
                            {{--<span class="star-rating d-flex">--}}
                                {{--<span class="value">(23+)</span>--}}
                            {{--</span>--}}
                            {{--<a href="#" class="add_to_wishlist media-body">--}}
                                {{--<i class="icon icon-heart"></i>--}}
                            {{--</a>--}}
                        </div><!-- .xs-product-header END -->
                        <img src="{{ Voyager::image($product->image) }}" class="product_image">
                        <div class="xs-product-content text-center product-content">

                            <h4 class="product-title"><a href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a></h4>
                            <span class="price">
                               {{ $product->price }} ريال سعودي
                                {{--<del>$900.00</del>--}}
                            </span>
                        </div><!-- .xs-product-content END -->
                        <div class="xs-product-hover-area clearfix">
                            <div class="float-left">
                                <a href="{{ route('add.single.cart',$product->id) }}" onclick="addCart(event,{{ $product->id }})"><i class="icon icon-online-shopping-cart"></i>اضافة الى السلة</a>
                            </div>

                        </div>
                    </div><!-- .xs-product-wraper .version-2 END -->
                </div>
                @empty
                @endforelse

            </div><!-- .row END -->
        </div><!-- .container END -->
    </section>


    <script>
        function addCart(e,id){
            var headerCartCount = $('#headerCartCount');
            e.preventDefault();
            $.ajax({
                url: '/add-single-cart/' + id,
                success: function (response) {

                    if (response.status_wish) {
                        swal({
                            title: "تم اضافة المنتج الى السلة",
                            text: '' ,
                            icon: "success"
                        });
                        headerCartCount.text(response.cart_count);
                    }

                }


            });
        }
    </script>

@stop