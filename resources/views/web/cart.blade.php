@extends('layouts.web')
@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">السلة</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <table class="table custom-cart">
                            <thead>
                            <tr>
                                <th>المنتج</th>
                                <th>العنوان</th>
                                <th>السعر</th>
                                <th>العدد</th>
                                <th>المجموع</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse(Cart::content() as $pdt)
                            <tr class="cartProduct{{$pdt->rowId}}">
                                <th scope="row">
                                    <div class="img-product">
                                        <a href="{{ route('product.details',$pdt->id) }}">
                                            <img src="{{ Voyager::image(\App\Product::find($pdt->id)->image) }}" width="40" alt=""></a>
                                    </div>
                                </th>
                                <td>

                                    <div class="title-product"><a href="{{ route('product.details',$pdt->id) }}">{{ $pdt->name }}</a></div>
                                </td>
                                <td>{{ $pdt->price  }} ريال سعودي </td>
                                <input type="hidden" value="{{ $pdt->price }}" id="cartPrice{{$pdt->rowId}}">

                                <td class="padding_all">
                                    <div class="cart_amount_wrap">
                                        <div class="w-quantity quantity xs_input_number">
                                            <input type="number" min="1" max="100" value="{{$pdt->qty}}" id="qytValInput{{$pdt->rowId}}">
                                            <a ><span onclick="decrementCart(event, '{!!  $pdt->rowId !!}', {{ $pdt->qty }})" class="sub" style="display: block !important;"><img src="assets/images/minus.png" alt=""></span></a>
                                            <a href="" onclick="incrementCart(event, '{!!  $pdt->rowId !!}', {{ $pdt->qty }})"><span class="add"><img src="assets/images/plus.png" alt=""></span></a>
                                        </div>
                                    </div>
                                </td>

                                <td id="cartPriceTotal{{$pdt->rowId}}">{{ $pdt->price * $pdt->qty }} ريال سعودي </td>
                                <td><button class="btn-cancel pull-right" onclick="removeCart(event, '{!!  $pdt->rowId !!} ')">x</button></td>
                            </tr>

                            @empty
                            @endforelse




                            </tbody>

                        </table>
                    </div>
                </div>

            </div><!-- .row end -->


            <div class="row">
                @if(Cart::count() != 0)
                <div class="col-md-8" id="cart_count">
                    <div class="cart_totals_area gray-bg">

                        <ul>

                            <li>
                                سعر المنتجات <span class="totalAmount">{{ Cart::total() }} ريال سعودي </span>
                                <input type="hidden" id="totalAmountInput" value="{{ Cart::total() }}">
                            </li>
                            <li>
                                <strong>السعر الاجمالي</strong><span><strong class="totalAmount"> {{ Cart::total() }} ريال سعودي </strong></span>
                            </li>
                        </ul>
                        <a href="{{ route('checkout') }}">
                            <button type="submit" class="btn btn-primary" name="submit">اتمام الشراء</button>

                        </a>
                    </div>
                </div>

                @endif

                <div class="col-md-4">
                    <a href="{{ route('products') }}" class="btn btn-primary" name="submit">مواصلة التسوق </a>
                </div>

            </div>

        </div><!-- .container end -->
    </div><!-- End blog list section -->


    <script>
        function removeCart(e,id){
            //var total_count = $(".total-input").val();
            var cart_count = $("#cart_count");
            var totalAmount = $('.totalAmount');
            e.preventDefault();
            var cart = $('.cartProduct' + id);
            $.ajax({
                url: '/cart/remove/' + id,
                success: function (response) {

                    if (response.status_wish) {
                        cart.addClass('hide');

                        swal({
                            title: "تم حذف المنتج من سلة التسوق",
                            text: "" ,
                            icon: "success"
                        });

                        if(response.cart_count == 0)
                        {
                            cart_count.addClass('hiden');
                        }else
                        {
                            totalAmount.text( parseFloat(response.cart_count) + ' ريال سعودي  ');
                        }


                    } else {

                    }
                }

            });

        }


        function incrementCart(e,id,qyt){
            e.preventDefault();
            var qytValInput = $('#qytValInput' + id).val();
            var cartPrice = $('#cartPrice' + id).val();
            var cartPriceTotal = $('#cartPriceTotal' + id);
            var totalAmount = $('.totalAmount');
            var totalAmountInput = $('#totalAmountInput').val();

            $.ajax({
                url: '/cart/increment/' + id + '/' + qyt,
                success: function (response) {

                    if (response.status_wish) {
                        ++qytValInput;
                        cartPriceTotal.text((qytValInput * cartPrice) + ' ريال سعودي  ');
                        totalAmountInput = parseFloat($('#cartPrice' + id).val()) + parseFloat($('#totalAmountInput').val());
                        $('#totalAmountInput').val(parseFloat(totalAmountInput));
                        totalAmount.text( parseFloat(totalAmountInput) + ' ريال سعودي  ');


                    } else {

                    }
                }
            });
        }

        function decrementCart(e,id,qyt){
            e.preventDefault();
            var qytValInput = $('#qytValInput' + id).val();
            var cartPrice = $('#cartPrice' + id).val();
            var cartPriceTotal = $('#cartPriceTotal' + id);
            var totalAmount = $('.totalAmount');
            $.ajax({
                url: '/cart/decrement/' + id + '/' + qyt,
                success: function (response) {

                    if (response.status_wish) {
                        --qytValInput;
                        cartPriceTotal.text((qytValInput * cartPrice) + ' ريال سعودي ' );

                        var totalAmountInput =  parseFloat($('#totalAmountInput').val()) - parseFloat($('#cartPrice' + id).val());
                        $('#totalAmountInput').val(parseFloat(totalAmountInput));
                        totalAmount.text(parseFloat(totalAmountInput) + ' ريال سعودي ');
                    } else {

                    }
                }
            });
        }
    </script>

    <style>
        .hide
        {
            display: none !important;
        }

        .quantity .add:nth-of-type(2)
        {
            display: none;
        }

        .quantity  .sub:nth-of-type(1)
        {
            display: none !important;
        }

    </style>
@stop