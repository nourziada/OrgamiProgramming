@extends('layouts.web')
@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">حسابي</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 padding-50px">
                    <h2 class="xs-content-title">معلوماتي الشخصية</h2>
                    <form action="{{ route('profile.update') }}" method="POST" class="xs-contact-form">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="h3">الاسم</h3>
                                    <input type="text" class="form-control" id="xs_contact_name" name="name" value="{{Auth::user()->name}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="h3">البريد الالكتروني</h3>
                                    <input type="email" class="form-control" id="xs_contact_email" name="email" value="{{ Auth::user()->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="h3">كلمة المرور الجديدة</h3>
                                    <input type="text" class="form-control" id="xs_contact_subject" name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="h3">تاكيد كلمة المرور</h3>
                                    <input type="text" class="form-control" id="xs_contact_subject" name="password_confirmation">
                                </div>
                            </div>

                        </div>


                        <div class="xs-btn-wraper">
                            <input type="submit" name="submit" value="تحديث الحساب" id="xs_contact_submit" class="btn btn-primary badge badge-pill btn-lg">
                        </div>
                    </form><!-- .xs-contact-form #xs-contact-form END -->
                </div>
                <div class="col-md-12 col-lg-12">
                    <h2 class="xs-content-title">طلباتي</h2>
                    <!-- sidebar content -->
                    <div class="sidebar sidebar-right">
                        <table class="table custom-cart">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>التاريخ</th>
                                <th>المنتج</th>
                                <th>اسم المنتج</th>
                                <th>سعر المنتج</th>
                                <th>العدد</th>
                                <th>الاجمالي</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $count = 1; @endphp
                            @forelse($orders as $order)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <th scope="row">{{ $order->created_at->toDateString() }}</th>

                                <th scope="row">
                                    <div class="img-product">
                                        <a href="{{ route('product.details',$order->product_id) }}">
                                            <img src="{{ Voyager::image(\App\Product::find($order->product_id)->image) }}" width="40" alt=""></a>
                                    </div>
                                </th>

                                <td>

                                    <div class="title-product"><a href="{{ route('product.details',$order->product_id) }}">{{ \App\Product::find($order->product_id)->title }}</a></div>
                                </td>

                                <td>{{ \App\Product::find($order->product_id)->price }} ريال سعودي </td>
                                <td><input type="number" class="form-control" value="{{ $order->qty }}" id="" disabled=""></td>

                                <th scope="row">{{ $order->qty * \App\Product::find($order->product_id)->price  }} ريال سعودي</th>
                            </tr>
                            @empty
                            @endforelse


                            </tbody>

                        </table>
                    </div>
                    <!-- End sidebar content -->
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog list section -->


@stop