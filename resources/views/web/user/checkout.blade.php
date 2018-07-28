@extends('layouts.web')
@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">اتمام الشراء</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px">

        <div class="container">
            <div class="alert alert-info" role="alert">ارجو تعبئة نموذج الشراء بالاسفل لاكتمال طلبك</div>
            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <!-- sidebar content -->
                    <div class="sidebar sidebar-right">
                        <table class="table custom-cart">
                            <thead>
                            <tr>
                                <th>المنتج</th>
                                <th>العنوان</th>
                                <th>السعر</th>
                                <th>العدد</th>
                                <th>السعر الاجمالي</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse(Cart::content() as $pdt)
                            <tr>
                                <th scope="row">
                                    <div class="img-product">
                                        <a href="{{ route('product.details',$pdt->id) }}">
                                            <img src="{{ Voyager::image(\App\Product::find($pdt->id)->image) }}" width="40" alt="">
                                        </a>
                                    </div>
                                </th>
                                <td>

                                    <div class="title-product"><a href="{{ route('product.details',$pdt->id) }}">{{ $pdt->name }}</a></div>
                                </td>
                                <td>{{ $pdt->price  }} ريال سعودي </td>
                                <td><input type="number" class="form-control " readonly value="{{$pdt->qty}}" id=""></td>
                                <td>{{ $pdt->price * $pdt->qty }} ريال سعودي </td>

                            </tr>

                           @empty
                           @endforelse





                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>المجموع الكلي <span> <strong style="color: #dc3545;">{{ Cart::total() }} ريال سعودي </strong></span></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- End sidebar content -->
                </div>
                <div class="col-md-12 col-lg-12 form-checkout">
                    <h2 class="xs-content-title">اشتري الان</h2>
                    <form action="{{ route('send.checkout') }}" method="POST"  class="xs-contact-form">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="h3">الاسم كاملاً</h3>
                                    <input type="text" class="form-control" id="xs_contact_name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="h3">رقم الجوال</h3>
                                    <input type="text" class="form-control" id="xs_contact_email" name="mobile" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3 class="h3">العنوان</h3>
                            <input type="text" class="form-control" id="xs_contact_subject" name="address" required>
                        </div>

                        <div class="xs-btn-wraper">
                            <input type="submit" name="submit" value="اطلب المنتجات" id="xs_contact_submit" class="btn btn-primary badge badge-pill btn-lg">
                        </div>
                    </form><!-- .xs-contact-form #xs-contact-form END -->
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog list section -->


@stop